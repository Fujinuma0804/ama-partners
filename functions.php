<?php
/**
 * Theme functions — contact form AJAX mailer.
 */

if (! defined('ABSPATH')) {
    exit;
}

define('AMA_CONTACT_RECIPIENT', 'maiko.ariizumi@live.jp');

/**
 * Load theme JS site-wide; expose admin-ajax URL + nonce for the contact form.
 */
function ama_enqueue_theme_scripts() {
    wp_enqueue_script(
        'ama-theme-script',
        get_stylesheet_directory_uri() . '/script.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );
    wp_localize_script(
        'ama-theme-script',
        'amaContact',
        array(
            'ajaxUrl' => admin_url('admin-ajax.php'),
            'nonce'   => wp_create_nonce('ama_contact_submit'),
        )
    );
}
add_action('wp_enqueue_scripts', 'ama_enqueue_theme_scripts');

/**
 * Handle contact form submission (logged-in and guests).
 */
function ama_contact_handle_submit() {
    if (! isset($_POST['nonce']) || ! wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['nonce'])), 'ama_contact_submit')) {
        wp_send_json_error(array('message' => 'セキュリティチェックに失敗しました。ページを再読み込みして再度お試しください。'), 403);
    }

    $name    = isset($_POST['name']) ? sanitize_text_field(wp_unslash($_POST['name'])) : '';
    $email   = isset($_POST['email']) ? sanitize_email(wp_unslash($_POST['email'])) : '';
    $phone   = isset($_POST['phone']) ? sanitize_text_field(wp_unslash($_POST['phone'])) : '';
    $postal  = isset($_POST['postal']) ? sanitize_text_field(wp_unslash($_POST['postal'])) : '';
    $message = isset($_POST['message']) ? sanitize_textarea_field(wp_unslash($_POST['message'])) : '';
    $privacy = isset($_POST['privacy']) && (wp_unslash($_POST['privacy']) === '1' || wp_unslash($_POST['privacy']) === 'on');

    if ($name === '' || $email === '' || ! is_email($email) || $phone === '' || $postal === '' || $message === '' || ! $privacy) {
        wp_send_json_error(array('message' => '必須項目を正しく入力し、プライバシーポリシーに同意してください。'), 400);
    }

    $site = wp_specialchars_decode(get_bloginfo('name'), ENT_QUOTES);
    $subject = sprintf('[%s] お問い合わせ', $site !== '' ? $site : 'Website');

    $body_lines = array(
        'お名前: ' . $name,
        'メールアドレス: ' . $email,
        '電話番号: ' . $phone,
        '郵便番号: ' . $postal,
        '',
        'ご相談内容:',
        $message,
    );
    $body = implode("\n", $body_lines);

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $name . ' <' . $email . '>',
    );

    $sent = wp_mail(AMA_CONTACT_RECIPIENT, $subject, $body, $headers);

    if (! $sent) {
        wp_send_json_error(array('message' => '送信に失敗しました。しばらくしてから再度お試しください。'), 500);
    }

    wp_send_json_success(array('message' => 'お問い合わせを送信しました。ありがとうございます。'));
}
add_action('wp_ajax_ama_contact_submit', 'ama_contact_handle_submit');
add_action('wp_ajax_nopriv_ama_contact_submit', 'ama_contact_handle_submit');

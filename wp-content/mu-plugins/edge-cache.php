<?php
/**
 * Plugin Name: Edge cache headers
 * Description: Lets Spectivis Cloud keep public pages at the edge. Signed-in users and pages that set a cookie are never kept.
 */
add_action('send_headers', function () {
    if (is_user_logged_in() || is_admin() || is_preview() || is_search() || is_404()) {
        return;
    }
    if (! in_array($_SERVER['REQUEST_METHOD'] ?? 'GET', ['GET', 'HEAD'], true)) {
        return;
    }
    foreach ($_COOKIE as $name => $value) {
        if (strpos($name, 'comment_author_') === 0 || strpos($name, 'wp-postpass_') === 0 || strpos($name, 'woocommerce_') === 0) {
            return;
        }
    }
    header('Cache-Control: public, max-age=0, s-maxage=900');
});

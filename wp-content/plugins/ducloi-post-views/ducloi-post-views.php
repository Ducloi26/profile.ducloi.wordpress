<?php
/**
 * Plugin Name: DucLoi Post Views
 * Description: Plugin thống kê lượt xem cho bài viết, trang và trang chủ portfolio.
 * Version: 1.0.1
 * Author: Phan Đức Lợi
 */

if (!defined('ABSPATH')) exit;

/**
 * Lấy object hiện tại để đếm view
 */
function ducloi_get_current_view_object_id() {
    if (is_admin()) return 0;
    if (is_preview()) return 0;
    if (wp_doing_ajax()) return 0;

    // Bài viết / trang / custom post type đơn
    if (is_singular()) {
        return get_queried_object_id();
    }

    // Trang chủ tĩnh
    if (is_front_page()) {
        $front_page_id = (int) get_option('page_on_front');
        if ($front_page_id > 0) {
            return $front_page_id;
        }

        // fallback nếu không có page_on_front
        return -1;
    }

    return 0;
}

/**
 * Đếm lượt xem
 */
function ducloi_track_post_views() {
    $object_id = ducloi_get_current_view_object_id();

    if (!$object_id) return;

    $cookie_name = 'ducloi_viewed_' . $object_id;

    if (!isset($_COOKIE[$cookie_name])) {
        $views = (int) get_post_meta($object_id, '_ducloi_post_views', true);
        $views++;
        update_post_meta($object_id, '_ducloi_post_views', $views);

        setcookie(
            $cookie_name,
            '1',
            time() + 3600,
            COOKIEPATH ? COOKIEPATH : '/'
        );

        $_COOKIE[$cookie_name] = '1';
    }
}
add_action('template_redirect', 'ducloi_track_post_views');

/**
 * Lấy số lượt xem
 */
function ducloi_get_post_views($post_id = null) {
    if (!$post_id) {
        if (is_front_page()) {
            $post_id = (int) get_option('page_on_front');
        } else {
            $post_id = get_the_ID();
        }
    }

    if (!$post_id) return 0;

    return (int) get_post_meta($post_id, '_ducloi_post_views', true);
}

/**
 * Shortcode hiển thị lượt xem
 * Dùng: [ducloi_post_views]
 * Hoặc: [ducloi_post_views id="123"]
 */
function ducloi_post_views_shortcode($atts) {
    $atts = shortcode_atts(array(
        'id' => 0,
        'label' => 'Lượt xem'
    ), $atts, 'ducloi_post_views');

    $post_id = !empty($atts['id']) ? intval($atts['id']) : 0;

    if (!$post_id) {
        if (is_front_page()) {
            $post_id = (int) get_option('page_on_front');
        } else {
            $post_id = get_the_ID();
        }
    }

    if (!$post_id) return '';

    $views = ducloi_get_post_views($post_id);

    return '<span class="ducloi-post-views">' . esc_html($atts['label']) . ': ' . esc_html($views) . '</span>';
}
add_shortcode('ducloi_post_views', 'ducloi_post_views_shortcode');

/**
 * Thêm cột Views trong admin cho post và page
 */
function ducloi_add_views_column_posts($columns) {
    $columns['ducloi_views'] = 'Views';
    return $columns;
}
add_filter('manage_posts_columns', 'ducloi_add_views_column_posts');
add_filter('manage_pages_columns', 'ducloi_add_views_column_posts');

/**
 * Hiển thị dữ liệu cột Views
 */
function ducloi_render_views_column($column, $post_id) {
    if ($column === 'ducloi_views') {
        echo esc_html(ducloi_get_post_views($post_id));
    }
}
add_action('manage_posts_custom_column', 'ducloi_render_views_column', 10, 2);
add_action('manage_pages_custom_column', 'ducloi_render_views_column', 10, 2);

/**
 * Sort theo Views
 */
function ducloi_sortable_views_column($columns) {
    $columns['ducloi_views'] = 'ducloi_views';
    return $columns;
}
add_filter('manage_edit-post_sortable_columns', 'ducloi_sortable_views_column');
add_filter('manage_edit-page_sortable_columns', 'ducloi_sortable_views_column');

function ducloi_views_orderby($query) {
    if (!is_admin()) return;
    if (!$query->is_main_query()) return;

    if ($query->get('orderby') === 'ducloi_views') {
        $query->set('meta_key', '_ducloi_post_views');
        $query->set('orderby', 'meta_value_num');
    }
}
add_action('pre_get_posts', 'ducloi_views_orderby');

/**
 * Meta box admin
 */
function ducloi_add_views_metabox() {
    add_meta_box(
        'ducloi-post-views-box',
        'Thống kê lượt xem',
        'ducloi_render_views_metabox',
        array('post', 'page'),
        'side',
        'default'
    );
}
add_action('add_meta_boxes', 'ducloi_add_views_metabox');

function ducloi_render_views_metabox($post) {
    $views = ducloi_get_post_views($post->ID);
    echo '<p><strong>Lượt xem hiện tại:</strong> ' . esc_html($views) . '</p>';
}

/**
 * Hàm helper để dùng trong theme
 */
function ducloi_post_views_html($post_id = null, $label = 'Lượt xem') {
    if (!$post_id) {
        if (is_front_page()) {
            $post_id = (int) get_option('page_on_front');
        } else {
            $post_id = get_the_ID();
        }
    }

    $views = ducloi_get_post_views($post_id);
    return '<span class="ducloi-post-views">' . esc_html($label) . ': ' . esc_html($views) . '</span>';
}
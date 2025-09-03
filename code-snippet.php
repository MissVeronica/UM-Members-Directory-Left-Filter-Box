<?php
/**
 * Template for the members directory
 *
 * This template can be overridden by copying it to yourtheme/ultimate-member/members.php
 *
 * Page: "Members"
 *
 * @version 2.6.8
 *
 * @var array $args
 */
// Customized members.php
// Single column filters to the left only for large screens using members-screen.php
// Default UM template for Tablets and Mobiles
// Version 4.1
// 2024-02-19 Tested with UM 2.8.3
// 2025-01-14 Updated for UM 2.9.2
// 2025-08-23 Update with log function to find new mobile User agents if WP_DEBUG is set to true
// 2025-09-03 Prio 99999, increased log entries, links to "useragents.io" via google
// Source: https://github.com/MissVeronica/UM-Members-Directory-Left-Filter-Box

if ( ! defined( 'ABSPATH' ) ) exit;
if ( ! class_exists( 'UM' ) ) return;

add_filter( 'wp_is_mobile', 'um_mobile_browser_detection_function', 99999, 1 );
function um_mobile_browser_detection_function( $is_mobile ) {
    global $current_user;
    if ( WP_DEBUG ) {
        $text = array( 'No', 'Yes' );
        $mobile_browser_log = array( date_i18n( 'H:i:s', current_time( 'timestamp' )), 'user_id=' . $current_user->ID, 'is_mobile=' . $text[(int)$is_mobile] );
        if ( isset( $_SERVER['HTTP_SEC_CH_UA_MOBILE'] ) ) {
            $mobile_browser_log[] = 'mobile=' . sanitize_text_field( $_SERVER['HTTP_SEC_CH_UA_MOBILE'] );
        }
        if ( isset( $_SERVER['HTTP_USER_AGENT'] )) {
            $mobile_browser_log[] = 'agent=<a href="https://www.google.com/search?q=' . urlencode( $_SERVER['HTTP_USER_AGENT'] ) . ' site:useragents.io/" target="google_search_agent" title="site:useragents.io via Google">' . sanitize_text_field( $_SERVER['HTTP_USER_AGENT'] ) . '</a>';
        }
        $trace = '<div>' . implode( ', ', $mobile_browser_log ) . '</div>' . chr(13);
        file_put_contents( WP_CONTENT_DIR . '/um_browser_detection_log.html', $trace, FILE_APPEND );
    }
    return $is_mobile;
}
if ( wp_is_mobile() === true ) {
    $located = UM_PATH . 'templates' . DIRECTORY_SEPARATOR . 'members.php';
} else {
    $located = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'members-screen.php';
}
include $located;

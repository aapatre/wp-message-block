<?php
/**
 * Plugin Name:       WP Message Block
 * Description:       A closeable message block to show your visitors.
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Antariksh Patre
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       message-block
 *
 * @package message-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function message_block_message_block_block_init()
{
    register_block_type(__DIR__ . '/build');
}
add_action('init', 'message_block_message_block_block_init');

/**
 * Enqueue JS for destroying block on frontend.
 */
function message_block_scripts()
{
    wp_enqueue_script('block-destroyer', plugins_url('/src/block-destroyer.js', __FILE__), array(), time());
}
add_action('wp_enqueue_scripts', 'message_block_scripts');

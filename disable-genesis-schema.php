<?php
/**
 * Plugin Name: Disable Genesis Schema
 * Plugin URI: https://wordpress.org/plugins/disable-genesis-schema/
 * Description: If you're using Yoast SEO or another plugin to output schema, use this to disable duplicate schema from Genesis
 * Version: 1.0
 * Author: Bill Erickson
 * Author URI: https://www.billerickson.net
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation.  You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @package    DisableGenesisSchema
 * @version    2.0
 * @author     Bill Erickson <bill@billerickson.net>
 * @copyright  Copyright (c) 2019, Bill Erickson
 * @license    GPL-2.0+
 */

add_action( 'init', 'be_disable_genesis_schema' );
/**
 * Disable Genesis Schema
 * @author Bill Erickson
 * @see https://www.billerickson.net/yoast-schema-with-genesis/
 */
function be_disable_genesis_schema() {

	$elements = array(
		'head',
		'body',
		'site-header',
		'site-title',
		'site-description',
		'breadcrumb',
		'breadcrumb-link-wrap',
		'breadcrumb-link-wrap-meta',
		'breadcrumb-link',
		'breadcrumb-link-text-wrap',
		'search-form',
		'search-form-meta',
		'search-form-input',
		'nav-primary',
		'nav-secondary',
		'nav-header',
		'nav-link-wrap',
		'nav-link',
		'entry',
		'entry-image',
		'entry-image-widget',
		'entry-image-grid-loop',
		'entry-author',
		'entry-author-link',
		'entry-author-name',
		'entry-time',
		'entry-modified-time',
		'entry-title',
		'entry-content',
		'comment',
		'comment-author',
		'comment-author-link',
		'comment-time',
		'comment-time-link',
		'comment-content',
		'author-box',
		'sidebar-primary',
		'sidebar-secondary',
		'site-footer',
	);

	$elements = apply_filters( 'be_remove_schema_elements', $elements );

	foreach( $elements as $element ) {
		add_filter( 'genesis_attr_' . $element, 'be_remove_schema_attributes', 20 );
	}
}

/**
 * Remove schema attributes
 *
 */
function be_remove_schema_attributes( $attr ) {
	$remove = apply_filters( 'be_remove_schema_attributes', array( 'itemprop', 'itemtype', 'itemscope' ) );
	foreach( $remove as $item ) {
		if( !empty( $attr[ $item ] ) )
			unset( $attr[ $item ] );
	}
	return $attr;
}

=== Disable Genesis Schema ===
Contributors: billerickson
Tags: schema, structured data, genesiswp, yoast, seo
Requires at least: 3.0
Tested up to: 5.1
Stable tag: 1.0

If you're using Yoast SEO or another plugin to output schema, use this to disable duplicate schema from Genesis

== Description ==

The Genesis theme framework includes schema / structured data for improved SEO. But if you're using Yoast SEO or another plugin that also adds schema, you'll have duplicate schema on your site which can lead to search engine confusion.

This plugin lets you remove the schema data from Genesis. It should only be used if you are using a Genesis theme and another plugin to add schema (like Yoast SEO).

For more information, see [Using Yoast SEO Structured Data with Genesis](https://www.billerickson.net/yoast-schema-with-genesis/)

**Customization**

These filters allow you to modify the plugin's functionality:

* `be_remove_schema_elements` - change which elements on the page have their schema data removed. You can use this to leave schema on certain elements (ex: `author-box`)
* `be_remove_schema_attributes` - change which microdata attributes are removed from each elements. By default we remove 'itemprop', 'itemtype', and 'itemscope'.

== Installation ==

1. Upload `disable-genesis-schema` to the `/wp-content/plugins/` directory.
1. Activate the plugin through the *Plugins* menu in WordPress.


== Changelog ==

**Version 1.0**

* This is version 0.1.  Everything's new!

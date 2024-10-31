=== SEO Internal Link Shortcode ===
Author: Steven Vachon
URL: http://www.svachon.com/
Contact: contact@svachon.com
Contributors: prometh
Tags: category, categories, content, html5, link, links, microdata, microformat, microformats, optimize, optimization, page, pages, permalink, permalinks, plugin, post, posts, relative, schema, schema.org, seo, shortcode, shortcodes, shortlinks, structured-data, tag, tags, taxonomy, url, urls
Requires at least: 3.2
Tested up to: 3.8
Stable tag: trunk

Internal links to posts, custom-type posts, pages, categories and tags with any HTML attribute(s).


== Description ==

This plugin allows you to create internal `<a>` links within your content that **will not break when things get renamed or moved**. While there are similar plugins available, they do not offer important **SEO options**.

You can add *any* HTML attribute to your link as long as it's prefixed with "attr_". And because it supports attributes that may not currently exist, it is **future proof**.

**Examples:**

1. Link to a post/page by ID or slug 
	* **Shortcode:** `[link id="1234"/]`
	* **Shortcode:** `[link slug="post-slug"/]`
	* **Output:** `<a href="http://domain.com/post-slug/">Post Title</a>`
2. Link to a category by slug 
	* **Shortcode:** `[link cat="cat-slug"/]`
	* **Output:** `<a href="http://domain.com/cat-slug/">Category Name</a>`
3. Link to a tag by slug 
	* **Shortcode:** `[link tag="tag-slug"/]`
	* **Output:** `<a href="http://domain.com/tag-slug/">Tag Name</a>`
4. Custom text instead of retrieved title 
	* **Shortcode:** `[link id="1234"]custom text[/link]`
	* **Output:** `<a href="http://domain.com/post-slug/">custom text</a>`
5. Additional attributes for SEO/other 
	* **Shortcode:** `[link id="1234" attr_rel="something" attr_itemprop="specialty"/]`
	* **Output:** `<a href="http://domain.com/post-slug/" rel="something" itemprop="specialty">Post Title</a>`


== Installation ==

1. Download the plugin (zip file).
2. Upload and activate the plugin through the "Plugins" menu in the WordPress admin.


== Changelog ==

= 0.1.1 =
* Bug: Slug links work now

= 0.1 =
* Initial release
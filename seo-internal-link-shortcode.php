<?php
/*
Plugin Name: SEO Internal Link Shortcode
Plugin URI: http://www.svachon.com/blog/seo-internal-link-shortcode-for-wordpress/
Description: Internal links to posts, custom-type posts, pages, categories and tags with any HTML attribute(s).
Version: 0.1.1
Author: Steven Vachon
Author URI: http://www.svachon.com/
Author Email: contact@svachon.com
*/

function seo_internal_link_shortcode($atts, $content=null)
{
	if ( !empty($atts['cat']) )
	{
		$cat = get_category_by_slug( $atts['cat'] ); 
		
		$href = get_category_link($cat->term_id);
		
		if (empty($content))
		{
			$content = get_cat_name($cat->term_id);
		}
	}
	else if ( !empty($atts['tag']) )
	{
		$tag = get_term_by('slug', $atts['tag'], 'post_tag');
		
		$href = get_tag_link($tag->term_id);
		
		if (empty($content))
		{
			$content = $tag->name;
		}
	}
	else
	{
		if (empty($atts['id']))
		{
			global $wpdb;
			$atts['id'] = $wpdb->get_var( $wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE post_name = %s",$atts['slug']) );
		}
		
		if (empty($content))
		{
			$content = get_post($atts['id'])->post_title;
		}
		
		$href = get_permalink($atts['id']);
	}
	
	if ( !empty($href) )
	{
		$output = '<a href="'.$href.'"';
		
		foreach ($atts as $key => $att)
		{
			if (strpos($key, 'attr_') === 0)
			{
				$output .= ' '. substr($key,5) .'="'. $att .'"';
			}
		}
		
		return $output.'>'.$content.'</a>';
	}
	else
	{
		return $content;
	}
}



add_shortcode('link', 'seo_internal_link_shortcode');



?>
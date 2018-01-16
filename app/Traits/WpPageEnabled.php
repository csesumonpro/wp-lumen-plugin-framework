<?php namespace App\Traits;
trait WpPageEnabled{

	/**
	 * Set WP Page Title when Loading A Custom Route & Template
	 * Override 404 in Addition
	 * @param  string  $pageTitle
	 * @return void
	 */
	public function setPageTitle($pageTitle = null){
		global $wp_query;
		$wp_query->is_404=false;

		if($pageTitle){
			add_filter('document_title_parts', function($title) use ($pageTitle) {
				$title['title'] = $pageTitle;
				return $title;
			}, 10000, 2);
		}
	}
}
<?php
function gcb_create_categories( $categories ) {
	return array_merge(
		$categories,
		array(
			[
				'slug'  => 'custom-blocks',
				'title' => 'Custom Blocks',
			],
		)
	);
}

add_filter( 'block_categories_all', 'gcb_create_categories', 10, 2 );

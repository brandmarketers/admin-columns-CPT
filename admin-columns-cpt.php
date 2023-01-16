$post_type = 'products';

// Register the columns.
add_filter( "manage_{$post_type}_posts_columns", function ( $defaults ) {
	
	$defaults['prices'] = 'Prices';
	$defaults['version'] = 'Version';

	return $defaults;
} );

// Handle the value for each of the new columns.
add_action( "manage_{$post_type}_posts_custom_column", function ( $column_name, $post_id ) {

	if ( $column_name == 'prices' ) {
		// Display an ACF field
		echo get_field( 'normal_price', $post_id );
	}
	if ( $column_name == 'version' ) {
		// Display an ACF field
		echo get_field( 'version', $post_id );
	}

}, 10, 2 );
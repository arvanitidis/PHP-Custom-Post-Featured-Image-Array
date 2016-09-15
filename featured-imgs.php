$postlist = get_posts( 'posts_per_page=9&post_type=csb_project&orderby=menu_order&sort_order=asc' );
$posts = array();
foreach ( $postlist as $post ) {
 array_push($postlist, $post->ID);
}

$postThumbs = array();
foreach ( $postlist as $post ) {
  array_push($postThumbs,  get_the_post_thumbnail($post, 'post_thumbnail', array( 'class' => 'alignleft' ) ));
}

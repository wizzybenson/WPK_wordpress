<?php
require_once('../../../wp-load.php');
require_once('../../../wp-admin/includes/taxonomy.php');
require_once('../../../wp-includes/category.php');
require_once('../../../wp-includes/post.php');



 $articles = get_posts(array('post_status'=>'draft','numberposts'=>-1));
 //var_dump($articles);
 foreach ($articles as $key => $post) {
  $post_categories = wp_get_post_categories( $post->ID);
  //var_dump($post_categories);
  foreach ($post_categories as $k => $v) {
    $caty = get_category($v);
    $cat = get_category($caty->parent);
    $arr=wp_set_post_categories( $post->ID, array($cat->term_id));
    var_dump($arr);
  }
}
   
 
 






?>
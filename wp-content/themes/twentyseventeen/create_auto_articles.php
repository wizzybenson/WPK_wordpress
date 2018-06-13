<?php
require_once('../../../wp-load.php');
require_once('../../../wp-admin/includes/taxonomy.php');
require_once('../../../wp-includes/category.php');
require_once('../../../wp-includes/post.php');

 /**
 *@param 
 *@return 
 **/

function insert_auto_post(){
  //get parent category by name marque auto.
  $parent_cat=get_term_by('name', 'marque auto', 'category');
  if(!$parent_cat){exit(0);}

  //get the marque category that has marque auto as parent as array of objects.
  $marques_get_terms_args = array('hide_empty' =>0,'parent'=>$parent_cat->term_id);
  $marques = get_terms('category', $marques_get_terms_args);

  foreach ($marques as $key => $marque) {
    //get the models sub category of the marque.

    $models_get_terms_args = array('hide_empty' =>0,'parent'=>$marque->term_id);

    $models = get_terms('category',$models_get_terms_args);
    
    //for every model insert a post.
    foreach ($models as $key => $model) {

      $post_args = array(
        'post_title'=>$marque->name."-".$model->name,
        'post_content'=>"Fun isn't something one considers when balancing the universe, but this puts a smile on my face",
        'post_category'=>array($model->term_id)
      );

      $id_post=wp_insert_post($post_args);

      echo $id_post."\n";
    }
  
  
  }
}

insert_auto_post();






?>
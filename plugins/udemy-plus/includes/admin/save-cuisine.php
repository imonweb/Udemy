<?php 

function up_save_cuisine_meta($termID) {
  if(!isset($_POST['up_more_info_url'])){
    return;
  }

  /*  replace add_term_meta to update_term_meta so it can add and update - kill 2 birds in one stone, if the meta data doesn't exists for a term it will be added. */
  update_term_meta(
    $termID, 
    'more_info_url', 
    sanitize_url($_POST['up_more_info_url'])
  );
}
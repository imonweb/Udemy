<?php 

function up_daily_recipe_db(){
    ob_start();
    ?>
  
    <?php 
  
    $output = ob_get_contents();
    ob_end_clean();
  
    return $output;
}
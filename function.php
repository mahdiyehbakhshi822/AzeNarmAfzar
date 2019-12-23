<?php
function mrcodeirwp_scripts(){
    wp_enqueue_style('style',get_template_directory_uri().'/style.css(),array(),'1.0');
    wp_enqueue_script('jsname',get_template_directory_uri()./scripts.js',array().'1.2.3',false);
}
add_action('wp_enqueue_script', 'mrcodeirwp_scripts')

?>
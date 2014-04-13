<!-- will not override the functions.php in the parent theme -->

<?php 
  function ryuCustomEnqueue() {
    // This will enqueue a script file called ryu_custom.js
    wp_enqueue_script("ryu_custom", get_stylesheet_directory_uri()."/ryu_custom.js", array("jquery"));


    // wp_enqueue_script("sprite", get_stylesheet_directory_uri()."/", array("stitches"));
    // This will enqueue a style file called font-awesome.min.css
    wp_enqueue_style("font_awesome", get_stylesheet_directory_uri()."/font-awesome.min.css", array("style.css"));
  }
  add_action("wp_enqueue_scripts", "ryuCustomEnqueue");
 ?>

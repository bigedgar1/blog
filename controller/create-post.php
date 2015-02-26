<?php
    require_once(__DIR__ . "/../model/config.php");

    $title = filer_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post = filer_input(INPUT_POST, "post", FILEINFO_SANITIZE_STRING);
   
    $qury  = $_SESSION["connection"]->query("INSERT into post SET title = '$title',post = '$post'")    
    
    if($query) {  
        echo "<p>Successfully  interface post: $title</p>";
    }
     else{
          echo "<p>" . $_SESSION["connection"]->error . "</p">;
          }
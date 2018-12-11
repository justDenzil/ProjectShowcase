<?php
Session_start();
  if(isset($_SESSION['username'])){
  	Session_destroy();
         header('Location: index.html');
    }
    header('Location:index.html')
?>
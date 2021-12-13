<?php
  spl_autoload_register(function ($class) {
    include './app/controllers/'.$class.".php";
});

  $url = isset($_GET['url']) ? $_GET['url'] :null;

  if(isset($url)){
    $url = rtrim($url, '/');
    $url = explode("/", $url);
    if(isset($url[0])){
      $contrllerObj = new $url[0]();
      $contrllerObj->{$url[1]}($_POST);
    }
  }else{
    include_once "./app/controllers/IndexController.php";
    $index = new IndexController();
    $index->getTodo();
  }
  
  //dd($_SERVER)
  
?>
<?php
header('Content-Type: text/html');
?><!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Labs menu</title>
  <style media="screen">
    li:nth-child(even){
      background-color: azure;
    }
    li{
      list-style: none;
    }
  </style>
  </head>
  <body>
    <li><a href="https://github.com/lkz138">Github</a></li>
    <?php
      foreach( glob('../*') as $key => $val ){
        if( false ){
        } elseif( $val == '../index.php' ){
          continue;
        } elseif( $val == '../robots.txt' ){
          continue;
        } elseif( $val == '../' . basename( __DIR__ ) ){
          continue;
        }
        echo '<li><a href="' . $val . '">' . $val . '</a></li>';
      }
    ?>
  </body>
</html>

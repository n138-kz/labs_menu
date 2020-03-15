<?php
header('Content-Type: text/html');
?><!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Labs menu</title>
  <base target="_blank" />
  <style media="screen">
    li:nth-child(even){
      background-color: azure;
    }
    li{
      list-style: none;
      font-size: large;
    }
    li a{
      vertical-align: middle;
      text-decoration: none;
    }
    @media screen and (max-width: 380px){
      li{
        text-align: center;
        height: 1.5em;
      }
    }
  </style>
  </head>
  <body>
    <li><a href="https://github.com/lkz138">Github</a></li>
    <?php
      foreach( glob('../*') as $key => $val ){
        if( false ){
        } elseif( ! is_dir($val) ){
          continue;
        } elseif( $val == '../' . basename( __DIR__ ) ){
          continue;
        }
        echo '<li><a href="' . $val . '">' . substr($val, strrpos($val, '/')+1) . '</a></li>';
      }
    ?>
  </body>
</html>

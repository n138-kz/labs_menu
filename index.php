<?php header('Content-Type: text/html'); ?><!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Labs menu</title>
  <base target="_blank" />
  <link type="image/png" href="./icon_self.png" rel="icon" />
  <link type="image/png" href="./icon_self.png" rel="favicon" />
  <link type="image/png" href="./icon_self.png" rel="apple-touch-icon" />
  <style media="screen">
    li:nth-child(even){
      background-color: azure;
    }
    li{
      list-style: none;
      font-size: large;
      height: 1.5em;

      /* 画面中央寄せ */
      left: 50%;
      transform: translate(50%);
      width: 50%;
    }
    li a{
      vertical-align: middle;
      text-decoration: none;
    }
    li img{
      height: 1em;
    }
  </style>
  </head>
  <body>
    <li><a href="https://github.com/lkz138"><img src="icon_github.png" alt="" />Github</a></li>
    <?php
      foreach( glob('../*') as $key => $val ){
        if( false ){
        } elseif( ! is_dir($val) ){
          continue;
        } elseif( $val == '../' . basename( __DIR__ ) ){
          continue;
        }
        echo '<li><a href="' . $val . '"><img src="icon_self.png" alt="" />' . substr($val, strrpos($val, '/')+1) . '</a></li>';
      }
    ?>
  </body>
</html>

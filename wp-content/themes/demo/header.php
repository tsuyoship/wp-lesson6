<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<? bloginfo( 'charset' ); ?>">
  <title><?php wp_title( '|', true, 'right' ); //ページタイトル出力 ?><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php echo get_template_directiory_uri(); //使用中のテーマディレクトリのURLを出力 ?>/css/normalize.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri();　//使用中テーマのスタイルシートURLを出力 ?>">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' );  //ピングバックURLを出力 ?>">
  <?php wp_head(); //wp_headはテーマの</head>タグの直前に必ず挿入いたします ?>
</head>
<body <?php body_class(); //bodyタグにページの種類に応じたクラス名を与える ?>>
  <header>
    <div id="logo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Academy Corporation">
    </div>
    <nav>
      <ul>
        <li><a href="<?php echo home_url(); //トップページのurlを出力 ?>">TOP</a></li>
        <li><a href="<?php echo home_url(); ?>/about/">ABOUT</a></li>
        <li><a href="<?php echo home_url(); ?>/map/">MAP</a></li>
        <li><a href="<?php echo home_url(); ?>/blog/">BLOG</a></li>
        <li><a href="<?php echo home_url(); ?>/contact/">CONTACT</a></li>
      </ul>
    </nav>
  </header>
    <div id="cover">
    <div id="slide">
      <img src="<?php echo get_template_directory_uri(); ?>/images/slide-1.png" alt="Welcome to our website!">
    </div>
  </div>
  
<!DOCTYPE html>
<html>
<head>
<title>Slick's Auto Body</title>
<?php wp_head(); ?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
<header class="row">
    <div class="twelve columns">
        <div id="logo"></div>
    </div>
</header>
<!-- Add Menu Here -->
<div class="row">
    <div class="twelve columns">
        <?php wp_nav_menu(array(
            'sort_column' => 'menu_order',
            'container_class' => 'blank-menu-header'
            ));?>
    </div>
</div>

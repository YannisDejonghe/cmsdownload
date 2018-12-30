<?php
 /*  Main Header Template */
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <?php wp_head(); ?>
</head>
<body>
    
<header class="">


<!-- <nav class="clearfix main-navigation-container mobile-menu">-->
    <nav class="nav-list">
 <?php wp_nav_menu( array(  'items_wrap' => '%3$s', 'theme_location' => 'header-menu') );?>
 </nav>
 <div id="sideNav" class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top"></div>

<span class="d-block d-lg-none">Yannis Dejonghe</span>
<span class="d-none d-lg-block">

</span>

<div id="navbarSupportedContent" class="collapse navbar-collapse">
<ul class="navbar-nav">
</ul>
</div>
</nav>


</header>
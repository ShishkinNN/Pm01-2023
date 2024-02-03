<?php
/**
 * Шаблон с правой колонкой
 * 
 * @package    DIAFAN.CMS
 * @author     diafan.ru
 * @version    5.4
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2015 OOO «Диафан» (http://www.diafan.ru/)
 */
 
if(! defined("DIAFAN"))
{
	include dirname(dirname(__FILE__)).'/includes/404.php';
}
?><!DOCTYPE HTML>
<html>
<head>
	<insert name="show_head">
        <insert name="show_css" files="default.css">
        <link href='<insert name="custom" path="css/main.css" absolute="true">' rel="stylesheet" type="text/css">
	<link href='<insert name="custom" path="css/colors.css" absolute="true">' rel="stylesheet" type="text/css">
        
	<!--[if lte IE 8]>
		<link rel="stylesheet" href='<insert name="custom" path="css/ie/ie.css" absolute="true">' media="all" />
		<script src='<insert name="custom" path="js/ie/html5shiv.js" absolute="true">'></script>
	<![endif]-->
</head>
<body>
	<div id="wrapper">
		<div class="order-btn"></div>
		
		
		<!-- |===============| header start |===============| -->
		<insert name="show_include" file="header">
		<!-- |===============| header end |===============| -->
		
		<!-- |===============| wrap start |===============| -->
		<div class="wrap">
			<div class="wrap__center">
                                <insert name="show_h1">
				
				
				<!-- |===============| wrap__left start |===============| -->
				<div class="wrap__left noreset">
					<insert name="show_text">
                                        <insert name="show_module">
                                        <insert name="show_social_links">
				</div>
				<!-- |===============| wrap__left end |===============| -->
				
				<!-- |===============| wrap__right start |===============| -->
				<aside class="wrap__right">
					<insert name="show_block" module="menu" id="1" template="inner">
				</aside>
				<!-- |===============| wrap__right end |===============| -->
			</div>
		</div>
		<!-- |===============| wrap end |===============| -->
		
		<!-- |===============| footer start |===============| -->
		<insert name="show_include" file="footer">
		<!-- |===============| footer end |===============| -->

	</div>
     <insert name="show_js">
	<script src='<insert name="custom" path="js/jquery.bd.move.slider.js" absolute="true">'></script>
	<script src='<insert name="custom" path="js/main.js" absolute="true">'></script>
</body>
</html>
<?php
/**
 * Шаблон стартовой страницы сайта
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
		
		<!-- |===============| slider start |===============| -->
                <insert name="show_block" module="site" id="8">

		<!-- |===============| slider end |===============| -->
		
		<!-- |===============| wrap start |===============| -->
		<div class="wrap">
			<div class="wrap__center">
			
				<!-- |===============| p-box start |===============| -->
                                <insert name="show_block" module="site" id="9">
				
				<!-- |===============| p-box end |===============| -->
					
				<!-- |===============| box start |===============| -->
				<div class="box box_about">
					<insert name="show_body">
				</div>
				<!-- |===============| box end |===============| -->
				
				<!-- |===============| box_right start |===============| -->
				<div class="box box_right">
                                        <insert name="show_block" module="site" id="10">

				</div>
				<!-- |===============| box_right end |===============| -->
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
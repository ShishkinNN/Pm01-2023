<?php
/**
 *
 * @package    Diafan.CMS
 * @author     diafan.ru
 * @version    5.4
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2014 OOO «Диафан» (http://diafan.ru)
 */

if (! defined('DIAFAN'))
{
	include dirname(dirname(__FILE__)).'/includes/404.php';
}
?>
<header class="header">
			<nav class="header__center">
                            <a href="<insert name="path">" class="logo">
					<span class="logo__in">
						<insert name="show_block" module="site" id="1">
					</span>
				</a>
				
				
                                <insert name="show_block" module="menu" id="1" 
                                        tag_level_start_1="[ul class=`nav`]"
                                        tag_start_1="[li class=`nav__item`]"
                                        tag_end_1="[/li]"
                                        tag_level_end_1="[/ul]"
                                        
                                        tag_level_start_2="[ul class=`nav__popup`]"
                                        tag_start_2="[li class=`nav__popup__item`]"
                                       
                                        >
				
				
				<div class="tel"><insert name="show_block" module="site" id="2"></div>
				
				<!-- |===============| basket start |===============| -->
				<insert name="show_block" module="cart">
				<!-- |===============| basket end |===============| -->
			</nav>
		</header>
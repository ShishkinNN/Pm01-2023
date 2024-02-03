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
		<div class="footer">
			<div class="footer__center">
                                <insert name="show_block" module="menu" id="1" template="footer">

				
				<div class="tel">
					<insert name="show_block" module="site" id="2">
					<div class="tel__info"><insert name="show_block" module="site" id="3"></div>
				</div>
				
				<div class="footer__unit">
					<div class="footer__copy">
						<insert name="show_block" module="site" id="5">
					</div>
                                    
                                        <insert name="show_search" module="search" template="bottom">
					
					<insert name="show_block" module="site" id="6">
				</div>
			</div>
		</div>

                <insert name="show_block" module="site" id="11">
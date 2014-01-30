<?php
/**
* Management interface for ...
*
* @package module
*/

class MyAdmin extends ModelAdmin {

	private static $url_segment = 'myadmin';

	private static $managed_models = array('MyDataObject');

	private static $menu_title = 'MyAdmin';
	
	private static $menu_icon = "module/images/puzzle.png";

}

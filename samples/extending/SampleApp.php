<?
/**
 * content adicted SampleApp
 *
 * @author 		André Fiedler <kontakt at visualdrugs dot net>
 * @link 		http://www.visualdrugs.net/
 * @copyright 	2007 - 2009 André Fiedler.
 * @license     MIT License
 * @version 	1.0
 */

require_once('../../ContentAdicted.php');
require_once('SampleAppAction.php');
require_once('SampleAppUser.php');

class SampleApp extends ContentAdicted
{
	public static function loadConfig($environment)
	{
		$config = parse_ini_file('app/config/database.ini', true);
		
		self::set($config[$environment]);
	}
	
	public static function registerRouting()
	{
		$routing = parse_ini_file('app/config/routing.ini');
		
		self::register($routing);
	}
}

SampleApp::set('core.factories.user', 'SampleAppUser');

?>
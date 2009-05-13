<?
/**
 * content adicted SampleApp
 *
 * @author 	   André Fiedler <kontakt at visualdrugs dot net>
 * @link       http://github.com/SunboX/content-adicted/tree
 * @copyright  2007 - 2009 André Fiedler.
 * @license    MIT License
 * @version    1.0
 */

class SampleAppAction implements IContentAdictedAction
{
	public function execute($c, $rd) {}
	
	public function isSecure()
	{
		return false;
	}
}

?>
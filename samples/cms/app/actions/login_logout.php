<?
/**
 * content adicted CMS
 *
 * @author     André Fiedler <kontakt at visualdrugs dot net>
 * @link       http://github.com/SunboX/content-adicted/tree
 * @copyright  2007 - 2009 André Fiedler.
 * @license    MIT License
 * @version    2.0
 */

class LoginLogout_Action implements IContentAdictedAction
{
	public function execute($c, $rd)
	{
		$c->set('core.layout', false);
		$c->getUser()->logout();
		$c->getUser()->setMessage('Die Session wurde beendet.');
		$c->forward('login');
	}
	
	public function isSecure()
	{
		return false;
	}
}

?>
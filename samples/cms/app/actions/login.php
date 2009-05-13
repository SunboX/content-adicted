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

class Login_Action implements IContentAdictedAction
{
	public function execute($c, $rd)
	{
		$c->set('core.layout', false);
		
		if(isset($rd['submit']))
		{
			$c->setAttribute('user', $rd['user']);
			
			if($c->getUser()->login($rd['user'], $rd['pass']))
			{
				$c->set('core.layout', true);
				$c->forward('start');
			}
			sleep(3);
			$c->getUser()->setMessage('Benutzername oder Passwort ist falsch.', 'error');
		}
		$c->setAttribute('user', '');
	}
	
	public function isSecure()
	{
		return false;
	}
}

?>
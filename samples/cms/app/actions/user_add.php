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
 
class UserAdd_Action implements IContentAdictedAction
{
	public function execute($c, $rd)
	{
		$c->setAttribute('navi', 'user');
		
		if(isset($rd['submit']))
		{
			$user = array();
			$user['username'] = $_POST['username'];
			$user['realname'] = $_POST['realname'];
			$user['password_md5'] = md5($_POST['password']);
		
			$c->getConnection()->query('INSERT INTO content_adicted_user SET' .
	
				' username = ' . $c->getConnection()->quote($rd['username']) . ',' .
				' realname = ' . $c->getConnection()->quote($rd['realname']) . ',' .
				' password_md5 = ' . $c->getConnection()->quote(md5($rd['password'])) . ',' .
				' logins = 0,' .
				' last_login = 0'
			
			);
	
			$c->getUser()->setMessage('Benutzer wurde gespeichert.');
		}
	}
	
	public function isSecure()
	{
		return true;
	}
}

?>
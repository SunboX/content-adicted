<?
/**
 * content adicted CMS
 *
 * @author 		André Fiedler <kontakt at visualdrugs dot net>
 * @link 		http://www.visualdrugs.net/
 * @copyright 	2007 - 2009 André Fiedler.
 * @license     MIT License
 * @version 	2.0
 */
 
class UserEdit_Action implements IContentAdictedAction
{
	public function execute($c, $rd)
	{
		$c->setAttribute('navi', 'user');
		
		$rs = $c->getConnection()->query('SELECT * FROM content_adicted_user WHERE id = ' . $c->getConnection()->quote($rd['user_id']));
		$user = $rs->fetch(PDO::FETCH_ASSOC);
		
		if(isset($rd['submit']))
		{
			$user['username'] = $rd['username'];
			$user['realname'] = $rd['realname'];
			if($rd['password'] != '') $user['password_md5'] = md5($rd['password']);
			
			$c->getConnection()->query('
				UPDATE content_adicted_user SET' .
					' username = ' . $c->getConnection()->quote($user['username']) . ',' .
					' realname = ' . $c->getConnection()->quote($user['realname']) . '' .
					( isset($user['password_md5']) ? ', password_md5 = ' . $c->getConnection()->quote($user['password_md5']) : '' ) .
				
				' WHERE id = ' . $rd['user_id']
			);
			
			if($c->getUser()->id() == $user['id'])
			{
				$c->getUser()->hydrate($user);
			}
		
			$c->getUser()->setMessage('Benutzer wurde gespeichert.');
		}
		
		$c->setAttribute('user', $user);
	}
	
	public function isSecure()
	{
		return true;
	}
}

?>
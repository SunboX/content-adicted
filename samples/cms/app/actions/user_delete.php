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
 
class UserDelete_Action implements IContentAdictedAction
{
	public function execute($c, $rd)
	{
		$c->setAttribute('navi', 'user');
		
		$c->getConnection()->query('DELETE FROM content_adicted_user WHERE id = ' . $c->getConnection()->quote($rd['user_id']));
		
		$c->forward('user');
	}
	
	public function isSecure()
	{
		return true;
	}
}

?>
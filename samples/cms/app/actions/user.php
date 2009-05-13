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
class User_Action implements IContentAdictedAction
{
	public function execute($c, $rd)
	{
		$c->setAttribute('navi', 'user');
		
		$c->setAttribute('users', $c->getConnection()->query('SELECT id, username, realname FROM content_adicted_user ORDER BY username ASC')->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function isSecure()
	{
		return true;
	}
}

?>
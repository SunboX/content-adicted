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
 
class Start_Action implements IContentAdictedAction
{
	public function execute($c, $rd)
	{
		$c->setAttribute('navi', 'start');
		
		$c->setAttribute('news', $c->getConnection()->query('SELECT date, text FROM content_adicted_news ORDER BY date DESC LIMIT 1;')->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function isSecure()
	{
		return true;
	}
}

?>
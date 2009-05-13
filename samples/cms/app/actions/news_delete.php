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
 
class NewsDelete_Action implements IContentAdictedAction
{
	public function execute($c, $rd)
	{
		$c->setAttribute('navi', 'news');
		
		$c->getConnection()->query('DELETE FROM content_adicted_news WHERE id = ' . $c->getConnection()->quote($rd['news_id']));
		
		$c->forward('news');
	}
	
	public function isSecure()
	{
		return true;
	}
}

?>
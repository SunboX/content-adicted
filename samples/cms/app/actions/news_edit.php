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
 
class NewsEdit_Action implements IContentAdictedAction
{
	public function execute($c, $rd)
	{
		$c->setAttribute('navi', 'news');
		
		$rs = $c->getConnection()->query('SELECT id, date, text FROM content_adicted_news WHERE id = ' . mysql_real_escape_string($rd['news_id']));
		$news = $rs->fetch(PDO::FETCH_ASSOC);
		
		if(isset($rd['submit']))
		{
			$news['date'] = strtotime($rd['date']);
			$news['text'] = $rd['text'];
			
			$c->getConnection()->query('
				UPDATE content_adicted_news SET' .
					' date = ' . $news['date'] . ',' .
					' text = ' . $c->getConnection()->quote($news['text']) .
					
				' WHERE id = ' . $rd['news_id']
			);
		
			$c->getUser()->setMessage('Meldung wurde gespeichert.');
		}
		
		$c->setAttribute('news', $news);
	}
	
	public function isSecure()
	{
		return true;
	}
}

?>
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
 
class NewsAdd_Action implements IContentAdictedAction
{
	public function execute($c, $rd)
	{
		$c->setAttribute('navi', 'news');
		
		if(isset($rd['submit']))
		{
			$c->getConnection()->query('INSERT INTO content_adicted_news SET' .
		
				' date = ' . strtotime($rd['date']) . ',' .
				' text = ' . $c->getConnection()->quote($rd['text'])
			);
		
			$c->getUser()->setMessage('Meldung wurde gespeichert.');
		}
	}
	
	public function isSecure()
	{
		return true;
	}
}

?>
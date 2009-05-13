<?
/**
 * content adicted SampleApp
 *
 * @author 		Andr� Fiedler <kontakt at visualdrugs dot net>
 * @link 		http://www.visualdrugs.net/
 * @copyright 	2007 - 2009 Andr� Fiedler.
 * @license     MIT License
 * @version 	1.0
 */
 
class Index_Action extends SampleAppAction
{
	public function execute($c, $rd)
	{
		$c->getUser()->sayHello();
		
		$c->setAttribute('news', $c->getConnection()->query('SELECT date, text FROM content_adicted_news ORDER BY date DESC LIMIT 1;')->fetchAll(PDO::FETCH_ASSOC));
	}
}

?>
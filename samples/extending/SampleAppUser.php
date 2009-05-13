<?
/**
 * content adicted SampleApp
 *
 * @author 	   André Fiedler <kontakt at visualdrugs dot net>
 * @link       http://github.com/SunboX/content-adicted/tree
 * @copyright  2007 - 2009 André Fiedler.
 * @license    MIT License
 * @version    1.0
 */

require_once('../../ContentAdictedUser.php');

class SampleAppUser extends ContentAdictedUser
{
	public function sayHello()
	{
		$this->setMessage('Hello!');
	}
}

?>
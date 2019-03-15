<?php
/**
 * unit-form:/Form.class.php
 *
 * v1.0 SecureForm
 * v2.0 onepiece-framework
 * v3.0 Unit Gen1 2017
 * v3.1 Unit Gen2 2018
 *
 * @created   2017-01-25
 * @version   3.1
 * @package   unit-form
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 * @created   2018-01-22
 */
namespace OP\UNIT\FORM2;

/** Used class
 *
 */
//use \Exception;
use \OP\OP_CORE;
use \OP\Env;
/*
use \OP\Notice;
use \OP\Cookie;
*/

/** Form
 *
 * @created   2017-01-25
 * @version   1.0
 * @package   unit-form
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
class Config
{
	/** Trait
	 *
	 */
	use OP_CORE;

	function Auto($config)
	{
		//	...
		if( Env::isAdmin() ){
			Test::Auto($config);
		};

		//	...
		return $config;
	}
}

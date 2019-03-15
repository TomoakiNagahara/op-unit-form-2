<?php
/**
 * unit-form:/Form.class.php
 *
 * v1.0 SecureForm
 * v2.0 onepiece-framework
 * v3.0 Unit Gen1 2017-01-25 Correspond to Unit. It was separated from op-core.
 * v3.1 Unit Gen2 2018       Optimized to unit.
 * v3.2 Unit Gen3 2019-03-08 More optimize unit.
 *
 * @created   2019-03-08
 * @version   3.1
 * @package   unit-form
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 * @created   2018-01-22
 */
namespace OP\UNIT;

/** Used class
 *
 */
//use \Exception;
use \OP\OP_CORE;
use \OP\OP_UNIT;
use \OP\IF_UNIT;
use \OP\IF_FORM;
/*
use \OP\Env;
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
class Form2 implements IF_FORM, IF_UNIT
{
	/** Trait
	 *
	 */
	use OP_CORE, OP_UNIT;

	/** Set configuration.
	 *
	 * @addition 2018-04-20
	 * @param	 array		 $config
	 * @return	 array		 $config
	 */
	public function Config($config)
	{
		$this->_config = FORM2\Config::Auto($config);
	}

	/** Start form. Output open FORM tag.
	 *
	 * @addition 2018-04-20
	 */
	public function Start()
	{

	}

	/** Finish form. Output close FORM tag.
	 *
	 * @addition 2018-04-20
	 */
	public function Finish()
	{

	}

	/** Display input label.
	 *
	 * @addition 2018-04-20
	 * @param	 string		 $name
	 */
	public function Label($name)
	{

	}

	/** Display input tag.
	 *
	 * @addition 2018-04-20
	 * @param	 string		 $name
	 */
	public function Input($name)
	{

	}

	/** Display submitted value.
	 *
	 * @addition 2018-04-20
	 * @param	 string		 $name
	 */
	public function Value($name)
	{

	}

	/** Display error message.
	 *
	 * @addition 2018-04-20
	 * @param	 string		 $name
	 */
	public function Error($name)
	{

	}

	/** Overwrite input attributes.
	 *
	 * @addition 2018-06-29
	 * @param	 array		 $input
	 */
	public function SetInput($input)
	{

	}

	/** Overwrite input options.
	 *
	 * @addition 2018-06-29
	 * @param	 array		 $option
	 */
	public function SetOption($input_name, $option)
	{

	}

	/** Get submitted value.
	 *
	 * @addition 2018-06-29
	 * @param	 string			 $name
	 * @param	 string|array	 $value
	 */
	public function GetValue($name)
	{

	}

	public function Token()
	{

	}

	public function Validate()
	{

	}

	public function Clear()
	{

	}
}

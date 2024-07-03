<?php
/**
 * unit-form:/Radio.class.php
 *
 * @created   2017-01-25
 * @version   1.0
 * @package   unit-form
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** Declare strict
 *
 */
declare(strict_types=1);

/** namespace
 *
 * @created   2017-12-18
 */
namespace OP\UNIT\FORM;

/** Radio
 *
 * @created   2017-01-25
 * @version   1.0
 * @package   unit-form
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
class Radio
{
	//	...
	use \OP\OP_CORE, \OP\OP_CI;

	/**
	 * Build input tag as type of radio.
	 *
	 * @param array  $input
	 * @param string $session
	 */
	static function Build($input)
	{
		//	...
		if( empty($input['option']) ){
			OP()->Notice("This input is empty option. ({$input['name']})");
			return;
		}

		//	...
		if( isset($input['value']) ){
			//	...
			if( is_string($input['value']) ){
				$default_value = (string)$input['value'];
			}else{
				OP()->Notice("This input value is not string. ({$input['name']})");
			}
		}

		//	...
		$attr = [];

		//	...
		foreach(['class','style'] as $key){
			if( $val = $input[$key] ?? null ){
				$attr[] = sprintf('%s="%s"', $key, $val);
			}
		}

		//	...
		$name = $input['name'];

		//	...
		foreach($input['option'] as $option){
			//	...
			$value = $option['value'];
			$label = $option['label'] ?? $value;

			//	...
			if(!is_string($value) ){
				OP()->Notice("This option value is not string. ({$input['name']}, {$label})");
			}

			/*
			//	...
			if( isset($option['check']) ){
				OP()->Notice("Default check value is set to input['value']. ({$input['name']})");
			}
			*/

			//	...
			$checked = (isset($default_value) and $default_value === (string)$value) ? 'checked="checked"':'';

			//	...
			printf('<label><input type="radio" name="%s" value="%s" %s %s /><span>%s</span></label>', $name, $value, join(' ', $attr), $checked, $label);
		}
	}
}

<?php
/**
 * unit-form:/Checkbox.class.php
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

/** Checkbox
 *
 * @created   2017-01-25
 * @version   1.0
 * @package   unit-form
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
class Checkbox
{
	//	...
	use \OP\OP_CORE, \OP\OP_CI;

	/**
	 * Build input tag as type of checkbox.
	 *
	 * @param array $input
	 */
	static function Build($input)
	{
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
		if( empty($input['value']) ){
		}else if( is_string($input['value']) ){
			$default_value = explode(',', $input['value']);
		}else if( is_array($input['value']) ){
			$default_value = $input['value'];
		}else{
			OP()->Notice("Checkbox value is not array. ({$input['name']})");
			return;
		}

		//	...
		if( empty($input['option']) ){
			OP()->Notice("Checkbox option is empty. ({$input['name']})");
			return;
		}

		//	...
		printf('<input type="hidden" name="%s[0]" value="" />', $name);

		//	...
		$i = 1;
		foreach($input['option'] as $option){
			//	...
			$value = $option['value'];
			$label = $option['label'] ?? $value;

			/*
			//	...
			if( isset($option['check']) ){
				OP()->Notice("Default checked is set to input['value']. ({$input['name']})");
			}
			*/

			//	...
			$checked = (isset($default_value) and array_search($value, $default_value) !== false) ? 'checked="checked"':'';

			//	...
			printf('<label><input type="checkbox" name="%s[%s]" value="%s" %s %s />%s</label>', $name, $i, $value, join(' ', $attr), $checked, $label);

			//	...
			$i++;
		}
	}
}

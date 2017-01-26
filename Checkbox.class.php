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

/**
 * Checkbox
 *
 * @created   2017-01-25
 * @version   1.0
 * @package   unit-form
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
class Checkbox extends OnePiece
{
	/**
	 * Build input tag as type of checkbox.
	 *
	 * @param array $input
	 */
	static function Build($input, $session=null)
	{
		//	...
		foreach(['class','style'] as $key){
			if( $val = Escape(ifset($input[$key])) ){
				$attr[] = sprintf('%s="%s"', $key, $val);
			}
		}

		//	...
		$name = $input['name'];

		//	...
		if( empty($input['values']) ){
			$input['values'][0]['value'] = ifset($input['value']);
			$input['values'][0]['label'] = ifset($input['label']);
		}

		//	...
		printf('<input type="hidden" name="%s[0]" value="" />', $name);

		//	...
		$i = 1;
		foreach($input['values'] as $values){
			if( is_array($values) ){
				$value = ifset($values['value']);
				$label = ifset($values['label'], $value);
			}else if( is_string($values) or is_numeric($values) ){
				$value = $values;
				$label = $values;
			}

			//	...
			$checked = $value === ifset($session[$i]) ? 'checked="checked"':'';

			//	...
			printf('<label><input type="checkbox" name="%s[%s]" value="%s" %s %s />%s</label>', $name, $i, $value, join(' ', $attr), $checked, $label);
			$i++;
		}
	}
}
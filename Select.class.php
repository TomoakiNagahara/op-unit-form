<?php
/**
 * unit-form:/Select.class.php
 *
 * @created   2017-01-25
 * @version   1.0
 * @package   unit-form
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/**
 * Select
 *
 * @created   2017-01-25
 * @version   1.0
 * @package   unit-form
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
class Select extends OnePiece
{
	/**
	 * Build select tag.
	 *
	 * @param array $input
	 */
	static function Build($input)
	{
		//	...
		foreach(['type','name','class','style','value'] as $key){
			if( $val = ifset($input[$key]) ){
				$attr[] = sprintf('%s="%s"', $key, $val);
			}
		}

		//	...
		$options = '';
		foreach(ifset($input['option'], []) as $option){
			$options .= Option::Build($option);
		}

		//	...
		printf('<select %s>%s</select>', join(' ', $attr), $options);
	}
}

/**
 * Option
 *
 * @created   2017-01-25
 * @version   1.0
 * @package   unit-form
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
class Option extends OnePiece
{
	/**
	 * Build option tag.
	 *
	 * @param array $input
	 */
	static function Build($option)
	{
		if( is_array($option) ){
			$value = ifset($option['value']);
			$label = ifset($option['label'], $value);
		}else if( is_string($option) or is_numeric($option) ){
			$value = $option;
			$label = $value;
		}

		//	...
		return sprintf('<option value="%s">%s</option>', $value, $label);
	}
}
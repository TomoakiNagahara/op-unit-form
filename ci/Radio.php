<?php
/** op-unit-form:/ci/Radio.php
 *
 * @created    2024-05-07
 * @version    1.0
 * @package    op-unit-form
 * @author     Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright  Tomoaki Nagahara All right reserved.
 */

/** Declare strict
 *
 */
declare(strict_types=1);

/** namespace
 *
 */
namespace OP;

//	...
$ci = OP::Unit('CI')::Config();

//	...
$input = [
	'name'  => 'input_radio',
	'type'  => 'radio',
	'value' => '',
	'label' => 'Input Radio',
	'id'    => '',
	'class' => '',
	'style' => '',
];

//	Empty option
$method = 'Build';
$args   = [$input];
$result = 'Notice: This input is empty option. (input_radio)';
$ci->Set($method, $result, $args);

//	Standard
$input['option'] = [
	['label' => 'A', 'value' => 'a'],
	['label' => 'B', 'value' => 'b'],
	['label' => 'C', 'value' => 'c'],
];
$method = 'Build';
$args   = [$input];
$result = '<label><input type="radio" name="input_radio" value="a"   />A</label><label><input type="radio" name="input_radio" value="b"   />B</label><label><input type="radio" name="input_radio" value="c"   />C</label>';
$ci->Set($method, $result, $args);

//	Default value array error
$input['value'] = [];
$method = 'Build';
$args   = [$input];
$result = 'Notice: This input value is not string. (input_radio)';
$ci->Set($method, $result, $args);

//	Default value is checked
$input['value'] = 'b';
$method = 'Build';
$args   = [$input];
$result = '<label><input type="radio" name="input_radio" value="a"   />A</label><label><input type="radio" name="input_radio" value="b"  checked="checked" />B</label><label><input type="radio" name="input_radio" value="c"   />C</label>';
$ci->Set($method, $result, $args);

//	...
return $ci->Get();

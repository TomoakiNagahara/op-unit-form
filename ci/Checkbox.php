<?php
/** op-unit-form:/ci/Checkbox.php
 *
 * @created    2024-05-06
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
$checkbox_name = 'checkbox_name';

//	...
$input  = [
	'type'  => 'checkbox',
	'name'  => $checkbox_name,
	'value' => new \stdClass(),
	'label' => 'Checkbox',
];
$method = 'Build';
$result = "Notice: Checkbox value is not array. ({$checkbox_name})";
$args   =  [$input];
$ci->Set($method, $result, $args);

//	...
$input  = [
	'type'  => 'checkbox',
	'name'  => $checkbox_name,
	'label' => 'Checkbox',
];
$method = 'Build';
$result = "Notice: Checkbox option is empty. ({$checkbox_name})";
$args   =  [$input];
$ci->Set($method, $result, $args);

//	...
$input  = [
	'type'  => 'checkbox',
	'name'  => $checkbox_name,
	'label' => 'Checkbox',
	'option'=> [],
];
$method = 'Build';
$result = "Notice: Checkbox option is empty. ({$checkbox_name})";
$args   =  [$input];
$ci->Set($method, $result, $args);

//	$input['value'] is checked test
$input  = [
	'type'  => 'checkbox',
	'name'  => $checkbox_name,
	'label' => 'Checkbox',
	'value' => 'a,c',
	'option'=> [
		0 => ['label' => 'A', 'value' => 'a'],
		1 => ['label' => 'B', 'value' => 'b'],
		2 => ['label' => 'C', 'value' => 'c'],
	],
];
$method = 'Build';
$result = '<input type="hidden" name="checkbox_name[0]" value="" /><label><input type="checkbox" name="checkbox_name[1]" value="a"  checked="checked" />A</label><label><input type="checkbox" name="checkbox_name[2]" value="b"   />B</label><label><input type="checkbox" name="checkbox_name[3]" value="c"  checked="checked" />C</label>';
$args   =  [$input];
$ci->Set($method, $result, $args);

/*
//	$option['check'] is error test
$input  = [
	'type'  => 'checkbox',
	'name'  => $checkbox_name,
	'label' => 'Checkbox',
	'option'=> [
		0 => ['label' => 'A', 'value' => 'a', 'check' => '1'],
		1 => ['label' => 'B', 'value' => 'b'],
		2 => ['label' => 'C', 'value' => 'c'],
	],
];
$method = 'Build';
$result = 'Notice: Default checked is set to input[\'value\']. (checkbox_name)';
$args   =  [$input];
$ci->Set($method, $result, $args);
*/

//	...
return $ci->Get();

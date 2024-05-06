<?php
/** op-unit-form:/ci/Button.php
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
$input  = [
	'type'  => 'button',
	'name'  => 'button_name',
	'value' => 'button_value',
	'label' => 'Button',
	'class' => 'class_name',
	'style' => 'margin:0; padding:0;',
];
$method = 'Build';
$result = '<button name="button_name" value="button_value" class="class_name" style="margin:0; padding:0;">Button</button>';
$args   =  [$input];
$ci->Set($method, $result, $args);

//	...
return $ci->Get();

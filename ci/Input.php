<?php
/** op-unit-form:/ci/Input.php
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
	'name'  => 'input_text',
	'type'  => 'text',
	'value' => '(empty)',
	'label' => 'Input text',
	'id'    => 'input_text_id',
	'class' => 'input_text_class',
	'style' => 'margin:0; padding:0;',
];

//	...
$method = 'Build';
$args   = [$input];
$result = '<input type="text" name="input_text" value="(empty)" class="input_text_class" style="margin:0; padding:0;" />';
$ci->Set($method, $result, $args);

//	...
$input = [
	'name'  => 'input_textarea',
	'type'  => 'textarea',
	'value' => '(empty)',
	'label' => 'Input textarea',
	'id'    => 'input_textarea_id',
	'class' => 'input_textarea_class',
	'style' => 'margin:0; padding:0;',
];

//	...
$method = 'Build';
$args   = [$input];
$result = '<textarea name="input_textarea" class="input_textarea_class" style="margin:0; padding:0;">(empty)</textarea>';
$ci->Set($method, $result, $args);

//	...
return $ci->Get();

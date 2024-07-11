<?php
/** op-unit-form:/testcase/text.php
 *
 * @created   2024-03-09
 * @version   1.0
 * @package   op-unit-form
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** Declare strict
 *
 */
declare(strict_types=1);

/** namespace
 *
 */
namespace OP\UNIT\FORM;

/* @var $form \OP\UNIT\Form  */
if(!$unit_form = OP()->Unit('Form') ){
	throw new \Exception("OP()->Unit('Form') is error.");
};

//	...
$form = [];
$form['name'] = 'form_name';

//	input type text
$form['input'][] = [
	'name' => 'text',
	'type' => 'text',
	'validate' => [
		'required' => true,
		'english'  => true,
	],
];

//	submit button
$form['input'][] = [
	'name'  => 'button',
	'type'  => 'button',
	'value' => 'Submit',
];

//	Set form config.
$unit_form->Config($form);

//	Do validation.
D( $unit_form->isValidate() );

//	...
$unit_form->Start('form_name');
$unit_form->Label('text');
$unit_form->Input('text');
$unit_form->Value('text');
$unit_form->Error('text');
$unit_form->Input('button');
$unit_form->Finish('form_name');
$unit_form->Debug();

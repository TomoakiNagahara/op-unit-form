<?php
/** op-unit-form:/ci/Form.php
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

//	Template
$method = 'Template';
$args   = 'ci.txt';
$result = 'OK';
$ci->Set($method, $result, $args);

//	...
$form_name  = 'form_ci';
$input_name = 'ci_test';

//	...
$form = [
	'name' => $form_name,
];

//	...
$input = [
	'name'  => $input_name,
	'type'  => 'text',
	'value' => 'default text',
	'label' => 'CI text',
];
$form['input'][$input_name] = $input;

//	...
$method = '_InitForm';
$result = 'Exception: Does not found this file. (conf.form.php)';
$args   = ['conf.form.php'];
$ci->Set($method, $result, $args);

//	...
$method = '_InitForm';
$result =  true;
$args   = [$form];
$ci->Set($method, $result, $args);

//	Duplicate: Already initialized.
$method = '_InitForm';
$result = 'Exception: This form config is already initialized. (form name: form_ci)';
$args   = [$form];
$ci->Set($method, $result, $args);

//	...
$method = '_InitInput';
$result = null;
$args   = [];
$ci->Set($method, $result, $args);

//	...
$method = 'Config';
$result = [
	'name'   => $form_name,
	'input'  => [
		$input_name => $input,
	],
	'method' => 'post',
	'class'  => 'OP',
];
$result['input'][$input_name]['original'] = $input['value'];
$args   = [];
$ci->Set($method, $result, $args);

//	...
$method = 'Token';
$result = false;
$args   = [];
$ci->Set($method, $result, $args);

//	...
$method = 'Start';
$result = '<form action="" method="post" name="form_ci" id="" class="OP" style=""><input type="hidden" name="form_name" value="form_ci" /><input type="hidden" name="token"     value="CI" />';
$args   = [];
$ci->Set($method, $result, $args);

//	...
$method = 'Finish';
$result = '</form>';
$args   = [];
$ci->Set($method, $result, $args);

//	...
$method = 'Label';
$result = 'CI text';
$args   = [$input_name];
$ci->Set($method, $result, $args);

//	...
$method = 'GetInput';
$result = '<input type="text" name="ci_test" value="default text"  />';
$args   = [$input_name];
$ci->Set($method, $result, $args);

//	...
$method = 'Input';
$result = '<input type="text" name="ci_test" value="default text"  />';
$args   = [$input_name];
$ci->Set($method, $result, $args);

//	...
$method = 'SetValue';
$result = null;
$args   = [$input_name, 'value is update'];
$ci->Set($method, $result, $args);

//	...
$method = 'Values';
$result = [$input_name => 'value is update'];
$args   =  null;
$ci->Set($method, $result, $args);

//	...
$method = 'Value';
$result = 'value is update';
$args   = $input_name;
$ci->Set($method, $result, $args);

//	...
$method = 'Error';
$result = 'Notice: Form::Validate() is not execute.';
$args   =  null;
$ci->Set($method, $result, $args);

//	...
$method = 'Clear';
$result = 'Notice: This input already displayed. ()';
$args   =  null;
$ci->Set($method, $result, $args);

//	...
$method = 'SetInput';
$result =  null;
$args   = [$input_name, ['value'=>'touch']];
$ci->Set($method, $result, $args);

//	...
$method = 'SetOption';
$result =  null;
$args   = [$input_name, ['option']];
$ci->Set($method, $result, $args);

//	...
$method = 'Test';
$result =  true;
$args   =  null;
$ci->Set($method, $result, $args);

//	...
$method = 'Session';
$result = ['token' => 'CI'];
$args   = $form_name;
$ci->Set($method, $result, $args);

//	...
$method = 'Display';
$result = 'Notice: Form has already started. (form_ci)';
$args   = $form_name;
$ci->Set($method, $result, $args);

//	...
$method = 'Debug';
$result = 'unit:/form/Form.class.php #1018 - [
  0 => "Does not match token."
]
';
$args   = $form_name;
$ci->Set($method, $result, $args);

//	...
$method = '_InitRequest';
$result =  null;
$args   =  null;
$ci->Set($method, $result, $args);

//	...
$method = '_InitOption';
$result =  null;
$args   =  null;
$ci->Set($method, $result, $args);

//	...
$method = 'GetLabel';
$result =  null;
$args   =  null;
$ci->Set($method, $result, $args);

//	...
$method = 'GetValue';
$result =  null;
$args   =  null;
$ci->Set($method, $result, $args);

//	...
$method = 'Validate';
$result =  null;
$args   =  null;
$ci->Set($method, $result, $args);

//	...
$method = 'isValidate';
$result =  false;
$args   =  null;
$ci->Set($method, $result, $args);

//	...
return $ci->Get();

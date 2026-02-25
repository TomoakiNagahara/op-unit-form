<?php
/** op-unit-form:/ci/Test.php
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
$form = [];

//	...
$method = 'Config';
$result =  false;
$args   = [$form];
$ci->Set($method, $result, $args);

//	...
$method = 'Inputs';
$result =  true;
$args   = [$form];
$ci->Set($method, $result, $args);

//	...
$input = [];

//	...
$method = 'Input';
$result =  false;
$args   = [$input];
$ci->Set($method, $result, $args);

//	...
$method = 'Error';
$result = [
	'CI_0' => '$form has not been set name attribute.',
	'CI_1' => '$form has not been set name attribute.',
	'CI_2' => 'Input name is empty.',
];
$args   = [];
$ci->Set($method, $result, $args);

//	...
$method = 'Form';
$result =  null;
$args   =  null;
$ci->Set($method, $result, $args);

//	...
return $ci->Get();

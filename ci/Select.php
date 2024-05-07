<?php
/** op-unit-form:/ci/Select.php
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
$select = [
	'name' => 'ci_select',
	'type' => 'select',
];

//	...
$method = 'Build';
$result = '<select type="select" name="ci_select"></select>';
$args   = [$select];
$ci->Set($method, $result, $args);

//	...
return $ci->Get();

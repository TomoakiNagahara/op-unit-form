<?php
/** op-unit-form:/testcase/word_count.php
 *
 * @see        https://zenn.dev/pandanoir/articles/how-to-count-strings
 * @created    2024-04-07
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
namespace OP\UNIT\FORM;

//	...
$form = [];
$form['name'] = 'word_count';

//	...
$input = [];
$input['id']   = 'text';
$input['name'] = 'text';
$input['type'] = 'text';
$form['input'][] = $input;

//	...
$input = [];
$input['name'] = 'button';
$input['type'] = 'button';
$input['value']= 'Submit';
$form['input'][] = $input;

//	...
OP()->Unit('Form')->Config($form);

//	...
echo OP()->Unit('Form');

//	...
echo OP()->Unit('Form')->Value('text');

?>
<script>
//	Not work
var text = document.getElementById('text');
//$OP.D(text);
console.log(text);

//	...
var text            = document.querySelector('input[name="text"]');
var value           = text.value;
var straight        = value.length;
var surrogate_pair  = [...value].length;

//	...
const segmenter = new Intl.Segmenter("ja-JP", { granularity: "grapheme" })
var word_count = [...segmenter.segment(value)].length;

//	...
console.log(value, straight, surrogate_pair, word_count);
</script>

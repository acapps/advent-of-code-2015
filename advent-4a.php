<?php
/**
 * Created by IntelliJ IDEA.
 * User: alan
 * Date: 12/1/15
 * Time: 10:18 AM
 */

//$input = 'abcdef'; /* 609043 */
//$input = 'pqrstuv'; /* 1048970 */
$input = 'bgvyzdsv'; /* 254575 */

/* Part A */
//$to_find = '00000'; /* 254575 */

/* Part B */
$to_find = '000000'; /* 1038736 */

$to_find_length = strlen($to_find);

for ($x = 0; $x < 10000000; $x++) {
    $hash = md5(sprintf("%s%s", $input, $x));

    if (substr($hash, 0, $to_find_length) === $to_find) {
        echo $x;
        break;
    }
}

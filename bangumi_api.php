<?php
/**
 * Created by PhpStorm.
 * User: Tyler
 * Date: 2018-12-19
 * Time: 4:12 PM
 */

$c = file_get_contents("http://api.bgm.tv/search/subject/徒然CHILDREN?type=2&responseGroup=large");
print_r($c);

?>

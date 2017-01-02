<?php
/**
 * Created by PhpStorm.
 * User: leexiaohu
 * Date: 16-12-23
 * Time: 下午8:35
 */
class My_Class{
    const constanct ='const value<br>';
    const username = <<< 'EOT'
leexiaohu
EOT;

    function showConst(){
        echo self::constanct;
    }

}
echo My_Class::constanct;
$classname =  new My_Class();
echo $classname::constanct;

$classname="My_Class";
echo $classname::username;


?>
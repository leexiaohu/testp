    <?php
require_once "../db/db_utils.php";
/**
 * Created by PhpStorm.
 * User: leexiaohu
 * Date: 16-12-31
 * Time: 下午5:32
 */
header('Content-type: application/json');

$action = $_POST["action"];

/*创建账户*/
if($action == "create_account"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["useremail"];

    $password = password_hash($password, PASSWORD_DEFAULT);
    $id = md5(uniqid(mt_rand(), true));
    $exit = checkUser($username);

    if($exit == true){
        $result = array(
            "result"=>"fail",
            "reason"=>$username . "已经存在"
        );
    }else{
        $ret = register_user($id,$username,$password,$email);
        if($ret){
            $result = array(
                "result"=>"success",
                "reason"=>"注册成功！"
            );
        }else{
            $result = array(
                "result"=>"fail",
                "reason"=>"注册失败！"
            );
        }
    }
    echo json_encode($result);
    return;

}else if($action == "login"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $flag = login_check($username,$password);
    if($flag){
        $result = array(
            "result"=>"success",
        );
    }else{
        $result = array(
            "result"=>"fail",
        );
    }
    echo json_encode($result);
}
?>
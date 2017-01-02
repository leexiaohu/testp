<?php
/**
 * Created by PhpStorm.
 * User: leexiaohu
 * Date: 16-12-30
 * Time: 下午11:08
 */
function connect_db(){
    try{
        $dbh = new PDO('mysql:host=127.0.0.1;dbname=pet_chat','leexiaohu','745688');
        $dbh->exec("set names utf8;");
        return $dbh;
    }catch (PDOException $e){
        print 'Error :' . $e->getMessage();
        die();
        return "null";
    }
}
/*检测用户是否存在*/
function checkUser($username){
    $dbh = connect_db();
    if($dbh){
        $sql = 'SELECT user_name FROM tb_user WHERE user_name = :user_name';
        $sth = $dbh->prepare($sql);
        $sth->bindParam(':user_name', $username, PDO::PARAM_STR);
        $sth->execute();
        $results = $sth->fetchAll();
        $counts = count($results);
        $dbh = null;
        //echo $counts;
        return $counts >0 ? true:false;
    }
    return false;
}
/**注册用户*/
function register_user($user_id,$user_name,$password,$email){
    $dbh = connect_db();
    if($dbh){
        $sql = "INSERT INTO tb_user(user_id,user_name,user_password,user_email) VALUES 
          ('$user_id','$user_name','$password','$email')";
        $counts = $dbh->exec($sql);
        $dbh = null;
        return $counts >0 ? true:false;
    }
    return false;
}
/*用户登录*/
function login_check($user_name,$password){
    $dbh = connect_db();
    if($dbh){
        $sql = 'SELECT user_name,user_password from tb_user WHERE (user_name = :user_name OR user_email = :user_name)';
        $sth = $dbh->prepare($sql);
        $sth->bindParam(':user_name', $user_name, PDO::PARAM_STR);
        $sth->execute();
        $results = $sth->fetchAll();
        $counts = count($results);
        if($counts > 0 && password_verify($password,$results[0]["user_password"])) {
            return true;
        }
        $dbh = null;
    }
    return false;
}
?>
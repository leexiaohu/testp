/**
 * Created by leexiaohu on 16-12-31.
 */
var usenameValid = false,
    passwordValid =false,
    emailValid = false;

$(document).ready(function(){
    $("#dialog_close").on("click",closeDialog);
    $("#create_account").on("click",createAccount);
    $("#login_btn").on("click",login);
    function login(){
        $.ajax({
            type:"POST",
            url:"action/loginAction.php",
            data:$("#login_form").serialize() + "&action=login",
            success:function(data){
                console.log(data);
                if(data['result'] == "success"){
                    $(".login-error").css({display:"none"});
                }else{
                    $(".login-error").css({display:"block"});
                }
            }
        });
    }
    function closeDialog(){
        $("#dialog").fadeOut();
        window.location.href="/login.php";
    };
    function createAccount(){
        if(!(usenameValid && passwordValid && emailValid)) {
            console.log("false");
            return false;
        }
        $.ajax({
            type:"POST",
            url:"action/loginAction.php",
            data:$("#register_form").serialize() + "&action=create_account",
            success:function(data){
                console.log(data);
                if(data.result == "success"){
                    //console.log(data);
                    $(".dialog_body h1").remove();
                    $(".dialog_body").append("<h1>恭喜你，注册成功</h1>");
                    $("#dialog").fadeIn();
                }else{
                    $(".dialog_body h1").remove();
                    var tmp =$("<h1/>").append(data.reason);
                    $(".dialog_body").append(tmp);
                    $("#dialog").fadeIn();
                }
            }
        });
    }


});
function checkuser(elem){
    var u = document.getElementById("username_error");
    var temp = elem.value.trim();
    console.log(temp);
    if(temp == "" ){
        u.innerHTML = "*用户名不能为空";
        u.style.display="block";
        usenameValid = false;
    }else{
        u.style.display="none";
        usenameValid = true;
    }
}
function checkemail(elem){
    var u = document.getElementById("email_error");
    var temp = elem.value;
    if(temp == "" ){
        emailValid = false;
        u.style.display="block";
    }else{
        emailValid = true;
        u.style.display="none";
    }
}
function checkpasswd(elem){
    var u = document.getElementById("passwd_error");
    var temp = elem.value;
    if(temp == "" ){
        passwordValid = false;
        u.style.display="block";
    }else{
        passwordValid = true;
        u.style.display="none";
    }
}
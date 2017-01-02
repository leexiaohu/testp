/**
 * Created by leexiaohu on 16-12-19.
 */
$(document).ready(function() {
    checkCookies();
    window.onerror = handleErr;

    function handleErr(msg, url, l) {
        var txt = "";
        txt = "本页中存在错误。\n\n"
        txt += "错误：" + msg + "\n"
        txt += "URL: " + url + "\n"
        txt += "行：" + l + "\n\n"
        txt += "点击“确定”继续。\n\n"
        alert(txt)
        return true
    }

    $(window).scroll(function () {
        document.getElementById("hangup").innerHTML =
            "pageXOffset: " + window.pageXOffset + ", pageYOffset: " + window.pageYOffset;

        if (window.pageYOffset > 80) {
            $("#div_header").fadeIn("slow");
            document.getElementById("div_header").style.position = "fixed";
            document.getElementById("div_header").style.height = "50px";
        } else {
            document.getElementById("div_header").style.position = "relative";
            document.getElementById("div_header").style.height = "auto";
        }
    });

    function deleteNode(id) {
        var parent = document.getElementById("div2");
        var child = document.getElementById("test");
        parent.removeChild(child);
    }

    var t;

    function checkCookies() {
        checkCookie();
        startTime();
    }

    function getCookie(c_name) {

        if (document.cookie.length > 0) {
            start_index = document.cookie.indexOf(c_name + "=");
            if (start_index != -1) {
                start_index += (c_name.length + 1);
                end_index = document.cookie.indexOf(";", start_index);
                if (end_index == -1) end_index = document.cookie.length;
                return document.cookie.substring(start_index, end_index);
            }
        }
        return "";
    }

    function setCookie(c_name, value, expiredays) {
        var exdate = new Date();
        exdate.setDate(exdate.getDate() + expiredays);
        document.cookie = c_name + "=" + value + (expiredays == null ? "" : ";expires="
                + exdate.toUTCString());
    }

    function checkCookie() {
        var username = getCookie('username');
        if (username != null && username != "") {
            document.getElementById("plogin").style.visibility = 'hidden';
            document.getElementById("puser").style.visibility = 'visible';
            document.getElementById("username").innerHTML = username;
        }
        else {
            document.getElementById("plogin").style.visibility = 'visible';
            document.getElementById("puser").style.visibility = 'hidden';
            username = prompt('Please enter your name:', "")
            if (username != null && username != "") {
                setCookie('username', username, 365);
            }
        }
    }

});
/*显示系统时间*/
function startTime() {
    var today = new Date()
    var h = today.getHours()
    var m = today.getMinutes()
    var s = today.getSeconds()
// add a zero in front of numbers<10
    m = checkTime(m)
    s = checkTime(s)
    document.getElementById('text_timer').value = (h + ":" + m + ":" + s);
    t = setTimeout('startTime()', 1000);
}

function endTime() {
    clearTimeout(t);
}

function checkTime(i) {
    if (i < 10) {
        i = "0" + i
    }
    return i;
}

function myFunction(name, job) {
    if (confirm("确定") == 0)return;

    var person = new Object();
    person.firstname = "Bill";
    person.lastname = "Gates";
    person.age = 56;
    person.eyecolor = "blue";
    document.getElementById("demo").innerHTML = (person.firstname.toUpperCase() + " is " + person.age + " years old.");
    var para = document.createElement("p");
    var text = "Hello world";
    var node = document.createTextNode(text.bold());
    para.appendChild(node);
    document.getElementById("div2").appendChild(para);
}
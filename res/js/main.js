/**
 * Created by leexiaohu on 16-12-26.
 */
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

$(document).ready(function() {

    var index = 0;
    var time_out_id = 0;
    time_out_id = setTimeout(img_scroll,5000,1);

    $("#pre_pg span").on("click",function(){
        console.log(index);
        if(time_out_id){
            clearTimeout(time_out_id);
            time_out_id = 0;
        }
        _img_scroll(0);
        time_out_id = setTimeout(img_scroll,5000,1);
    });
    $("#next_pg span").on("click",function(){
        console.log(index);
        if(time_out_id){
            clearTimeout(time_out_id);
            time_out_id = 0;
        }
        _img_scroll(1)
        time_out_id = setTimeout(img_scroll,5000,1);
    });
    $("#banner_dots span").on("click",function(){
        if(time_out_id){
            clearTimeout(time_out_id);
            time_out_id = 0;
        }
        var t = $(this).index();
        console.log(t);
        if(t != index){
            var current = $("#bannerContent a").children("div").eq(index);
            $(current).fadeOut('slow',function(){
                $(current).removeClass("active");
            })
            $("#banner_dots span").removeClass("active");

            var next = $("#bannerContent a").children("div").eq(t);
            $(this).addClass("active");
            $(next).fadeIn('slow',function(){
                $(next).addClass("active");
            });
            index=t;
        }
        time_out_id = setTimeout(img_scroll,5000,1);

    });

    $(window).resize(function(){
        console.log("window width:" + window.innerWidth +
            "px;window.height:" + window.innerHeight);
    });
    //图片滚动函数
    function img_scroll(direction){
        _img_scroll(direction);
        time_out_id = setTimeout(img_scroll,5000,direction);
    }
    function _img_scroll(direction){
        var current = $("#bannerContent a").children("div").eq(index);
        $(current).fadeOut('slow',function(){
            $(current).removeClass("active");
        })
        $("#banner_dots span").eq(index).removeClass("active");
        if(direction == 1){
            index++;
            index = index > 2 ? 0:index;
        }else{
            index--;
            index = index < 0 ? 2:index;
        }
        var next = $("#bannerContent a").children("div").eq(index);
        $("#banner_dots span").eq(index).addClass("active");
        $(next).fadeIn('slow',function(){
            $(next).addClass("active");
        });
    }

});





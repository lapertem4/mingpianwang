/* 
 * 无刷新动态滚屏加载
 * PHP+jQuery
 */

$(function(){ 
    var winH = $(window).height(); //页面可视区域高度 
    //alert(winH);
    var i = 1; //设置当前页数 
    $(window).scroll(function () { 
        var pageH = $(document.body).height(); 
        var scrollT = $(window).scrollTop(); //滚动条top 
        var aa = (pageH-winH-scrollT)/winH; 
        if(aa<0.02){ 
            $.getJSON("result.php",{page:i},function(json){ 
                if(json){ 
                    var str = ""; 
                    $.each(json,function(index,array){ 
                        var str = str + "<div class=\"saylist\"><a href=\"#\"><img src=\"images/"+array['uid']+".jpg\" width=\"50\" height=\"50\" alt=\"demo\" /></a>";
                        var str = str + "<div class=\"saytxt\"><p><strong><a href=\"#\">demo_"+array['uid']+"</a></strong>"+array['content']+"</p><div class=\"date\">"+array['date']+"</div></div>";
                        var str = str + "<div class=\"clear\"></div></div>";
                        $("#saywrap").append(str); 
                    }); 
                    i++; 
                }else{ 
                    $("#footer").show().html("已经到底了。。。"); 
                    return false; 
                } 
            }); 
        } 
    }); 
}); 
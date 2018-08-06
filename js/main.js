//------------------------------------------
// _     _____ _ _ ____               _
//| |   |  ___/ / |___ \   _ __   ___| |_
//| |   | |_  | | | __) | | '_ \ / _ \ __|
//| |___|  _| | | |/ __/ _| | | |  __/ |_
//|_____|_|   |_|_|_____(_)_| |_|\___|\__|

//Html Name: PureWin
//Description：Html Code by LF112
//Version：0.0.6
//Author：LF112
//Author URI：https://lf112.net
//Author QQ: 2275203821
//------------------------------------------

window.onload=function(){
    refreshTime();
    console.clear();
    console.log("\n %c LF112 %c https://LF112.NET %c 页面加载完毕消耗了%c " + Math.round(100 * performance.now()) / 100 + "ms \n\n", "color: #ffffff; background: rgb(0, 145, 228); padding:5px 0;", "background:rgba(197, 197, 197, 0.89); padding:5px 0;", "color: #ffffff; background: rgba(49, 49, 49, 0.85); padding:5px 0;", "color: rgb(0, 145, 228); background: rgba(49, 49, 49, 0.85); padding:5px 0;")
}
function checkTime(i){
    if(i<10){
        i='0'+i
    }
    return i
}
function refreshTime(){
    var date=new Date();
    var Year=date.getFullYear();
    var Month=date.getMonth()+1;
    var Dates=date.getDate();
    var Hours=date.getHours();
    var Minutes=date.getMinutes();
    var pushM=checkTime(Minutes);

    document.getElementById('i-Time').innerHTML=Hours+':'+pushM
    document.getElementById('l-Time').innerHTML=Year+'/'+Month+'/'+Dates
    setTimeout(refreshTime,1000)
}
//状态栏时间

(function($){
    $.fn.areaSelect=function(option){
        var opt={}
        opt=$.extend(opt,option);
        var _this=$(this);
        _this.on('mousedown',function (e) {
            _this.find('li').removeClass('selected');
            var startTop=e.pageY;
            var startLeft=e.pageX;
            var endTop,endLeft;
            var selectBox=$('<div id="select-box"></div>');
            $('body').append(selectBox);
            selectBox.css({'position':'absolute', 'top':startTop+'px', 'left':startLeft+'px', 'background':'rgba(162, 204, 242, 0.35)', 'transition':'all 0s', 'width':0, 'height':0, 'z-index':10,'box-shadow':'0 0px 0.1px 0 rgba(255, 255, 255, 0.88)'})
            $(document).on('mousemove',function (e) {
                e.preventDefault();
                endTop=e.pageY;
                endLeft=e.pageX;
                if(e.pageY-startTop>0 && e.pageX-startLeft>0){
                    var height=e.pageY-startTop;
                    var width=e.pageX-startLeft;
                    selectBox.css({
                        'width':width+'px',
                        'height':height+'px'
                    })
                }else if(e.pageY-startTop<0 && e.pageX-startLeft<0) {
                    var height=-(e.pageY-startTop);
                    var width=-(e.pageX-startLeft);
                    selectBox.css({
                        'width':width+'px',
                        'height':height+'px',
                        'top':e.pageY+'px',
                        'left':e.pageX+'px'
                    })
                }else if(e.pageY-startTop>0 && e.pageX-startLeft<0) {
                    var height=(e.pageY-startTop);
                    var width=-(e.pageX-startLeft);
                    selectBox.css({
                        'width':width+'px',
                        'height':height+'px',
                        'top':startTop+'px',
                        'left':e.pageX+'px'
                    })
                }else if(e.pageY-startTop<0 && e.pageX-startLeft>0) {
                    var height=-(e.pageY-startTop);
                    var width=(e.pageX-startLeft);
                    selectBox.css({
                        'width':width+'px',
                        'height':height+'px',
                        'top':e.pageY+'px',
                        'left':startLeft+'px'
                    })
                }
            })
            $(document).on('mouseup',function () {
                $('#select-box').remove();
                $(document).unbind('mousemove');
            })
        })
    }
})(jQuery)

$(function () {
    $('body').areaSelect()

    $("#Main .Article-Card #AC-Article_list .AC-AL_Main .AC-AL_M-Main").height($("#AC-Article_list").parent().height()-113);
})
//模仿Win10桌面拖拉框
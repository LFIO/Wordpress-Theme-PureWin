//------------------------------------------
// _     _____ _ _ ____               _
//| |   |  ___/ / |___ \   _ __   ___| |_
//| |   | |_  | | | __) | | '_ \ / _ \ __|
//| |___|  _| | | |/ __/ _| | | |  __/ |_
//|_____|_|   |_|_|_____(_)_| |_|\___|\__|

//Html Name: PureWin
//Description：Html Code by LF112
//Version：0.1.0
//Author：LF112
//Author URI：https://lf112.net
//Author QQ: 2275203821
//------------------------------------------

window.onload=function(){
    refreshTime();
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


var Mil = false;
var NewDiv = document.createElement('div');

function getMousePos(event) {
    var e = event || window.event;
    var scrollX = document.documentElement.scrollLeft || document.body.scrollLeft;
    var scrollY = document.documentElement.scrollTop || document.body.scrollTop;
    var x = e.pageX || e.clientX + scrollX;
    var y = e.pageY || e.clientY + scrollY;
    return { 'x': x, 'y': y };
}
function  Mi(e) {
    document.body.appendChild(NewDiv);
    NewDiv.id = 'Move_div';
    move_div = document.getElementById("Move_div");
    var m_down_x = getMousePos(e).x;
    var m_down_y= getMousePos(e).y;
    move_div.style.left = m_down_x + "px";
    move_div.style.top = m_down_y + "px";
    move_div.style.width = m_down_x - parseInt(move_div.style.left) +"px";
    move_div.style.height = m_down_y - parseInt(move_div.style.top) +"px";
    Mil = true;

}
function move(e){
    if(Mil){
        move_div = document.getElementById("Move_div");
        var m_move_x = getMousePos(e).x;
        var m_move_y= getMousePos(e).y;
        move_div.style.width = m_move_x - parseInt(move_div.style.left) +"px";
        move_div.style.height = m_move_y - parseInt(move_div.style.top) +"px";
    }
}
function up(){
    Mil = false;
    document.body.removeChild(document.getElementById("Move_div"));
}
//模仿Win10桌面拖拉框

$("#SSR").hover(function(){},function(){
    if(document.all){
    }else{
        document.onmousedown= function(){return false;};
        document.onmouseup= function(){return true;};
    }
    document.onselectstart = new Function('event.returnValue=false;');
});
//针对IE浏览器选中控件->针对编辑框
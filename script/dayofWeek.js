function displayDate()
{
    var date = new Date();
    var mouths = date.getMonth()+1;
    var day = date.getDate();
    var hours =  date.getHours();
    var weekDay = new Array(7);


    if(hours < 4)
        weekDay[0] = "星期六";
    weekDay[1] = "星期日";
    weekDay[2] = "星期一";
    weekDay[3] = "星期二";
    weekDay[4] = "星期三";
    weekDay[5] = "星期四";
    weekDay[6] = "星期五";

    document.getElementById("time-show").innerHTML="星期"+weekDay[date.getDay()];
    //获得当前时间,刻度为一千分一秒
    var timeID = setTimeout(displayDate,1000);

    if(hours >= 4)
        weekDay[0] = "星期日";
    weekDay[1] = "星期一";
    weekDay[2] = "星期二";
    weekDay[3] = "星期三";
    weekDay[4] = "星期四";
    weekDay[5] = "星期五";
    weekDay[6] = "星期六";

    document.getElementById("time-show").innerHTML="星期"+weekDay[date.getDay()];
    //获得当前时间,刻度为一千分一秒
    var timeID = setTimeout(displayDate,1000);

}
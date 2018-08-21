<div class="news_schedule">
    <p id="tymz"></p>
</div>

<script type="text/javascript">
startTime();
function startTime() {
    var weekday = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
    var monthNames = ["January", "February", "March", "April", "May", "June",
          "July", "August", "September", "October", "November", "December"
        ];
    var today = new Date();
    var h = today.getHours();
    var ampm = h >= 12 ? 'PM' : 'AM';
    h = h % 12;
    h = h ? h : 12;
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    //document.getElementById('fulld').innerHTML = weekday[today.getDay()]+", "+monthNames[today.getMonth()]+" "+today.getDate()+", "+today.getFullYear();
    document.getElementById('tymz').innerHTML = weekday[today.getDay()]+", "+monthNames[today.getMonth()]+" "+today.getDate()+", "+today.getFullYear()+" "+h+":"+m+":"+s+" "+ampm; //today.toLocaleTimeString();
    //h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>

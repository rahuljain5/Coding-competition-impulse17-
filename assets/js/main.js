var timeoutHandle;
function count() {
    var startTime = document.getElementById('timer').innerHTML;
    var pieces = startTime.split(":");
    var time = new Date();
    time.setHours(pieces[0]);
    time.setMinutes(pieces[1]);
    time.setSeconds(pieces[2]);
    var timedif = new Date(time.valueOf() - 1000);
    var newtime = timedif.toTimeString().split(" ")[0];
    if (newtime == '00:00:00') {
        alert('Time Up!\n Submit Now.');
        if (1) document.getElementById('button1').click();

    } else {
        document.getElementById('timer').innerHTML = newtime;
        timeoutHandle = setTimeout(count, 1000);
    }
}

function timer() {
    var startTim = document.getElementById('timer').innerHTML;
    var piece = startTim.split(":");
    var time = new Date();
    time.setHours(piece[0]);
    time.setMinutes(30 - piece[1]);
    time.setSeconds(00 - piece[2]);
    var t = time.toTimeString().split(" ")[0];
    document.getElementById('stam').value = t;
}

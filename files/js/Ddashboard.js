function showTime(){
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "AM";
    
    if(h == 0){
        h = 12;
    }
    
    if(h > 12){
        h = h - 12;
        session = "PM";
    }
    
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    
    var time = h + ":" + m + ":" + s + " " + session;
    document.getElementById("time").innerText = time;
    document.getElementById("time").textContent = time;
    
    setTimeout(showTime, 1000);
    
}

showTime();


function print()
{
    var divContents = document.getElementById("prescription").innerHTML;
    var name = document.getElementById("pat_name").value;
    var age = document.getElementById("pat_age").value;
    var gender = document.getElementById("pat_gender").value;
    var pres = document.getElementById("pres").value;
    var a = window.open('', '', 'height=300, width=300');
    a.document.write('<html>');
    a.document.write('<body >');
    a.document.write(divContents);
    a.document.write(name);
    a.document.write(age);
    a.document.write(gender);
    a.document.write(pres);
    a.document.write('</body></html>');
    a.document.close();
    a.print();
}
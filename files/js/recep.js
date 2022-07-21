function getData()
{
    let count1 =0,count2=0,bill=0;
    var gender = document.getElementsByName('gender');
    var test = document.getElementsByName('test');
    var age  = document.getElementById('age').value;
    var fname  = document.getElementById('fname').value;          
    for( let  i = 0; i < gender.length; i++) {
        if(gender[i].checked)
     {  
//    console.log(gender[i].value);
       count1=i;
     }
    }
    for(let n = 0; n < test.length; n++) {
        if(test[n].checked)
     {  
//    console.log(test[n].value);
        count2=n;
     }
    }
if(test[count2].value=='general')
{
   bill=100;
}
else
{
    
   bill=300;
     
}
    document.getElementById('content').innerHTML="First Name  : "+fname+"<br> Age  : "+age+"<br>Treatment : "+test[count2].value+"<br>Gender  : "+gender[count1].value+"<br>Bill   : "+bill+".RS";
    console.log(fname);
    console.log(age);
    document.getElementById('print-btn').style.visibility="visible";
}
function print()
{
    var divContents = document.getElementById("print").innerHTML;
    var a = window.open('', '', 'height=500, width=500');
    a.document.write('<html>');
    a.document.write('<body >');
    a.document.write(divContents);
    a.document.write('</body></html>');
    a.document.close();
    a.print();
}
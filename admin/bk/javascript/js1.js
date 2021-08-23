function myFunction(){
	var checkBox = document.getElementById("myCheck").value;
    var text = document.getElementById("text2");
    if (checkBox.checked == true){
        text.style.display = "block";
    } else {
       text.style.display = "none";
    }
	var namee = document.getElementById("namez").value;
		if (namee.length <= 3) {
			document.getElementById("err1").style.display ='block';
		}
		else
		{
			document.getElementById("err1").style.display ='none';
		}

	var phoneNo = document.getElementById("phoneNo").value;
		if (phoneNo.length < 9) {
			document.getElementById("err2").style.display='block';
		}
		else if(isNaN(phoneNo)){
		document.getElementById("err2").style.display='block';	
		}
		else
		{
			document.getElementById("err2").style.display='none';
		}
	var mail = document.getElementById("email").value;
		if (mail.indexOf("@") < 3 || mail.lastIndexOf(".") < 4 || mail.indexOf(".") - mail.indexOf("@") < 2) {
			document.getElementById("err3").style.display='block';
		}
		else {
			document.getElementById("err3").style.display='none';
		}
var psw = document.getElementById("password").value;
var t='';
for(i=0;i<psw.length;i++)
{
	alert(i);
	t = psw.charCodeAt(i);
	alert(t);
	if((t<48) || ((t>57) && (t<65)) || ((t>90) && (t<97)) || (t>122))
	{
		alert('Not alphanumeric: ' + psw.charAt(i));
		//return;
	}
	else{
		alert("false");
	}
}

/*if(psw.length < 8)
{
	document.getElementById("err4").style.display='block';
}
	else if(psw.indexOf("!"||"@"||"#"||"$"||"%"||"^"||"&"||"*"||"("||")"||"-"||"_") == -1)
	{
		document.getElementById("err4").style.display='block';
	}
	else if(psw.indexOf("A"||"B"||"C"||"D"||"E"||"F"||"G"||"H"||"I"||"J"||"K"||"L"||"M"||"N"||"O"||"P"||"Q"||"R"||"S"||"T"||"U"||"V"||"W"||"X"||"Y"||"Z") == -1)
	{
		document.getElementById("err4").style.display='block';
	}
	else if(psw.indexOf("1"||"2"||"3"||"4"||"5"||"6"||"7"||"8"||"9"||"0") == -1)
	{	
		document.getElementById("err4").style.display='block';
	}
	else if(psw.indexOf("a"||"b"||"c"||"d"||"e"||"f"||"g"||"h"||"i"||"j"||"k"||"l"||"m"||"n"||"o"||"p"||"q"||"r"||"s"||"t"||"u"||"v"||"w"||"x"||"y"||"z") == -1)
		{
		document.getElementById("err4").style.display='block';
		}
	else
	{
		document.getElementById("err4").style.display='none';
	}*/
var cpsw = document.getElementById("conpsw").value;
	if(cpsw != psw)
	{
		document.getElementById("err5").style.display='block';
	}
	else
	{
		document.getElementById("err5").style.display='none';
	}


}

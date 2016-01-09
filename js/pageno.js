function change()
{
	var i = document.getElementById("pagenum").innerHTML;
	
	document.getElementById("pageno").innerHTML="<a href=life.html id=1 >1</a> &nbsp;&nbsp<a href=life2.html id=2 >2</a> &nbsp;&nbsp<a href=# id=3 >3</a> &nbsp;&nbsp<a href=# id=4 >4</a> &nbsp;&nbsp<a href=# id=5 >5</a> &nbsp;&nbsp<a href=# id=6 >6</a> &nbsp;&nbsp";
	
	if(i==="1")
	{
	document.getElementById("1").innerHTML="<b><font color=#000000 >1</font></b>";
	}
	else if(i==="2")
	{
	document.getElementById("2").innerHTML="<b><font color=#000000 >2</font></b>";
	}
	else if(i==="3")
	{
	document.getElementById("3").innerHTML="<b><font color=#000000 >3</font></b>";
	}
	else if(i==="4")
	{
	document.getElementById("4").innerHTML="<b><font color=#000000 >4</font></b>";
	}
	else if(i==="5")
	{
	document.getElementById("5").innerHTML="<b><font color=#000000 >5</font></b>";
	}
	else if(i==="6")
	{
	document.getElementById("6").innerHTML="<b><font color=#000000 >6</font></b>";
	}
};
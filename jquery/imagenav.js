var A=2;
var B=1;
var C=1;
var D=1;
var Temp;

function beChanging()
{
Temp=D; D=C; C=B; B=A; A=Temp;
 
document.getElementById('books').style.zIndex = A;
document.getElementById('girls').style.zIndex = B;
document.getElementById('children').style.zIndex = C;
document.getElementById('animal').style.zIndex = D;
 
setTimeout("beChanging()",1000);
}
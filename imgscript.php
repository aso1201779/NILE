
<SCRIPT LANGUAGE="JavaScript">
<!--

mySrc=new Array("image/tokusyu/baseboll.jpg","image/tokusyu/soccor.jpg","image/tokusyu/basketball.jpg","image/tokusyu/tennis.jpg");
n=0;
function Gazou2(){
document.myIMG.src=mySrc[n];
n++;
if(n==4){n=0}
setTimeout("Gazou2()",5000);
}
function Gazou(mysrc){
	document.myIMG.src=mysrc;
}
//-->
</SCRIPT>
<img name="myIMG" src="image/tokusyu/baseboll.jpg" border="0" width="1260" height="359">
<br>
<div class="center">
<FORM>
<INPUT type="radio" name="myRB" onClick="Gazou('image/tokusyu/baseboll.jpg')">
<INPUT type="radio" name="myRB" onClick="Gazou('image/tokusyu/soccor.jpg')">
<INPUT type="radio" name="myRB" onClick="Gazou('image/tokusyu/basketball.jpg')">
<INPUT type="radio" name="myRB" onClick="Gazou('image/tokusyu/tennis.jpg')">
</FORM>

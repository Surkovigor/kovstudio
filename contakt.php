<?php
// ��� ����������� ��������:
$maxkey=4; // ����������� �������� � ����  (����� ��������)
$absrand="676756";// ��������� �����. ������������ ��� �����������. ������������ ��� ����� �������� ��� ��������� ��� ��������� ������������ �������.
if (isset($_GET['image'])) {
// ������� � ������� ������
$st="R0lGODlhCgAMAIABAFNTU////yH5BAEAAAEALAAAAAAKAAwAAAI"; // ����� ����� ��� ���� ��������
function imgwr($st,$num){
 if ($num=="0") {$len="63"; $number=$st."WjIFgi6e+QpMP0jin1bfv2nFaBlJaAQA7";}
 if ($num=="1") {$len="61"; $number=$st."UjA1wG8noXlJsUnlrXhE/+DXb0RUAOw==";}
 if ($num=="2") {$len="64"; $number=$st."XjIFgi6e+QpMPRlbjvFtnfFnchyVJUAAAOw==";}
 if ($num=="3") {$len="64"; $number=$st."XjIFgi6e+Qovs0RkTzXbj+3yTJnUlVgAAOw==";}
 if ($num=="4") {$len="64"; $number=$st."XjA9wG8mWFIty0amczbVJDVHg9oSlZxQAOw==";}
 if ($num=="5") {$len="63"; $number=$st."WTIAJdsuPHovSKGoprhs67mzaJypMAQA7";}
 if ($num=="6") {$len="63"; $number=$st."WjIFoB6vxmFw0pfpihI3jOW1at3FRAQA7";}
 if ($num=="7") {$len="61"; $number=$st."UDI4Xy6vtAIzTyPpg1ndu9oEdNxUAOw==";}
 if ($num=="8") {$len="63"; $number=$st."WjIFgi6e+QpMP2slSpJbn7mFeWDlYAQA7";}
 if ($num=="9") {$len="64"; $number=$st."XjIFgi6e+QpMP0jinvbT2FGGPxmlkohUAOw==";}
 header("Content-type: image/gif"); 
 header("Content-length: $len");
 echo base64_decode($number); }
// ����� ����������� �� ����� (��� ���������� - ����� �� ������)
if (array_key_exists("image", $_REQUEST)) { $num=$_REQUEST["image"];
for ($i=0; $i<10; $i++) {if (md5($i+$absrand)==$num) {imgwr($st,$i); die();}} }
exit;}
?>
<html>
<head>
<title>��� ������, ����������� � ��������� ������, ������������ ������</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link href="httpdocs/text.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" background="images/9-1.jpg">

  <table width="100%" border="0" cellpadding="0" cellspacing="0" height="100%" align="center">
    <tr> 
      <td width="34%" align="center" height="61"> 
        <table width="489" border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td width="100%" height="61" valign="top" bgcolor="ffffff"><b>
			<font size="5" color="#0000FF" face="Verdana">���� ����� 
			������������ </font></b><br>
			<script language="JavaScript1.2">

<!-- Begin
var months=new Array(13);
months[1]="������";
months[2]="�������";
months[3]="����";
months[4]="������";
months[5]="���";
months[6]="����";
months[7]="����";
months[8]="������";
months[9]="��������";
months[10]="�������";
months[11]="������";
months[12]="�������";
var time=new Date();
var lmonth=months[time.getMonth() + 1];
var date=time.getDate();
var year=time.getYear();
if (year < 2000)    // Y2K Fix, Isaac Powell
year = year + 1900; // http://onyx.idbsu.edu/~ipowell
document.write("<right>" + lmonth + " ");
document.write(date + ", " + year + "</right>");
// End -->
</script>
      </td>
      <td height="187" rowspan="2" align="left" valign="top" background="topbg01_1.gif" width="66%">
		<img src="top02_1.gif" width="281" height="187"></td>
    </tr>
    <tr> 
      <td height="126" width="34%" align="center">
		<img src="top01.gif" width="489" height="126"></td>
    </tr>
    <tr align="left"> 
      <td colspan="2" height="34"> 
        <table width="100%" border="0" cellspacing="0" cellpadding="0" background="but_bg.gif">
          <tr> 
            <td align="left"><img src="spacer.gif" width="30" height="34"><a href="index.php"><img src="but01.gif" width="128" height="34" border="0"></a><img src="spacer.gif" width="30" height="34"><a href="service.html"><img src="but02.gif" width="144" height="34" border="0"></a><img src="spacer.gif" width="30" height="34"><a href="contakt.php"><img border="0" src="but06.gif" width="144" height="34"></a></td>
          </tr>
        </table>
<table width="100%" align="center"><tr><td bgcolor=#ffffff>
    <table width="95%" align="center" background="images/onback2.jpg">
      <tr>
        <td align=CENTER><b>���� ��������: +7(926)101-95-79<br>
          ��� E-mail: admin@kovstudio.ru</b><br>
          <br></td>
      </tr>
      <tr>
        <td width=442 height=100>
		<? // WR-sendmail v 1.3  //  24.12.06 �.  //  Miha-ingener@yandex.ru

$myemail="kovigor2@yandex.ru";  // ��� ����������� �����
$refreshpage="contakt.php";  // ��������, ���� ������������ ������� ����� �������� ���������
$antispam="1"; // 1/0 ���.���� ��������
$maxname="30";   // ������������ ���-�� �������� � �����
$maxtema="50"; // �������� �������� � ����
$maxmsg="1500";  // ������������ ���������� �������� � ���������

// ����� ������������� ���� ������� � ������: ���� ������� � ���� ������ � ��������� �������
// ��� ������ ����� - ��������������� � � �������������� ������� ��������� //
$bdcolor="#79BBEF";  $fcolor="#FFFFFF";  // �������������
//$bdcolor="#FF9A00"; $fcolor="#00253B";   // ���������
//$bdcolor="#FFE51A"; $fcolor="#00253B";   // Ƹ����
//$bdcolor="#00E900"; $fcolor="#00253B";   // ������-�������
//$bdcolor="#007800"; $fcolor="#FFFFFF";   // ����� �������
//$bdcolor="#D2A500"; $fcolor="#FFFFFF";   // �������
//$bdcolor="#BCC0C0"; $fcolor="#FFFFFF";   // �����
//$bdcolor="#00253B"; $fcolor="#FFFFFF";   // �����-�����

$addstyle="style='font-family: Verdana; font-size: 12px; text-decoration: none; color: #000000; cursor: default; background-color: #FFFFFF; border-style: solid; border-width: 1px; border-color: #000000;'";
$shapka="<html><head><META http-equiv=Content-Type content='text/html; charset=windows-1251'></head><body>";
$back="<center>��������� <a href='javascript:history.back(1)'><B>�����</B></a>"; // ������� ������




//******************* ���� ����� ������ �� ������� ************************//

// ������� �������� �� ������ � �������� ��������� //
if (isset($_GET['event'])) { if ($_GET['event']=="add")  {

sleep(1); // ������ ������ �� �����. �������� ������� �� ����� - � ����� �� ������� ����� - ����� �������� ����� � �� ��������� ������

if ($antispam!="0") {
$bada="$shapka $back <font color=red>�������� ���� ��� �� �����</font>!";
if (isset($_POST['usernum'])) {$usernum=$_POST['usernum'];} else {print"$bada"; exit;}
if (isset($_POST['xkey'])) {$xkey=$_POST['xkey'];} else {print"$bada"; exit;}
$userkey=md5("$usernum+$absrand");
if ($userkey!=$xkey) {print"$bada"; exit;}}

if (!isset($_POST['name'])) {print"$shapka $back �� �� ����� ���!";} else {$name=$_POST['name'];}
if (!isset($_POST['email'])) {print"$shapka $back �� �� ����� �����!";} else {$email=$_POST['email'];}
if (!isset($_POST['tema'])) {print"$shapka $back �� �� ����� �������!";} else {$tema=$_POST['tema'];}
if (!isset($_POST['msg'])) {print"$shapka $back �� �� ����� ���������!";} else {$msg=$_POST['msg'];}
if ($name=="" || strlen($name)>$maxname) {print "$shapka $back �� �� ����� ���, ��� ������ ������� ������� ���!</B></center>"; exit;}
if ($msg=="" || strlen($msg)>$maxmsg) {print "$shapka $back ���� ��������� ��� ������ ��� ��������� $maxmsg ��������.</B></center>"; exit;}
//if ($tema=="" || strlen($tema)>$maxtema) {print "$shapka $back �� �� ������� ���������� �������!</B></center>"; exit;}
if(!preg_match("/^[a-z0-9\.\-_]+@[a-z0-9\-_]+\.([a-z0-9\-_]+\.)*?[a-z]+$/is", $_POST['email']) or $_POST['email']=="") {print "$shapka $back � ������� ���������� E-mail �����!</B></center>"; exit;}

// ������ �� ������
$name=str_replace("|","&#124;",$name);
$tema=str_replace("|","&#124;",$tema);
$msg=str_replace("|","&#124;",$msg);
$text="$name|$tema|$email|$msg|";
$text=str_replace("&#032;",' ',$text);
$text=str_replace("&",'&amp;',$text);
$text=str_replace(">",'&gt;',$text);
$text=str_replace("<",'&lt;',$text);
$text=str_replace("\"",'&quot;',$text);
$text=preg_replace("/\n\n/",'<p>',$text);
$text=preg_replace("/\n/",'<br>',$text);
$text=preg_replace("/\\\$/",'&#036;',$text);
$text=preg_replace("/\r/",'',$text);
$text=stripslashes($text);
$text=preg_replace("/\\\/",'&#092;',$text);
$text=str_replace("\r\n","<br> ",$text);
$text=str_replace("\n\n",'<p>',$text);
$text=str_replace("\n",'<br> ',$text);
$text=str_replace("\t",'',$text);
$text=str_replace("\r",'',$text);
$text=str_replace('   ',' ',$text);
$exd=explode("|",$text); $name=$exd[0]; $tema=$exd[1]; $email=$exd[2]; $msg=$exd[3];


$host=$_SERVER["HTTP_HOST"]; $self=$_SERVER["PHP_SELF"]; $smailurl="http://$host$self";

$date=date("d.m.Y"); // �����.�����.���
$time=date("H:i:s"); // ����:������:�������

// ��������� ��� �������� �����
$headers=null;
$headers.="Content-Type: text/html; charset=windows-1251\r\n";
$headers.="From: ".$name." <".$email.">\r\n";
$headers.="X-Mailer: PHP/".phpversion()."\r\n";

// �������� ��� ���������� � ���� ������
$allmsg="<html><head><meta http-equiv='Content-Type' content='text/html; charset=windows-1251'>
<style>BODY {FONT-FAMILY: verdana,arial,helvetica; FONT-SIZE: 13px;} TD {FONT-SIZE: 12px;}</style></head>
<body><center><h4>��������� �� ���������� ����� \"<B><a href='$smailurl'>$smailurl</a></B>\"</h4>
<table border=1 cellpadding=6 cellspacing=0 width=550 bordercolor='#DBDBDB'>
<tr><td colspan=2 align=center bgcolor='#E4E4E4'><B>����������</B></td></tr>
<tr bgcolor='#F2F2F2'><td width=117>���:</td><td width=433><B>$name</B></td></tr>
<tr bgcolor='#F8F8F8'><td>�-����:</td><td><B>$email</B></td></tr>
<tr bgcolor='#F8F8F8'><td>���� ��������:</td><td><small>$time</small> - $date �.</td></tr>
<tr bgcolor='#F8F8F8'><td>�������:</td><td><B>$tema</B></td></tr>
<tr bgcolor='#F2F2F2'><td>�����:</td><td>$msg</td></tr>
</table><center><BR>���� ��������� <B><font color=navy>������� ����������</font></B><BR><BR>
<a href='$refreshpage'>��������� <B>�����</B></a>";
$printmsg="$allmsg </body></html>";
$allmsg.="<BR><BR><BR>* ��� ��������� ������������� � ���������� ������� � ����� �������� �����. �������� �� ���� �� �����.</body></html>";

// ���������� ������ ������� �� �������� ;-)
mail("$myemail", "�������� �����. ��������� �� $name", $allmsg, $headers);

// ����� ������������ "�������" � ��������� �������� ����� JavaScript
print "<script language='Javascript'>function reload() {location = \"$refreshpage\"}; setTimeout('reload()', 3000);</script>$printmsg"; exit;
}

}  else  {   // ���� ������� ��������


print "<HTML><head><META content='text/html; charset=windows-1251' http-equiv=Content-Type></head>
<BODY text=#000000 leftMargin=0 topMargin=0 rightMargin=0 bottomMargin=0 marginheight=0 marginwidth=0><center>
<table border=0 width=510 cellpadding=1 cellspacing=0 bgcolor=$bdcolor><tr><td>
<table border=0 width=100% cellpadding=1 cellspacing=0 bgcolor=$bdcolor><tr><td>";

print "
<center><b><font size=+1 color=$fcolor>������ ������ ��������������</font></b></center>
</td></tr><tr><td colspan=2 width=100% bgcolor=#FFFFFF><center>
<form action=sendmail/sendmail.php?event=add method=post name=REPLIER>
<table border=0 cellpadding=0 cellspacing=0 width=500>
<tr><td>&nbsp;</TD></TR>
<tr><td><p color=#666666><B>���:</B></p><input type=text $addstyle value='' maxlength=$maxname name=name size=27> &nbsp;&nbsp;&nbsp;<p color=#666666> <B>��� E-mail</B></p> <input type=text $addstyle value='' name=email size=27></td></tr>
<tr><td><B><p color=#666666>���������� �������: &nbsp;</p></B><input type=text $addstyle value='' maxlength=$maxtema name=tema size=57></td></tr>
<tr><td><p color=#666666><B>���������:</B></p></td></tr>
<tr><td><textarea $addstyle cols=79 rows=10 size=500 name=msg></textarea>";

// ��������
if ($antispam!="0") {

// ����� ����������� �� ����� (��� ���������� - ����� �� ������)
if (array_key_exists("image", $_REQUEST)) { $num=$_REQUEST["image"];
for ($i=0; $i<10; $i++) {if (md5($i+$absrand)==$num) {imgwr($st,$i); die();}} }

$xkey=""; mt_srand(time()+(double)microtime()*1000000);

print"<TR><TD><B>�������� ���:</B> &nbsp;&nbsp;";
for ($i=0; $i<$maxkey; $i++) {
$snum[$i]=mt_rand(0,9); $psnum=md5($snum[$i]+$absrand);
$phpself=$_SERVER["PHP_SELF"];
echo "<img src=$phpself?image=$psnum border='0' alt=''>\n";
$xkey=$xkey.$snum[$i];
}
$xkey=md5("$xkey+$absrand");

print"&nbsp;&nbsp; <input name='usernum' $addstyle type='text' maxlength=$maxkey size=8><input name=xkey type=hidden value='$xkey'>&nbsp;&nbsp; <small>(������� �����, ��������� �� ��������)</small></TD></TR>";
}


print"<TR><TD color=#666666><br><center><input type=submit $addstyle value='���������'></form></td></tr></table>";
}

?>
        </td>
      </tr>
    </table>

  <table align=CENTER bgcolor=#000000>
    <tr>
      <td width=842 height=28 colspan=4 align="center" valign="middle" bgcolor=#000000><div><font color="A29F9F" size="1" face="Verdana">Copyright 
        � 2009-2016 ��� ����� ��������</font></div></td>
    </tr>
   
      </table> </td>
    </tr> <tr>
      <td>
      </td>
    </tr>
</table>
        <p><?php include_once('/home/httpd/vhosts/kovstudio.ru/httpdocs/neuhbr/ML.php');?>&nbsp;</p>
<p><table border="0" width="100%" id="table2"><tr><td bgcolor="#0000FF"><!-- begin of Top100 code -->

<script id="top100Counter" type="text/javascript" src="http://counter.rambler.ru/top100.jcn?2643073"></script>
<noscript>
<a href="http://top100.rambler.ru/navi/2643073/">
<img src="http://counter.rambler.ru/top100.cnt?2643073" alt="Rambler's Top100" border="0" />
</a>

</noscript>
<!-- end of Top100 code -->
&nbsp;<p>&nbsp;&nbsp;&nbsp;&nbsp;
				<font size="2" color="#FFFFFF">��� ����� ����������� ����� 
                                  ������������&nbsp;&nbsp; </font></p>

</td>
			</tr>
		</table>

</body>
</html>


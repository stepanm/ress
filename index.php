<?php
// Include the WURFL Cloud Client
require_once 'WURFL/Client/Client.php';
 
// Create a configuration object
$config = new WurflCloud_Client_Config();
 
// Set your WURFL Cloud API Key - Change this to your own key
$config->api_key = '657055:JiyHgUhmxq3YsI4KjbzMXtAN7dB8aTEk';
 
// Create the WURFL Cloud Client
$client = new WurflCloud_Client_Client($config);
 
// Detect your device
$client->detectDevice();
// Use the capabilities 
if ($client->getDeviceCapability('is_Tablet')) { 
    echo "This is a Tablet device"; 
	$TypeDevice = Tablet;
	
} else { 

	if ($client->getDeviceCapability('is_smartphone')) { 
    echo "This is a Mobile device"; 
	$TypeDevice = Mobile;
	
} else { 
    echo "This is a Desktop device\n";
	$TypeDevice = Desktop;
}
    
}
echo "<br> resolution_width";
echo $client->getDeviceCapability('resolution_width');
echo "<br> resolution_height";
echo $client->getDeviceCapability('resolution_height');
echo "<br>";
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html"charset="cp1251">
<title>����</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<script type="text/javascript"src="jquery.js"></script>
<div id="wrapper">






	<div id="header">
		<div id="logo"></div>
		<div id="head_other">
			<div id="words">
				<div id="spbu_name">�����-������������� ��������������� �����������</div>
				<div id="pmpu_name">��������� ���������� ���������� - <br> ��������� ����������</div>
			</div>
		<p id="adress">198504 �����-���������, ��������, ��������������� �����., 35, ���. (812) 428-71-59</p>
			<div id="soc_net">
				<img src="images/vk.ico.png" class="social">
				<img src="images/youtube.ico.png" class="social">
				<img src="images/rss.ico.png" class="social">
			</div>
		
		
		</div>
		<div id=clear></div>
		<div id="strip"><img src="images/menu_lines.png" id="btn_menu"><span id="txt_pmpu"> ��-��</span></div>
	</div>
	<div id="body"></div>
		<div id="menu_block">
		
<div id="menu">
		
		
  <dt>����������</dt>
  <dd>
    <a href="http://www.apmath.spbu.ru/ru/info/about.html">�&nbsp;���</a>, 
    <a href="http://www.apmath.spbu.ru/ru/info/history.html">�������</a>,
    <a href="http://www.apmath.spbu.ru/ru/info/decanmeetings/">��������� ���������</a>,
    <a href="http://www.apmath.spbu.ru/ru/vreception/">����������� ��������</a>,
    <a href="http://www.apmath.spbu.ru/ru/info/museum/">�������� ���������</a>,
    <a href="http://www.apmath.spbu.ru/ru/info/was.html">��� �������� � ����</a>,
    <a href="http://www.apmath.spbu.ru/ru/info/anniversary">40 ���</a>,
    <a href="http://www.apmath.spbu.ru/ru/info/grants.html">�����������</a>,
    <a href="http://www.apmath.spbu.ru/ru/info/diplom/">���� ��������� �����</a> ,...
  </dd>
  <dt>���������</dt>
  <dd>
    <a href="http://www.apmath.spbu.ru/ru/structure/admin.html">�������������</a>,
    <a href="http://www.apmath.spbu.ru/ru/structure/council/">������ �����</a>,
    <a href="http://www.apmath.spbu.ru/ru/structure/metodcom/">���</a>, 
    <a href="http://www.apmath.spbu.ru/ru/structure/sciencecom/">������� ��������</a>, 
    <a href="http://www.apmath.spbu.ru/ru/structure/depts/">�������</a>,
    <a href="http://www.apmath.spbu.ru/ru/staff/">�������������</a>,
    <a href="http://www.apmath.spbu.ru/ru/structure/profsoiuz/">��������</a>,
    <a href="http://www.apmath.spbu.ru/ru/structure/studsovet/">���������</a>,... </dd>
  <dt>�����������</dt>
  <dd>
    <a href="http://www.apmath.spbu.ru/ru/education/deanery.html">������� ����������</a>,
    <a href="http://www.apmath.spbu.ru/ru/education/edudept/">����� ��������������� ��������</a>, 
    <a href="http://www.apmath.spbu.ru/ru/education/international/">������������� �����</a>,
    <a href="http://www.apmath.spbu.ru/ru/education/osop/">����</a>, 
    <a href="http://www.apmath.spbu.ru/ru/education/speciality/">������������� �&nbsp;�����������</a>,
    <a href="http://www.apmath.spbu.ru/ru/education/curriculum/">������� ����</a>, 
    <a href="http://www.apmath.spbu.ru/ru/education/tables/">���������� �������</a>, 
    <a href="http://www.apmath.spbu.ru/ru/education/courses/">��������� ������</a>,
    <a href="http://www.apmath.spbu.ru/ru/education/correspondence/">������� ��������</a>,
    <a href="http://www.apmath.spbu.ru/ru/education/master/">������������</a>,
    <a href="http://www.apmath.spbu.ru/ru/education/aspirantura/">�����������</a>,
    <a href="http://www.apmath.spbu.ru/ru/education/practice/">��������</a>,
    <a href="http://www.apmath.spbu.ru/ru/education/innovation/">���������</a>, 
    <a href="http://www.apmath.spbu.ru/ru/education/cdop/">���.�����������</a>, 
    <a href="http://www.apmath.spbu.ru/ru/education/osop/probdept/">��������� ������������</a>,
    <a href="http://www.apmath.spbu.ru/ru/education/docs/">������� � ������� ����������</a>,... </dd>
  <dt>�����</dt>
  <dd>
    <a href="http://www.apmath.spbu.ru/ru/research/council/">��������������� ������</a>,
    <a href="http://www.apmath.spbu.ru/ru/research/conference/">�����������</a>,
    <a href="http://www.apmath.spbu.ru/ru/research/schools/">������� �����</a>,
    <a href="http://www.apmath.spbu.ru/ru/research/projects/">�������</a>,
    <a href="http://www.apmath.spbu.ru/ru/research/monographs.html">����������</a>,
    <a href="http://vmpu.spbu.ru/">���&nbsp;��&nbsp;�&nbsp;��</a>,
    <a href="http://www.isdgrus.ru/">����� ������ ���</a>, 
    <a href="http://www.apmath.spbu.ru/ru/research/ids/">���&nbsp;�����</a>,
    <a href="http://www.apmath.spbu.ru/ru/research/eccs/">����� ECCS</a>,... </dd>
  <dt>�����������</dt>
  <dd>
    <a href="http://www.apmath.spbu.ru/ru/admission/r.html">��������������� ���������</a>,
    <a href="http://www.apmath.spbu.ru/ru/admission/r.html">�����������</a>,
    <a href="http://www.apmath.spbu.ru/ru/admission/olympics.html">���������</a>, 
    <a href="http://www.apmath.spbu.ru/ru/admission/training.html">���������������� �����</a>,
    <a href="http://www.apmath.spbu.ru/ru/admission/r.html">������� �����������</a>,
    <a href="http://www.apmath.spbu.ru/ru/admission/r.html">������� �����</a>,
    <a href="http://www.apmath.spbu.ru/ru/admission/r.html">����� � ������������</a>,... </dd>
  <dt>�������</dt>
  <dd>
    <a href="http://www.apmath.spbu.ru/ru/resource/library/">����������</a>,
    <a href="http://www.apmath.spbu.ru/ru/resource/po/">������������ ��</a>,
    <a href="http://www.apmath.spbu.ru/ru/resource/mspress.html">�����</a>,
    <a href="http://www.apmath.spbu.ru/ru/resource/vestnik/">������� �����</a>,... </dd>
  <dt>����������</dt>
  <dd>
    <a href="http://www.apmath.spbu.ru/ru/alumni/job/">���������������,</a>
    <a href="http://www.apmath.spbu.ru/ru/alumni/1972/">1972</a>,
    <a href="http://www.apmath.spbu.ru/ru/alumni/1975/">1975</a>,
    <a href="http://www.apmath.spbu.ru/ru/alumni/1976/">1976</a>,
    <a href="http://www.apmath.spbu.ru/ru/alumni/1979/">1979</a>,
    <a href="http://www.apmath.spbu.ru/ru/alumni/1981/">1981</a>,
    <a href="http://www.apmath.spbu.ru/ru/alumni/1983/">1983</a>,
    <a href="http://www.apmath.spbu.ru/ru/alumni/1984/">1984</a>,
    <a href="http://www.apmath.spbu.ru/ru/alumni/1985/">1985</a>,
    <a href="http://www.apmath.spbu.ru/ru/alumni/1986/">1986</a>,
    <a href="http://www.apmath.spbu.ru/ru/alumni/1987/">1987</a>,
    <a href="http://www.apmath.spbu.ru/ru/alumni/1988/">1988</a>,
    <a href="http://www.apmath.spbu.ru/ru/alumni/1989/">1989</a>,
    <a href="http://www.apmath.spbu.ru/ru/alumni/1990/">1990</a>,
    <a href="http://www.alumni.spbu.ru/">���������� �����</a>,... </dd>
  <dt>����������</dt>
  <dd>
  <a href="http://www.apmath.spbu.ru/ru/misc/album/2014/">2014</a>, 
  <a href="http://www.apmath.spbu.ru/ru/misc/album/2013/">2013</a>, 
  <a href="http://www.apmath.spbu.ru/ru/misc/album/2012/">2012</a>, 
  <a href="http://www.apmath.spbu.ru/ru/misc/album/2011/">2011</a>, 
  <a href="http://www.apmath.spbu.ru/ru/misc/album/2010/">2010</a>, 
  <a href="http://www.apmath.spbu.ru/ru/misc/album/2009/">2009</a>, 
  <a href="http://www.apmath.spbu.ru/ru/misc/album/2008/">2008</a>, 
  <a href="http://www.apmath.spbu.ru/ru/misc/album/2007/">2007</a>, 
  <a href="http://www.apmath.spbu.ru/ru/misc/album/2006/">2006</a>, 
  <a href="http://www.apmath.spbu.ru/ru/misc/album/2005/">2005</a>, 
  <a href="http://www.apmath.spbu.ru/ru/misc/album/2004/">2004</a>, 
  <a href="http://www.apmath.spbu.ru/ru/misc/album/2003/">2003</a>, 
  <a href="http://www.apmath.spbu.ru/ru/misc/album/2002/">2002</a>, 
  <a href="http://www.apmath.spbu.ru/ru/misc/album/2001/">2001</a>
  </dd>
  <dt>������</dt>
  <dd>
    <a href="http://www.apmath.spbu.ru/ru/misc/thanks.html">�������������</a>,
    <a href="http://www.apmath.spbu.ru/ru/misc/soul/">�&nbsp;���������&nbsp;�����</a>,
    <a href="http://www.apmath.spbu.ru/ru/misc/links.html">������</a>,
    <a href="http://www.apmath.spbu.ru/ru/misc/articles/">������ � ����������</a>,
    <a href="http://pm-pu.proforg.ru/">������������ ����</a>,
    </dd>
</dl>
		
		</div>	
		<img src="images/qr.png" id="qr">
		
		</div>
		
			<div id="news">
				<img src="images/programs.png" id="news-s"><br>
				<img src="images/spbu_news.png" >
			</div>
		<div id="content">
			
			
			<div id="whoareyou">
				<div id="abit" class="button">�����������</div>
				<div id="stud" class="button">�������</div>
				<div id="prof" class="button">�������������</div>

			</div>
		
		<br>
		<div id="trebuxa">
		<a href="/vtour/" alt="����������� ��� �� ���������� (beta)" title="����������� ��� �� ���������� (beta)"><img  src="<?php echo $TypeDevice?>.jpg" id="photo_univ"  alt="[New building photo]" /></a><br /> 


<h3 id = "slogan">��-�� &#8211; ���� � ������������, ����������, �������������� (��������&nbsp;�.�.)</h3>

<a href="/vtour/" id="slogan">����������� ��� �� ����������</a>

�� �� YouTube: <a href="http://www.youtube.com/user/AMCPSPbSU">����� ��-��</a>, <a href="http://www.youtube.com/user/TheUFOPictures">���������������� UFO</a>
		</div>
				

<div id="news_sddsa">
		<h2 id="text">�������</h2>
		
<div id="news_words">
	<span id="date">2015-02-26</span>
<span id="text_12">����� � ������ ������� �� ��������� ����

����� ����� ���� �� ���������� ������� ����� ���������� ������������� � �������� ������ ������ ������� ��������� Webometrics.

��� ����� ����� �� ��������, ������� �������� �� ���������� ��������� 16 ������� 2015 ����.<span>

<span id="fromwho">���������� �� ������ � ��������������� �����</span>
	</div>
		
	
	<div id="news_words">
	<span id="date">2015-02-26</span>
<span id="text_12">����� � ������ ������� �� ��������� ����

����� ����� ���� �� ���������� ������� ����� ���������� ������������� � �������� ������ ������ ������� ��������� Webometrics.

��� ����� ����� �� ��������, ������� �������� �� ���������� ��������� 16 ������� 2015 ����.<span>

<span id="fromwho">���������� �� ������ � ��������������� �����</span>
	</div>
		
		
		</div>
		
		</div>
		<div id="clear"></div>
		
	<div id="footer"><img src="images/footer_rss.png" id="footer_img">
	<span id="copyrights">� 2002-2014 ��������� ��-�� �����-�������������� ���������������� ������������</span>
	</div>

</div>
<script type="text/javascript">
$(document).ready(function() {
$("#menu dd").hide();
$("#menu dt").click(function() {
    $("#menu dd:visible").slideUp("normal");
    if (($(this).next().is("dd")) && (!$(this).next().is(":visible"))) {
        $(this).next().slideDown("normal");
    }
});
});
$(document).ready(function() {
//$("#menu_block").hide();
k=0;
$("#btn_menu").click(function() {
	if (k%2==0){
    $("#menu_block").slideDown("normal");
	k++;
	}
	else{
	$("#menu_block").slideUp();
	k++;
	}
});
});
</script>
</body>
</html>

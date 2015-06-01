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
    //echo "This is a Tablet device"; 
	$TypeDevice = Tablet;
	
} else { 

	if ($client->getDeviceCapability('is_smartphone')) { 
   // echo "This is a Mobile device"; 
	$TypeDevice = Mobile;
	
} else { 
   // echo "This is a Desktop device\n";
	$TypeDevice = Desktop;
}
    
}
/*
echo "<br> resolution_width";
echo $client->getDeviceCapability('resolution_width');
echo "<br> resolution_height";
echo $client->getDeviceCapability('resolution_height');
echo "<br>";*/
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html"charset="cp1251">
<title>����</title>
<link rel="stylesheet" href="css/style.css">
		<meta name="viewport" content="width=device-width,initial-scale=1">

</head>
<body>
<script type="text/javascript"src="jquery.js"></script>
<div id="wrapper">
	<div id="header">
		<div id="logo">
		<?php 
		if ($TypeDevice=="Desktop" or $TypeDevice=="Tablet")
		echo'<img  src="images/logo.png"   alt="[logo]" />';
		?>
		</div>
		<div id="head_other">
			<div id="words">
				<div id="spbu_name">�����-������������� ��������������� �����������</div>
				<div id="pmpu_name">��������� ���������� ���������� - <br> ��������� ����������</div>
			</div>
		<p id="adress">198504 �����-���������, ��������, ��������������� �����., 35, ���. (812) 428-71-59</p>
			<div id="soc_net">
			<?php 
		if ($TypeDevice=="Desktop") {
		echo'<img  src="images/vk.ico.png" class="social" alt="[vk]" />';
		echo'<img  src="images/youtube.ico.png" class="social" alt="[vk]" />';
		echo'<img  src="images/rss.ico.png" class="social" alt="[vk]" />';
		}
		?>
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
			<div id=news-images>
			<?php 
		if ($TypeDevice=="Desktop"){
		echo'<img  src="images/banner.2020.png"  alt="[banner.2020]" />';
		echo'<img  src="images/banner.eccs.png"   alt="[banner.eccs]" />';
		echo'<img  src="images/banner.gtm2015.png"   alt="[banner.gtm2015]" />';
		echo'<img  src="images/banner.pm46.ru.png"   alt="[banner.pm46.ru]" />';
		echo'<img  src="images/banner.psih.png"   alt="[banner.psih]" />';
		echo'<img  src="images/banner.scp2015.png" alt="[banner.scp2015]" />';
		echo'<img  src="images/banner.virtual.png"  alt="[banner.virtual]" />';
		echo'<img  src="images/banner.yur.png"  alt="[banner.yur]" />';
		echo'<img  src="images/banner-pmpu-abitur.png"   alt="[banner-pmpu-abitur]" />';
		}
		?>
			
				</div>
				<div id = "text_news">
				
<div class="rssdiv">

<h2>�����: ����������</h2>
</div>
			<h4><a href="http://spbu.ru/news-spsu/23697-dobrozhelatelnyj-roman-s-uspekhom-proshel-v-polufinal-premer-ligi-kvn" title="View this feed at �����-������������� ��������������� �����������" target="_blank">����������������� ����� � ������� ������ � ��������� �������-���� ���</a></h4>
<p>������� ��� �����-�������������� ���������������� ������������ ����������������� ����� ��������� � ...</p>

<h4><a href="http://spbu.ru/news-spsu/23695-v-spbgu-nagradili-pobeditelej-mezhdunarodnogo-literaturnogo-konkursa-70-stikhov-o-vojne-i-pobede" title="View this feed at �����-������������� ��������������� �����������" target="_blank">� ����� ��������� ����������� �������������� ������������� �������� �70 ������ � ����� � ������</a></h4>
� �����-������������� ��������������� ������������ ���������� ������������� ��������� ����������� ����������� I ...

<h4><a href="http://spbu.ru/news-spsu/23693-molodym-uchenym-spbgu-vruchili-sertifikaty-na-poluchenie-grantov-prezidenta-rossijskoj-federatsii" title="View this feed at �����-������������� ��������������� �����������" target="_blank">������� ������ ����� ������� ����������� �� ��������� ������� ���������� ���������� ���������</a></h4>
������� ������ � ���������� � �������� ����, ���������� � �����-������������� ��������������� ������������, ������� ...

<h4><a href="http://spbu.ru/news-spsu/23690-kratkij-otchet-o-rektorskom-soveshchanii-12-maya" title="View this feed at �����-������������� ��������������� �����������" target="_blank">������� ����� � ���������� ��������� 12 ���</a></h4>
�� ���������� ��������� 12 ��� ����������� ��������� �������:

<h4><a href="http://spbu.ru/news-spsu/23687-universanty-udostoeny-vysshikh-gosudarstvennykh-nagrad-i-pochetnykh-zvanij" title="View this feed at �����-������������� ��������������� �����������" target="_blank">����������� ��������� ������ ��������������� ������ � �������� ������</a></h4>
��������� ����� ������� �������� ���� � ������ ����� ���������� �������������� ������� ��������  ��������������� ������� ...

<h4><a href="http://spbu.ru/news-spsu/23685-aktsiya-verni-knigu-domoj" title="View this feed at �����-������������� ��������������� �����������" target="_blank">����� ������ ����� �����</a></h4>
� ���������� ��������������� ��� ��������� �����-������������� ��������������� ����������� �������� ����� ������ ����� ...

<h4><a href="http://spbu.ru/news-spsu/23681-203-materialy-rektorskogo-soveshchaniya-ot-27-04-2015" title="View this feed at �����-������������� ��������������� �����������" target="_blank">203. ��������� ����������� ��������� �� 27.04.2015</a></h4>
�� ���������� ��������� 27 ������ ����������� ��������� �������:

<h4><a href="http://spbu.ru/news-spsu/23679-otryad-spbgu-ingriya-uspeshno-zavershil-44-yu-vakhtu-pamyati" title="View this feed at �����-������������� ��������������� �����������" target="_blank">����� ����� �������� ������� �������� 44-� ����� ������</a></h4>
� ��� 70-����� ������� ������ ������������ ��������� �����  �����-�������������� ���������������� ������������ ...

<h4><a href="http://spbu.ru/news-spsu/23678-student-spbgu-zanyal-pervoe-mesto-v-konkurse-most-kitajskogo-yazyka" title="View this feed at �����-������������� ��������������� �����������" target="_blank">������� ����� ����� ������ ����� � �������� ����� ���������� �����</a></h4>
� �����-������������� ��������������� ������������ ������ ��������� ������������ ������� �� ������ ���������� �����, ������ � ...

<h4><a href="http://spbu.ru/news-spsu/23674-musora-mozhet-byt-menshe-eto-vozmozhno" title="View this feed at �����-������������� ��������������� �����������" target="_blank">������ ����� ���� ������: ��� ��������</a></h4>
��� ��������� ����� ��������� �� �������� ������� ������� ������� (���)? ��� �������� ����� �� ������� ���������, ���������� ...
<br>
��� �������
</div>
			</div>
		<div id="content">
			
			
			<div id="whoareyou">
				<div id="abit" class="button">�����������</div>
				<div id="stud" class="button">�������</div>
				<div id="prof" class="button">�������������</div>

			</div>
		
		<br>
		<div id="trebuxa">
		<a href="/vtour/" alt="����������� ��� �� ���������� (beta)" title="����������� ��� �� ���������� (beta)">
		<?php 
		if ($TypeDevice=="Desktop")
		echo'<img  src="images/photo_univ_big.jpg" id="photo_univ"  alt="[New building photo]" />';
		if ($TypeDevice=="Tablet")
		echo'<img  src="images/photo_univ_small.jpg" id="photo_univ"  alt="[New building photo]" />';
		if ($TypeDevice=="Mobile")
		echo'<img  src="images/Mobile.jpg" id="photo_univ"  alt="[New building photo]" />';
		?>
		</a><br /> 


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

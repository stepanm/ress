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
<title>ПМПУ</title>
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
				<div id="spbu_name">Санкт-Петербургский Государственный Университет</div>
				<div id="pmpu_name">Факультет прикладной математики - <br> процессов управления</div>
			</div>
		<p id="adress">198504 Санкт-Петербург, Петергоф, Университетский просп., 35, тел. (812) 428-71-59</p>
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
		<div id="strip"><img src="images/menu_lines.png" id="btn_menu"><span id="txt_pmpu"> ПМ-ПУ</span></div>
	</div>
	<div id="body"></div>
		<div id="menu_block">
		
<div id="menu">
		
		
  <dt>Информация</dt>
  <dd>
    <a href="http://www.apmath.spbu.ru/ru/info/about.html">о&nbsp;нас</a>, 
    <a href="http://www.apmath.spbu.ru/ru/info/history.html">история</a>,
    <a href="http://www.apmath.spbu.ru/ru/info/decanmeetings/">деканские совещания</a>,
    <a href="http://www.apmath.spbu.ru/ru/vreception/">виртуальная приемная</a>,
    <a href="http://www.apmath.spbu.ru/ru/info/museum/">музейная коллекция</a>,
    <a href="http://www.apmath.spbu.ru/ru/info/was.html">они работали с нами</a>,
    <a href="http://www.apmath.spbu.ru/ru/info/anniversary">40 лет</a>,
    <a href="http://www.apmath.spbu.ru/ru/info/grants.html">стипендиаты</a>,
    <a href="http://www.apmath.spbu.ru/ru/info/diplom/">темы дипломных работ</a> ,...
  </dd>
  <dt>Структура</dt>
  <dd>
    <a href="http://www.apmath.spbu.ru/ru/structure/admin.html">администрация</a>,
    <a href="http://www.apmath.spbu.ru/ru/structure/council/">учёный совет</a>,
    <a href="http://www.apmath.spbu.ru/ru/structure/metodcom/">УМК</a>, 
    <a href="http://www.apmath.spbu.ru/ru/structure/sciencecom/">научная комиссия</a>, 
    <a href="http://www.apmath.spbu.ru/ru/structure/depts/">кафедры</a>,
    <a href="http://www.apmath.spbu.ru/ru/staff/">преподаватели</a>,
    <a href="http://www.apmath.spbu.ru/ru/structure/profsoiuz/">профсоюз</a>,
    <a href="http://www.apmath.spbu.ru/ru/structure/studsovet/">студсовет</a>,... </dd>
  <dt>Образование</dt>
  <dd>
    <a href="http://www.apmath.spbu.ru/ru/education/deanery.html">учебное управление</a>,
    <a href="http://www.apmath.spbu.ru/ru/education/edudept/">отдел образовательных программ</a>, 
    <a href="http://www.apmath.spbu.ru/ru/education/international/">международный отдел</a>,
    <a href="http://www.apmath.spbu.ru/ru/education/osop/">ОСОП</a>, 
    <a href="http://www.apmath.spbu.ru/ru/education/speciality/">специальности и&nbsp;направления</a>,
    <a href="http://www.apmath.spbu.ru/ru/education/curriculum/">учебный план</a>, 
    <a href="http://www.apmath.spbu.ru/ru/education/tables/">расписание занятий</a>, 
    <a href="http://www.apmath.spbu.ru/ru/education/courses/">программы курсов</a>,
    <a href="http://www.apmath.spbu.ru/ru/education/correspondence/">заочное обучение</a>,
    <a href="http://www.apmath.spbu.ru/ru/education/master/">магистратура</a>,
    <a href="http://www.apmath.spbu.ru/ru/education/aspirantura/">аспирантура</a>,
    <a href="http://www.apmath.spbu.ru/ru/education/practice/">практика</a>,
    <a href="http://www.apmath.spbu.ru/ru/education/innovation/">инновации</a>, 
    <a href="http://www.apmath.spbu.ru/ru/education/cdop/">доп.образование</a>, 
    <a href="http://www.apmath.spbu.ru/ru/education/osop/probdept/">повышение квалификации</a>,
    <a href="http://www.apmath.spbu.ru/ru/education/docs/">шаблоны и образцы документов</a>,... </dd>
  <dt>Наука</dt>
  <dd>
    <a href="http://www.apmath.spbu.ru/ru/research/council/">диссертационные советы</a>,
    <a href="http://www.apmath.spbu.ru/ru/research/conference/">конференции</a>,
    <a href="http://www.apmath.spbu.ru/ru/research/schools/">научные школы</a>,
    <a href="http://www.apmath.spbu.ru/ru/research/projects/">проекты</a>,
    <a href="http://www.apmath.spbu.ru/ru/research/monographs.html">публикации</a>,
    <a href="http://vmpu.spbu.ru/">НИИ&nbsp;ВМ&nbsp;и&nbsp;ПУ</a>,
    <a href="http://www.isdgrus.ru/">Центр теории игр</a>, 
    <a href="http://www.apmath.spbu.ru/ru/research/ids/">НОЦ&nbsp;ИНДИС</a>,
    <a href="http://www.apmath.spbu.ru/ru/research/eccs/">Центр ECCS</a>,... </dd>
  <dt>Поступающим</dt>
  <dd>
    <a href="http://www.apmath.spbu.ru/ru/admission/r.html">образовательные программы</a>,
    <a href="http://www.apmath.spbu.ru/ru/admission/r.html">мероприятия</a>,
    <a href="http://www.apmath.spbu.ru/ru/admission/olympics.html">олимпиады</a>, 
    <a href="http://www.apmath.spbu.ru/ru/admission/training.html">подготовительные курсы</a>,
    <a href="http://www.apmath.spbu.ru/ru/admission/r.html">правила поступления</a>,
    <a href="http://www.apmath.spbu.ru/ru/admission/r.html">платная форма</a>,
    <a href="http://www.apmath.spbu.ru/ru/admission/r.html">прием в магистратуру</a>,... </dd>
  <dt>Ресурсы</dt>
  <dd>
    <a href="http://www.apmath.spbu.ru/ru/resource/library/">библиотека</a>,
    <a href="http://www.apmath.spbu.ru/ru/resource/po/">лицензионное ПО</a>,
    <a href="http://www.apmath.spbu.ru/ru/resource/mspress.html">книги</a>,
    <a href="http://www.apmath.spbu.ru/ru/resource/vestnik/">Вестник СПбГУ</a>,... </dd>
  <dt>Выпускники</dt>
  <dd>
    <a href="http://www.apmath.spbu.ru/ru/alumni/job/">трудоустройство,</a>
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
    <a href="http://www.alumni.spbu.ru/">выпускники СПбГУ</a>,... </dd>
  <dt>Фотоальбом</dt>
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
  <dt>Разное</dt>
  <dd>
    <a href="http://www.apmath.spbu.ru/ru/misc/thanks.html">благодарности</a>,
    <a href="http://www.apmath.spbu.ru/ru/misc/soul/">в&nbsp;свободное&nbsp;время</a>,
    <a href="http://www.apmath.spbu.ru/ru/misc/links.html">ссылки</a>,
    <a href="http://www.apmath.spbu.ru/ru/misc/articles/">статьи о факультете</a>,
    <a href="http://pm-pu.proforg.ru/">студенческий сайт</a>,
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

<h2>СПбГУ: Информация</h2>
</div>
			<h4><a href="http://spbu.ru/news-spsu/23697-dobrozhelatelnyj-roman-s-uspekhom-proshel-v-polufinal-premer-ligi-kvn" title="View this feed at Санкт-Петербургский государственный университет" target="_blank">«Доброжелательный Роман» с успехом прошел в полуфинал Премьер-лиги КВН</a></h4>
<p>Команда КВН Санкт-Петербургского государственного университета «Доброжелательный Роман» выступила в ...</p>

<h4><a href="http://spbu.ru/news-spsu/23695-v-spbgu-nagradili-pobeditelej-mezhdunarodnogo-literaturnogo-konkursa-70-stikhov-o-vojne-i-pobede" title="View this feed at Санкт-Петербургский государственный университет" target="_blank">В СПбГУ наградили победителей международного литературного конкурса «70 стихов о войне и Победе»</a></h4>
В Санкт-Петербургском государственном университете состоялась торжественная церемония награждения победителей I ...

<h4><a href="http://spbu.ru/news-spsu/23693-molodym-uchenym-spbgu-vruchili-sertifikaty-na-poluchenie-grantov-prezidenta-rossijskoj-federatsii" title="View this feed at Санкт-Петербургский государственный университет" target="_blank">Молодым ученым СПбГУ вручили сертификаты на получение грантов президента Российской Федерации</a></h4>
Молодым ученым — кандидатам и докторам наук, работающим в Санкт-Петербургском государственном университете, вручили ...

<h4><a href="http://spbu.ru/news-spsu/23690-kratkij-otchet-o-rektorskom-soveshchanii-12-maya" title="View this feed at Санкт-Петербургский государственный университет" target="_blank">Краткий отчет о ректорском совещании 12 мая</a></h4>
На ректорском совещании 12 мая обсуждались следующие вопросы:

<h4><a href="http://spbu.ru/news-spsu/23687-universanty-udostoeny-vysshikh-gosudarstvennykh-nagrad-i-pochetnykh-zvanij" title="View this feed at Санкт-Петербургский государственный университет" target="_blank">Универсанты удостоены высших государственных наград и почетных званий</a></h4>
Профессор СПбГУ Ватаняр Саидович Ягья и доцент СПбГУ Константин Константинович Лебедев получили  государственные награды ...

<h4><a href="http://spbu.ru/news-spsu/23685-aktsiya-verni-knigu-domoj" title="View this feed at Санкт-Петербургский государственный университет" target="_blank">Акция «Верни книгу домой»</a></h4>
В преддверии общероссийского Дня библиотек Санкт-Петербургский государственный университет проводит акцию «Верни книгу ...

<h4><a href="http://spbu.ru/news-spsu/23681-203-materialy-rektorskogo-soveshchaniya-ot-27-04-2015" title="View this feed at Санкт-Петербургский государственный университет" target="_blank">203. Материалы ректорского совещания от 27.04.2015</a></h4>
На ректорском совещании 27 апреля обсуждались следующие вопросы:

<h4><a href="http://spbu.ru/news-spsu/23679-otryad-spbgu-ingriya-uspeshno-zavershil-44-yu-vakhtu-pamyati" title="View this feed at Санкт-Петербургский государственный университет" target="_blank">Отряд СПбГУ «Ингрия» успешно завершил 44-ю Вахту Памяти</a></h4>
В год 70-летия Великой Победы студенческий поисковый отряд  Санкт-Петербургского государственного университета ...

<h4><a href="http://spbu.ru/news-spsu/23678-student-spbgu-zanyal-pervoe-mesto-v-konkurse-most-kitajskogo-yazyka" title="View this feed at Санкт-Петербургский государственный университет" target="_blank">Студент СПбГУ занял первое место в конкурсе «Мост китайского языка»</a></h4>
В Санкт-Петербургском государственном университете прошел городской студенческий конкурс на знание китайского языка, победу в ...

<h4><a href="http://spbu.ru/news-spsu/23674-musora-mozhet-byt-menshe-eto-vozmozhno" title="View this feed at Санкт-Петербургский государственный университет" target="_blank">Мусора может быть меньше: это возможно</a></h4>
Как уменьшить объем вывозимых на полигоны твердых бытовых отходов (ТБО)? Как получить доход от продажи вторсырья, собранного ...
<br>
Все новости
</div>
			</div>
		<div id="content">
			
			
			<div id="whoareyou">
				<div id="abit" class="button">Поступающий</div>
				<div id="stud" class="button">Студент</div>
				<div id="prof" class="button">Преподаватель</div>

			</div>
		
		<br>
		<div id="trebuxa">
		<a href="/vtour/" alt="Виртуальный тур по факультету (beta)" title="Виртуальный тур по факультету (beta)">
		<?php 
		if ($TypeDevice=="Desktop")
		echo'<img  src="images/photo_univ_big.jpg" id="photo_univ"  alt="[New building photo]" />';
		if ($TypeDevice=="Tablet")
		echo'<img  src="images/photo_univ_small.jpg" id="photo_univ"  alt="[New building photo]" />';
		if ($TypeDevice=="Mobile")
		echo'<img  src="images/Mobile.jpg" id="photo_univ"  alt="[New building photo]" />';
		?>
		</a><br /> 


<h3 id = "slogan">ПМ-ПУ &#8211; ключ к модернизации, инновациям, информатизации (Петросян&nbsp;Л.А.)</h3>

<a href="/vtour/" id="slogan">Виртуальный тур по факультету</a>

Мы на YouTube: <a href="http://www.youtube.com/user/AMCPSPbSU">канал ПМ-ПУ</a>, <a href="http://www.youtube.com/user/TheUFOPictures">Видеолаборатория UFO</a>
		</div>
				

<div id="news_sddsa">
		<h2 id="text">Новости</h2>
		
<div id="news_words">
	<span id="date">2015-02-26</span>
<span id="text_12">СПбГУ в тройке лидеров во всемирной сети

СПбГУ занял одну из лидирующих позиций среди российских университетов в рейтинге сайтов высших учебных заведений Webometrics.

Это стало одним из вопросов, которые обсудили на ректорском совещании 16 февраля 2015 года.<span>

<span id="fromwho">Управление по связям с общественностью СПбГУ</span>
	</div>
		
	
	<div id="news_words">
	<span id="date">2015-02-26</span>
<span id="text_12">СПбГУ в тройке лидеров во всемирной сети

СПбГУ занял одну из лидирующих позиций среди российских университетов в рейтинге сайтов высших учебных заведений Webometrics.

Это стало одним из вопросов, которые обсудили на ректорском совещании 16 февраля 2015 года.<span>

<span id="fromwho">Управление по связям с общественностью СПбГУ</span>
	</div>
		
		
		</div>
		
		</div>
		<div id="clear"></div>
		
	<div id="footer"><img src="images/footer_rss.png" id="footer_img">
	<span id="copyrights">© 2002-2014 Факультет ПМ-ПУ Санкт-Петербургского государственного университета</span>
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

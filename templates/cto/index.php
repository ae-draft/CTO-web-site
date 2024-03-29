<?php
defined('_JEXEC') or die;
jimport('joomla.filesystem.file');
$app = JFactory::getApplication();
$doc = JFactory::getDocument();

$doc->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/reset.css', $type = 'text/css', $media = 'screen,projection');
$doc->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/style.css', $type = 'text/css', $media = 'screen,projection');
$doc->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/grid.css', $type = 'text/css', $media = 'screen,projection');
$doc->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/prettyPhoto.css', $type = 'text/css', $media = 'screen,projection');

$doc->addScript($this->baseurl.'/templates/'.$this->template.'/javascript/jquery-1.7.1.min.js', 'text/javascript');
$doc->addScript($this->baseurl.'/templates/'.$this->template.'/javascript/cufon-yui.js', 'text/javascript');
$doc->addScript($this->baseurl.'/templates/'.$this->template.'/javascript/cufon-replace.js', 'text/javascript');
$doc->addScript($this->baseurl.'/templates/'.$this->template.'/javascript/Vegur_500.font.js', 'text/javascript');
$doc->addScript($this->baseurl.'/templates/'.$this->template.'/javascript/FF-cash.js', 'text/javascript');
$doc->addScript($this->baseurl.'/templates/'.$this->template.'/javascript/tms-0.3.js', 'text/javascript');
$doc->addScript($this->baseurl.'/templates/'.$this->template.'/javascript/tms_presets.js', 'text/javascript');
$doc->addScript($this->baseurl.'/templates/'.$this->template.'/javascript/jquery.easing.1.3.js', 'text/javascript');
$doc->addScript($this->baseurl.'/templates/'.$this->template.'/javascript/jquery.equalheights.js', 'text/javascript');
$doc->addScript($this->baseurl.'/templates/'.$this->template.'/javascript/jquery.prettyPhoto.js', 'text/javascript');
define(TPL_URL, '/' . $this->baseurl . 'templates/' . $this->template);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
	<jdoc:include type="head" />
	
	<!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
        	<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
	<![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="<?php echo $this->baseurl.'/templates/'.$this->template; ?>/javascript/html5.js"></script>
        <link rel="stylesheet" href="<?php echo $this->baseurl.'/templates/'.$this->template; ?>/css/ie.css" type="text/css" media="screen">
	<![endif]-->
	
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function(){
			$("a[rel^='prettyPhoto']").prettyPhoto({
					animationSpeed: 'slow', /* fast/slow/normal */
					opacity: 0.80, /* Value between 0 and 1 */
					showTitle: true /* true/false */
			});     
		});
	</script>
</head>
<body id="page1">
	<div class="main-bg">
        <div class="bg">
            <!--==============================header=================================-->
            <header>
                <div class="main">
                    <div class="wrapper">
                        <h1><a href="index.html">logo</a></h1>
                        <div class="fright">
                            <div class="indent">
                                <span class="address">8901 Marmora Road, Glasgow, D04 89GR</span>
                                <span class="phone">Tel: +1 959 552 5963</span>
                            </div>
                        </div>
                    </div>
                    <nav>
                 	   <jdoc:include type="modules" name="cto-position-0" />
                    </nav>
                    <div class="slider-wrapper">
                        <div class="slider">
                            <ul class="items">
		                        <!-- Блок слайдера -->
		                        <jdoc:include type="modules" name="cto-position-2" />
		                        <!-- Блок слайдера -->
                            </ul>
                        </div>
                        <a class="prev" href="#">prev</a>
                        <a class="next" href="#">next</a>
                    </div>
                </div>
            </header>
            
            <!--==============================content================================-->
            <section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - January 30, 2012!</div>
                <div class="main">
                    <div class="container_12">
                        
                        <!-- Промежуточный блок меню -->
                        <jdoc:include type="modules" name="cto-position-1" />
                        <!-- Промежуточный блок меню -->
                        
                        <div class="container-bot">
                            <div class="container-top">
                                <div class="container">
                                    <div class="wrapper">
                                        <article class="grid_8">
                                            <div class="indent-left">
                                                <h2>Welcome!</h2>
                                                <p class="prev-indent-bot"><strong>Car Repair</strong> is one of <a href="http://blog.templatemonster.com/free-website-templates/" target="_blank">free website templates</a> created by TemplateMonster.com team. This website template is optimized for 1280X1024 screen resolution. It is also XHTML &amp; CSS valid. </p>
                                                <p class="border-bot">This <a href="http://blog.templatemonster.com/2012/01/30/free-website-template-jquery-slider-car-project/" target="_blank" rel="nofollow">Car Repair Template</a> goes with two packages – with PSD source files and without them. PSD source files are available for free for the registered members of TemplatesMonster.com. The basic package (without PSD source) is available for anyone without registration.</p>
                                            </div>
                                            <div class="wrapper">
                                                <div class="grid_4 alpha">
                                                    <div class="indent-left">
                                                        <div class="maxheight indent-bot">
                                                            <h3>About Us</h3>
                                                            <p class="prev-indent-bot"><a class="link-1" href="#">Lorem ipsum dolor amet</a> conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                                            <a class="link-1" href="#">Dolor amet conse ctetur</a> adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat ut enim ad.
                                                        </div>
                                                        <a class="button" href="#">Read More</a>
                                                    </div>
                                                </div>
                                                <div class="grid_4 omega">
                                                    <div class="indent-left2">
                                                        <div class="maxheight indent-bot">
                                                            <h3 class="p0">Our Services</h3>
                                                            <ul class="list-1">
                                                                <li><a href="#">Complete Computer Diagnostics</a></li>
                                                                <li><a href="#">Complete Safety Analysis</a></li>
                                                                <li><a href="#">Drivability Problems</a></li>
                                                                <li><a href="#">Oil Changes</a></li>
                                                                <li><a href="#">Emission Repair Facility</a></li>
                                                                <li><a href="#">Air Conditioning Service</a></li>
                                                                <li><a href="#">Electrical Systems</a></li>
                                                                <li><a href="#">Fleet Maintenance</a></li>
                                                            </ul>
                                                        </div>
                                                        <a class="button" href="#">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article class="grid_4">
                                            <div class="indent-left2 indent-top">
                                                <div class="box p4">
                                                    <div class="padding">
                                                        <div class="wrapper">
                                                            <figure class="img-indent"><img src="<?php echo TPL_URL; ?>/images/page1-img4.png" alt=""></figure>
                                                            <div class="extra-wrap">
                                                                <h3 class="p0">Our Hours:</h3>
                                                            </div>
                                                        </div>
                                                        <p class="p1"><strong>24 Hour Emergency Towing</strong></p>
                                                        <p class="color-1 p0">Monday - Friday: 7:30 am - 6:00</p>
                                                        <p class="color-1 p1">Saturday: 7:30 am - Noon</p>
                                                        Night Drop Available
                                                    </div>
                                                </div>
                                                <figure class="indent-bot">
                                                    <iframe width="260" height="202" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
                                                </figure>
                                                <div class="indent-left">
                                                    <dl class="main-address">
                                                        <dt>Demolink.org 8901 Marmora Road,<br> Glasgow, D04 89GR.</dt>
                                                        <dd><span>Telephone:</span>  +1 959 552 5963;</dd>
                                                        <dd><span>FAX:</span>  +1 959 552 5963</dd>
                                                        <dd><span>E-mail:</span><a href="#">mail@demolink.org</a></dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!--==============================footer=================================-->
            <footer>
                <div class="main">
                    <span>Car Repair &copy; 2012</span>
                    Website Template by <a href="http://www.templatemonster.com/" target="_blank" rel="nofollow">www.templatemonster.com</a>
                </div>
            </footer>
        </div>
    </div>
	<script type="text/javascript"> Cufon.now(); </script>
    <script type="text/javascript">
		$(window).load(function() {
			$('.slider')._TMS({
				duration:1000,
				easing:'easeOutQuint',
				preset:'simpleFade',
				slideshow:7000,
				banners:false,
				pauseOnHover:true,
				pagination:false,
				pagNums:false,
				nextBu:'.next',
				prevBu:'.prev'
			});
		});
    </script>
</body>

</html>

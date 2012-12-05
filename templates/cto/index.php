<?php
defined('_JEXEC') or die;
jimport('joomla.filesystem.file');
$app = JFactory::getApplication();
$doc = JFactory::getDocument();

$doc->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/style.css', $type = 'text/css', $media = 'screen,projection');
$doc->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/prettyPhoto.css', $type = 'text/css', $media = 'screen,projection');

$doc->addScript($this->baseurl.'/templates/'.$this->template.'/javascript/jquery-1.5.1.min.js', 'text/javascript');
$doc->addScript($this->baseurl.'/templates/'.$this->template.'/javascript/jquery.prettyPhoto.js', 'text/javascript');
define(TPL_URL, '/' . $this->baseurl . 'templates/' . $this->template);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
	<jdoc:include type="head" />
	
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

<body>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<table width="1000" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#6C6C6C">
	<tr>
		<td width="722" height="101" colspan="2"><img src="<?php echo TPL_URL; ?>/images/topL1.jpg" width="722" height="60"><br><img src="<?php echo TPL_URL; ?>/images/topL2.jpg" width="722" height="41"><br></td>
		<td width="278" height="101"><img src="<?php echo TPL_URL; ?>/images/topR.jpg" width="278" height="101" border="0" usemap="#map1"><br></td>
	</tr>
	<tr>
		<td width="1000" height="233" colspan="3" style="background: url(<?php echo TPL_URL; ?>/images/flashL.jpg) no-repeat; padding-left: 30px">
			<img src="<?php echo TPL_URL; ?>/images/auto2.jpg" alt=""/>
			
			<!--<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,65,0" width="970" height="233" id=flash align=middle>
				<param name=movie value="<?php echo TPL_URL; ?>/images/header.swf">
				<param name=menu value=false>
				<param name=quality value=high>
				<embed src="<?php echo TPL_URL; ?>/images/header.swf" menu=false quality=high width="970" height="233" name=flash align=middle type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">
			</object><br>-->
		</td>
	</tr>
	<tr><td width="1000" height="63" colspan="3" style="background: url(<?php echo TPL_URL; ?>/images/underflash.jpg) no-repeat; padding-left: 55px"><a href="about.htm" class="menu">About us</a><a href="#" class="menu">Catalogue</a><a href="#" class="menu">Services</a><a href="#" class="menu">Partners</a><a href="#" class="menu">Forum</a><a href="contact.htm" class="menu">Contacts</a></td></tr>
	<tr valign="top">
		<td width="268" style="background: url(<?php echo TPL_URL; ?>/images/leftBG.jpg) no-repeat" rowspan="2">
			<img src="<?php echo TPL_URL; ?>/images/h1.jpg" width="268" height="63"><br>
			<div id="pageTxt">
				<div style="line-height: 9px">
					<a href="#" class="lnkWhite">Lorem ipsum dolor sit</a><br><br>
					<a href="#" class="lnkWhite">Consectetuer adipiscing</a><br><br>
					<a href="#" class="lnkWhite">Nunc condimentum ipsum</a><br><br>
					<a href="#" class="lnkWhite">Aenean est cras eget diam</a><br><br>
					<a href="#" class="lnkWhite">Phasellus vitae magna</a><br><br>
					<a href="#" class="lnkWhite">Pellentesque ut ipsum</a><br><br>
					<a href="#" class="lnkWhite">In eu nulla aliquam erat</a><br><br>
					<a href="#" class="lnkWhite">Vestibulum et nulla ut</a><br><br>
					<a href="#" class="lnkWhite">Mauris sit amet mi sed</a><br><br>
					<a href="#" class="lnkWhite">Cum sociis natoque</a><br><br>
					<a href="#" class="lnkWhite">Et magnis dis parturient</a><br><br>
					<a href="#" class="lnkWhite">Nascetur ridiculus mus</a><br><br>
					<a href="#" class="lnkWhite">Phasellus lacus etiam wisi</a><br><br>
					<a href="#" class="lnkWhite">Lorem ipsum dolor sit</a><br><br>
					<a href="#" class="lnkWhite">Consectetuer adipiscing</a><br><br>
					<a href="#" class="lnkWhite">Nunc condimentum ipsum</a><br><br>
					<a href="#" class="lnkWhite">Aenean est cras eget diam</a><br><br>
					<a href="#" class="lnkWhite">Phasellus vitae magna</a><br><br>
					<a href="#" class="lnkWhite">Pellentesque ut ipsum</a><br><br>
					<a href="#" class="lnkWhite">In eu nulla aliquam erat</a><br><br>
					<a href="#" class="lnkWhite">Vestibulum et nulla ut</a><br><br>
					<a href="#" class="lnkWhite">Mauris sit amet mi sed</a><br><br>
					<a href="#" class="lnkWhite">Cum sociis natoque</a><br><br>
					<a href="#" class="lnkWhite">Et magnis dis parturient</a><br><br>
					<a href="#" class="lnkWhite">Nascetur ridiculus mus</a><br><br>
					<a href="#" class="lnkWhite">Phasellus lacus etiam wisi</a><br><br>
				</div><br>
				<div style="text-align: right"><a href="#">More info...</a></div>
			</div>
		</td>
		<td style="background: url(<?php echo TPL_URL; ?>/images/midBG2.jpg) repeat-x">
			<img src="<?php echo TPL_URL; ?>/images/h2.jpg" width="301" height="49"><br>
			<div id="pageTxt" style="background: url(<?php echo TPL_URL; ?>/images/midBG1.jpg) no-repeat; padding-left: 14px">
				<img src="<?php echo TPL_URL; ?>/images/pic1.jpg" width="133" height="94" align="left" style="margin-right: 8px"><b>Lorem ipsum dolor sit amet</b><br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc eget neque. Nunc condimentum ipsum et orci. Aenean est. Cras eget diam.<br><br>
				<a href="#" class="lnkOrange">Mauris sit amet mi sed elit</a><br>
				<a href="#" class="lnkOrange">Phasellus vitae magna</a><br>
				<a href="#" class="lnkOrange">Nascetur ridiculus mus</a><br><br>
				<b><font size="2">Our Prices: <font color="#FFA927">$33 000</font></font></b><a href="#"><img src="<?php echo TPL_URL; ?>/images/btn.gif" width="54" height="21" border="0" style="margin-left: 20px; margin-bottom: -6px"></a><br><br><br>
				<img src="<?php echo TPL_URL; ?>/images/pic2.jpg" width="133" height="94" align="left" style="margin-right: 8px"><b>Lorem ipsum dolor sit amet</b><br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc eget neque. Nunc condimentum ipsum et orci. Aenean est. Cras eget diam.<br><br>
				<a href="#" class="lnkOrange">Mauris sit amet mi sed elit</a><br>
				<a href="#" class="lnkOrange">Phasellus vitae magna</a><br>
				<a href="#" class="lnkOrange">Nascetur ridiculus mus</a><br><br>
				<b><font size="2">Our Prices: <font color="#FFA927">$39 000</font></font></b><a href="#"><img src="<?php echo TPL_URL; ?>/images/btn.gif" width="54" height="21" border="0" style="margin-left: 20px; margin-bottom: -6px"></a><br><br><br><br>
				<font size="3">FRESH NEWS</font><br>
				<img src="<?php echo TPL_URL; ?>/images/spacer.gif" width="100%" height="1" style="background-color: #565553" vspace="7"><br><br>
				<a href="#"><b>Lorem ipsum dolor</b></a><br>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc eget neque. Nunc condimentum ipsum et orci. Aenean est. Cras eget diam. Phasellus vitae magna. Sed dictum. Quisque bibendum condimentum wisi. Pellentesque ut ipsum sit amet nisl volutpat eleifend.<br><br>
				<font color="#A3A3A3">14 May 2006</font><br><br><br>
				<a href="#"><b>Lorem ipsum dolor</b></a><br><br>
				<img src="<?php echo TPL_URL; ?>/images/pic3.jpg" width="94" height="68" align="left" style="margin-right: 8px">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc eget neque. Nunc condimentum ipsum et orci. Aenean est. Cras eget diam. Phasellus vitae magna. Sed dictum. Quisque bibendum condimentum wisi. Pellentesque ut ipsum sit amet nisl volutpat eleifend.<br clear="all"><br>
				<font color="#A3A3A3">11 May 2006</font><br><br>
				<div style="text-align: right"><a href="#" class="lnkOrangeB">More info...</a></div>
			</div>
		</td>
		<td>
			<img src="<?php echo TPL_URL; ?>/images/r1.jpg" width="278" height="190"><br>
			<img src="<?php echo TPL_URL; ?>/images/r2.jpg" width="278" height="173"><br>
			<table width="278" border="0" cellpadding="0" cellspacing="0" style="background: url(<?php echo TPL_URL; ?>/images/search.jpg) no-repeat">
				<tr valign="top">
					<td width="25"><img src="<?php echo TPL_URL; ?>/images/spacer.gif" width="25" height="171"><br></td>
					<td width="169"><input type="text" name="search" value="enter search text" style="background-color: #525457; color: #C4C4C4; border: 1px solid #949696; width: 158px; height: 22px; margin-top: 94px; padding-left: 10px;" onclick="if(this.value=='enter search text')this.value=''"></td>
					<td width="46"><a name="search" href="#search" onclick="document.search.submit()"><img src="<?php echo TPL_URL; ?>/images/spacer.gif" width="46" height="49" border="0"></a><br></td>
					<td width="38"><img src="<?php echo TPL_URL; ?>/images/spacer.gif" width="38" height="171"><br></td>
				</tr>
			</table>
			<img src="<?php echo TPL_URL; ?>/images/r4.jpg" width="278" height="176"><br>
		</td>
	</tr>
	<tr valign="top">
		<td style="background: url(<?php echo TPL_URL; ?>/images/bot2.jpg) no-repeat"><img src="<?php echo TPL_URL; ?>/images/spacer.gif" width="100%" height="1" style="background: url(<?php echo TPL_URL; ?>/images/hr.gif) repeat-x"><br><br><font color="#A2A1A1">Address: 7212 McNeil Dr.\Suite 205 Austin, TX 78729<br>Telephone: (512) 257-4700<br>(fax) (512) 257-4701<br>E-mail: <a href="mailto:">info@company.com</a></font><br><br></td>
		<td style="background: url(<?php echo TPL_URL; ?>/images/bot1.jpg) no-repeat"><img src="<?php echo TPL_URL; ?>/images/spacer.gif" width="100%" height="1" style="background: url(<?php echo TPL_URL; ?>/images/hr.gif) repeat-x"><br><br><br><font color="#A2A1A1">2006 © Copyright CompanyName.<br>All rights reserved. Read <a href="#">Legal policy</a> and <a href="#">Privacy policy</a>.</font></td>
	</tr>
	<tr><td><img src="<?php echo TPL_URL; ?>/images/spacer.gif" width="268" height="1"</td><td><img src="<?php echo TPL_URL; ?>/images/spacer.gif" width="454" height="1"</td><td><img src="<?php echo TPL_URL; ?>/images/spacer.gif" width="278" height="1"</td></tr>
</table>

<map name="map1">
	<area shape="rect" alt="Site Map" coords="170,40,234,57" href="#">
	<area shape="rect" alt="Contacts" coords="89,40,164,57" href="contact.htm">
	<area shape="rect" alt="Home" coords="16,40,83,57" href="index.htm">
</map>

</body>
        </body>
</html>

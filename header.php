<?php
require_once ('includes/general.php');
require_once ('includes/database.php');

$server_url = htmlentities($_SERVER['HTTP_HOST']);
$current_url = htmlentities('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$current_url_local = htmlentities($_SERVER['REQUEST_URI']);

if(isset($_GET['section']))
{
	$section = $_GET['section'];
}
else
{
	$section = 'home';
}

if(isset($_GET['interviewee']))
{
	$interviewee = $_GET['interviewee'];
}

if(isset($_GET['chart']))
{
	$chart = $_GET['chart'];
}

if(isset($_GET['article']))
{
	$article = $_GET['article'];
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-uk">

<head lang="en-uk">

<!-- meta http-equiv -->
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="en-uk" />

<!-- meta name -->
<meta name="author" content="Trevor Morris" />
<meta name="copyright" content="Trevor Morris" />
<meta name="keywords" content="standards, html, css, xhtml, web, accessibility, wcag, articles, interviews" />
<meta name="description" content="" />
<meta name="DC.title" content="" />
<meta name="robots" content="index,follow" />

<?php
if($section=='home')
{
	echo '<title>Unrestricted Access: An Investigation Into The Use Of Web Standards &amp; Accessibility</title>'."\n\n";
}
else
{
	echo '<title>';
	
	if(isset($article))
	{
		echo ucwords(str_replace('-',' ',$article)).' | ';
	}
	echo ucwords(str_replace('_',' ',$section)).' | Unrestricted Access</title>'."\n\n";
}

$css_style = $_COOKIE['css_style'];
$print = $_GET['print'];

if(stristr($_SERVER['HTTP_HOST'],'trovster.com'))
{
	echo '<base href="http://university.trovster.com/" />'."\n\n";
}
else
{
	echo '<base href="http://'.$server_url.'/" />'."\n\n";
}

echo '<!-- main link stylesheets -->'."\n";

if(stristr($_SERVER['REQUEST_URI'],'/print') || $print)
{
	echo '<link rel="stylesheet" type="text/css" media="screen" href="styles/print.css" />'."\n";
}
else
{
	echo '<link rel="stylesheet" type="text/css" media="screen" href="';
	if(stristr($css_style,'http://'))
	{
		echo $css_style.'"';
	}
	else
	{
		echo 'styles/';
		echo (!$css_style)?'stopdesign':$css_style;
		echo '.css"';
	}
	echo ' title="User Defined Style" />'."\n";
}
?>
<link rel="stylesheet" type="text/css" media="print" href="styles/print.css" />
<link rel="stylesheet" type="text/css" media="handheld" href="styles/handheld.css" />

<!-- page specific stylesheets -->
<?php
if($article=='semantic-conversations')
{
	echo '<link rel="stylesheet" type="text/css" href="pages/articles/styles/conversation.css" media="screen" />';
}
?>

<!-- alternative stylesheets -->
<!-- development writers -->
<link rel="alternate stylesheet" type="text/css" href="styles/stopdesign.css" media="screen" title="Stop Design" />
<link rel="alternate stylesheet" type="text/css" href="styles/stopdesign_light.css" media="screen" title="Stop Design Light" />
<link rel="alternate stylesheet" type="text/css" href="styles/simplebits.css" media="screen" title="Simple Bits" />
<link rel="alternate stylesheet" type="text/css" href="styles/zeldman.css" media="screen" title="Zeldman" />
<link rel="alternate stylesheet" type="text/css" href="styles/wdik.css" media="screen" title="What Do I Know?" />
<link rel="alternate stylesheet" type="text/css" href="styles/sidesh0w.css" media="screen" title="Sidesh0w" />

<!-- "brit-pack" development writers/bloggers -->
<link rel="alternate stylesheet" type="text/css" href="styles/collylogic.css" media="screen" title="Colly Logic" />
<link rel="alternate stylesheet" type="text/css" href="styles/twenty4.css" media="screen" title="Twenty 4" />
<link rel="alternate stylesheet" type="text/css" href="styles/andy_budd.css" media="screen" title="Andy Budd" />
<link rel="alternate stylesheet" type="text/css" href="styles/stuff_nonsense.css" media="screen" title="Stuff And Nonsense" />
<link rel="alternate stylesheet" type="text/css" href="styles/allinthehead.css" media="screen" title="All In The Head" />
<link rel="alternate stylesheet" type="text/css" href="styles/gordon_mac.css" media="screen" title="Gordon Mac" />
<link rel="alternate stylesheet" type="text/css" href="styles/sardine.css" media="screen" title="Sardine Media" />

<!-- css zen garden designs -->
<link rel="alternate stylesheet" type="text/css" href="styles/industrial.css" media="screen" title="Dark Industrial" />
<link rel="alternate stylesheet" type="text/css" href="styles/release_one.css" media="screen" title="Release One" />
<link rel="alternate stylesheet" type="text/css" href="styles/buddha.css" media="screen" title="Buddha" />
<link rel="alternate stylesheet" type="text/css" href="styles/garden_party.css" media="screen" title="Garden Party" />
<link rel="alternate stylesheet" type="text/css" href="styles/meliorism.css" media="screen" title="Meliorism" />

<!-- other designs -->
<link rel="alternate stylesheet" type="text/css" href="styles/bradford_uni.css" media="screen" title="Bradford University" />
<link rel="alternate stylesheet" type="text/css" href="styles/userfocus.css" media="screen" title="Userfocus" />
<link rel="alternate stylesheet" type="text/css" href="styles/hotmail.css" media="screen" title="Hotmail" />

<!-- no styles... oh it's empty and boring... -->
<link rel="alternate stylesheet" type="text/css" href="styles/empty.css" media="screen" title="Empty Stylesheet" />


<!-- oh no, nasty javascript, yucky! Don't tell my mom this is here!! -->
<!-- none yet -->

</head>

<body id="page-id-<?php echo str_replace('_','-',$section);?>">

<div id="container">

<ul id="skip_links">
<li><a href="<?=$current_url_local;?>#content_container" title="Go to the main content">Skip To Content</a></li>
<li><a href="<?=$current_url_local;?>#sub_information" title="Go to the sub information area of this page">Skip To Page Links</a></li>
<li><a href="<?=$current_url_local;?>#footer" title="Go to the footer information">Skip To Footer</a></li>
</ul>

<h1><a href="" title="Back to the home page"><span></span>Unrestricted Access</a></h1>

<div id="navigation">
	<ul>
	<li<?php if($section=='home') echo ' class="active"'; ?>><a href="home/" title="View the homepage" accesskey="h" tabindex="10">Home</a></li>
	<li<?php if($section=='web_standards') echo ' class="active"'; ?>><a href="web_standards/" title="View the Web Standards section" accesskey="s" tabindex="20">Web Standards</a></li>
	<li<?php if($section=='web_accessibility') echo ' class="active"'; ?>><a href="web_accessibility/" title="View the Web Accessibility section" accesskey="a" tabindex="30">Web Accessibility</a></li>
	<li<?php if($section=='development_articles') echo ' class="active"'; ?>><a href="development_articles/" title="View the Development Articles" accesskey="d" tabindex="40">Development Articles</a></li>
	<li<?php if($section=='interviews') echo ' class="active"'; ?>><a href="interviews/" title="View the Interviews section" accesskey="i" tabindex="50">Interviews</a></li>
	<li<?php if($section=='references'){ echo ' class="active last"';} else{echo ' class="last"';} ?>><a href="references/" title="View the Reference Charts" accesskey="r" tabindex="60">References</a></li>
	</ul>
</div>

<div id="content_container">

<h2><span></span><?php echo ucwords(str_replace('_',' ',$section));?></h2>

<?php
if(strstr($current_url_local, '/print'))
{
	echo '<p id="print_preview"><a href="'.$current_url_local.'" title="View how this page will appear when printed">View print preview</a></p>'."\n";
}
elseif(strrchr($_SERVER['REQUEST_URI'], '/')=='/')
{
	echo '<p id="print_preview"><a href="'.$current_url_local.'print/" title="View how this page will appear when printed">View print preview</a></p>'."\n";
}
else
{
	echo '<p id="print_preview"><a href="'.$current_url_local.'/print/" title="View how this page will appear when printed">View print preview</a></p>'."\n";
}
?>


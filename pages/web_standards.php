<div id="content">

<?php

if(isset($_GET['article']))
{
	$article = str_replace('-','_',$article);
	require_once('standards/'.$article.'.php');
}
else
{
?>

<h4 id="introduction"><span></span>Introduction</h4>

<p>This section introduces the <strong>basics of Web Standards</strong>, how different technologies such as 
HTML and CSS should be used in conjunction with one another to complement mark-up and presentation.</p>

<p>Here you will find a lot definitions and descriptions of the best practices in the different aspects of
the large area of Web Standards.</p>

<h4 id="article_intros"><span></span>Outline of the Articles</h4>

<p>Below are the introductions to each article, to find exactly what you need to know.</p>

<?
	if ($opened_dir = opendir('pages/standards/'))
	{
		while (false !== ($file = readdir($opened_dir)))
		{
			if((stristr($file,'.php')) && ($file!='further_reading.php'))
			{
			 	$page = file_get_contents('http://final.trovster.com/pages/standards/'.$file);

				// grab the first paragraph in the introduction
				preg_match('~<h4 id="introduction"><span></span>Introduction</h4>\r\n\r\n<p>(.*?)</p>~s', $page, $intros);
				
				$file_short = str_replace('.php','',$file);
				$file_name = ucwords(str_replace('_',' ',$file_short));
				$file_url = str_replace('_','-',$file_short);
				
				echo '<p><a href="web_standards/',$file_url,'" title="View The &quot;',$file_name,'&quot; Article">',$file_name,'</a> &mdash;'."\n";
				echo $intros[1],'</p>'."\n\n";
			}
		}
		closedir($opened_dir);
	}

}
?>

<!-- end of div id #content -->
</div>

<div id="sub_information">

<h3><span></span>Articles</h3>

<ul id="articles">
<?php
if ($opened_dir = opendir('pages/standards/'))
{
	while (false !== ($file = readdir($opened_dir)))
	{
		if((stristr($file,'.php')) && ($file!='further_reading.php'))
		{
			//$file_str_length = strlen($file);
			$file = str_replace('.php','',$file);
			$file_name = ucwords(str_replace('_',' ',$file));
			$file_url = str_replace('_','-',$file);
			echo '<li><a href="web_standards/',$file_url,'" title="View the ',$file_name,' article">',$file_name,'</a></li>',"\n";
		}
	}
	closedir($opened_dir);
}

?>
</ul>

<!-- end of div id #sub_information -->
</div>
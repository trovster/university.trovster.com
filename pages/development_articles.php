<div id="content">

<?php

if(isset($_GET['article']))
{
	$article = str_replace('-','_',$article);
	require_once('articles/'.$article.'.php');
}
else
{
	echo '<h4 id="introduction"><span></span>Introduction</h4>'."\n\n";
	echo '<p>If you have a grasp of what web standards is all about and how to make basic table-less sites using semantic markup with
	<abbr title="Cascading Style Sheet">CSS</abbr> driven presentation then continue to find out some web developer "tricks of the trade".</p>'."\n\n";
	
	echo '<p>This section concentrates of addressing specific problems that web developers new to web standards design need to address. These articles address
	the semantic markup for navigation menus and discuss different image replacement techniques.</p>'."\n\n";
	
	echo '<h4 id="article_intros"><span></span>Outline of the Articles</h4>'."\n\n";
	echo '<p>Below are the introductions to each article, to find exactly what you need to know.</p>'."\n\n";

	if ($opened_dir = opendir('pages/articles/'))
	{
		while (false !== ($file = readdir($opened_dir)))
		{
			if((stristr($file,'.php')) && ($file!='further_reading.php'))
			{
			 	$page = file_get_contents('http://final.trovster.com/pages/articles/'.$file);

				// grab the first paragraph in the introduction
				preg_match('~<h4 id="introduction"><span></span>Introduction</h4>\r\n\r\n<p>(.*?)</p>~s', $page, $intros);
				
				$file_short = str_replace('.php','',$file);
				$file_name = ucwords(str_replace('_',' ',$file_short));
				$file_url = str_replace('_','-',$file_short);
				
				echo '<p><a href="development_articles/',$file_url,'" title="View The &quot;',$file_name,'&quot; Article">',$file_name,'</a> &mdash;'."\n";
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
if ($opened_dir = opendir('pages/articles/'))
{
	while (false !== ($file = readdir($opened_dir)))
	{
		if((stristr($file,'.php')) && ($file!='further_reading.php'))
		{
			//$file_str_length = strlen($file);
			$file = str_replace('.php','',$file);
			$file_name = ucwords(str_replace('_',' ',$file));
			$file_url = str_replace('_','-',$file);
			echo '<li><a href="development_articles/',$file_url,'" title="View the ',$file_name,' article">',$file_name,'</a></li>',"\n";
		}
	}
	closedir($opened_dir);
}
?>
</ul>

<!-- end of div id #sub_information -->
</div>
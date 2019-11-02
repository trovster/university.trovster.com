<div id="content">

<?php

if(isset($_GET['article']))
{
	$article = str_replace('-','_',$article);
	$interviewee = ucwords(str_replace('_',' ',$article));
	
	echo '<h3><span></span>',$interviewee,'</h3>',"\n\n";
	
	require_once('interviews/'.$article.'.php');
}
else
{
	echo '<p>Please select a interview</p>';
}
?>

<!-- end of div id #content -->
</div>

<div id="sub_information">

<h3><span></span>Interviewees</h3>

<ul id="articles">
<?php
if ($opened_dir = opendir('pages/interviews/'))
{
	while (false !== ($file = readdir($opened_dir)))
	{
		if(stristr($file,'.php'))
		{
			$file = str_replace('.php','',$file);
			$file_name = ucwords(str_replace('_',' ',$file));
			$file_url = str_replace('_','-',$file);
			
			if(isset($_GET['article']) && ($_GET['article']==$file_url))
			{
				echo '<li class="active"><a href="interviews/',$file_url,'" title="View the ',$file_name,' Interview">',$file_name,'</a>',"\n";
				
				echo '<ul>',"\n";
				for($i=1; $i <= $questions; $i++)
				{
					echo '<li><a href="',$current_url_local,'#q',$i,'" title="">Question ',$i,'</a></li>'."\n";
				}
				echo '</ul>',"\n";
				echo '</li>',"\n\n";
			}
			else
			{
				echo '<li><a href="interviews/',$file_url,'" title="View the ',$file_name,' Interview">',$file_name,'</a></li>',"\n";
			}
		}
	}
	closedir($opened_dir);
}
?>
</ul>

<!-- end of div id #sub_information -->
</div>
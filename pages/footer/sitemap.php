<div id="content">

<h3><span></span>Website Layout</h3>

<ul id="sitemap">
<?php

$section_array = array('web_standards','web_accessibility','development_articles','interviews','references');

foreach($section_array as $section)
{
	$section_styled = ucwords(str_replace('_',' ',$section));
	$url = $server_url.'/';

	echo '<li><a href="',$section,'/">',$section_styled,'</a>',"\n";
	
	// read the correct page
	$section_page = file_get_contents('http://'.$url.$section.'.php');
	// narrow down the page contents to the articles list
	preg_match('~<ul id="articles">(.*?)</ul>~s', $section_page, $section_links_array);
	
	$section_links_array = $section_links_array[1];
	
	// pulls out the URL link
	preg_match_all('~<a href="(.*?)" title="~s', $section_links_array, $links);
	// pulls out the title of the link
	preg_match_all('~" title="(.*?)">~s', $section_links_array, $links_title);
	// pulls out the name of the link
	preg_match_all('~">(.*?)</a>~s', $section_links_array, $links_name);	
	
	
	echo '	<ul>',"\n";
	
	for($i=0; $i < count($links[1]); $i++)
	{
		echo '	<li><a href="',$links[1][$i],'" title="',$links_title[1][$i],'">',$links_name[1][$i],'</a>',"\n";
		
		/*
		// read the correct sub section page
		$sub_section_page = file_get_contents('http://'.$url.$links[1][$i]);
		// narrow down the page contents to the articles list
		preg_match('~<div id="content">(.*?)</div>~s', $sub_section_page, $content);
	
		if($section=='interviews')
		{
			// grab all the question IDs
			// <dt id="q1">
			preg_match_all('~<dt id="(.*?)"~s', $content[1], $section_ids);
			
		}
		elseif(($section=='references') && stristr($links_title[1][$i],'checkpoints'))
		{
			// <tbody id="checkpoint1">
			preg_match_all('~<tbody id="(.*?)">~s', $content[1], $section_ids);
		}
		else
		{
			// grab all the sub section IDs
			preg_match_all('~<h4 id="(.*?)">~s', $content[1], $section_ids);
		}	

		echo '		<ul>',"\n";	
		for($id=0; $id < count($section_ids[1]); $id++)
		{
			//$section_ids[1][$id] = ucwords(str_replace('_',' ',$section_ids[1][$id]));
			
			$section_ids_styled = ucwords(str_replace('_',' ',$section_ids[1][$id]));
			if($section=='interviews')
			{
				$section_ids_styled = str_replace('Q','Question ',$section_ids_styled);
			}
			
			echo '		<li><a href="',$links[1][$i],'/#',$section_ids[1][$id],'">',$section_ids_styled,'</a></li>',"\n";
		}
		echo '		</ul>',"\n";
		*/
		echo '	</li>',"\n";
	}

	echo '	</ul>',"\n";
	
	echo '</li>',"\n\n";
}

?>

<li><a href="colophon/" title="Find out more information about the site">Colophon</a></li>
<li><a href="glossary/" title="Definition of terms used throughout the site">Glossary</a></li>
<li><a href="copyright_information/" title="Information on copyright information">Copyright Information</a></li>
<li><a href="accessibility_statement/" title="Information on accessibility features">Accessibility Statement</a></li>
<li><a href="sitemap/" title="An overall view of all the sites contents for easy access">Sitemap</a></li>

</ul>

<!-- end of div id #content -->
</div>

<div id="sub_information">

<h3><span></span>Sections</h3>

<ul>
<li><a href="sitemap/#web_standards" title="Links for web standards">Web Standards</a></li>
<li><a href="sitemap/#web_accessibility" title="Links for web accessibility">Web Accessibility</a></li>
<li><a href="sitemap/#development_articles" title="Links for development articles">Development Articles</a></li>
<li><a href="sitemap/#interviews" title="Links for interviews">Interviews</a></li>
<li><a href="sitemap/#reference_tables" title="Links for references">References</a></li>
</ul>
<!-- end of div id #sub_information -->
</div>
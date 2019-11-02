<?php
require_once('header.php');

/* main pages */
if($section=='home')
{
	require_once('pages/home.php');
}
elseif($section=='web_standards')
{
	require_once('pages/web_standards.php');
}
elseif($section=='web_accessibility')
{
	require_once('pages/web_accessibility.php');
}
elseif($section=='development_articles')
{
	require_once('pages/development_articles.php');
}
elseif($section=='interviews')
{
	require_once('pages/interviews.php');
}
elseif($section=='references')
{
	require_once('pages/references.php');
}


/* footer pages */
elseif($section=='accessibility_statement')
{
	require_once('pages/footer/accessibility_statement.php');
}
elseif($section=='sitemap')
{
	require_once('pages/footer/sitemap.php');
}
elseif($section=='copyright_information')
{
	require_once('pages/footer/copyright.php');
}
elseif($section=='glossary')
{
	require_once('pages/footer/glossary.php');
}
elseif($section=='colophon')
{
	require_once('pages/footer/colophon.php');
}
else
{
	require_once('pages/error.php');
}

require_once('footer.php');
?>
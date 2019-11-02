<div id="content">

<?php
if($chart=='entities')
{
	require_once('charts/entities.php');
}
elseif($chart=='html')
{
	require_once('charts/html.php');
}
elseif($chart=='css')
{
	require_once('charts/css.php');
}
elseif($chart=='wcag')
{
	require_once('charts/wcag.php');
}
else
{
?>

<h3>About</h3>

<p>In this section you can find charts documenting commonly used web development standards, such
as <abbr title="HyperText Markup Language">HTML</abbr> elements and <abbr title="Cascading Style Sheets">CSS</abbr>
properties, and can be used for easy referencing.</p>

<p class="more">Please select a chart.</p>

<?php
}
?>
</div>


<div id="sub_information">

<h3><span></span>Charts</h3>

<ul id="articles">
<li><a href="references/html" title="HTML 4 Elements Chart"><abbr title="Hypertext Markup Language">HTML</abbr> 4 Element Chart</a></li>
<li><a href="references/css" title="CSS Property Chart"><abbr title="Cascading Style Sheets">CSS</abbr> Property Chart</a></li>
<li><a href="references/wcag" title="Web Content Accessibility Guideline Checkpoints"><abbr title="Web Content Accessibility Guideline">WCAG</abbr> Checkpoints</a></li>
<li><a href="references/entities" title="Character Entity Chart">Character Entity Chart</a></li>
</ul>

<h3><span></span>Specifications</h3>

<ul>
<li><a href="http://www.w3.org/TR/html4/" title="HTML 4.01 Specification"><abbr title="Hypertext Markup Language">HTML</abbr> 4.01</a></li>
<li><a href="http://www.w3.org/TR/xhtml1/" title=" XHTML&trade; 1.0 The Extensible HyperText Markup Language (Second Edition)"> <abbr title="Extensible Hypertext Markup Language">XHTML</abbr> 1.0</a></li>
<li><a href="http://www.w3.org/TR/CSS1.html" title="Cascading Style Sheets, Level 1"><abbr title="Cascading Style Sheets">CSS</abbr> 1</a></li>
<li><a href="http://www.w3.org/TR/CSS21/" title="Cascading Style Sheets, Level 2 Revision 1"><abbr title="Cascading Style Sheets">CSS</abbr> 2.1</a></li>
<li><a href="http://www.unicode.org/charts/" title="Unicode Code Charts">Unicode</a></li>
</ul>

<!-- end of div id #sub_information -->
</div>
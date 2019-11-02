<div id="content">

<h3><span></span>Abbreviations, Acronyms &amp; Intialisms</h3>

<dl id="abbreviations_definitions">
<?php

$sql_glossary = mysql_query("SELECT term,definition FROM glossary ORDER BY term ASC");
while($glossary_row = mysql_fetch_assoc($sql_glossary))
{
	extract($glossary_row);
	echo '<dt id="',$term,'">',$term,'</dt>',"\n";
	echo '<dd><p>',$definition,'</p></dd>',"\n\n";
}

?>
</dl>
<!-- end of div id #content -->
</div>

<div id="sub_information">

<h3><span></span>Abbreviation List</h3>

<ul id="abbreviations_list">
<?php

$sql_glossary_term = mysql_query("SELECT term FROM glossary ORDER BY term ASC");
while($glossary_term_row = mysql_fetch_assoc($sql_glossary_term))
{
	extract($glossary_term_row);
	echo '<li><a href="glossary/#',$term,'" title="Explaination of ',$term,'">',$term,'</a></li>',"\n";
}
?>
</ul>
<!-- end of div id #sub_information -->
</div>
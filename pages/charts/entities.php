<h3><span></span>Character Entity Chart</h3>

<p>Below are a list of important <abbr title="International Organization for Standardization">ISO</abbr>
character entities which should be used it marking up <abbr title="Hypertext Markup Language">HTML</abbr> documents.</p>

<table id="entities">
<caption>ISO Entities</caption>

<thead>
 <tr>
  <th scope="col">Name Code</th>
  <th scope="col">Number Code</th>
  <th scope="col">Glyph</th>
  <th scope="col">Description</th>
 </tr>
</thead>

<tbody>
<?php
$sql_entities = mysql_query("SELECT name_code,number_code,description FROM entities ORDER BY number_code ASC");
$i = 1;
while($entities_row = mysql_fetch_assoc($sql_entities))
{
	extract($entities_row);
	$i++;

	if($i % 2 !== 0)
	{
		$class = ' class="odd"';
	}
	else
	{
		$class = '';
	}
		
	if($name_code!='')
	{
		$name_code_output = '&amp;'.$name_code.';';
		$glyph = '&'.$name_code.';';
	}
	if($number_code!='0')
	{
		$number_code_output = '&amp;#'.$number_code.';';
		if($name_code=='')
		{
			$glyph = '&#'.$number_code.';';
			$name_code_output = '';
		}
	}
	
	echo ' <tr',$class,'>'."\n";
	echo '  <td>',$name_code_output,'</td>'."\n";
	echo '  <td>',$number_code_output,'</td>'."\n";
	echo '  <td>',$glyph,'</td>'."\n";
	echo '  <td>',ucwords($description),'</td>'."\n";
	echo ' </tr>'."\n";
}

?>
</tbody>
</table>

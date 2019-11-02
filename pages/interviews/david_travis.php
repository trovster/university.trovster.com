<h4><span></span>Introduction</h4>

<p id="intro">&nbsp;</p>

<h4><span></span>Interview</h4>

<?php
ob_start();
?>

<dl id="interview">


</dl>

<?php
$big_string = ob_get_contents();
preg_match_all("/<dt id=/", $big_string, $no_of_questions);
$questions = sizeof($no_of_questions[0]);
ob_end_flush();
?>
<h4><span></span>Introduction</h4>

<p id="intro">Dave Shea is the creator of the influential and highly accliamed web standards showcase project;
<a href="http://www.csszengarden.com" title="Go To Dave Shea's CSS Zen Garden Webiste">CSS Zen Garden</a>, a member of the
<a href="http://www.webstandards.org/" title="Go To the Web Standards Project Webiste">Web Standards Project</a>, and writes
about all things web for his daily weblog, <a href="http://www.mezzoblue.com" title="Go To Dave Shea's Mezzoblue Website">Mezzoblue.com</a></p>

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
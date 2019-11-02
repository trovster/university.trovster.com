<h3><span></span>Class or Id?</h3>

<h4 id="introduction"><span></span>Introduction</h4>

<p>A lot of people come with the question "When do I use Class and when do I use IDs... what is the difference?". This article
talks about the differences and IDs can be used with other applications other than <abbr title="Cascading Style Sheet">CSS</abbr>.</p>

<h4 id="difference"><span></span>The Difference</h4>

<p>Both classes and ids can be referenced with <abbr title="Cascading Style Sheet">CSS</abbr> using <code>.</code> and <code>#</code> respectively.
However, <strong>ids can only be used once per page, whereas classes can be used as many times as required</strong>.</p>

<p>"So why not always use classes" - well because ids are unique to that page they can be addressed in scripts, forms and
<abbr title="Cascading Style Sheet">CSS</abbr> without the possibility of them being found anywhere else on the page.</p>

<p>Ids also have precedence over classes so classes can not be used to override id styled elements.</p>

<h4 id="application"><span></span>Application of IDs</h4>

<h5><span></span>Forms</h5>

<p>The best example of the use of ids uniquely used on a page, is within forms. An id on a <code>input</code> element is used to connect
it to the <code>label</code> element.</p>

<pre><code class="html">&lt;label for="id_name"&gt;
&lt;input type="text" name="parse_variable" id="id_name"&gt;
</code></pre>

<p>Because ids can only be used once per page, it is obvious that the <code>label</code> belongs only to the one <code>input</code> element.</p>

<h5><span></span>Internal Linking</h5>

<p>Ids make sense for elements that will only appear once on a page, such as navigation, footer and content containers. Because of this
identification they can be referenced with interal links using the id name.</p>

<pre><code class="html">&lt;a href="www.domain.com/page.html#footer"&gt;Go to the footer&lt;/a&gt;

&lt;div id="footer"&gt;&lt;/div&gt;
</code></pre>

<h5><span></span>Scripting</h5>

<p>Finally, ids are an important part of the <abbr title="Document Object Model">DOM</abbr>, for accessing
<abbr title="HyperText Markup Language">HTML</abbr> elements and in client side scripting techniques such as Javascript.</p>


<?php
require_once('further_reading.php');
?>

<dl>
	<dt><abbr title="Cascading Style Sheet">CSS</abbr> Classes <abbr title="Verses">vs</abbr> ID</dt>
	<dd>
	<blockquote cite="http://www.tizag.com/cssT/cssid.php">
	<p>There is often confusion when it is appropriate to use <abbr title="Cascading Style Sheet">CSS</abbr> IDs
	and when <abbr title="Cascading Style Sheet">CSS</abbr> Classes should be used instead. This lesson is geared to display an answer as
	well as provide more information about <abbr title="Cascading Style Sheet">CSS</abbr> IDs</p>
	<p><cite><a href="http://www.tizag.com/cssT/cssid.php" title="CSS Classes vs ID">http://www.tizag.com/cssT/cssid.php</a></cite></p>
	</blockquote>
	</dd>
</dl>

<dl>
	<dt>Class and ID Selectors</dt>
	<dd>
	<blockquote cite="http://www.htmldog.com/guides/cssintermediate/classid/">
	<p>The difference between an ID and a class is that an ID can be used to identify one element, whereas a class can be used to identify more than one.</p>
	<p><cite><a href="http://www.htmldog.com/guides/cssintermediate/classid/" title="Class and ID Selectors">
	http://www.htmldog.com/guides/cssintermediate/classid/</a></cite></p>
	</blockquote>
	</dd>
</dl>

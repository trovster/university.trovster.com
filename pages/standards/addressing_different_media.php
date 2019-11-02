<h3><span></span>Addressing Different Media</h3>

<h4 id="introduction"><span></span>Introduction</h4>

<p>Because of the ability to separate content and style with <abbr title="Cascading Style Sheet">CSS</abbr> the developer is able to provide
different stylesheets to a range of media which have differing capabilities. This article discusses which medias can be addressed and how
to apply styles to them.</p>

<p>The <a href="web_standards/including-style-sheets">Including Style Sheets article</a> discusses the main methods of including stylesheets. Please
read this article before proceeding with this.</p>

<h4 id="use_of_media"><span>The Use <abbr title="Cascading Style Sheet">CSS</abbr> Media</span></h4>

<p>The main media use for the web is a large colour screen, via a desktop or laptop computer. However, other mediums are used when interacting
with web content, specifically printing, but recently using mobile devices which have very small screens in comparision to both print and screen
with heavily reduced bandwidth capabilities.</p>


<h4 id="different_types"><span>Different Media Types</span></h4>

<p><abbr title="Cascading Style Sheet">CSS</abbr> is often used to present a website differently to different types of media.
As of <abbr title="Cascading Style Sheet">CSS</abbr>2.1 there are a total of nine different media types. The three most commonly
used media tyles are:</p>

<dl id="media_types">
<dt>screen</dt>
<dd>- is used for colour computer screens.</dd>

<dt>print</dt>
<dd>- is applied on print preview and when printing webpages.</dd>

<dt>handheld</dt>
<dd>- is for mobile devices such as mobile phones and <abbr title="Personal Digital Assistant">PDA</abbr>s.</dd>
</dl> 

<p>The other media types are:</p>

<ul>
<li>aural</li>
<li>braille</li>
<li>embossed</li>
<li>projection</li>
<li>tty</li>
<li>tv</li>
</ul>

<p>There is the media type 'all' which can be used to apply stylesheets to all the different media types.</p>

<h4 id="applying_media"><span></span>Applying the Different Media Types</h4>

<p>Media types can be specified on external, internal and <code>@import</code> <abbr title="Cascading Style Sheet">CSS</abbr> inclusion methods.</p>

<h6><span></span>Defining the External Link Media Type</h6>
<pre class="html"><code>&lt;link rel="stylesheet" type="text/css" href="screen_style.css" media="screen" /&gt;
&lt;link rel="stylesheet" type="text/css" href="print_style.css" media="print" /&gt;
</code></pre>

<h6><span></span>Defining the Internal Media Type</h6>
<pre class="html"><code>&lt;style type="text/css" media="print"&gt;</code></pre>

<h6><span></span>Defining the @media Media Type</h6>
<pre><code class="html">&lt;style type="text/css"&gt;
@import url(path/to/print.css) print
@import url(path/to/handheld.css) handheld
&lt;/style&gt;
</code></pre>

<p>You can do combinations of different media types by specifying them in a line separated with commas.</p>

<pre class="html"><code>&lt;link rel="stylesheet" type="text/css" href="style.css" media="screen,handheld" /&gt;
&lt;link rel="stylesheet" type="text/css" href="print_style.css" media="print" /&gt;
</code></pre>

<p>Finally, if you have a default styling that you want to apply to all media types then the following should be used.</p>

<pre class="html"><code>&lt;link rel="stylesheet" type="text/css" href="style_for_all.css" media="all" /&gt;</code></pre>

<?php
require_once('further_reading.php');
?>

<dl>
	<dt>W3C: Media Types</dt>
	<dd>
	<blockquote cite="http://www.w3.org/TR/REC-CSS2/media.html">
	<p>One of the most important features of style sheets is that they specify how a document is to be presented on different media: on the screen,
	on paper, with a speech synthesizer, with a braille device, etc.</p>
	<p><cite><a href="http://www.w3.org/TR/REC-CSS2/media.html" title="W3C: Media Types">http://www.w3.org/TR/REC-CSS2/media.html</a></cite></p>
	</blockquote>
	</dd>
</dl>

<!--
<dl>
	<dt>Title of Page</dt>
	<dd>
	<blockquote cite="">
	<p>Quote</p>
	<p><cite><a href="#" title="Title of Page">URL</a></cite></p>
	</blockquote>
	</dd>
</dl>
-->
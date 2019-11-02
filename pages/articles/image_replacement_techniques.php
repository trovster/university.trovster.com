<h3><span></span>Image Replacement Techniques</h3>

<h4 id="introduction"><span></span>Introduction</h4>

<p>This article discusses different methods of image replacement that is needed to maintain semantic
markup and a true separation between content and style.</p>

<h4 id="the_problem"><span></span>The Problem</h4>

<p>There was no need for special image replacement techniques before the introduction of CSS,
as web developers used the Alternative Text, <code>alt</code>, in the <code>&lt;img&gt;</code> tag to provide the
appropriate information. If the image is missing or the user has images disabled, the <code>alt</code> content is displayed.</p>

<p>In the pure <abbr title="HyperText Markup Language">HTML</abbr> example below,
the image is missing. The browser would display the information that is contained in the <code>alt</code> attribute.
The actual style of the <code>alt</code> text depends on the browser. In Mozilla Firefox just plain text is shown, in Opera
this text has a border around it, and in Internet Explorer a red cross is also shown to indicate a broken image.</p>

<pre><code class="html">&lt;img src="path/to/image.png" alt="A Sail Boat on a Lake"&gt;</code></pre>

<pre><code class="example"><img src="path/to/image.png" alt="A Sail Boat on a Lake" /></code></pre>

<p><abbr title="Cascading Style Sheets">CSS</abbr> gives a web developer better control
over the presentation of their <abbr title="HyperText Markup Language">HTML</abbr> mark-up.
There are a few grey areas concerning what is and what <strong>isn't</strong> classed
as presentational, especially regarding the use of header images.</p>

<blockquote cite="http://www.w3.org/Style/CSS/">
<p>Cascading Style Sheets (<abbr title="Cascading Style Sheets">CSS</abbr>)
is a simple mechanism for adding style (e.g. fonts, colors, spacing) to Web documents.</p>
<p><cite><a href="http://www.w3.org/Style/CSS/" title="CSS Specification">http://www.w3.org/Style/CSS/</a></cite></p>
</blockquote>

<p>Presentational elements such as non-content specific graphics, should be placed within the <abbr title="Cascading Style Sheets">CSS</abbr>.
Presentational <abbr title="Cascading Style Sheets">CSS</abbr>, which gives the site a branded
design, can then be removed without too much impact on content of the site. However, if background
images are used for the title or sub headings, then there is no substitute and the information is
completely lost.</p>


<h4 id="the_solution"><span></span>The Solutions</h4>

<p>There has been a lot of hype of potential solutions to this problem, however none so far are perfect. The main use of these
techniques are to replace the branded text, such as a company logo, that is embedded within an image. Semantic mark-up
denotes the use of a top-level heading for this type of information, therefore the <abbr title="HyperText Markup Language">HTML</abbr>
element <code>h1</code> should be used.</p>

<p>There are numerous advantages and disadvantages to each of the solutions documented below.</p>

<h5><span></span>Fahrner Image Replacement</h5>

<p>This was the first <abbr title="Image Replacement">IR</abbr> technique to be devised and was named after Todd Fahrner,
one of the founding conceptualists in image replacement techniques. It is now often refered to as the

<abbr title="Fahrner Image Replacement">FIR</abbr> technique, the abbreviation of &lsquo;Fahrner Image Replacement&rsquo; and is used
to talk about the general subject of <abbr title="Image Replacement">IR</abbr>.
The principal for this technique is creating pure <abbr title="HyperText Markup Language">HTML</abbr> text
representation of the image, then hiding the text when the style sheet is enabled.</p>

<p>The <abbr title="Fahrner Image Replacement">FIR</abbr> technique uses the following

<abbr title="HyperText Markup Language">HTML</abbr> mark-up.</p>

<pre><code class="html">&lt;h1&gt;&lt;span&gt;Microsoft&lt;/span&gt;&lt;/h1&gt;</code></pre>

<pre><code class="css">h1
{ 
background: url("hello_world.gif") no-repeat;
height: 35px;
}

span
{
display: none;
}
</code></pre>

<?php
require_once('further_reading.php');
?>

<dl>
	<dt>Facts and Opinion About Fahrner Image Replacement</dt>
	<dd>
	<blockquote cite="http://www.alistapart.com/articles/fir/">
	<p>Development of the Fahrner Image Replacement technique and its analogues
	is moving faster than the destruction of the Berlin Wall. This article provides
	some much-needed empirical data on how
	<abbr title="Fahrner Image Replacement">FIR</abbr> actually works in screen readers.</p>
	<p><cite><a href="http://www.alistapart.com/articles/fir/" title="Facts and Opinion About Fahrner Image Replacement">http://www.alistapart.com/articles/fir/</a></cite></p>
	</blockquote>
	</dd>
</dl>

<dl>
	<dt>Using Background-Image to Replace Text</dt>
	<dd>
	<blockquote cite="http://www.stopdesign.com/articles/replace_text/">
	<p>In principle, the concept is very simple. We write a short string of text
	and surround it with two sets of basic <abbr title="HyperText Markup Language">HTML</abbr> tags.
	Then we use <abbr title="Cascading Style Sheets">CSS</abbr> to hide the
	<abbr title="HyperText Markup Language">HTML</abbr> text and display a background image containing
	the exact same words instead of the original text. That's it. Replacing text with an
	image is no more complicated than this.</p>
	<p><cite><a href="http://www.stopdesign.com/articles/replace_text/" title="Using Background-Image to Replace Text">http://www.stopdesign.com/articles/replace_text/</a></cite></p>
	</blockquote>
	</dd>
</dl>

<dl>
	<dt>Revised Image Replacement</dt>
	<dd>
	<blockquote cite="http://www.mezzoblue.com/tests/revised-image-replacement/">
	<p>Plenty of new and interesting revisions to the original Fahrner Image Replacement
	technique sprouted up in late 2003. This is an attempt to consolidate them,
	so that perhaps we can decide on the official replacement.</p>
	<p><cite><a href="http://www.mezzoblue.com/tests/revised-image-replacement/" title="Revised Image Replacement">http://www.mezzoblue.com/tests/revised-image-replacement/</a></cite></p>
	</blockquote>
	</dd>
</dl>

<dl>
<dt>Accessible Image Replacement</dt>
	<dd>
	<blockquote cite="http://www.mezzoblue.com/archives/2003/12/12/accessible_i/">
	<p>Either way, we all know by now that using <code>display: none;</code> is out.
	We haven't got this problem totally licked yet, but we're two thirds of the way there.
	Not bad for a technique that has been in the public eye for only 9 months now.</p>
	<p><cite><a href="http://www.mezzoblue.com/archives/2003/12/12/accessible_i/" title="Accessible Image Replacement">http://www.mezzoblue.com/archives/2003/12/12/accessible_i/</a></cite></p>
	</blockquote>
	</dd>
</dl>

<dl>
	<dt>Flaw with Using Background-Image to Replace Text</dt>
	<dd>
	<blockquote cite="http://www.stopdesign.com/log/2003/03/13/index.html">
	<p>If anyone read the <abbr title="Cascading Style Sheets">CSS</abbr> tutorial
	I wrote last week involving use of the <code>background-image</code> property,
	they should be aware of an apparent critical flaw in the method as it's currently
	described. It's hard to tell whether the flaw is in the method itself, or simply
	in the way screen readers verbalize text of a page.</p>
	<p><cite><a href="http://www.stopdesign.com/log/2003/03/13/index.html" title="Flaw with Using Background-Image to Replace Text">http://www.stopdesign.com/log/2003/03/13/index.html</a></cite></p>
	</blockquote>
	</dd>
</dl>

<dl>
	<dt>Image Replacement Decision Grid</dt>
	<dd><p>A table documenting different <abbr title="Image Replacement">IR</abbr> techniques. It
	compares each of the seven <abbr title="Image Replacement">IR</abbr> techniques with different
	<abbr title="Cascading Style Sheets">CSS</abbr> and image combinations.
	It also documents support by screenreaders.</p>
	<p><a href="http://levin.grundeis.net/files/20031203/ir.html" title="Image Replacement Decision Grid">http://levin.grundeis.net/files/20031203/ir.html</a></p>
	</dd>
</dl>
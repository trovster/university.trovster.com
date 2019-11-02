<h3><span></span>Create Your Own Stylesheet</h3>

<h4 id="introduction"><span></span>Introduction</h4>

<p>This website makes use of <abbr title="Cascading Style Sheet">CSS</abbr> for presentation which is layed upon semantic,
structured <abbr title="Hypertext Markup Language">HTML</abbr>. This site also has a
<a href="development_articles/create-your-own-stylesheet">stylesheet switcher</a> which allows different styles to be applied
across the site. There are numerous <a href="colophon/#style_changer">predefined styles</a> which have been developed for the site,
based upon famous designs from across the web. The style sheet switcher allows for external <abbr title="Cascading Style Sheet">CSS</abbr>
to be applied, this article will document the basic structure of the <abbr title="Hypertext Markup Language">HTML</abbr> for reference
when creating your design/<abbr title="Cascading Style Sheet">CSS</abbr> file.</p>

<h4 id="apply_style"><span></span>Appy Your Style</h4>

<p>To apply your own stylesheet you simply point your browsers to http://<?=$server_url.'/final/switcher.php?set=URL';?> and set
<abbr title="Uniform Resource Locator">URL</abbr> to the domain path to the appropriate <abbr title="Cascading Style Sheet">CSS</abbr> file.
The <abbr title="Cascading Style Sheet">CSS</abbr> selected will then be applied as the main stylesheet and you will be redirected to the
homepage of the site.</p>

<p>A simple <a href="development_articles/create-your-own-stylesheet#stylesheet_generator">stylesheet loader</a> has been provided for convenience.
Simply provide the <abbr title="Uniform Resource Locator">URL</abbr> to the <abbr title="Cascading Style Sheet">CSS</abbr>
file and it will apply the stylesheet.</p>

<h4 id="structure"><span></span>Know The Structure</h4>

<p>In order to easily create an effective layout you first need to understand the markup behind the site.
Here you can find an outline of the main ids and classes on the page and how
they are nested. Finally, you can find out about specific markup for special sections and menus.</p>

<div class="structure">
<code><strong>body id="page-id-"</strong></code>

<div id="contain" class="level_odd">
<code><strong>div id="container"</strong></code>

<pre><code>&lt;ul id="skip_links"&gt;

&lt;h1&gt;&lt;span&gt;&lt;/span&gt;&lt;/h1&gt;
</code></pre>

<div class="level_even">
<pre><code><strong>div id="navigation"</strong>

&lt;ul&gt;
&lt;li class="active"&gt;&lt;li&gt;
&lt;li class="last"&gt;&lt;li&gt;
</code></pre>
<!-- end of div id "navigation" -->
</div>

<div class="level_even">
<pre><code><strong>div id="content_container"</strong>

&lt;h2&gt;&lt;span&gt;&lt;/span&gt;&lt;/h2&gt;
&lt;p id="print_preview"&gt;&lt;/p&gt;

</code></pre>

<div class="level_odd">
<pre><code><strong>div id="content"</strong>

&lt;h3&gt;&lt;span&gt;&lt;/span&gt;&lt;/h3&gt;
&lt;h4&gt;&lt;span&gt;&lt;/span&gt;&lt;/h4&gt;
</code></pre>
<!-- end of div id "content" -->
</div>

<div class="level_odd">
<pre><code><strong>div id="sub_information"</strong>

&lt;h3&gt;&lt;span&gt;&lt;/span&gt;&lt;/h3&gt;

&lt;ul id="articles"&gt;
</code></pre>
<!-- end of div id "sub_information" -->
</div>

<!-- end of div id "content_container" -->
</div>

<div class="level_even">
<pre><code><strong>div id="footer"</strong>

&lt;ul&gt;
&lt;li class="active"&gt;&lt;li&gt;
&lt;li class="last"&gt;&lt;li&gt;
</code></pre>
<!-- end of div id "footer" -->
</div>

<!-- end of div id "container" -->
</div>
<!-- end of div id #structure -->
</div>

<h5><span></span>Site Section Styles</h5>

<p>Each section can be reference individually with the page id. Below is a list of all the different page ids.</p>

<ul>
<li>page-id-home</li>
<li>page-id-web-standards</li>
<li>page-id-web-accessibility</li>
<li>page-id-development-articles</li>
<li>page-id-interviews</li>
<li>page-id-references</li>
<li>page-id-colophon</li>
<li>page-id-glossary</li>
<li>page-id-copyright-information</li>
<li>page-id-accessibility-statement</li>
<li>page-id-sitemap</li>
</ul>

<p>To access certain elements on specific section the following example can be applied:</p>

<pre><code class="css">#page-id-home #navigation
{
	styles
}</code></pre>

<pre><code class="html">&lt;body id="page-id-home"&gt;
...
&lt;div id="navigation"&gt;</code></pre>

<h5><span></span>Sub Menu</h5>

<p>Each sub menu on the main five sections of the site can be referenced using <code>id="articles"</code>.</p>



<h4 id="page_specifics"><span></span>Page Specifics</h4>

<h5><span></span>The Homepage</h5>

The homepage has an extra <code>div</code> within <code>id="content_container"</code> called <code>id="content_2"</code>. This is
below <code>id="content"</code> and before <code>id="sub_information</code>.

<h5><span></span>Interviews Section</h5>

The introduction about the interviewee is marked-up with <code>&lt;p id="intro"&gt;</code>, followed by:

<div class="level_odd">
<pre><code><strong>dl id="interview"</strong>
&lt;dt id="q1"&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;p&gt;&lt;/p&gt;&lt;/dd&gt;
</code></pre>
</div>

<p>Where <code>id="q1"</code> increases per question, up to <code>id="q10"</code>.</p>

<h5><span></span>References Section</h5>

<p>The list of <abbr title="Web Content Accessibility Guidelines">WCAG</abbr> checkpoints is an ordered list with <code>id="checkpoint_summary"</code>.
This is then followed by the following table:</p>

<div class="level_odd">
<code><strong>table id="checkpoints"</strong></code>

<div class="level_even">
<pre><code><strong>tbody id="checkpoint1"</strong>

&lt;tr&gt;
&lt;td&gt;&lt;/td&gt;
&lt;td class="desc"&gt;&lt;/td&gt;
&lt;td&gt;&lt;/td&gt;
&lt;/tr&gt;
</code></pre>
</div>

<div class="level_even">
<pre><code><strong>tbody id="checkpoint2"</strong>

&lt;tr&gt;
&lt;td&gt;&lt;/td&gt;
&lt;td class="desc"&gt;&lt;/td&gt;
&lt;td&gt;&lt;/td&gt;
&lt;/tr&gt;
</code></pre>
</div>

</div>

<p>This is repeated until the last checkpoint, <code>id="checkpoint14"</code>.</p>

<p><code>id="entities"</code> is to reference the character entities <code>table</code>. Every other row has <code>class="odd"</code>.</p>


<h4 id="quotations"><span></span>Quotations</h4>

<p>All quotations are marked-up in the following way:</p>

<div class="level_odd">
<pre><code><strong>blockquote cite=""</strong>
&lt;p&gt;&lt;/p&gt;
&lt;p&gt;&lt;cite&gt;&lt;a href="" title=""&gt;&lt;/a&gt;&lt;/cite&gt;&lt;/p&gt;
</code></pre>
</div>

<p>Multiple paragraphs within the quotation are allowed.</p>


<h4 id="stylesheet_generator"><span></span>Stylesheet Generator</h4>

<form action="switcher.php?set=URL" method="get">
<fieldset>
<legend>Stylesheet Generator</legend>

<label for="set_style">Enter <abbr title="Uniform Resource Locator">URL</abbr> to <abbr title="Cascading Style Sheet">CSS</abbr> File</label>

<input type="text" id="set_style" name="set" value="http://" />
<input type="submit" value="Apply" />

</fieldset>
</form>

<?php
require_once('further_reading.php');
?>

<dl>
	<dt>3d CSS Zen Garden</dt>
	<dd>
	<blockquote cite="http://www.stuffandnonsense.co.uk/archives/3d_css_zen_garden.html">
	<p>I've been thinking about making a <a href="http://www.csszengarden.com"><abbr title="Cascading Style Sheet">CSS</abbr> Zen Garden</a> entry for a little
	while now, but before I think about design, I wanted to understand the Garden's
	<a href="http://www.csszengarden.com/zengarden-sample.html"><acronym title="Extensible HyperText Markup Language">XHTML</acronym> structure</a>.
	I don't know if this has come up	anywhere before, but it seemed sensible for me to make a graphic illustration of the
	<acronym title="Extensible HyperText Markup Language">XHTML</acronym> file.</p>
	<p><cite><a href="http://www.stuffandnonsense.co.uk/archives/3d_css_zen_garden.html" title="3d CSS Zen Garden">
	http://www.stuffandnonsense.co.uk/archives/3d_css_zen_garden.html</a></cite></p>
	</blockquote>
	</dd>
</dl>

<!--
<dl>
	<dt>Title of page</dt>
	<dd>
	<blockquote cite="">
	<p>Quote</p>
	<p><cite><a href="" title="Title of page"></a></cite></p>
	</blockquote>
	</dd>
</dl>
-->
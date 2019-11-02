<h3><span></span>Including Style Sheets</h3>

<h4 id="introduction"><span></span>Introduction</h4>

<p>There are numerous different ways you can implement presentation style and layout to your website
using <abbr title="Cascading Style Sheet">CSS</abbr>. This article will discuss how each can be applied in
<abbr title="Hypertext Markup Language">HTML</abbr>, the pros and cons of the different methods and browser
compatibility.</p>

<h4 id="methods"><span></span>The Methods</h4>

<p>There are three main different ways to embed <abbr title="Cascading Style Sheet">CSS</abbr> in your
<abbr title="Hypertext Markup Language">HTML</abbr>. These different methods are called external, internal and inline.</p>

<p><strong>External</strong> means linking to a separate <abbr title="Cascading Style Sheet">CSS</abbr> file entirely. This is done within the
<code>head</code> tags using numerous methods, which are dicussed later. Secondly, <strong>internal</strong> refers to
<abbr title="Cascading Style Sheet">CSS</abbr> embedded within the <code>head</code> tags, but are defined within the <code>style</code>
tags on the <abbr title="Hypertext Markup Language">HTML</abbr> page itself. Finally, there are <strong>inline</strong> styles. These are applied
within <abbr title="Hypertext Markup Language">HTML</abbr> tags.</p>


<h4 id="embedding_inline_styles"><span></span>Embedding Inline Styles</h4>

<p>Inline styles can be applied to any element, below is a simple example.</p>

<pre><code class="html">&lt;p style="color: #f00; text-transform: uppercase; text-decoration: underline;"&gt;Formatted text&lt;/p&gt;</code></pre>

<div class="example"><p style="color: #f00; text-transform: uppercase; text-decoration: underline;">Formatted text</p></div>


<h4 id="embedding_internal_styles"><span></span>Embedding Internal Styles</h4>

<p>Internal styles are fixed within the <code>head</code> of the document. All the <abbr title="Cascading Style Sheet">CSS</abbr>
is within the <code>style</code> element, which has the <code>type="text/css"</code>.</p>

<pre><code class="html">&lt;head&gt;
...
&lt;style type="text/css"&gt;
p
{
	color: #f00;
	text-transform: uppercase;
	text-decroation: underline;
}
&lt;/style&gt;
...
&lt;/head&gt;
</code></pre>


<h4 id="including_external_styles"><span></span>Including External Styles</h4>

<p>External stylesheets can be called in two ways. Either using the <abbr title="Hypertext Markup Language">HTML</abbr> element;
<code>link</code>, or the <abbr title="Cascading Style Sheet">CSS</abbr> property; <code>@import</code>.</p>

<p>The most common way to import an external <abbr title="Cascading Style Sheet">CSS</abbr> file is using <code>link</code>.
An external, linked stylesheet can take three different relationships with the site. These are persistent, preferred and alternate.</p>

<h5><span></span>Persistent</h5>

<p>These stylesheets are always applied to the page and are combined with the active stylesheet. Persistent stylesheet links
lack a title attribute.</p>

<pre class="html"><code>&lt;link rel="stylesheet" type="text/css" href="style.css" /&gt;</code></pre>

<h5><span></span>Preferred</h5>

<p>Stylesheets with the same title attribute are applied to the page but are disabled when an alternative stylesheet is applied.
If there are numerous preferred stylesheets, the first stylesheet takes precedence.</p>

<pre class="html"><code>&lt;link rel="stylesheet" type="text/css" href="style.css" title="default" /&gt;</code></pre>

<h5><span></span>Alternate</h5>

<p>These stylesheets can only be selected by the user as an alternative to the preferred stylesheet. The persistent stylesheet
is still applied. An alternative stylesheet can be applied by prefixing "alternate" to the <code>rel</code> attribute.
These alternative stylesheets can be grouped, in the same way as the preferred stylesheets, with the same title attribute.</p>

<pre class="html"><code>&lt;link rel="alternative stylesheet" type="text/css" href="style.css" /&gt;</code></pre>

<p>The examples assume the file <code>style.css</code> is in the same folder as the <abbr title="Hypertext Markup Language">HTML</abbr> document.</p>

<h5><span></span>Using <abbr title="Cascading Style Sheet">CSS</abbr> Import</h5>

<p>An alternative method to include external stylesheets uses the <abbr title="Cascading Style Sheet">CSS</abbr> property <code>@import</code>. You first
set up an internal style block.</p>

<pre><code class="html">&lt;style type="text/css"&gt;

@import url(path/to/stylesheet.css)

&lt;/style&gt;
</code></pre>

<p>The difference between this and the link method is that the <code>@import</code> is part of <abbr title="Cascading Style Sheet">CSS</abbr> and
not <abbr title="Hypertext Markup Language">HTML</abbr>.</p>


<h4 id="pros_cons"><span></span>Pros and Cons</h4>

<p>The purpose of <abbr title="Cascading Style Sheet">CSS</abbr> is to achieve separation between content (markup) and presentation.
Therefore, inline styles are a total conradiction to this goal and shouldn't be used.</p>

<p>Internal styles achieve separation, but fail on another good application of <abbr title="Cascading Style Sheet">CSS</abbr>,
the fact that it is cached. Intermal stylesheets need to be downloaded with the <abbr title="Hypertext Markup Language">HTML</abbr>
page and are not cached. However, intermal stylesheets are good when demonstrating <abbr title="Cascading Style Sheet">CSS</abbr>
examples as the complete markup is shown within the source and no external files are needed.</p>

<p>External stylesheets are the perfect application of <abbr title="Cascading Style Sheet">CSS</abbr>. They allow complete separation
between markup and presentation and they reside in a completely different file. This external file can be cached by the browser
and be applied to every page separately.</p>

<p>In summary, external stylesheets should be used in almost all scenarios. Interal stylesheets are good for example pages as all the information
is contained within one file and be can viewed simply via "view source". <strong>Inline styles should be avoided</strong>.</p>


<h4 id="specific_media"><span>Addressing Specific Media</span></h4>

<p>You can apply different stylesheets to different media platforms such as for print and small screen devices. An article on
<a href="web_standards/addressing-different-media">addressing different media</a> can be found in the Web Standards section.</p>


<h4 id="browser_compatibility"><span>Browser Compatibility</span></h4>

<?php
require_once('further_reading.php');
?>

<dl>
	<dt>Linking Style Sheets to <abbr title="Hypertext Markup Language">HTML</abbr></dt>
	<dd>
	<blockquote cite="http://www.htmlhelp.com/reference/css/style-html.html">
	<p>There are many ways to link style sheets to <abbr title="Hypertext Markup Language">HTML</abbr>, each carrying its own advantages and disadvantages.
	New <abbr title="Hypertext Markup Language">HTML</abbr> elements and attributes have been introduced to allow easy incorporation
	of style sheets into <abbr title="Hypertext Markup Language">HTML</abbr> documents.</p>
	<p><cite><a href="http://www.htmlhelp.com/reference/css/style-html.html" title="Linking Style Sheets to HTML">
	http://www.htmlhelp.com/reference/css/style-html.html</a></cite></p>
	</blockquote>
	</dd>
</dl>

<dl>
	<dt><abbr title="Cascading Style Sheet">CSS</abbr> How To...</dt>
	<dd>
	<blockquote cite="http://www.w3schools.com/css/css_howto.asp">
	<p>When a browser reads a style sheet, it will format the document according to it. There are three ways of inserting a style sheet.</p>
	<p><cite><a href="http://www.w3schools.com/css/css_howto.asp" title="CSS How To...">http://www.w3schools.com/css/css_howto.asp</a></cite></p>
	</blockquote>
	</dd>
</dl>

<dl>
	<dt>External, Internal or Inline? Which Method is Best?</dt>
	<dd>
	<blockquote cite="http://www.basictips.com/tips/article_48.shtml">
	<p> In this article we will discuss three types of <abbr title="Cascading Style Sheet">CSS</abbr>. ... Often we are asked
	which method is best. All of them are useful when utilized for their intended purpose.</p>
	<p><cite><a href="http://www.basictips.com/tips/article_48.shtml" title="External, Internal or Inline? Which Method is Best?">
	http://www.basictips.com/tips/article_48.shtml</a></cite></p>
	</blockquote>
	</dd>
</dl>

<dl>
	<dt>Will the Browser Apply the Rule(s)?</dt>
	<dd>
	<p>A reference chart documenting different methods of including stylesheets and which browsers apply them.</p>
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
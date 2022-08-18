<h3><span></span>Developing With Standards</h3>

<h4 id="introduction"><span></span>Introduction</h4>

<p>When switching from table-based markup and learning about semantic markup and using <abbr title="Cascading Style Sheets">CSS</abbr>
for layout and presentation it can be extremely confusing and frustrating. There are some basic tips and tricks that will help when
making the switch. This article will discuss a few tips and tricks which will help you get started.</p>


<h4 id="quirks_mode"><span></span>Avoid Quirks Mode</h4>

<p>Browsers have two different rendering modes; standards and quirks mode. Browsers in standards mode expect the markup being used to be valid
and treat it strictly. In quirks mode the browser expects incorrect markup and tries to fix it before presenting it to the viewer. Different browsers
treat quirks mode and malformed <abbr title="HyperText Markup Language">HTML</abbr> differently. Forcing a browser into quirks mode improves its
rendering of the site and importantly how it applies <abbr title="Cascading Style Sheets">CSS</abbr> rules.</p>

<p>There are numerous ways to change the rendering mode of a page. Use a strict <abbr title="HyperText Markup Language">HTML</abbr> 4 <code>doctype</code> or
<strong>any</strong> <abbr title="Extensible HyperText Markup Language">XHTML</abbr> <code>doctype</code> without the
<abbr title="Extensible Markup Language">XML</abbr> declaration. The following examples will cause browsers to render in standards mode.</p>

<pre><code class="html">&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"&gt;

&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"&gt;
</code></pre>

<p>The <code>doctype</code> must be the first element on a page for <abbr title="Internet Explorer">IE</abbr> to render in standards mode.</p>


<h4 id="level"><span></span>Level The Playing Field</h4>

<p>There are many different default browser styles for elements including <code>body</code> and <code>p</code>. To avoid differences
between browsers you can apply an extremely simple <abbr title="Cascading Style Sheets">CSS</abbr> rule. The following rule block
removes all padding and margin from all elements.</p>

<pre><code class="css">* {
  padding: 0;
  margin: 0;
}
</code></pre>

<p>You may wish to add vertical margins back in as a default behaviour for all paragraphs. This is done with the following code:</p>

<pre><code class="css">p {
  margin: 1em 0;
}
</code></pre>


<h4 id="development"><span></span>Develop To Standards With Standards</h4>

<p>It is good practice to develop in a browser which strictly adheres to the <abbr title="World Wide Web Consortium">W3C</abbr>'s standards.
I recommend using <a href="http://www.mozilla.org/products/firefox" title="Mozilla Firefox Website">Firefox</a> to test pages firstly.
Secondly check the browser in the market dominant Internet Explorer. Because you've used a compliant browser, if you find any differences you know
that the problem lies with <abbr title="Internet Explorer">IE</abbr>'s rendering. However, there are hundreds of well documented solutions and work-arounds for
<abbr title="Internet Explorer">IE</abbr> quirks.</p>


<?php require_once('further_reading.php'); ?>

<dl>
	<dt>Developing With Web Standards</dt>
	<dd>
	<blockquote cite="http://www.456bereastreet.com/lab/developing_with_web_standards/">
	<p>This document explains how and why using web standards will let you build websites in a way that saves time and money for the developer
	and provides a better experience for the visitor. Also discussed are other methods, guidelines and best practices that will help produce high-quality
	websites that are accessible to as many as possible.</p>
	<p><cite><a href="http://www.456bereastreet.com/lab/developing_with_web_standards/" title="Developing With Web Standards">
	http://www.456bereastreet.com/lab/developing_with_web_standards/</a></cite></p>
	</blockquote>
	</dd>
</dl>

<dl>
	<dt>How to Develop with <abbr title="Cascading Style Sheets">CSS</abbr></dt>
	<dd>
	<blockquote cite="http://phrogz.net/CSS/HowToDevelopWithCSS.html">
	<p>This document assumes you know the basics about <abbr title="Cascading Style Sheets">CSS</abbr>1 (what a selector is, what a compound selector
	is versus a descendant selector, how values inherit, etc.), and provides a series of guidelines to help you develop with
	<abbr title="Cascading Style Sheets">CSS</abbr> properly.</p>
	<p><cite><a href="http://phrogz.net/CSS/HowToDevelopWithCSS.html" title="How to Develop with CSS">
	http://phrogz.net/CSS/HowToDevelopWithCSS.html</a></cite></p>
	</blockquote>
	</dd>
</dl>

<dl>
	<dt>Quirks Mode and Strict Mode</dt>
	<dd>
	<blockquote cite="http://www.quirksmode.org/css/quirksmode.html">
	<p>Quirks mode and strict mode are the two 'modes' modern browsers can use to interpret your
	<abbr title="Cascading Style Sheets">CSS</abbr>. This page gives a short overview of the reasons for and the differences between these two modes.</p>
	<p><cite><a href="http://www.quirksmode.org/css/quirksmode.html" title="Quirks Mode and Strict Mode">
	http://www.quirksmode.org/css/quirksmode.html</a></cite></p>
	</blockquote>
	</dd>
</dl>

<dl>
	<dt>Fix Your Site With the Right <code>DOCTYPE</code>!</dt>
	<dd>
	<blockquote cite="http://www.alistapart.com/articles/doctype/">
	<p>This little article will provide you with <code>DOCTYPE</code>s that work, and explain the practical,
	real�world effect of these seemingly abstract tags.</p>
	<p><cite><a href="http://www.alistapart.com/articles/doctype/" title="Fix Your Site With the Right DOCTYPE!">
	http://www.alistapart.com/articles/doctype/</a></cite></p>
	</blockquote>
	</dd>
</dl>

<dl>
	<dt>Activating the Right Layout Mode Using the Doctype Declaration</dt>
	<dd>
	<blockquote cite="http://www.hut.fi/u/hsivonen/doctype.html">
	<p>In the following table, Quirks Mode, Standards Mode and Almost Standards Mode are denoted by Q, S and A, respectively.
	When a browser only has two modes, the Standards Mode is marked as "S", if the line height in table cells works as in Mozilla's Standards Mode,
	and as "A", if the line height in table cells works as in Mozilla's Almost Standards Mode.</p>
	<p><cite><a href="http://www.hut.fi/u/hsivonen/doctype.html" title="Activating the Right Layout Mode Using the Doctype Declaration">
	http://www.hut.fi/u/hsivonen/doctype.html</a></cite></p>
	</blockquote>
	</dd>
</dl>


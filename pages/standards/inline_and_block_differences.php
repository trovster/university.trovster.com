<h3><span></span>Inline And Block Differences</h3>

<h4 id="introduction"><span></span>Introduction</h4>

<p>There are three types of display categories that <abbr title="HyperText Markup Language">HTML</abbr> elements use when using
<abbr title="Cascading Style Sheets">CSS</abbr>. These categories are named block, inline and replaced.
This article discusses the main differences between inline and block elements and with example of all three.</p>


<h4 id="html_difference"><span></span>The <abbr title="HyperText Markup Language">HTML</abbr> Difference</h4>

<p>All browsers apply a default styling to <abbr title="HyperText Markup Language">HTML</abbr> elements. Block elements are rendered with
one main difference compared with inline elements. Block elements generally start a new line where inline elements do not.</p>

<p>Most block elements can contain any element, block or inline, but there are a few exceptions. The <code>body</code> and <code>form</code>s
can only contain other block elements. Another exception is the block element <code>p</code>, for a paragraph, which can only contain inline
elements.</p>

<p>Inline elements can only contain other inline elements.</p>


<h4 id="css_difference"><span></span>The <abbr title="Cascading Style Sheets">CSS</abbr> Difference</h4>

<p>You can set the display category of elements using <abbr title="Cascading Style Sheets">CSS</abbr>. There are three main values
for the <code>display</code> property. These are:</p>

<pre><code class="css">element {
  display: inline;
  display: block;
  display: none;
}
</code></pre>

<p>An important note to remember is that changing the <abbr title="Cascading Style Sheets">CSS</abbr> property doesn't alter the
<abbr title="HyperText Markup Language">HTML</abbr> rules discussed above. This purely changes the presentation of the element, not
what the element is.</p>

<p>When an element has the <abbr title="Cascading Style Sheets">CSS</abbr> rule <code>display: block</code> it stacks vertically, just like
building blocks. The left edge of the box generated touches the left each of its container and the same with the right. An element that has
<code>display: block</code> takes up the available horizontal space.</p>

<p>Block elements have collapsible vertical margins when no padding or border is between them. A good example of this is margins on paragraphs;
although they might have a top and bottom border of 10px, totalling 20px between them, the generated margin is only 10px. This is because the margins
have collapsed to generate the expected visual output.</p>

<p>Inline elements take up the required width of their content. They may have borders as well as horizontal margins and padding.
However, vertical padding and margins are ignored along with height and width.</p>


<h4 id="examples"><span></span>Example Inline, Block &amp; Replaced Elements</h4>

<table>
<thead>
 <tr>
  <th>Block-level</th>
  <th>Inline</th>
  <th>Replaced</th>
 </tr>
</thead>

<tbody>
 <tr>
  <td title="Paragaphs">&lt;p&gt;</td>
  <td title="Anchors">&lt;a&gt;</td>
  <td title="Images">&lt;img&gt;</td>
 </tr>
 <tr>
  <td>&lt;table&gt;</td>
  <td title="Abbreviations">&lt;abbr&gt;</td>
  <td>&lt;select&gt;</td>
 </tr>
 <tr>
  <td title="Division">&lt;div&gt;</td>
  <td>&lt;span&gt;</td>
  <td>&lt;textarea&gt;</td>
 </tr>
 <tr>
  <td title="All Headings h1 - h6">&lt;h1&gt;</td>
  <td title="Emphasis">&lt;em&gt;</td>
  <td>&lt;input&gt;</td>
 </tr>
</tbody>
</table>

<p>A more definitive collection inline and block <abbr title="HyperText Markup Language">HTML</abbr> 4 elements can be found in the references below.</p>


<?php require_once('further_reading.php'); ?>

<dl>
	<dt>Block vs. Inline</dt>
	<dd>
	<blockquote cite="http://www.autisticcuckoo.net/archive.php?id=2005/01/11/block-vs-inline-1">
	<p>We start off gently with a comparison between the concepts of block and inline in <abbr title="HyperText Markup Language">HTML</abbr>
	and <abbr title="Cascading Style Sheets">CSS</abbr>, respectively. In
	<a href="http://www.autisticcuckoo.net/archive.php?id=2005/01/12/block-vs-inline-2" title="Block vs. Inline - Part 2">part 2</a>
	we'll look at the block box model, which is fairly well known by now, and the thrilling finale in
	<a href="http://www.autisticcuckoo.net/archive.php?id=2005/01/13/block-vs-inline-3" title="Block vs. Inline - Part 3">part 3</a> deals with the
	esoteric details of inline boxes.</p>
	<p><cite><a href="http://www.autisticcuckoo.net/archive.php?id=2005/01/11/block-vs-inline-1" title="Block vs. Inline, Part 1">
	http://www.autisticcuckoo.net/archive.php?id=2005/01/11/block-vs-inline-1</a></cite></p>
	</blockquote>
	</dd>
</dl>

<dl>
	<dt>Building Blocks With <abbr title="Cascading Style Sheets">CSS</abbr></dt>
	<dd>
	<blockquote cite="http://www.netmechanic.com/news/vol6/css_no16.htm">
	<p>Every child plays with blocks at some point. It's fun to stack them, line them up, build houses, etc. Many Web designers take that
	early love of blocks and apply it to Web page design using style sheets. It's pretty easy &mdash; if you understand the difference between
	a block-level and inline element.</p>
	<p><cite><a href="http://www.netmechanic.com/news/vol6/css_no16.htm" title="Building Blocks With CSS">
	http://www.netmechanic.com/news/vol6/css_no16.htm</a></cite></p>
	</blockquote>
	</dd>
</dl>

<dl>
	<dt>The Display Declaration</dt>
	<dd>
	<blockquote cite="http://www.quirksmode.org/css/display.html">
	<p>The display property lets you define how a certain <abbr title="HyperText Markup Language">HTML</abbr> element should be displayed.</p>
	<p><cite><a href="http://www.quirksmode.org/css/display.html" title="The Display Declaration">
	http://www.quirksmode.org/css/display.html</a></cite></p>
	</blockquote>
	</dd>
</dl>

<dl>
	<dt><abbr title="HyperText Markup Language">HTML</abbr> 4.0 Block-Level Elements</dt>
	<dd>
	<blockquote cite="http://www.htmlhelp.com/reference/html40/block.html">
	<p>The following are defined as block-level elements in <abbr title="HyperText Markup Language">HTML</abbr> 4.0:</p>
	<p><cite><a href="http://www.htmlhelp.com/reference/html40/block.html" title="HTML 4.0 Block-Level Elements">
	http://www.htmlhelp.com/reference/html40/block.html</a></cite></p>
	</blockquote>
	</dd>
</dl>

<dl>
	<dt><abbr title="HyperText Markup Language">HTML</abbr> 4.0 Inline Elements</dt>
	<dd>
	<blockquote cite="http://www.htmlhelp.com/reference/html40/inline.html">
	<p>The following are defined as inline elements in <abbr title="HyperText Markup Language">HTML</abbr> 4.0:</p>
	<p><cite><a href="http://www.htmlhelp.com/reference/html40/inline.html" title="HTML 4.0 Inline Elements">
	http://www.htmlhelp.com/reference/html40/inline.html</a></cite></p>
	</blockquote>
	</dd>
</dl>

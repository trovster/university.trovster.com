<h3><span></span>The Semantic Web</h3>

<h4 id="introduction"><span></span>Introduction</h4>

<p>Semantics on the web simply means using the appropriate <abbr title="HyperText Markup Language">HTML</abbr> element to mark up content.
This article will discuss what exactly this entails in basic <abbr title="HyperText Markup Language">HTML</abbr> terms, but also explores
other applications of semantics in markup and other technologies such as the generic <abbr title="Extensible Markup Language">XML</abbr>.</p>

<h4 id="what_semantic_web"><span></span>What is the Semantic Web?</h4>

<blockquote cite="http://www.w3.org/2001/sw/">
<p>The Semantic Web is an extension of the current web in which information is given well-defined meaning, better enabling computers and people to work in cooperation.</p>
<p><cite>Tim Berners-Lee <a href="http://www.w3.org/2001/sw/" title="W3C Semantic Web">http://www.w3.org/2001/sw/</a></cite></p>
</blockquote>

<p>Semantic markup is subtly different to generating valid markup; a website can be valid but have terrible semantics. This is the main premise behind web standards
and the argument about using tables for layout structure.</p>


<h4 id="semantic_basics"><span></span>Basic Semantic Markup</h4>

<p>Below are some basic examples of the most common areas of markup and how they should be semantically marked up. There are also examples of common markup of
these areas for comparison.</p>

<h5><span></span>Paragraphs</h5>

<p>This is probably the most basic piece of <abbr title="HyperText Markup Language">HTML</abbr> markup that is probably the most frequently used element on a website.
This is extremely basic, though some developers think that when moving to table less design they should only use the <code>&lt;div&gt;</code> tag.</p>

<pre><code class="html">&lt;div&gt;This is an incorrect method to mark up a paragraph.&lt;/div&gt;

&lt;p&gt;This is how you should mark up paragraphs. Clever 'eh?&lt;/p&gt;
</code></pre>

<h5><span></span>Headings</h5>

<p>Headings are one of the most important markup tools available in <abbr title="HyperText Markup Language">HTML</abbr>. They have differing default
font sizes so without any stylesheets applied a page has a definite structure. Headings give important information to assistive technologies such as
screen readers as they are easily searchable and provide invaluable information quickly about the page layout and structure.</p>

<p>There are a total of six levels of headings, however it is recommended that only a maximum of four or five levels should be used per page. The highest level,
<code>h1</code> should only be used once per page, and this is usually appropriate for the company/site name. Site sections should use level 2 headings, <code>h2</code>,
again probably only one per page. Level three headings, <code>h3</code>, should then be used to mark up the page sections.</p>

<pre><code class="html">&lt;div id="header"&gt;Title of Site.&lt;/div&gt;
&lt;p&gt;&lt;b&gt;Contact Us&lt;/b&gt;&lt;/p&gt;

&lt;h1&gt;Title of Site&lt;/h1&gt;
&lt;h2&gt;Contact Us&lt;/h2&gt;
</code></pre>

<!--
<p>Each article on this website has a maximum of five headings.</p>

<dl>
<dt>Level One, <code>h1</code></dt>
<dd>The site title - Unrestricted Access.</dd>

<dt>Level Two, <code>h2</code></dt>
<dd>The site section - Home, Web Standards, Web Accessibility, Development Articles, Interviews &amp; References.</dd>

<dt>Level Three, <code>h3</code></dt>
<dd>The article name - eg The Semantic Web.</dd>

<dt>Level Four, <code>h4</code></dt>
<dd>The articles main sections - eg Introduction, Conclusion &amp; Further Reading &amp; Resources.</dd>

<dt>Level Five, <code>h5</code></dt>
<dd>Specific information within the section - eg Paragraphs &amp; Headings.</dd>
</dl>
-->

<p>The correct use of headings on a website also helps search engines rank sites and can provide good search page rankings. However, abusing headings
can lead to sites being blocked by search engines because this method is used on websites trying to trick search engines for higher rankings.</p>

<h5><span></span>Lists</h5>

<p>Both unordered and ordered lists are powerful markup tools. The main area where unordered lists are useful is the navigation. The navigation area is
simply just a list of links and should be marked up accordingly. A lot of websites use a horizontal navigation area, and this is easily achievable with the
appropriate <abbr title="Cascading Style Sheets">CSS</abbr> applied.</p>

<pre><code class="html">&lt;p&gt;Link 1 | Link 2 | Link 3&lt;/p&gt;

&lt;ul id="navigation"&gt;
&lt;li&gt;Link 1&lt;/li&gt;
&lt;li&gt;Link 2&lt;/li&gt;
&lt;li&gt;Link 3&lt;/li&gt;

&lt;/ul&gt;
</code></pre>

<p>The semantic markup is more useful when stylesheets are not applied and more powerful in assistive technologies such as screen readers. Screen readers
can provide the user with information such as how many links are in the list and provide a means of skipping over the whole area. This is useful for long lists
of links, such as those found in the navigation area of a site.</p>


<h4 id="conclusion"><span></span>Conclusion</h4>

<p>All this may seem extremely straight forward, and that is the whole point; semantics isn't hard, it's just common sense. When marking up
a page just keep in mind the semantics of the content and how the page appears when it is unstyled. With these guidelines creating semantic,
accessible pages should become easy.</p>

<p>The most common problem when creating a semantic page is knowing all the elements. There is a
<a href="references/html">chart of all the available elements</a> under the reference section.</p>

<?php require_once('further_reading.php'); ?>

<dl>
	<dt><abbr title="World Wide Web Consortium">W3C</abbr> Semantic Web</dt>
	<dd>
	<blockquote cite="http://www.w3.org/2001/sw/">
	<p>The Semantic Web is an extension of the current web in which information is given well-defined meaning,
	better enabling computers and people to work in cooperation.</p>
	<p><cite><a href="http://www.w3.org/2001/sw/" title="W3C Semantic Web">http://www.w3.org/2001/sw/</a></cite></p>
	</blockquote>
	</dd>
</dl>

<dl>
	<dt>Use <code>class</code> with Semantics in Mind</dt>
	<dd>
	<blockquote cite="http://www.w3.org/QA/Tips/goodclassnames">
	<p>Often people use class names like bluetext, or redborder. A much better way to name your classes is with the role a certain
	<abbr title="HyperText Markup Language">HTML</abbr> element of that class has.</p>
	<p><cite><a href="http://www.w3.org/QA/Tips/goodclassnames" title="Use class with Semantics in Mind">
	http://www.w3.org/QA/Tips/goodclassnames</a></cite></p>
	</blockquote>
	</dd>
</dl>

<dl>
	<dt>Semantics, <abbr title="HyperText Markup Language">HTML</abbr>, <abbr title="Extensible HyperText Markup Language">XHTML</abbr>, and Structure</dt>
	<dd>
	<blockquote cite="http://www.brainstormsandraves.com/articles/semantics/structure/">
	<p>Good <abbr title="HyperText Markup Language">HTML</abbr> structure is based on logic, order, and using semantically correct markup.
	If you have a heading use the heading element, beginning with the <code>H1</code> element. If you have a paragraph, use a paragraph element.</p>
	<p><cite><a href="http://www.brainstormsandraves.com/articles/semantics/structure/" title="Semantics, HTML, XHTML, and Structure">
	http://www.brainstormsandraves.com/articles/semantics/structure/</a></cite></p>
	</blockquote>
	</dd>
</dl>

<dl>
	<dt>mozilla.org Markup Reference</dt>
	<dd>
	<blockquote cite="http://www.mozilla.org/contribute/writing/markup">
	<p>The purpose of this document is to define a rich vocabulary of semantic classes whose presentation can be
	specified in site-wide style sheets�enough to be able to write a long, involved, well-styled document without once writing a
	<abbr title="Cascading Style Sheets">CSS</abbr> rule.</p>
	<p><cite><a href="http://www.mozilla.org/contribute/writing/markup" title="mozilla.org Markup Reference">
	http://www.mozilla.org/contribute/writing/markup</a></cite></p>
	</blockquote>
	</dd>
</dl>

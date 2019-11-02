<h3><span></span>Advanced Semantics</h3>

<h4 id="introduction"><span></span>Introduction</h4>

<p>This article looks deeper into semantic <abbr title="HyperText Markup Language">HTML</abbr> markup using a lot of uncommon elements.
The article also discusses the differences between <code>abbr</code> and <code>acronym</code> and documents browser problems associated with them.</p>

<p>If you would like to know about the basics of semantics on the web, read <a href="web_standards/the-semantic-web">The Semantic Web</a> article.</p>


<h4 id="uncommon"><span></span>Uncommon Elements</h4>

<h5><span></span>Address</h5>

<p><code>address</code> should be used when making up an address, such as contact information. Setting the block to be preformatted will achieve the
desired effect when stylesheets are enabled, but the address would lose meaning without it. To create line breaks within this element <code>&lt;br&gt;</code>
should be used as the line breaks are part of the content and not purely visual.</p>

<pre><code class="html">&lt;address&gt;
## Road Name&lt;br&gt;
Town/City Name&lt;br&gt;
State/County&lt;br&gt;
Zip/Postcode
&lt;/address&gt;
</code></pre>

<h5><span></span>Code</h5>

<p><code>code</code> should be used to mark up sections of computer code which is useful in tutorials. <code>code</code> is an inline element so it can
be used in sentences. For example:</p>

<pre><code class="html">&lt;p&gt;&lt;code&gt;table&lt;/code&gt; is a HTML element.&lt;/p&gt;</code></pre>

<p>When displaying large blocks of data <code>pre</code> should also be used, as a container. <code>pre</code> also maintains white-space within
the block, so indentations are kept. Below is an example block of some <abbr title="Cascading Style Sheets">CSS</abbr> which also demonstrates
the use of <code>pre</code> and maintaining white-space:</p>

<pre><code class="html">&lt;pre&gt;&lt;code&gt;
body {
  width: 100px;
  background-color: #ccc;
}
&lt;/code&gt;&lt;/pre&gt;</code></pre>

<h5><span></span>Deleted and Inserted</h5>

<p><code>del</code> and <code>ins</code> should be used when information is deleted and inserted to a document after its initial publication date.
Both elements can have a <code>cite</code> or <code>datetime</code> attribute to provide more information on the changes. By default deleted elements
have a line-through styling and inserted elements are underlined.</p>

<pre><code class="html">I am going to buy a new &lt;del&gt;red&lt;/del&gt; &lt;ins&gt;blue&lt;/ins&gt; car.</code></pre>


<h4 id="abbreviations"><span></span>Abbreviations and Acronyms</h4>

<h5><span></span>Definitions</h5>

<p>All acronyms and initialisms are abbreviations, however, all abbreviations are not acronyms or initialisms.
Below are some definitions of abbreviations, acronyms and initialisms.</p>

<dl id="abbreviations">
<dt>Abbreviation</dt>
<dd><p>Is a word that has been abbreviated/shortened, or a string of words that have been reduced.</p></dd>
<dd>Examples:
	<dl>
	 <dt>btw</dt>
	 <dd>by the way</dd>
	 <dt>sysadmin</dt>
	 <dd>System Administrator</dd>
	 <dt>doctype</dt>
	 <dd>Document Type</dd>
	</dl>
</dd>

<dt>Acronym</dt>
<dd><p>Is a special type of abbreviation where the abbreviation is itself a new word that is able to be spoken. It can be generated
by the shortening of words/phrases or by taking the initial letter of a phrase.</p></dd>
<dd>Examples:
	<dl>
	 <dt>NASA</dt>
	 <dd>National Aeronautics and Space Administration</dd>
	 <dd>Pronounced: Nassa</dd>
	 <dt>GUI</dt>
	 <dd>Graphical User Interface</dd>
	 <dd>Pronounced: Gooey</dd>
	 <dt>NATO</dt>
	 <dd>North Atlantic Treaty Organization </dd>
	 <dd>Pronounced: Naytoe</dd>
	</dl>
</dd>

<dt>Initialism</dt>
<dd><p>Is when the abbreviation is generated out of the initial letters and each letter is read/spelt out.</p></dd>
<dd>Examples:
	<dl>
	 <dt>HTML</dt>
	 <dd>HyperText Markup Language</dd>
	 <dt>CSS</dt>
	 <dd>Cascading Style Sheets</dd>
	 <dt>PNG</dt>
	 <dd>Portable Network Graphic</dd>
	</dl>
</dd>
<dd><p>Unfortunately there isn't an <code>&lt;intitalism&gt;</code> element in <abbr title="HyperText Markup Language">HTML</abbr>.</p></dd>
</dl>

<p>Because there is such confusion of when it is appropriate to use <code>acronym</code>, mark up all abbreviations as <code>abbr</code>
and only change those that can be positively identified as acronyms after. This is because screen readers and other assistive technologies treat acronyms differently
and attempt to speak them.</p>

<h5><span></span>Markup</h5>

<p>Both abbreviations and acronyms have a <code>title</code> attribute. This is displayed as a tooltip when a user hovers over the word.</p>

<pre><code class="html">&lt;abbr title="HyperText Markup Language"&gt;HTML&lt;/abbr&gt;

&lt;acronym title="Graphical User Interface"&gt;GUI&lt;/acronym&gt;</code></pre>

<h5><span></span>Browser Compatibility</h5>

<p>Due to historical reasons Microsoft's Internet Explorer doesn't support <code>abbr</code>. By default browsers add a dotted bottom border to both abbreviations
and acronyms and both can be styled using <abbr title="Cascading Style Sheets">CSS</abbr>. However, Internet Explorer ignores any <abbr title="Cascading Style Sheets">CSS</abbr>
styling applied to <code>abbr</code> and does not show any default styling either. Because of this a lot of developers incorrectly use
<code>acronym</code> to mark up all their abbreviations.</p>

<p>There are solutions for <abbr title="Internet Explorer">IE</abbr>'s lack of <code>abbr</code> support. Although <abbr title="Internet Explorer">IE</abbr>
doesn't support <code>abbr</code> it does support elements nested within them. A simple method is to nest a <code>span</code> within the <code>abbr</code>
and style using selectors like the follow:</p>

<pre><code class="html">abbr span {
  cursor: help;
  border-bottom: 1px dotted #000
}

&lt;abbr title="Graphical User Interface"&gt;
&lt;span title="Graphical User Interface"&gt;GUI&lt;/span&gt;&lt;/abbr&gt;
</code></pre>

<p>This method requires a lot of reduntant code to allow for the support. The <code>title</code> also should be repeated on both the <code>abbr</code>
and <code>span</code> elements, though can only be applied to the <code>span</code>.</p>

<p>An automated method exists which uses Javascript to repeat the method above but as the page is loaded, client-side. This can be found in an 
external articled titled
<a href="http://www.sovavsiti.cz/css/abbr.html" title="View the Styling &lt;abbr&gt; in IE article">Styling &lt;abbr&gt; in <abbr title="Internet Explorer">IE</abbr></a>.</p>

<?php
require_once('further_reading.php');
?>

<dl>
	<dt>Forgotten Element Types</dt>
	<dd>
	<blockquote cite="http://www.autisticcuckoo.net/archive.php?id=2004/12/15/forgotten-element-types">
	<p>Graphic design is, of course, the sexy part of web design. A perhaps somewhat more boring aspect &mdash;
	although very important nevertheless &mdash; deals with structure and semantics.</p>
	<p><cite><a href="http://www.autisticcuckoo.net/archive.php?id=2004/12/15/forgotten-element-types" title="Forgotten Element Types">
	http://www.autisticcuckoo.net/archive.php?id=2004/12/15/forgotten-element-types</a></cite></p>
	</blockquote>
	</dd>
</dl>

<dl>
	<dt>Explaining Abbreviations, Acronyms and Symbols on Web pages</dt>
	<dd>
	<blockquote cite="http://www.cs.tut.fi/~jkorpela/html/abbr.html">
	<p>There is some markup in <abbr title="HyperText Markup Language">HTML</abbr> that we can use for abbreviations and acronyms. However, such markup
	should not be regarded as a replacement for explicit explanations in normal document content. The real need is to explain to users
	all notations that might otherwise be unknown to them or have meanings that differ from their expectations.</p>
	<p><cite><a href="http://www.cs.tut.fi/~jkorpela/html/abbr.html" title="Explaining Abbreviations, Acronyms and Symbols on Web pages">
	http://www.cs.tut.fi/~jkorpela/html/abbr.html</a></cite></p>
	</blockquote>
	</dd>
</dl>

<dl>
	<dt><abbr title="HyperText Markup Language">HTML</abbr> is not an Acronym...</dt>
	<dd>
	<blockquote cite="http://www.evolt.org/article/HTML_is_not_an_acronym/17/35750/index.html">
	<p>As a result many developers (including myself, for a time) use acronym in place of abbr. Unfortunately, this is exactly the
	opposite thing that should be done: when in doubt, wrap the abbreviation/acronym/initialism with abbr. Even if it is an acronym,
	the mark-up will be semantically correct.</p>
	<p><cite><a href="http://www.evolt.org/article/HTML_is_not_an_acronym/17/35750/index.html" title="HTML is not an Acronym...">
	http://www.evolt.org/article/HTML_is_not_an_acronym/17/35750/index.html</a></cite></p>
	</blockquote>
	</dd>
</dl>

<dl>
	<dt><code>&lt;abbr&gt;</code> vs <code>&lt;acronym&gt;</code> in the <abbr title="HyperText Markup Language">HTML</abbr> 4 Specification</dt>
	<dd>
	<blockquote cite="http://www.benmeadowcroft.com/webdev/articles/abbr-vs-acronym.shtml">
	<p>If you've read the <abbr title="HyperText Markup Language">HTML</abbr> 4 specification recently trying to understand the difference between the
	<code>abbr</code> and <code>acronym</code> elements you may have come away feeling a little confused, I know I did. This article contains
	an explanation of the difference between the two tags, and when it is appropriate to use one or the other. The first element of business
	then is to explain what each of the words means, to do this I've enlisted the help of my trusty dictionary.</p>
	<p><cite><a href="http://www.benmeadowcroft.com/webdev/articles/abbr-vs-acronym.shtml" title="&lt;abbr&gt; vs &lt;acronym&gt; in the HTML 4 Specification">
	http://www.benmeadowcroft.com/webdev/articles/abbr-vs-acronym.shtml</a></cite></p>
	</blockquote>
	</dd>
</dl>

<dl>
	<dt>Why You Should Use Acronyms and Abbreviations</dt>
	<dd>
	<blockquote cite="http://www.accessify.com/tools-and-wizards/acrobot/why-you-should-use-acronyms-and-abbreviations.asp">
	<p>However, adding the <code>&lt;abbr&gt;</code> vs <code>&lt;acronym&gt;</code> tag with the appropriate title attribute can
	benefit you and people browsing your sites in a number of ways...</p>
	<p><cite><a href="http://www.accessify.com/tools-and-wizards/acrobot/why-you-should-use-acronyms-and-abbreviations.asp" title="Why You Should Use Acronyms and Abbreviations">
	http://www.accessify.com/tools-and-wizards/acrobot/why-you-should-use-acronyms-and-abbreviations.asp</a></cite></p>
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
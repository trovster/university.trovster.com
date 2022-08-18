<h3>Semantic Conversation Mark-up</h3>

<h4 id="introduction"><span></span>Introduction</h4>

<p>There are interpretations on the <abbr title="World Wide Web Consortium">W3C</abbr> specifications on exactly how to
mark up quite specific content. This article discuss two different method of marking up conversations on the web.</p>

<h4 id="specification">The Specifications</h4>

<p>The World Wide Web Constortiums <abbr title="HyperText Markup Language">HTML</abbr> 4.01 specification states:</p>

<blockquote cite="http://www.w3.org/TR/html401/struct/lists.html#edef-DL">
<p>Another application of <code>DL</code>, for example, is for marking up dialogues, with each
<code>DT</code> naming a speaker, and each <code>DD</code> containing his or her words.</p>
<p><cite><a href="http://www.w3.org/TR/html401/struct/lists.html#edef-DL" title="W3C Suggested Application of a Definition List">
http://www.w3.org/TR/html401/struct/lists.html#edef-DL</a></cite></p>
</blockquote>

<pre><code class="html">&lt;dl&gt;
&lt;dt&gt;Term&lt;/dt&gt;
&lt;dd&gt;Definition/Description&lt;/dd&gt;
&lt;/dl&gt;
</code></pre>

<p>This provides a good relationship between the speaker and what the speaker says.
The default unstyled output may not be what is required but with the use of
<abbr title="Cascading Style Sheets">CSS</abbr> it can be made to look like dialogs
found on a wide range of applications including <abbr title="Internet Relay Chat">IRC</abbr>
and personal instant messaging programs such as <abbr title="Microsoft Network">MSN</abbr> Messenger.</p>

<pre><code class="html">&lt;dl&gt;
&lt;dt&gt;Trovster&lt;/dt&gt;
&lt;dd&gt;Come on need convo examples...&lt;/dd&gt;

&lt;dt&gt;H&aring;vard&lt;/dt&gt;
&lt;dd&gt;Convo examples?! They're right here!&lt;/dd&gt;
&lt;/dl&gt;
</code></pre>

<h5>Unstyled Conversation</h5>
<dl class="example">
<dt>Trovster</dt>
<dd>Come on need convo examples...</dd>
<dt>H&aring;vard</dt>
<dd>Convo examples?! They're right here!</dd>
</dl>

<h5><abbr title="Microsoft Network">MSN</abbr> Messenger Styled Conversation</h5>

<p class="note">This uses the <abbr title="Cascading Style Sheets">CSS</abbr> psuedo-class
<code>:after</code> and property <code>content</code> which Microsoft Internet Explorer doesn't understand. Using the
<abbr title="Cascading Style Sheets">CSS</abbr> below will add &quot; says:&quot; after the name.</p>

<pre><code class="html">&lt;dl&gt;
&lt;dt&gt;Trovster&lt;/dt&gt;
&lt;dd class="trovster"&gt;Come on need convo examples...&lt;/dd&gt;
&lt;dt&gt;H&aring;vard&lt;/dt&gt;
&lt;dd class="havard"&gt;Convo examples?! They're right here!&lt;/dd&gt;
&lt;/dl&gt;
</code></pre>

<pre><code class="css">dl dt
{
color: #666;
}
dl dt:after
{
content: " says:";
}
dl dd
{
margin-left: 20px;
}
dl dd.havard
{
font-family: Lucida Sans Unicode;
color: #0000AD;
}
dl dd.trovster
{
font-family: Arial;
color: #004080;
}
</code></pre>

<dl id="msn" class="example">
<dt>Trovster</dt>
<dd class="trovster">Come on need convo examples...</dd>
<dt>H&aring;vard</dt>
<dd class="havard">Convo examples?! They're right here!</dd>
</dl>

<h5><abbr title="Internet Relay Chat">IRC</abbr> Styled Conversation</h5>

<p class="note">This uses the <abbr title="Cascading Style Sheets">CSS</abbr> psuedo-classes
<code>:after</code>, <code>:before</code> and property <code>content</code> which Microsoft Internet Explorer
doesn't understand. Using the <abbr title="Cascading Style Sheets">CSS</abbr> below will add &lt; before and &gt; after the name.</p>

<pre><code class="css">dl dd
{
margin-left: 20px;
}
dl dt
{
float: left;
margin-right: 10px;
}
dl dt, dl dd
{
font-family: monospace;
}
dl dt:before
{
content: "&lt;";
}
dl dt:after
{
content: "&gt;";
}
</code></pre>

<dl id="irc" class="example">
<dt>Trovster</dt>
<dd>Come on need convo examples...</dd>
<dt>H&aring;vard</dt>
<dd>Convo examples?! They're right here!</dd>
<dd class="clear"></dd>
</dl>

<p>In both the <abbr title="Microsoft Network">MSN</abbr> Messenger and <abbr title="Internet Relay Chat">IRC</abbr>
styled examples, <abbr title="Cascading Style Sheets">CSS</abbr>2 properties were used and as stated before,
Internet Explorer doesn't understand these properities. You can add the <abbr title="Microsoft Network">MSN</abbr>
Messenger &quot; says:&quot; to the the content mark-up, however, the addition of the <abbr title="Internet Relay Chat">IRC</abbr>
&lt; and &gt; is purely presentational and should, for clean code, semantics and change of style ease, be placed
within the stylesheet.</p>

<h4 id="better_semantics">Better Semantics?</h4>

<p>A recorded conversation can be expressed as quotes of each person following in a specific descending time order.</p>

<blockquote cite="http://www.w3.org/TR/REC-html40/struct/text.html#h-9.2.2">
<p>These two elements designate quoted text. <code>BLOCKQUOTE</code> is for long quotations
(block-level content) and <code>Q</code> is intended for short quotations (inline content)
that don't require paragraph breaks.</p>
<p><cite><a href="http://www.w3.org/TR/REC-html40/struct/text.html#h-9.2.2" title="W3C Definition of the Use of Quotes">
http://www.w3.org/TR/REC-html40/struct/text.html#h-9.2.2</a></cite></p>
</blockquote>

<p>An alternative, more semantic method of mark-up is to use quotes and citations.
The <abbr title="HyperText Markup Language">HTML</abbr> tags appropriate to this type of
mark-up would be <code>cite</code>, <code>q</code> and <code>blockquote</code>. Below are two examples of
semantic mark-up:</p>

<pre><code class="html">&lt;p&gt;&lt;cite&gt;Name&lt;/cite&gt;&lt;/p&gt;
&lt;blockquote lang="en-us"&gt;&lt;p&gt;Paragraph Quotation.&lt;/p&gt;&lt;/blockquote&gt;
</code></pre>

<p>Or alternatively...</p>

<pre><code class="html">&lt;p&gt;&lt;cite&gt;Name&lt;/cite&gt;
&lt;q lang="en-us"&gt;Sentance Quotation.&lt;/q&gt;&lt;/p&gt;
</code></pre>

<blockquote cite="http://www.w3.org/TR/html401/struct/text.html#edef-Q">
<p>Visual user agents must ensure that the content of the <code>Q</code> element
is rendered with delimiting quotation marks. Authors should not put quotation
marks at the beginning and end of the content of a <code>Q</code> element.</p>
<p><cite><a href="http://www.w3.org/TR/html401/struct/text.html#edef-Q" title="W3C Definition of the HTML Q Element">
http://www.w3.org/TR/html401/struct/text.html#edef-Q</a></cite></p>
</blockquote>

<p>This states that if you use the <code>q</code> <abbr title="HyperText Markup Language">HTML</abbr> element,
quotation marks should be added automatically before and after the quotation. If you want to remove these quotation
marks, for example when styling <abbr title="Microsoft Network">MSN</abbr> Messenger and
<abbr title="Internet Relay Chat">IRC</abbr> conversations, you can use the
<abbr title="Cascading Style Sheets">CSS</abbr> from the example below. Most user-agents apply this
however, Internet Explorer doesn't so there will be no visible difference.</p>

<h5>Unstyled, Semantic Conversation</h5>

<pre><code class="html">&lt;p&gt;&lt;cite&gt;Trovster&lt;/cite&gt;
&lt;q&gt;Come on need convo examples...&lt;/q&gt;&lt;/p&gt;

&lt;p&gt;&lt;cite&gt;H&aring;vard&lt;/cite&gt;
&lt;q&gt;Convo examples?! They're right here!&lt;/q&gt;&lt;/p&gt;
</code></pre>

<div class="example">
<p><cite>Trovster</cite>
<q>Come on need convo examples...</q></p>

<p><cite>H&aring;vard</cite>
<q>Convo examples?! They're right here!</q></p>
</div>

<h4>Quotations Removed and Styled Conversation</h4>

<pre><code class="css">q
{
display: block;
}
q:before, q:after
{
content: "";
}
</code></pre>

<div id="quote" class="example">
<p><cite>Trovster</cite>
<q>Come on need convo examples...</q></p>

<p><cite>H&aring;vard</cite>
<q>Convo examples?! They're right here!.</q></p>
</div>


<h4 id="combinations"><span></span>Combination of Both Methods</h4>

<p>Below shows a combination of the definition list, <code>dl</code>, inline quotation, <code>q</code> and citation, <code>cite</code>.</p>

<pre><code class="html">&lt;dl&gt;
&lt;dt&gt;&lt;cite&gt;Trovster&lt;/cite&gt;&lt;/dt&gt;
&lt;dd&gt;&lt;q&gt;Come on need convo examples...&lt;/q&gt;&lt;/dd&gt;

&lt;dt&gt;&lt;cite&gt;H&aring;vard&lt;/cite>&lt;/dt&gt;
&lt;dd&gt;&lt;q&gt;Convo examples?! They're right here!.&lt;/q&gt;&lt;/dd&lt;
&lt;/dl&gt;
</code></pre>

<p>This method provides increased semantic meaning by combining both ideas. It provides more control than the plain <code>q</code> and
<code>cite</code> example, but has more meaning than purely using a definition list.</p>

<?php require_once('further_reading.php'); ?>

<dl>
	<dt>Definition Lists &mdash; Misused or Misunderstood?</dt>
	<dd>
	<blockquote cite="http://www.maxdesign.com.au/presentation/definition/">
	<p>What are definition lists? When are they appropriate? And how to style them to look like tables,
	image galleries, calendar of events and more.</p>
	<p><cite><a href="http://www.maxdesign.com.au/presentation/definition/" title="Definition Lists &mdash; Misused or Misunderstood?">
	http://www.maxdesign.com.au/presentation/definition/</a></cite></p>
	</blockquote>
	</dd>
</dl>

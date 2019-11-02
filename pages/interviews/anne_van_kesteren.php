<h4><span></span>Introduction</h4>

<p id="intro">Anne van Kesteren lives in Zeist in The Netherlands where he runs his own web development company, Limpid. However, Anne, is more widely known through his
<a href="http://annevankesteren.nl/" title="Anne van Kesteren's weblog">Weblog about markup style</a>, where he explores the depths of
<abbr title="Extensible Markup Language">XML</abbr>, <abbr title="Extensible Hypertext Markup Language">XHTML</abbr> and <abbr title="Cascading Style Sheets">CSS</abbr>.</p>

<h4><span></span>Interview</h4>

<?php
ob_start();
?>

<dl id="interview">

	<dt id="q1">Q1. Let's start by setting the record straight. When should you send <abbr title="Extensible Hypertext Markup Language">XHTML</abbr>
	 as '<code>text/html</code>', and when should you send it as '<code>application/xhtml+xml</code>'?</dt>
	<dd> 
		<p>When possible, send it with the (specific) <abbr title="Extensible Markup Language">XML</abbr> content-type, '<code>application/xhtml+xml</code>'.
		That way you are sure that your document is well-formed. This is quite important, since most people (including me) still rely on browser
		results and not on the validator. What I mean is, they do trust the validator, but don't validate their pages when the browser does not
		have any problems displaying their pages.</p>
		<p>Using the correct content-type, the better browsers will give you a not well-formed error, which automatically leads to updating that page
		(having errors on your page is not that cool).</p>
		<p>Another problem with '<code>text/html</code>' is that your document is treated as <abbr title="Hypertext Markup Language">HTML</abbr>,
		not as <abbr title="Extensible Hypertext Markup Language">XHTML</abbr>. There are some
		<a href="http://annevankesteren.nl/archives/2004/02/canvas" title="Anna van Kesteren talks about Canvas">small differences</a> in handling of
		<abbr title="Cascading Style Sheet">CSS</abbr> that you might not understand the first time you use '<code>application/xhtml+xml</code>'. To name an example:
		in <abbr title="Hypertext Markup Language">HTML</abbr> documents, the '<code>background</code>' property applied to the <code>body</code> element will be
		"re-applied" by the browser to the 'viewport' so that the image or color covers the entire screen and not just the <code>body</code> element.
		You might have guessed it, in <abbr title="Extensible Markup Language">XML</abbr> this is different. The <code>body</code> element hasn't got any special treatments at
		all in such documents and behaves like it was a <code>div</code> with some default styling ('<code>padding</code>', '<code>margin</code>').</p>
		<p>To conclude, I think it is ok if you are sending your <abbr title="Extensible Hypertext Markup Language">XHTML</abbr>
		1.0 documents as '<code>text/html</code>' as long as you are aware what problems it might give in the future.</p>
	</dd>
	

	<dt id="q2">Q2 If you choose to serve '<code>application/xhtml+xml</code>', how do you work around browsers that don't support it?</dt>
	<dd>
		<p>There are multiple options. The most extensive one I have seen is written in
		<a href="http://keystonewebsites.com/articles/mime_type.php" title="Serving up XHTML with the correct MIME type">PHP</a>.
		This one takes into account the vary header, which is too complicated to explain here. Other solutions have been provided long ago in a
		column from Mark Pilgrim: "<a href="http://www.xml.com/pub/a/2003/03/19/dive-into-xml.html" title="The Road to XHTML 2.0: MIME Types">The Road to
		<abbr title="Extensible Hypertext Markup Language">XHTML</abbr> 2.0: <abbr title="Multipurpose Internet Mail Extension">MIME</abbr> Types</a>".
		A real world example can be found at the <a href="http://www.w3.org/" title="World Wide Web Consortium"><abbr title="World Wide Web Consortium">W3C</abbr></a>.</p>
	</dd>
	
	
	<dt id="q3">Q3. Why use <abbr title="Extensible Hypertext Markup Language">XHTML</abbr> instead of <abbr title="Hypertext Markup Language">HTML</abbr>?
	What are the advantages and is <abbr title="Hypertext Markup Language">HTML</abbr> still appropriate in some cases?</dt>
	<dd> 
		<p>Probably the most difficult question. I think people will have to choose this for themselves, what they like best.
		Personally, I like <abbr title="Extensible Hypertext Markup Language">XHTML</abbr>, because the syntax is very easy
		compared to the <abbr title="Standard Generalized Markup Language">SGML</abbr> syntax.</p>
		<p>Sometimes however, I really like the way you can minimalize everything in <abbr title="Hypertext Markup Language">HTML</abbr>
		(and I don't mean writing crappy code). Leaving out both start and end tags of an element
		(<code><abbr title="Hypertext Markup Language">HTML</abbr></code>, <code>head</code> and <code>body</code> element), leaving out the end tags
		of <code>li</code>, <code>p</code> etc. 
		</p>
	</dd>
	

	<dt id="q4">Q4 You have talked about pages that are not well-formed being a bigger problem than invalid pages. Why is that?</dt>
	<dd> 
		<p>Most of the pages that are invalid are not well-formed. Using the correct content-type on these pages will make the browser
		return an error (not well-formed). Trying to retrieve some information from a page (without using
		<abbr title="Hypertext Markup Language">HTML</abbr> Tidy) with <abbr title="Extensible Stylesheet Language Transformation">XSLT</abbr>
		and your parser will return an error. If a page is well-formed, but invalid you won't have these problems.</p>
		<p>One of the major advantages of <abbr title="Extensible Markup Languag">XML</abbr> (and therefore
		<abbr title="Extensible Hypertext Markup Language">XHTML</abbr>) is that it does not need to validate. It needs to conform to a set of easy
		rules and that's it. (Of course, rules get more complicated if you want to do more specific things, but those are mostly never possible
		with <abbr title="Standard Generalized Markup Language">SGML</abbr> anyway.)</p>
		<p><abbr title="Hypertext Markup Language">HTML</abbr> however, needs to be valid, otherwise, it can't be parsed. Well, it can,
		thanks to quirks mode, which solves a lot of problems older web pages have (and some newer pages have those problem as well, unfortunately).</p>
		<p>Currently, we can't take advantage of invalid, well-formed <abbr title="Extensible Hypertext Markup Language">XHTML</abbr> since there
		is at least one browser that doesn't support it. It will parse the <abbr title="Extensible Hypertext Markup Language">XHTML</abbr> just as
		<abbr title="Hypertext Markup Language">HTML</abbr> and therefore <abbr title="Extensible Hypertext Markup Language">XHTML</abbr> needs to be valid.
		In the future, we could create documents, where we skip some elements that are unnecessary for the document. Simple example:</p>
		
		<pre><code class="html">&lt;html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"&gt;
&#160;&#160;&#160;&#160;&lt;title&gt;Webstandards Group!&lt;/title&gt;
&#160;&#160;&#160;&#160;&lt;p&gt;An example of minimalized markup.&lt;/p&gt;
&lt;/html&gt;</code></pre>
		<p>(Note: Mozilla supports this really well)</p>
	</dd>
	
	
	<dt id="q5">Q5 Recently you wrote that <abbr title="Extensible Hypertext Markup Language">XHTML</abbr> is not a step between now and the future? Could you elaborate?</dt>
	<dd>
		<p>There are some books I bought that had this little "preview" in what was coming after
		<abbr title="Hypertext Markup Language">HTML</abbr>, <abbr title="Extensible Markup Languag">XML</abbr>. Between
		now, <abbr title="Hypertext Markup Language">HTML</abbr>, and then, <abbr title="Extensible Markup Languag">XML</abbr>, web authors
		could play with <abbr title="Extensible Hypertext Markup Language">XHTML</abbr> to get used to the <abbr title="Extensible Markup Languag">XML</abbr> syntax.</p>
		<p>Of course, <abbr title="Extensible Hypertext Markup Language">XHTML</abbr> showed us how <abbr title="Extensible Markup Languag">XML</abbr> would
		be and what we could do with it. (The specification tells about <abbr title="Extensible Stylesheet Language Transformation">XSLT</abbr>
		and related advantages.) However, that doesn't mean that every author will use his own custom version of
		<abbr title="Extensible Markup Languag">XML</abbr> in the future.	An important aspect of modern web design are semantics of a web page.</p>
		<p>If we have two examples:</p>
		
		<ol>
		<li><code>&lt;h1&gt;Header&lt;/h1&gt;</code></li>
		<li><code>&lt;header&gt;Header&lt;/header&gt;</code></li>
		</ol>

		<p>In example one it might be less obvious what the content is for a human being. The second example tells that with more detail,
		the content is a 'header' and the value is 'Header'. From that point of view, we could say that the second example, which is a pure
		<abbr title="Extensible Markup Languag">XML</abbr> example, has more semantics.</p>
		<p>The first example however, is understood by far more software (and some <abbr title="Hypertext Markup Language">HTML</abbr>
		authors who really used elements, rather than some <code>&lt;p&gt;&lt;b&gt;Header&lt;/b&gt;&lt;/p&gt;</code> construct).
		Software can't read the content, but it can sort content by value. Most search engines recognize <abbr title="Hypertext Markup Language">HTML</abbr> elements,
		like <code>h1</code>, which is a quite important element on the page. Google (to pick a search engine),
		doesn't recognize HEADER, it can't read like you and me.</p>
		<p>So until someone invents a language that can describe the semantics of <abbr title="Extensible Markup Languag">XML</abbr> elements and
		that language would be understood by software, <abbr title="Extensible Hypertext Markup Language">XHTML</abbr> will be your first choice.</p>
	</dd>
	
	
	<dt id="q6">Q6. When creating markup, you often start by studying the content first (then taking your dog for a walk)? Why is that?</dt>
	<dd> 
		<p>Well, the dog needs fresh air now and then... I think that content is the most important aspect of a web page.
		I should not generalize that, I think that for informative web sites (like a book store, a news site, etc.) content is the most important thing.</p>
		<p>The reason people visit your page, is that they want to find information as quick as possible. To give them such an experience, you need to
		know something about the content that will eventually end on the site, so you can (in co-operation with the company) organize it in the most optimal form.</p>
		<p>Markup comes after that and personally, I think it is quite important that every piece of content has the correct element. If that is done and it
		works together with the design (obviously, document order affects the layout), the site is as compact as possible and ready for Google.</p>
	</dd>
		
	
	<dt id="q7">Q7. You have said in the past 'Markup is all about personal opinions'. There seems to be many ways to mark up content.
	How do you decide the right element for the job? And is there a perfectly marked up website?</dt>
	<dd> 
		<p>For most of the document content, there are <abbr title="Hypertext Markup Language">HTML</abbr> elements available that cover the semantics the elements need.
		Of course, everything could be more specific, like <code>nl</code> from <abbr title="Extensible Hypertext Markup Language">XHTML</abbr> 2.0 instead of <code>ul</code>,
		but with the current available and implanted markup most of the 'content items' can be described.
		(It is debatable if navigation is actually a part of the content.)</p>
		<p>In some situations this gets quite tricky. For example, sometimes the content would really benefit from a definition list construct,
		but it would be "bad" from a semantic point of view (the structure is nice, but the element has the wrong name). Personally, I choose
		(most of the time) elements with the structure that is needed, over elements like DIV, which might be better from a semantic point of view.</p>
		<p>A perfectly marked up website? No, I don't think there is any. For me, when I think about this subject, I see multiple markup languages,
		each designed for a specific job, combined together using namespaces in a single document.</p>
		<p>On the current web, leaving the design of a site aside, I like web pages with a minimum of markup. I don't have a specific site I like most.</p>
	</dd>

	
	<dt id="q8">Q8. Is perfect accessibility possible on a website?</dt>
	<dd> 
		<p>Tricky question. To answer it we have to know what we understand under accessibility. For me, this is something in the lines of:
		"all document content including images and other multi-media must be available for everyone".</p>
		<p>In that case, accessibility isn't that difficult. Actually, every site could be accessible if people knew how to use
		<abbr title="Hypertext Markup Language">HTML</abbr> (that is for today's web, where all pages are delivered in some form of <abbr title="Hypertext Markup Language">HTML</abbr>).
		Most designers don't understand it, they think it is a tool for displaying their layout. They don't understand that they give the wrong
		semantics to a web document using tables. They don't understand how to use the <code>img</code> element and that an
		<acronym title="Alternative Text"><code>ALT</code></acronym>
		attribute is required. (It must be said though, that <code>img</code> is quite poorly designed.)</p>
	</dd>
		
	
	<dt id="q9">Q9. Is it true you develop in Mozilla then test in Internet Explorer? Do you think it is better to start with a standards
	compliant browser and work backwards?</dt>
	<dd> 
		<p>Both are indeed correct. Actually, for my personal site, I don't even bother to test in IE anymore
		(It must be said that every browser has some kind of strange behaviour on that site).</p>
		<p>I used to develop with Internet Explorer when I started. I mean, why not, it is the browser most people use and those people
		will be your audience most of the time. The problem was however, that I was coding for <abbr title="Internet Explorer">IE</abbr> and all it's specific behaviours
		and quirks. When I tested it in Mozilla afterwards, everything was different.</p>
		<p>That is not an example that standards don't work, they do. It is an example of a developer who thinks the browser is right and
		codes to the browser. Now I'm working in Mozilla, I will still code to some browser quirks (although I know most of them, since I follow lots
		of <abbr title="Hypertext Markup Language">HTML</abbr>/<abbr title="Cascading Style Sheet">CSS</abbr> bugs in Bugzilla), but Mozilla is *much* more standard compliant
		than <abbr title="Internet Explorer">IE</abbr> is. Since most people who create a couple of sites know what a browser supports and what not and most
		people have a list of workarounds it is fairly easy to create a standard compliant site.</p>
	</dd>

	
	<dt id="q10">Q10. Finally, following on from a recent post of yours, do <code>div</code>s and <code>span</code>s have semantic meaning?</dt>
	<dd> 
		<p>I was in the opinion that they didn't have any semantic meaning at all, but
		<a href="http://liorean.web-graphics.com/" title="Liorean at web-graphics.com">Liorean</a> changed my mind:</p>

		<blockquote cite="http://annevankesteren.nl/archives/2004/03/re-the-myth-of-css#comment-913">
			<p>And I want to point out that neither <code>div</code> nor <code>span</code> is without semantic meaning,
			and neither do they play a different role in <abbr title="Extensible Hypertext Markup Language">XHTML</abbr>2 than they do
			in <abbr title="Extensible Hypertext Markup Language">XHTML</abbr>1. A <code>div</code> has the role of a generic division of a document,
			a section of content. There's very few documents on the web where there is no place it's semantically correct to place a
			<code>div</code> to wrap sections. The <code>span</code> has a little weaker meaning, only meaning a generic grouping of text.
			Note that their explicit semantic meaning is a generic one, in difference to the specific semantics of all other
			<abbr title="Hypertext Markup Language">HTML</abbr> elements. The <abbr title="Extensible Hypertext Markup Language">XHTML</abbr>2 section
			element differs in meaning to <code>div</code> in that it is not a generic section of a document, but a generic section of text/content.</p>
			<p><cite><a href="http://annevankesteren.nl/archives/2004/03/re-the-myth-of-css#comment-913" title="Re: The Myth of CSS">
			http://annevankesteren.nl/archives/2004/03/re-the-myth-of-css#comment-913</a></cite></p>
		</blockquote>
	</dd>
</dl>

<?php
$big_string = ob_get_contents();
preg_match_all("/<dt id=/", $big_string, $no_of_questions);
$questions = sizeof($no_of_questions[0]);
ob_end_flush();
?>

<p id="copyright">Interview taken from the Web Standards Group, 4th May 2004
<a href="http://webstandardsgroup.org/features/anne-van-kesteren.cfm" title="Interview with Anne Van Kesteren">http://webstandardsgroup.org/features/anne-van-kesteren.cfm</a></p>
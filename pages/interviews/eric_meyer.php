<h4><span></span>Introduction</h4>

<p id="intro">Eric Meyer is an internationally renowned expert on the subjects of <abbr title="Extensible Hypertext Markup Language">XHTML</abbr>,
<abbr title="Cascading Style Sheets">CSS</abbr> and Web standards. A widely read author, he is also the founder of
<a href="http://www.complexspiral.com/">Complex Spiral Consulting</a>, a company which focuses on helping clients save money and increase
efficiency through the use of standards-oriented Web design techniques.</p>

<h4><span></span>Interview</h4>

<?php
ob_start();
?>

<dl id="interview">

	<dt id="q1">Q1. Your new book, <a href="http://www.amazon.com/exec/obidos/tg/detail/-/0596005253/103-6558715-4067065?v=glance">Cascading Style Sheets:
	The Definitive Guide, 2nd Edition</a>, has just hit the shelves. Before we get into specifics about this, how many books have you published now?
	I swear my local library has an entire Eric Meyer wing!</dt>
	<dd>
		<p>No no, that's the <a href="http://www.molly.com/">Molly Holzschlag</a> wing. I just get an ancillary section near it.
		I've written five titles, one of those being a pocket reference so it may or may not count as a book. (My wife insists that it does.)
		The first one was "<a href="http://www.amazon.com/exec/obidos/tg/detail/-/1565926226/103-6558715-4067065?v=glance">Cascading Style Sheets:
		The Definitive Guide</a>." If you count the second edition of that book (which is on shelves now) as a separate title, then I guess I've done six,
		but I think of the two editions as a single title, even given the amount of work that went into the second edition.</p>
	</dd>
	
	
	<dt id="q2">Q2. In The Definitive Guide, what has been added or updated since the first addition?</dt>
	<dd>
		<p>Almost everything's been updated. The only chapters that didn't really change were the first one, and the chapter on fonts.
		Everything else got moderate to heavy revision and updating. That ranges from reworking old material (as in the Text Formatting chapter)
		to completely tearing down old chapters and rebuilding new ones. For example, the first edition had floating in the Visual Formatting chapter,
		and positioning got its own chapter. I combined floating and positioning into a single chapter, and rewrote most of the formatting
		chapter as Basic Visual Formatting. In a similar manner, the bit about lists in the first edition was moved into its own chapter,
		and a ton more was added, to result in Lists and Generated Content.</p>
		<p>There are three totally new chapters as well: Table Layout, User Interface Styles, and Non-Screen Media.</p>
	</dd>
	

	<dt id="q3">Q3. I have heard rumours that you also have another "Eric Meyer on <abbr title="Cascading Style Sheet">CSS</abbr>" out now.
	What sort of projects are explained in this issue?</dt>
	<dd>
		<p>The rumors are true! We've called it, in a blinding flash of creative genius, "<a href="http://more.ericmeyeroncss.com/">More Eric Meyer on
		<abbr title="Cascading Style Sheet">CSS</abbr></a>."</p>
		<p>They're a little more advanced than the first book, but not by much I'd like to say up front that neither of the
		"...on <abbr title="Cascading Style Sheet">CSS</abbr>" is required to understand the other (although of COURSE you should own both!).</p>
		<p>Readers of the first book will recall that the first project took a table-driven layout and converted it to use a simple table and
		<abbr title="Cascading Style Sheet">CSS</abbr>. In the new book, Project 1 is concerned with taking a page designed using only
		<abbr title="Hypertext Markup Language">HTML</abbr> markup and spacer <acronym title="Graphic Interchange Format">GIF</acronym>s, and converts it
		to an pure <abbr title="Cascading Style Sheet">CSS</abbr> design that uses positioning for layout instead of tables.</p>
		<p>I also have projects that look at styling a photo gallery in various ways, sprucing up a financial report (basically, working with tabular data),
		and using background positioning to get translucency effect in multiple browsers,
		including <abbr title="Internet Explorer">IE</abbr>/<acronym title="Windows">Win</acronym>.</p>
		<p>Then I have a trio of projects that look at using lists in various ways. That includes taking a series of nested lists and turns them
		into a dynamic set of "dropdown" menus that work in most browsers (and that includes
		<abbr title="Internet Explorer">IE</abbr>/<acronym title="Windows">Win</acronym>), as well as using
		<a href="http://www.stopdesign.com">Doug Bowman's</a> <a href="http://www.alistapart.com/articles/slidingdoors/">Sliding Doors</a> technique.</p>
		<p>After that, there are a couple of projects that deal with styling a weblog's entries and then the page around that weblog,
		and the last project in the book takes a <a href="http://csszengarden.com/"><abbr title="Cascading Style Sheet">CSS</abbr> Zen Garden</a> design created by
		<a href="http://www.mezzoblue.com/">Dave Shea</a> and creates the <abbr title="Cascading Style Sheet">CSS</abbr> needed to make it work.
		Basically, Dave gave me a visual design as a Photoshop file, and I pulled it apart to get what I needed.
		So that one steps through the process of taking a design comp and adapting it to existing markup. I also look at ways to use
		<abbr title="Portable Network Graphic">PNG</abbr>s in that project without making the design look horrible in
		<abbr title="Internet Explorer">IE</abbr>/<acronym title="Windows">Win</acronym>. 
		</p>
	</dd>
	
		
	<dt id="q4">Q4. Two years ago, <abbr title="Cascading Style Sheet">CSS</abbr> was rarely talked about. Now it seems to be everywhere!
	What do you think has helped to shift it into mainstream consciousness?</dt>
	<dd>
		<p>It was a confluence of things, really. The first was <abbr title="Internet Explorer">IE</abbr>6 being released with
		<code>DOCTYPE</code> switching, and then later the announcement that there would be no new versions of <abbr title="Internet Explorer">IE</abbr>,
		which created a certain sense of stability. The second was that enough people had enough time to read books and tutorials,
		and experiment with <abbr title="Cascading Style Sheet">CSS</abbr> on their own sites, that some best practices started to emerge from the background.
		The third was what I think of as the Rise of The Artists, where Web designers who had actual graphic design talent
		(such as Doug Bowman, Dave Shea, and Jeffrey Zeldman) and understood <abbr title="Cascading Style Sheet">CSS</abbr> fairly well began to make things happen.
		The <a href="http://www.wired.com/">Wired News</a> redesign, the <abbr title="Cascading Style Sheet">CSS</abbr> Zen Garden, and other sites began
		to show that <abbr title="Cascading Style Sheet">CSS</abbr>-driven design not only worked, but could look pretty darned awesome. 
		</p>
		<p>The increasing availability of easy-to-follow resources like the <a href="http://css.maxdesign.com.au/listutorial/index.htm">Listutorial</a>
		and <a href="http://css.maxdesign.com.au/floatutorial/index.htm">Floatutorial</a> helped quite a bit, too.</p>
	</dd>
	

	<dt id="q5">Q5. For designers and developers who are just getting into web standards, what is the most important aspect of
	<abbr title="Cascading Style Sheet">CSS</abbr> to get a handle on?</dt>
	<dd>
		<p>The #1 most important aspect? I'd have to say the "cascading" part, which encompasses not just the cascade but also inheritance,
		specificity, and selector construction. Once you get all that down, the rest is visual details.</p>
		<p>After that, I'd say thoroughly understanding visual formatting, both block and inline, is crucial. You can save yourself a ton of
		headaches if you know how things are supposed to work, instead of assuming that <abbr title="Cascading Style Sheet">CSS</abbr>
		will act the way you expect it to work. Like any language, <abbr title="Cascading Style Sheet">CSS</abbr> has rules, and ignoring them is
		just going to lead to confusion.</p>
	</dd>
	
	
	<dt id="q6">Q6. Over the last 12 months there has been range of
	<a href="http://www.mezzoblue.com/tests/revised-image-replacement/">image replacement techniques</a> introduced.
	What is your feeling about them overall, and if you had to use one model, which would you use?</dt>
	<dd>
		<p>I'd like to just use the <abbr title="Cascading Style Sheet">CSS</abbr>3 approach: replace the content with something else using
		the '<code>content</code>' property. That's as low-weight and non-hackish as it's likely to get. It's also at a low-support weight at the
		moment, since only Opera supports it.</p>
		<p>Otherwise, I find that the image-replacement techniques in circulation right now are all about equally good and bad &mdash;
		good for making bits of text look nicer, and bad for causing accessibility problems with audio readers.
		But the real problem, to be frank, is the readers themselves. By trying to render the page visually and the read the result,
		they're doing precisely the wrong thing. If a page has screen-medium styles, then a reader should ignore those styles completely.
		It isn't that hard to figure out, and what I don't get is why most readers still haven't been fixed.</p>
	</dd>
		
	
	<dt id="q7">Q7. <a href="http://www.css-discuss.org/mailman/listinfo/css-d/"><abbr title="Cascading Style Sheet">CSS</abbr>-Discuss</a> seems to
	ignite as soon as "<code>font size</code>" is mentioned - a battle between font-size purists and designers.
	Do you think there is there a solution that works for all users?</dt>
	<dd>
		<p>No. I wish it were otherwise, but I don't. Every font-sizing approach has benefits and drawbacks. The best you can do is find an approach
		that maximizes the former while minimizing the latter, and furthermore, that has to be done on a design-by-design basis. 
		One design's goals might be best served by pixel-sized text, while another's will be better fulfilled by using ems or keywords
		('<code>x-small</code>', etc.). Any time a person tells you that there is one and only one way to size fonts for all sites,
		they're trying to hand you a philosophy, not a solution.</p>
	</dd>
	
	
	<dt id="q8">Q8. While we are on contentious subjects, what is your feeling about <abbr title="Cascading Style Sheet">CSS</abbr> hacks?</dt>
	<dd>
		<p>They're a necessary evil. The day we have perfect cross-browser consistency in <abbr title="Cascading Style Sheet">CSS</abbr> implementations,
		both in terms of what's supported and the behavior of what's supported, is the day we can stop using hacks. Until then we're stuck with them.</p>
		<p>I should point out that I mean that for all hacks, whether they're based in the <abbr title="Cascading Style Sheet">CSS</abbr>, are things like
		Microsoft's Conditional Comments, or are server-based.</p>
	</dd>
	
	
	<dt id="q9">Q9. Do you think there will come a time when the browser market is ready for <abbr title="Cascading Style Sheet">CSS</abbr>3
	- keeping in mind the Longhorn timeline?</dt>
	<dd>
		<p>I'd like to think so, but then I once thought that full support for <abbr title="Cascading Style Sheet">CSS</abbr>2's visual-medium
		features would be a done deal by 2003. So my prophetic track record is about as bad as that of any other prophet, and probably shouldn't be
		used as a basis for long-term planning.</p>
	</dd>
	
	
	<dt id="q10">Q10. Finally, many web designers are just coming to terms with <abbr title="Cascading Style Sheet">CSS</abbr>2.
	Do you think that the complexity of <abbr title="Cascading Style Sheet">CSS</abbr>3 will make it less appealing, and possibly
	scare some designers off <abbr title="Cascading Style Sheet">CSS</abbr> completely?</dt>
	<dd>
		<p>It's worse than that: most web designers are just coming to terms with the parts of <abbr title="Cascading Style Sheet">CSS</abbr>2 that are
		actually supported in any meaningful way.</p>
		<p>That's always a possibility, but then there are those who were scared off <abbr title="Cascading Style Sheet">CSS</abbr>1 because of
		its "complexity." (As compared to what they knew, that is.)</p>
		<p>The nice thing about <abbr title="Cascading Style Sheet">CSS</abbr>3 is that it's been split up into modules, so you can ignore the
		bits that don't concern you and concentrate on what you want to know. If you're really into print styling, you can read the Print
		module and get to know it. If internationalization is your thing, then you head for the I18N module.
		There are some modules everyone will need to know (selectors, the cascade, that kind of thing) but after that you can follow your interests
		without having to wade through an enormous monolithic specification.</p>
	</dd>
</dl>

<?php
$big_string = ob_get_contents();
preg_match_all("/<dt id=/", $big_string, $no_of_questions);
$questions = sizeof($no_of_questions[0]);
ob_end_flush();
?>

<p id="copyright">Interview taken from the Web Standards Group, 21st April 2004
<a href="http://webstandardsgroup.org/features/eric-meyer.cfm" title="Interview with Eric Meyer">http://webstandardsgroup.org/features/eric-meyer.cfm</a></p>
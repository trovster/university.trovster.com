<h4><span></span>Introduction</h4>

<p id="intro">Dan Cederholm is an award-winning web designer and author living in Salem, Massachusetts. As principal of SimpleBits,
Dan's design and development consulting firm, he brings years of experience in designing and building sites with web standards.
Dan is the author of <a href="http://www.simplebits.com/publications/solutions/" title="Find out more about the book">Web Standards Solutions:
The Markup and Style Handbook</a> as well as many articles on standards-based design for publications such as
<a href="http://www.alistapart.com/authors/dancederholm/" title="A list Apart articles by Dan Cederholm">A List Apart</a>. Dan also runs the popular weblog
<a href="http://www.simplebits.com/" title="Dan's blog">SimpleBits</a>, where he writes articles and commentary on the web, technology and life.</p>

<h4><span></span>Interview</h4>

<?php
ob_start();
?>

<dl id="interview">
	<dt id="q1">Q1. How did you get started in web design/development?</dt>
	<dd> 
		<p>It all happened rather slowly. I've always been interested in computers. My brother had an old AT&amp;T dual 5 1/4" floppy
		machine in 1985 or something. I was fascinated. We'd play primitive games in glorious green monochrome, like Zaxxon and some
		Olympics game that required you to pound the spacebar really fast in order to run, jump hurdles, etc.</p>
		<p>Anyhow, fast forward 6 or so years, and I have a <acronym title="Macintosh">Mac</acronym>. A Classic II that was obsolete the week after I had purchased it.
		I signed up with <abbr title="America Online">AOL</abbr> just as the Web was beginning. It was exciting. But what I really wanted to do was
		play music. A few more years go by. I find myself working at a record label, working at a desk with a computer and web access for the first time.
		I was immediately hooked. I loved the marriage of the creative with the technical. From that point on (probably in 1997 or so)
		I consumed all the code I could, viewing source on just about any page I would come across.</p>
		<p>From there I left the music business and took an entry level job at a regional <abbr title="Internet Service Provider">ISP</abbr>
		 - at first answering phones, and later doing a bit of design. A year or so at a failed dot com led me to Fast Company magazine in early 2000,
		 where I went on to hone my skills in the world of standards-compliant design and development.</p>
	</dd>
	
	
	<dt id="q2">Q2. When did you first become interested in web standards (or standards-compliance) and what was it that persuaded you?</dt>
	<dd> 
		<p>I sort of "eased" into it. I had been reading <a href="http://www.zeldman.com" title="Jeffrey Zeldman - the daily report">Jeffrey Zeldman</a>
		for a long time, and had experimented with <abbr title="Cascading Style Sheet">CSS</abbr> layouts. It was the <a href="http://wired.com" title="Wired News">Wired.com</a>
		redesign where it all came together and clicked for me. A lot of that had to do with the similarities of Wired.com to the site
		I was working on at the time - FastCompany.com. I saw how <abbr title="Cascading Style Sheet">CSS</abbr>-based layouts could work on a large-scale,
		and that markup could significantly be trimmed down by going this route. It was from that point on that all I had been
		reading prior started to make perfect sense. 
		</p>
		<p>Immediately, the benefits became clear and the fun of diving deep into CSS for design began.</p>
	</dd>
	

	<dt id="q3">Q3. You have been responsible for two high profile standards-based websites (Fast Company and Inc.com).
	If you were to code these again today, what would you do differently?</dt>
	<dd>
		<p>Probably quite a bit. Fast Company was done quite a while ago now, and we've learned a lot since then. One of the things
		I probably would've rethought is the use of absolute positioning for the site's columns. Because of this method, the footer of the
		site is contained only in the middle content column. Weirdness happens when the content column is shorter than the two sidebars.
		Going with a float method, you can clear those columns to create a full-width footer. Floats can be tricky though, and at the time,
		positioning was much easier for me to grasp. And less tricky to implement.</p>
		<p>I might also have rethought going with a fluid width. It made designing specific content areas a little difficult,
		always having to keep in mind that the user's window could be any width at any time. The benefits were that people using small-screened
		devices would still be able to read the content without scrolling horizontally. There are always tradeoffs with either
		flexible or fixed-width layouts - but it's something I would've liked to experiment a bit more with.</p>
	</dd>
	

	<dt id="q4">Q4. Have you ever got frustrated with <abbr title="Cascading Style Sheet">CSS</abbr> based layouts and wanted to throw in the towel?</dt>
	<dd> 
		<p>Ha. Never. OK, sure I curse at <abbr title="Internet Explorer">IE</abbr>/<acronym title="Windows">Win</acronym> quite a bit (who doesn't?).
		But in the end, the benefits when using <abbr title="Cascading Style Sheet">CSS</abbr>-based layouts far outweigh a few annoying browser
		inconsistencies. It can be frustrating at times - but the more people start using <abbr title="Cascading Style Sheet">CSS</abbr>, the more workarounds
		are discovered and easier methods are shared. It'll only get better.</p>
	</dd>		
	
	
	<dt id="q5">Q5. Could you describe, in simple terms (pardon the pun) what "semantically correct markup" means to you?</dt>
	<dd> 
		<p>To me it means, "markup with meaning". It's something to strive for while you're building pages - but perfectly semantic pages are
		nearly impossible if there's complex design to be added.</p>
		<p>It's all about stripping down the markup to its barest essentials, while providing a skeleton that a high threshold of browsers
		and devices can understand.</p>
		<p>Here's one example: if I choose to markup the title of my page with an <code>&lt;h1&gt;</code> element, then that title is more
		likely to be rendered in a way that makes sense in every browser, <abbr title="Personal Digital Assistant">PDA</abbr>, phone, assistive software, etc.
		To me, that's semantically correct markup.</p>
	</dd>

	
	<dt id="q6">Q6. Your <a href="http://www.simplebits.com/bits/simplequiz/" title="SimpleQuiz series by Dan Cederholm">SimpleQuiz</a> series has been
	incredibly popular. Could you tell us how it started?</dt>
	<dd> 
		<p>In August 2003, <a href="http://www.kottke.org/">Jason Kottke</a> posted some thoughts on
		<a href="http://www.kottke.org/03/08/standards-semantically-correct" title="Standards don't necessarily have anything to do with being semantically correct">
		how just writing valid markup doesn't necessarily mean it's good</a>. I thought this was a spot on observation at the time, and thought I'd post a
		little quiz comparing the <a href="http://www.simplebits.com/archives/2003/08/27/simplequiz_part_i_headings.html" title="SimpleQuiz &rsaquo; Part I: Headings">
		different ways one could mark up a heading</a>. The question itself was simple, but the discussion that followed was educational.
		Just by looking at the different ways to approach one page component, we were learning all sorts of stuff.</p>
		<p>So, in the beginning it was to help people realize that being *just* valid doesn't necessarily mean it's bullet-proof.</p>
	</dd>
	
	
	<dt id="q7">Q7. Have there been comments within the SimpleQuiz series that have persuaded you to change your own ways of marking up content?</dt>
	<dd>
		<p>Absolutely. I'm learning along with everyone else. Many times, I'd pose the question not really being swayed to one particular answer,
		but after reading the responses, I may have gained new insight into a method that I'd previously written off. It's like looking over the
		shoulders of everyone else. That's very valuable.</p>
	</dd>
	
	
	<dt id="q8">Q8. When marking up content, there often seems to be a wide variety of options available. How should developers go about choosing the best option?</dt>
	<dd>
		<p>Yes, exactly. Web design/development (whatever we're calling it these days) is a strange thing, isn't it? There are so many methods
		to creating the same results, yet it gives us something to talk about I suppose.</p>
		<p>Choosing the best option is the heart of the SimpleQuiz - that by comparing methods, knowing ahead of time the pros and cons of certain markup,
		it's easier to make the best choice.</p>
		<p>I tend to keep these things in mind:</p>
		<ol>
			<li>What will the markup look like unstyled? This is a good one - seeing a page without <abbr title="Cascading Style Sheet">CSS</abbr>
			is like taking an X-Ray of the document. It's easier to diagnose whether you've made a poor choice when you can see the guts of the page.</li>
			<li>Is this element/class/id necessary? I try to strip out unnecessary <code>&lt;div&gt;</code>s, <code>&lt;span&gt;</code>s and classes -
			paring the markup down. It's easier to read this way, easier for other developers to dive in, faster to download, and the list goes on.
			It's easy to let elements build up when first constructing a page, but it's worth it to check the necessity of each.</li>
			<li>Is it valid? A no-brainer, but always good to check while you're working. This can also help squash seemingly unexplained bugs.</li>
			<li>How will this affect search engines, screen readers, etc.? A big one, and not always with an easy answer.</li>
		</ol>
	</dd>
	

	<dt id="q9">Q9. Could you tell us about your hot-off-the-presses book -
	<a href="http://www.simplebits.com/publications/solutions/" title="Find out more about the book">Web Standards Solutions: The Markup and Style Handbook</a>.
	What is it about, and who will benefit from reading it?</dt> 
	<dd>
		<p>Gladly. The idea for the book started with the SimpleQuiz back in August of 2003 - with the comparison of multiple methods.
		So each chapter tackles a different page component (lists, headings, forms, etc.) and presents a few different ways to mark up those components.
		The second half of the book focuses on <abbr title="Cascading Style Sheet">CSS</abbr>-specific topics and throughout the entire book I try to
		take the examples and go a step further with some additional tricks.</p>
		<p>Many of the techniques are a culmination of the tricks I've either come up with, or collected from the community over time.</p>
		<p>I think those that will benefit the most are designers and developers that are familiar with web standards, perhaps they've read
		Jeffrey Zeldman's fantastic book - and they're ready to see how to implement them in their own projects. I'd like to think the book
		gives you ammunition to understand *why* a certain method has advantages (or disadvantages) over another.</p>
		<p>	It was a lot of fun to write and an enormous learning experience. Working with Apress/friends of ED has been wonderful and I'm
		just ecstatic that the whole thing came together.</p>
	</dd>
	
	
	<dt id="q10">Q10. Finally, now that you are a published author, what's next? Any exciting new projects in the near future?</dt> 
	<dd>
		<p>More and more of the same I think. I've recently decided to turn SimpleBits into a full-time consulting company and so in turn,
		I'm working on some cool projects that will see the light soon. I'd love to do more speaking engagements and continue writing of course
		- but more specifically would love to somehow take the book's format and use that as a guide for a presentation/curriculum
		based around Web Standards Solutions.</p>
		<p>It's all just a matter of having the time to do all of those things, while still staying sane. Summer is approaching,
		and it'll be hard not to just sit in the backyard with a beer listening to baseball on AM radio.</p>
	</dd>
</dl>

<?php
$big_string = ob_get_contents();
preg_match_all("/<dt id=/", $big_string, $no_of_questions);
$questions = sizeof($no_of_questions[0]);
ob_end_flush();
?>

<p id="copyright">Interview taken from the Web Standards Group, 7th June 2004
<a href="http://webstandardsgroup.org/features/dan-cederholm.cfm" title="Interview with Dan Cederholm">http://webstandardsgroup.org/features/dan-cederholm.cfm</a></p>
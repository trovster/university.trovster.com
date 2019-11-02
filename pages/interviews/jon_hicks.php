<h4><span></span>Introduction</h4>

<p id="intro">Jon Hicks is highly regarded web and print designer based in Oxford UK. Jon is most widely known for his personal website -
<a href="http://www.hicksdesign.co.uk/" title="Jon Hicks personal website">Hicks Design</a> - where he regularly writes
about web standards, <abbr title="Cascading Style Sheets"><abbr title="Cascading Style Sheet">CSS</abbr></abbr> and browsers.</p>

<h4><span></span>Interview</h4>

<?php
ob_start();
?>

<dl id="interview">

	<dt id="q1">Q1.What made you move towards developing with Web standards? Was there a particular person or article that persuaded you most?</dt>
	<dd>
		<p>It might be a clich&eacute; now, but Zeldmans 'orange book' really did the trick.</p>
		<p>When I first started learning how to design for the web, I'd been a print designer for 5 years, more used to the text
		and picture box system in Quark. Using the 'layers' feature in Dreamweaver was the closest thing to that. I hated using tables,
		I could never get the hang of all that spacer gif mullarkey. <abbr title="Cascading Style Sheet">CSS</abbr> layers offered me control,
		and over the next couple of years I began to look more at the code that it was producing. The more I understood, the more I coded by hand.
		Articles at <a href="http://www.alistapart.com/" title="For people who make websites">A List Apart</a> and
		<a href="http://www.stopdesign.com/" title="Doug Bowman's Stop Design">Stopdesign</a> inspired me to use <abbr title="Cascading Style Sheet">CSS</abbr>
		more, but it was Zeldman's <a href="http://www.zeldman.com/dwws/" title="Zeldman's book - Designing with Web Standards">
		<abbr title="Designing with Web Standards">DWWS</abbr></a> that brought all the loose strands together. Suddenly it all clicked and made sense.</p>
		<p>As <a href="http://www.7nights.com/asterisk/" title="Keith Robinson's Asterisk website">Keith Robinson</a> said "now, I don't know of any other way".
		I do all my <abbr title="Cascading Style Sheet">CSS</abbr> and <abbr title="Hypertext Markup Language">HTML</abbr>
		in <a href="http://www.skti.org/skEdit.php" title="skEdit - Web Development Application">skEdit</a>, Dreamweaver is a distant memory.</p>
	</dd>
	
	
	<dt id="q2">Q2. Your <a href="http://www.hicksdesign.co.uk/" title="Jon Hicks personal website">personal site</a> is strikingly
	unique as well as being standards-based. It is also a
	<a href="http://www.hicksdesign.co.uk/journal/402/web-standards-awards" title="Web Standards Awards - Hicks Design">Web Standards Awards winner</a>.
	Were there any issues you faced during its development?</dt>
	<dd>
		<p>Gosh, that's very kind of you! It actually started life as an imitation of <a href="http://www.stopdesign.com/">Stopdesign</a>,
		and by the time it went live, the only remainder was that the headings used Georgia. I love just being in the countryside,
		so the green leaf thing came out of that.</p>
		<p>The whole business of centering the box vertically as well as horizontally was a pain at smaller screen resolutions.
		The technique involves finding the centre point of the screen, and shifting the box back half its length and height.
		This meant that the content would just disappear with no scrollbars if the window was too small. I managed to improve it horizontally,
		but I'm still looking for a better solution. I also changed the journal page to the ubiquitous long scrolling centered page,
		as this was easier to read and scroll than the 'letterbox' format.</p>
	</dd>
	

	<dt id="q3">Q3. Earlier this year you wrote
	"<a href="http://www.hicksdesign.co.uk/journal/426/i-laugh-at-your-spacer-gifs" title="Jon's blog entry on a folder full of spacer gifs">
	Take heart: Whenever it frustrates you that you need to add <abbr title="Cascading Style Sheet">CSS</abbr> hacks, and the odd surplus
	<code>&lt;span&gt;</code> tag, to get a page to work, remember this folder of spacer gifs</a>". Do you think the web standards community
	sometimes gets too obsessed with the finer details?</dt>
	<dd>
		<p>I would say yes, but it's not necessarily a bad thing. While obsessing about the details can cloud our vision of how far we've come,
		it's still good to analyze, discuss and refine our practices. The time when it becomes a pain is when you're working through the night
		to finish a project with hours to go, and the guilt sets in when you add a hack, extra tag or (horrors!) a table to get something to work,
		just so you can get to bed.</p>
	</dd>
	
	
	<dt id="q4">Q4. Your
	<a href="http://www.hicksdesign.co.uk/journal/483/3d-css-box-model" title="Jon's innovative 3d diagram showing the relationship between layers of the box model.">
	3D box model diagram</a> is probably the best around on the subject. What gave you the idea to present it in this way?</dt>
	<dd>
		<p>I'd seen umpteen diagrams explaining how it all looked from above, but the hierarchy of elements was one of those things
		that I had to find out myself by experimentation. I started seeing this 'stack' idea in my head, and it took a while to get the diagram how I wanted it.</p>
		<p>A clever chap called Douglas did a fantastic <a href="http://www.redmelon.net/tstme/box_model/">flash movie version</a> where you could see it all
		fit together and then expand. I'd like to do more of these, showing how floats and positioning work and the difference between block and inline
		elements, but time, as always, prevents it.</p>
	</dd>
	
	
	<dt id="q5">Q5. You recently <a href="http://www.hicksdesign.co.uk/journal/546/ie-whitespace-bug" title="Jon's solution to the IE whitespace bug">
	posted a solution to <abbr title="Internet Explorer">IE</abbr>'s whitespace bug</a>. How did you go about solving this frustrating problem?</dt>
	<dd>
		<p>This was a particular bugbear for me, and I'd been trying various solutions for months. I don't know why I tried what I did,
		desperation I guess, but it worked. Once I'd posted a solution, all the other possibilities came out the woodwork of course!
		The best for me was the suggestion to specify a height of 1em to the <code>&lt;li&gt;</code> (for <abbr title="Internet Explorer">IE</abbr>),
		and then use the first-child selector to override that with '<code>auto</code>' instead, so that other browsers weren't affected.</p>
	</dd>
	
	
	<dt id="q6">Q6. One of your portfolio sites, <a href="http://www.theforgivenessproject.com/" title="Forgiveness">Forgiveness</a>, is very clean and simple. Did you start with flat graphic mockups and then progress to <abbr title="Cascading Style Sheet">CSS</abbr> based layouts?</dt>
	<dd>
		<p>Always. There was one project where I decided to design using the code, and leap straight into fiddling with
		<abbr title="Cascading Style Sheet">CSS</abbr>. It looked awful. Flat mockups give you time to try out and experiment with ideas,
		although I usually sketch ideas out first. You can't beat the speed at which you can knock out thumbnail sketches with pencil and paper.
		It's nice to keep using 'analogue methods' as I client of mine would say.</p>
		<p>It's very common for sites that I design to be governed by pre-existing print materials and branding, and that was certainly
		the case with the Forgiveness Project. It then often becomes more of a consultancy project, advising the print designers what will and won't
		work on the site. It was a really interesting project to work on.</p>
	</dd>
	
	
	<dt id="q7">Q7. You have produced two early submissions for <abbr title="Cascading Style Sheet">CSS</abbr> Zen Garden including the
	breathtaking "<a href="http://www.csszengarden.com/?cssfile=030%2F030%2Ecss" title="Jon's CSS Zen Garden entry">Entomology</a>".
	Did you find it hard to design and produce a layout for pre-existing code?</dt>
	<dd>
		<p>I did, but that was a good learning experience. It made me learn how to use descendant and pseudo <abbr title="Cascading Style Sheet">CSS</abbr>
		selectors, and hone my skills generally. When I did 'Entomology' I'd only been doing proper <abbr title="Cascading Style Sheet">CSS</abbr>
		design for a couple of months, but reading Doug Bowman's write up of his entry helped enormously. I really recommend anyone who hasn't done
		a submission to have a go, as designing for someone else's markup is a good tutor.</p>
	</dd>
	

	<dt id="q8">Q8. The logos you developed for <a href="http://www.hicksdesign.co.uk/journal/377/branding-firefox" title="Jon's blog entry on the Firefox logo">
	Firefox</a> and <a href="http://www.hicksdesign.co.uk/journal/439/thunderbird" title="Jon's blog entry on the Thunderbird logo">Thunderbird</a> are amazing.
	Did you find it hard to work on logos for such a high profile brand?</dt>
	<dd>
		<p>I was prepared to hide myself away when Firefox came out. I was convinced that the open source community were going to gather
		at my door and demand my execution. The community are very passionate, and if they take against something, boy do they let you know.
		Fortunately, they seemed to be generally well received, which was a relief!</p>
		<p>Apart from that, the burden was shared amongst the visual identity team. Unlike most of my projects where I'm working by myself,
		there was a group of people to bounce ideas with and get feedback from. The chosen design was a concept by Stephen DesRoches,
		and the final decision of which logo to go with was out of my hands. It all helped to relieve the pressure, but to be honest, I was
		unaware of how high profile they were going to be.</p>
	</dd>

	
	<dt id="q9">Q9. You have also produced a range of <a href="http://www.hicksdesign.co.uk/downloads/?c=browser+resources" title="Jon's hand-crafted browser resources">
	browser resources</a> including custom icon sets for Safari and Camino. Do you enjoy the process of designing system-based buttons and icons?</dt>
	<dd>
		<p>Obsessively! It all stemmed from trying to decide on a default browser, and in a lot of cases, I liked the browser, just not the default theme.
		It started with Camino, which at the time had very unattractive icons, and went on from there. I'm currently working on one for Omniweb 5,
		which is definitely the hardest, as there are just so many icons in that app. I'm not a big fan of theming per se, but what I'm aiming for
		is to make them look as if Apple designed them, rather than doing something original. That's the goal anyway. I've learnt a lot by doing them,
		and improved my skills a lot since the early ones like the Safari theme.</p>
	</dd>
	
		
	<dt id="q10">Q10. Finally, what's in the pipeline. Will you be launching any exciting new projects in the near future?</dt>
	<dd>
		<p>Apart from client work that "I can't talk about yet", I have a cupboard full of ideas for new projects, whether any of them will
		see the light of day is another matter. Who knows, '<abbr title="Cascading Style Sheet">CSS</abbr> Cheese&trade;' may yet see fruition.</p>
		<p>Without wanting to sound trite, my most exciting project is my family. Watching them learn and grow is the most amazing and exciting thing.</p>
	</dd>

</dl>

<?php
$big_string = ob_get_contents();
preg_match_all("/<dt id=/", $big_string, $no_of_questions);
$questions = sizeof($no_of_questions[0]);
ob_end_flush();
?>

<p id="copyright">Interview taken from the Web Standards Group, 19th September 2004
<a href="http://webstandardsgroup.org/features/jon-hicks.cfm" title="Interview with Jon Hicks">http://webstandardsgroup.org/features/jon-hicks.cfm</a></p>
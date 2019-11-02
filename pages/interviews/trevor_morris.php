<h4><span></span>Introduction</h4>

<?php
$dob = '14 September 1982';
$date_of_birth = strtotime($dob);
$age = (time() - $date_of_birth)/(86400*365);
$age_years = floor($age);
?>
<p id="intro">Trevor Morris is a <strong><?php echo $age_years; ?> year old Englishman</strong>, currently reading
<a href="http://www.eimc.co.uk/courses/undergraduate/ipd/" title="Module Site for Internet Product Design">Internet Product Design</a>, an
<a href="http://www.eimc.brad.ac.uk" title="Electronic Imaging and Media Communications Department">Electronic Imaging and Media Communications</a>
course at the University of Bradford, West Yorkshire. Writes about various things concentrating on the importance of web standards on his weblog
<a href="http://www.trovster.com" title="">trovster.com</a></p>

<h4><span></span>Interview</h4>

<?php
ob_start();
?>

<dl id="interview">
	<dt id="q1">Q1. Trev, these kinds of standards-based makeovers have been in the news recently with
	<a href="http://www.timesonline.co.uk/printFriendly/0,,1-210-1271123,00.html" title="Times Online Article">Matthew Somerville's
	makeover of the Odeon website</a>. Matthew took the inaccessible Odeon site and re-designed it for all users. What motivates you to do this kind of work?</dt>
	<dd>
		<p>A. It's quicker than coming up with a layout and branding of my own! Also these are major corporate sites, presumably receiving a lot of traffic,
		so their designs have probably been extensively tested and marketed. It's good to apply <abbr title="Cascading Style Sheets">CSS</abbr> to real world examples.</p>
		<p>I first decided to remake the nokia.com website to gain a better understanding of <abbr title="Cascading Style Sheets">CSS</abbr> &mdash; its limitations
		and quirks across different browsers. I also wanted to use semantic mark up to properly represent the outline structure of the page and see if I could remove
		the site's accessibility barriers.</p>
		<p>With vodafone.co.uk, I slightly reworked their design. Their menus have text buried in images, rather than <abbr title="Hypertext Markup Language">HTML</abbr>
		text, so I replaced them with styled, unordered lists. This gives better semantic <abbr title="Hypertext Markup Language">HTML</abbr> and the pages load more quickly.
		Also, I repeated their arrow logo on the links and navigation. In their original design, this logo was incorporated into the different menu images.</p>
		<p>It was amazing to see how much redundant code they had on the site. The page weight of their home page is 116kb, which will take about 23 secs to download over
		a 56k modem. My redesign brought it down to 64kb (over 50kb of which is the images), which will take about 13 secs to download.</p>
	</dd>
	
	
	<dt id="q2">Q2. But clearly the original sites hadn't been tested for accessibility. You've taken sites that don't even meet the minimum accessibility standard and
	turned them into &quot;AAA&quot; accessible sites, even though your 'makeover' looks identical to the original.
	How do you go about turning them into accessible sites?</dt>
	<dd>
		<p>A. The easiest way to make accessible websites is to follow the World Wide Web Consortium's (<abbr title="World Wide Web Consortium">W3C</abbr>) various web
		standards guidelines. These guidelines cover semantic markup, the implementation of <abbr title="Hypertext Markup Language">HTML</abbr> and
		<abbr title="Cascading Style Sheets">CSS</abbr> technologies and also accessibility issues in <abbr title="Web Content Accessibility Guidelines">WCAG</abbr>1.0.</p>
	</dd>
	
	
	<dt id="q3">Q3. But these guidelines can be extremely opaque. I bet you don't really sit there with your <abbr title="Hypertext Markup Language">HTML</abbr>
	editor in one hand and the <abbr title="Web Content Accessibility Guidelines">WCAG</abbr> 1.0 in the other. How do you really go about re-designing a webpage?
	Where do you start?</dt>
	<dd>
		<p>A. To clarify one thing, I do use a plain-text editor and hard code the entire <abbr title="Hypertext Markup Language">HTML</abbr>.
		This means I'm guaranteed to have valid markup (visual <abbr title="Hypertext Markup Language">HTML</abbr> editors often add lots of code,
		such as redundant <code>&lt;font&gt;</code> tags).</p>
		<p>I also mean following guidelines in the most basic form: for example, by using appropriate tags for the content to create semantic mark-up
		and by closing and nesting tags correctly. It's like using good grammar in a novel: you start a sentence with a capital letter and end it with a full-stop.
		<abbr title="Hypertext Markup Language">HTML</abbr> is the same. For example, the &quot;capital letter&quot; is the DOCTYPE of the page.&nbsp; Every web
		page should begin with one because then you can use the <abbr title="World Wide Web Consortium">W3C</abbr>
		<a href="http://validator.w3.org/" title="The W3C HTML Validator"><abbr title="Hypertext Markup Language">HTML</abbr> validator</a>
		to check the page uses valid code. If your web pages use semantic mark-up and validate, you are about 90% of the way to creating an accessible website.</p>
		<p>Following standards (for <abbr title="Hypertext Markup Language">HTML</abbr> &amp; <abbr title="Cascading Style Sheets">CSS</abbr> in particular)
		and creating validated <abbr title="Hypertext Markup Language">HTML</abbr> pages which are free from presentation mark-up (like &lt;font&gt; tags),
		leads to better levels of accessibility instantly. As the code is more structured and concise, assistive technologies used by disabled surfers can
		work much more efficiently. Then, with the addition of a few extra lines of code, such as &quot;skip to content&quot; or &quot;skip navigation&quot;
		links, websites can effortlessly attain the highest levels of accessibility.</p>
		<p>If you want to see if your own site follows these web standards, you can find
		<a href="http://www.maxdesign.com.au/presentation/checklist.cfm" title="A Useful Tool for Developers During the Production of Websites">
		a good checklist at Maxdesign</a>.</p>
	</dd>
	
	
	<dt id="q4">Q4. Your makeovers, and the creative designs at
	<a href="http://www.csszengarden.com" title="A Site Showcasing What can be Achieved with CSS">CSSZenGarden</a>, show that style sheets can
	give you fantastic control over the visual appearance of web pages yet still achieve the most stringent accessibility criteria.
	What stops other web designers making the transition?</dt>
	<dd>
		<p>A. I think web designers fall into three distinct categories:</p>
		<ol>
			<li>The &quot;If it ain't broke, don't fix it&quot; brigade: These web designers are usually &quot;old school&quot;
			and have been in the web business for a reasonably long time.</li>
			<li>The ignorant: mostly new people creating a personal site for fun or for a friend, usually as a hobby or for free.</li>
			<li>Web-standards zealots.</li>
		</ol>
		
		<p>A lot of &quot;old school&quot; web developers probably feel slightly intimidated by preaching web-standards zealots. A good example of this reactionary thinking is
		<a href="http://www.apcmag.com/apc/v3.nsf/0/a569c81864dc4f1bca256e5f001a59c5" title="Article titled 'The World Wide Web Is Not Enough'">
		a recent article by David Emberton</a>: </p>
		
		<blockquote cite="http://www.apcmag.com/apc/v3.nsf/0/a569c81864dc4f1bca256e5f001a59c5">
		<p>&ldquo;Standards cronies have now latched on to the disabled - the starving African children of high technology - for leverage. Spend time reading
		<a href="http://www.alistapart.com/" title="A List Apart Magazine, which Explores the Design, Development, and Meaning of Web Content">A List Apart</a>,
		and you'll soon get the impression that accessibility is bigger than cancer, and we're all about to go blind and lose our mouse-bearing limbs.&rdquo;</p>
		<p><cite><a href="http://www.apcmag.com/apc/v3.nsf/0/a569c81864dc4f1bca256e5f001a59c5" title="The World Wide Web Is Not Enough">http://www.apcmag.com/apc/v3.nsf/0/a569c81864dc4f1bca256e5f001a59c5</a></cite></p>
		</blockquote>
		
		<p>&quot;Old school&quot; web developers emphasise that table-based layouts are tried and tested to work in all browsers. It's true that
		they can be used to create 2- or 3-column layouts easily and they are still used by a huge number of websites. But tables can create accessibility
		barriers and they don't really work in all browsers: for example, table-based sites often fall apart in voice browsers or mobile devices.
		Fortunately, many big companies are seeing the light. Macromedia's website is now <abbr title="World Wide Web Consortium">W3C</abbr> standards
		compliant, and even <a title="External link to Wired, a technology, culture, business and politics magazine." href="http://www.wired.com">Wired</a>,
		the poster child of bleeding edge design, is entirely <abbr title="Cascading Style Sheets">CSS</abbr> based.</p>
	</dd>

	
	<dt id="q5">Q5. Given the amount of time you spend looking under the hood at different code, you must have a good idea of the common
	accessibility barriers introduced by some developers. What common mistakes have you seen? What's the most inexcusable?</dt>
	<dd>
		<p>A. In my experience, there are three main accessibility bloopers:</p>
		<ol>
			<li>Missing alt text attributes.</li>
			<li>Text built into images.</li>
			<li>Poorly marked-up forms.</li>
		</ol>
		<p>The most basic and most widely found accessibility issue is simply omitting the &quot;alt&quot; attribute for images.
		Every image used should have an equivalent alternative text label. If the image is purely decorative, it should have a blank &quot;alt&quot;
		attribute (so screen readers will skip over it); ideally, these types of image should be part of the <abbr title="Cascading Style Sheets">CSS</abbr>
		defintion. If it's a functional image, such as a navigation arrow, the &quot;alt&quot; text needs to convey the function (next, back or whatever).</p>
		<p>The second major blooper is using images that are just plain text. Often, the text is set in Helvetica or Arial, the most commonly installed fonts
		in the Western world, so there's really no excuse for this. These are the easiest to fix: just remove the images and use plain text marked up properly
		and styled to fit into the site. As well as being accessible, another benefit of this approach is that the page will degrade properly in non-visual
		browsers (such as a mobile phone). This technique also provides better search engine rankings, since Google can &quot;see&quot; real text but not text
		buried in images.</p>
		<p>The third issue, found on a lot of sites, is forms. These are pretty simple to fix if you follow semantic mark-up rules and add place-holding
		text in entry fields (this provides important information on how to fill in the input element). Designers need to use the right mark-up to
		link the text label with the text field (<code class="html">&lt;label&gt;</code> in this instance). They should also group sets of controls or entry fields
		(using the <code class="html">&lt;fieldset&gt;</code> tag). Finally, a <code class="html">&lt;legend&gt;</code> for each
		<code class="html">&lt;fieldset&gt;</code> gives the user, especially people that use screenreaders, important information about each set of inputs. There's
		<a href="http://www.webaim.org/techniques/forms/" title="The focus of this article is on making a form that can be read by a screen reader">
		a great tutorial on designing accessible forms</a> at WebAIM.</p>
	</dd>
	
	
	<dt id="q6">Q6. We've noticed that following accessibility guidelines also tends to make a page more usable.
	A good example is adding <code class="html">&quot;title&quot;</code> tags to hyperlinks, which appear as tooltips and help make the link destination clearer.
	In your redesigns, have you made any changes to meet accessibility guidelines that you feel conflict with usability?</dt>
	<dd>
		<p>Place-holding text within text entry fields is a potential usability problem, because users need to select it and delete it before
		typing their own entry. This can slow users down and it can get annoying if there is a lot of fields to complete. But you can solve
		this with a simple bit of javascript, so that when the user clicks or tabs into the field, the place-holding text disappears.</p>
		<p>To remove default place-holding text when the user clicks or tabs into the field, use this generic code:</p>
		<pre><code class="javascript">onfocus=&quot;if(this.value == this.defaultValue){this.value=''}&quot;</code></pre>
	</dd>
	
	
	<dt id="q7">Q7. Pop-up windows tend to be derided by people in the accessibility community, but there are certain situations where they enhance usability:
	for example, when they are used like a dialog box in a desktop application, or if they are used to provide some procedural &quot;Help&quot;
	steps. What's your opinion on pop-up windows?</dt>
	<dd>
		<p>A. I see very few applications for popup windows on the web. As a user of Mozilla Firefox I am able to open windows in new tabs or new windows
		when I please and get frustrated when the web developer forces these changes upon me. People comment opening new windows can confuse users, and
		I can honestly say I've experienced this confusion when I didn't notice a popup. Your comment about help steps, I think, would be more beneficial
		on the page. If a popup is triggered you would have to keep focusing away from the information to complete the task. A better solution would be to
		have this information in a prominent position of the page, above the task to be completed.</p>
		<p>There are accessible methods to create popup windows. The <code class="html">&quot;target&quot;</code> attribute has been deprecated
		in strict doctypes and should	only be used to reference frames in the frameset doctype. The alternative method to opening new windows,
		which is becoming a lot more widespread, is to use JavaScript. Most people use this method incorrectly by adding the JavaScript code into
		the <code class="html">&quot;href&quot;</code> attribute of an anchor. If the JavaScript fails, no window is opened and the link is virtually unusable.</p>
		<p>A List Apart have written <a href="http://www.alistapart.com/articles/popuplinks/" title="'Sometimes we Have to Use Pop-Ups &mdash; So We Might as Well do them Right.'">
		a great article about making accessible popups</a>. Basically it uses the <code class="html">&quot;onclick&quot;</code> attribute to trigger a simple
		piece of JavaScript. This means the URL to the page is left in the <code class="html">&quot;href&quot;</code> attribute and if the JavaScript
		fails the page is opened in the current window. This means users can choose to open the page in tabs or in the current window if a
		popup blocker stops the popup window. Using the <code class="html">&quot;onclick&quot;</code> attribute with some simple JavaScript is by
		far the best and most accessible way of creating popup links on the web.</p>
	</dd>
	
	
	<dt id="q8" class="last">Q8. Final question: Who's next on your list for a makeover? Are there any sites that are visually too complex to re-work with style sheets?</dt>
	<dd><p>A. I'm currently working on the Trainline website and you can see my work in progress at
	<a href="http://www.trovster.com" title="Trevor Morris's blog">trovster.com</a>. After that, I don't know, I haven't thought about any more
	makeovers I'd like to do. The more visually complex the better, so if you see something and think,
	&quot;You could never do that with standards-based design&quot;,let me know!</p>
	</dd>
</dl>

<?php
$big_string = ob_get_contents();
preg_match_all("/<dt id=/", $big_string, $no_of_questions);
$questions = sizeof($no_of_questions[0]);
ob_end_flush();
?>
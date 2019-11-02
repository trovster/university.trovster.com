<h3><span></span>Accessibility Assessment</h3>

<h4 id="introduction"><span></span>Introduction</h4>

<p>There are numerous tools on the internet which can help a developer meet different levels of web accessibility.
However, these tools only provide a basic, automatic check of a site and should not be relied upon completely.
This article will discuss different automated tests available to developers and address the draw backs they provide.</p>


<h4 id="accessibility_checkers"><span></span>Accessibility Checkers</h4>

<p>There are two main standards of accessibility on the web, Section 508 and the
<abbr title="World Wide Web Consortium">W3C</abbr>'s Web Content Accessibility Guidelines (WCAG). There are numerous
tools which allow web developers to check their pages against these varying levels of accessibility.</p>

<p>There are two main, general accessibility checkers, these are Bobby and Cynthia Says.</p>

<h5><span></span>Bobby</h5>

<blockquote cite="Welcome to Bobby WorldWide">
<p>This free service will allow you to test web pages and help expose and repair barriers to accessibility and encourage
compliance with existing accessibility guidelines, such as Section 508 and the
<abbr title="World Wide Web Consortium">W3C</abbr>'s <abbr title="Web Content Accessibility Guidelines">WCAG</abbr>.</p>
<p><cite><a href="http://bobby.watchfire.com/bobby/html/en/index.jsp" title="Welcome to Bobby WorldWide">
http://bobby.watchfire.com/bobby/html/en/index.jsp</a></cite></p>
</blockquote>

<p>Bobby, an automated accessibility checker by Watchfire, provides instant checking for both Section 508 &amp; the
<abbr title="Web Content Accessibility Guidelines">WCAG</abbr>. The validator first displays the page it checked without any styles
applied, followed by the report. You can skip straight to the report and immediately see whether the page has passed or failed.</p>

<p>After the automated test result, if the website has passed the tool shows areas that can not be tested automatically, these are called User Checks and are separated for
each priority in <abbr title="Web Content Accessibility Guidelines">WCAG</abbr>. If the page failed the automated tool, the areas that need
addressing are shown, with links to examples of correct mark-up and reasoning.</p>

<p>However, by default, the tool validates the page to the strictest version of the <abbr title="Web Content Accessibility Guidelines">WCAG</abbr>,
'AAA', which may not be desired. There are some advanced options under 'customization' where you can select the level of checking.
Simply, the <abbr title="Uniform Resource Locator">URL</abbr> contains 'AAA', which can be changed, to 'AA' and 'A', for lower levels of accessibility checking.</p>

<h5><span></span>Cynthia Says</h5>

<blockquote cite="http://www.cynthiasays.com">
<p>...is a web content accessibility validation solution, it is designed to identify errors in design related to Section
508 standards and the <abbr title="Web Content Accessibility Guidelines">WCAG</abbr> guidelines. The main purpose of this portal
is to educate web site developers in the development Web Based content that is accessible to all.</p>
<p><cite><a href="http://www.cynthiasays.com" title="Welcome to the Cynthia Says Portal">http://www.cynthiasays.com</a></cite></p>
</blockquote>

<p>Cynthia Says also provides instant checking for both Section 508 &amp; the <abbr title="Web Content Accessibility Guidelines">WCAG</abbr>.
The homepage provides a basic range of options for validation, such as checking the <abbr title="Web Content Accessibility Guidelines">WCAG</abbr> levels
1, 2 and 3, but defaults to the American guidelines, Section 508.</p>

<p>The report is a fairly complex and doesn't give a definate pass/fail like Bobby does. However, it does provide indepth information for each section of the guidelines,
with links to the appropriate resources to rectify problems or to just learn more about the specific area. The checker has further options including an
"<abbr title="Alternative">Alt</abbr> Text Quality" report which is also useful in accessibility checking.</p>


<h4 id="validation_tools"><span></span>Validation Tools</h4>

<p>Probably the first step in checking a page is accessible is checking whether it's valid. There are services which can check the markup of the page
against the rules of the <abbr title="Document Type Definition">DTD</abbr>. The main validators are by the <abbr title="World Wide Web Consortium">W3C</abbr>,
the group that defines and develops <abbr title="Hypertext Markup Language">HTML</abbr> and <abbr title="Cascading Style Sheets">CSS</abbr>.</p>

<h5><span></span><abbr title="World Wide Web Consortium">W3C</abbr> <abbr title="Hypertext Markup Language">HTML</abbr> Validator</h5>
<p>Can check both <abbr title="Uniform Resource Locator">URL</abbr>s and local files, via upload.</p>
<dl class="inline_list">
<dt>URL:</dt>
<dd><a href="http://validator.w3.org" title="W3C HTML Validator">http://validator.w3.org</a></dd>
</dl>

<h5><span></span><abbr title="World Wide Web Consortium">W3C</abbr> <abbr title="Cascading Style Sheets">CSS</abbr> Validator</h5>
<p>Can check <abbr title="Uniform Resource Locator">URL</abbr>s, local files and by direct input.
There are advanced options where you can select the profile (version), the warnings and the mediums checked.</p>
<dl class="inline_list">
<dt>URL:</dt>
<dd><a href="http://jigsaw.w3.org/css-validator/" title="W3C CSS Validator">http://jigsaw.w3.org/css-validator/</a></dd>
</dl>

<h5><span></span><abbr title="World Wide Web Consortium">W3C</abbr> Link Checker</h5>
<p>This tool checks all the links on the given <abbr title="Uniform Resource Locator">URL</abbr> but can also be configured to
run through the links it finds to a certain depth.</p>
<dl class="inline_list">
<dt>URL:</dt>
<dd><a href="http://validator.w3.org/checklink" title="W3C Link Checker">http://validator.w3.org/checklink</a></dd>
</dl>

<h5><span></span>Colorblind Web Page Filter</h5>
<p>You can run this tool to simulate different levels of colour blindness on a web page. There are a lot of different
colour filters to choose from and options such as disabling image filtering.</p>
<dl class="inline_list">
<dt>URL:</dt>
<dd><a href="http://colorfilter.wickline.org" title="Colorblind Web Page Filter">http://colorfilter.wickline.org</a></dd>
</dl>


<h4><span id="assistive_technologies"></span>Assistive Technologies</h4>

<p>There are some good tools that can be installed to help in web development and maintaining high levels of accessibility.</p>

<h5><span></span>Browsers</h5>

<p>Mozilla Firefox and Opera are both good alternative Windows and <abbr title="Macintosh">Mac</abbr> browsers to Internet Explorer, but it is always good to check a
website in as many different browsers as possible. It may also be necessary, depending on site traffic, to test your site on different versions of
<abbr title="Internet Explorer">IE</abbr>. To achieve this <a href="http://www.quirksmode.org/browsers/multipleie.html" title="Running multiple versions of IE">
read the Quirks Mode's article how to run multiple versions of <abbr title="Internet Explorer">IE</abbr>.</a> Checking a website in numerous browsers and different
platforms is impracticable for many people. 
<a href="http://www.browsercam.com/" title="BrowserCam: Screen capture and Remote Access service for cross platform compatibility testing and HTML design quality assurance.">
Browsercam</a> is a great tool to solve this problem.</p>

<ul id="browsers">
<li><a href="http://www.mozilla.org/products/firefox/">Mozilla Firefox</a> - A fast and powerful web browser with
download management, a popup stopper and tabbed browsing. It's extremely compliant with web standards and finally it is extensible, meaning
there are hundreds of little additions which can easily be intergrated into it's function.</li>

<li><a href="http://www.opera.com">Opera</a> - An extremely powerful, highly customisable and standards complaint browser.
Features a lot of tools and extras for power users including mouse gestures and a popup stopper. It also comes with integrated mail,
news and chat clients. The software is adware, which means it display adverts on the browser unless paid for.</li>

<li><a href="http://www.mozilla.org/products/mozilla1.x/" title="Mozilla Internet Suite Homepage">Mozilla</a> - 
A complete internet suite with browser, email client, newsgroup client, <abbr title="Internet Relay Chat">IRC</abbr>
chat client, and <abbr title="Hypertext Markup Language">HTML</abbr> editing. Based on the gecko engine which is also used
on Netscape Navigator and Firefox.</li>
</ul>

<h5><span></span>Firefox Extensions</h5>

<p>Firefox has the ability to be broadened with extensions. There are numerous extensions with are useful in web development and
aid accessibility checking.</p>

<p><a href="http://www.standards-schmandards.com/index.php?show/fangs">Fangs</a> is an extension that creates a textual representation of
a web page similar to how the page would be read by a modern screen reader, such as Jaws. This produces a linarized version of the page
with additional informational text which is added by screen readers. However, the extension does not actually speak the page back like
actual screen readers.</p>

<p><a href="http://www.chrispederick.com/work/firefox/webdeveloper/">Web Development Toolbar</a> is an extension full of features to aid
the development of a website in general. It has quick links to validate the pages <abbr title="Hypertext Markup Language">HTML</abbr>,
<abbr title="Cascading Style Sheets">CSS</abbr> and both <abbr title="Web Content Accessibility Guidelines">WCAG</abbr> and Section 508
via the Cynthia Says accessibility checker. The main accessibility use is the easy removal of different areas of a website such as its
stylesheets, javascript, images and even page colours. There are also options to show <abbr title="Alternative Text">ALT</abbr> tags,
accesskeys and tabindexes, highlight deprecated elements, anchors without title tags and linearize the page.</p>


<h4 id="automated_drawbacks"><span></span>Automated Drawbacks</h4>

<p>There are many positives to automated tools which assist checking for accessibility, such as a increased penetration to the developers, making
checking for accessibility more accessible itself. However, <strong>these tools do not provide the whole picture</strong>. These tools can only catch
errors and advise on them, they can not evaluate the content of the page, such as whether the <abbr title="Alternative Text">ALT</abbr> or title
text is appropriate. The best method for ensuring best practices on websites is simple; user testing. Although this maybe unavailable, due to cost, to a lot of
freelance developers it's the only way to ensure a website is fully accessible.</p>

<p>Automated checkers advise to add title phrases to links, however, if this text just repeats what the anchor says then this practice is more of a hindrance
than a help. Accesskeys are also mentioned when researching accessible websites, however, they can be misused which generate problems in navigation and conflicts with
operating system shortcuts.</p>


<h4 id="conclusion"><span></span>Conclusion</h4>

<p>Automated tools such as <a href="http://bobby.watchfire.com/bobby/html/en/index.jsp" title="Web Content Accessibility Guideline Automated Checker">Bobby</a> and
<a href="http://www.cynthiasays.com" title="An Automated Accessibility Checker">Cynthia Says</a> as well as assistive tools such as the
<a href="http://www.chrispederick.com/work/firefox/webdeveloper/" title="Extension for Mozilla Firefox">web developer toolbar for Firefox</a> help increase
the basic fundamentals of building an accessible website, however, they do not replace human interaction and extensive user testing.</p>

<?php
require_once('further_reading.php');
?>

<dl>
	<dt>Web Accessibility Evaluation Tools Need People</dt>
	<dd>
	<blockquote cite="http://www.uiaccess.com/evaltools.html">
	<p>Web accessibility evaluation tools can be very helpful; however, they do not replace the need for human evaluation.
	Webster's definition of 'tool' as an 'instrument used by a craftsman or laborer at his work' is useful in understanding the role
	of automated web accessiblity evaluation tools.</p>
	<p><cite><a href="http://www.uiaccess.com/evaltools.html" title="Web Accessibility Evaluation Tools Need People">
	http://www.uiaccess.com/evaltools.html</a></cite></p>
	</blockquote>
	</dd>
</dl>

<dl>
	<dt>Web Accessibility Tools</dt>
	<dd>
	<blockquote cite="http://www.userfocus.co.uk/resources/accesstools.html">
	<p>There is no shortage of accessibility tools on the web. The problem is identifying the ones that are really useful.
	Here is a collection of on-line tools that we use in our day-to-day consultancy work to support accessibility reviews.</p>
	<p><cite><a href="http://www.userfocus.co.uk/resources/accesstools.html" title="Web Accessibility Tools">
	http://www.userfocus.co.uk/resources/accesstools.html</a></cite></p>
	</blockquote>
	</dd>
</dl>

<dl>
	<dt>I'm Still Off Accesskeys</dt>
	<dd>
	<blockquote cite="http://www.mezzoblue.com/archives/2005/01/04/im_still_off/">
	<p>&hellip;while there may be no explicit accessibility benefits, perhaps Accesskeys offer something for usability.
	Keyboard shortcuts, for those that know how to use them, can be a tremendous incremental time-saver.</p>
	<p><cite><a href="http://www.mezzoblue.com/archives/2005/01/04/im_still_off/" title="I'm Still Off Accesskeys">
	http://www.mezzoblue.com/archives/2005/01/04/im_still_off/</a></cite></p>
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
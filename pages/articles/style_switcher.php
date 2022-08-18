<h3><span></span>Style Switcher</h3>

<h4 id="introduction"><span></span>Introduction</h4>

<p>After creating <abbr title="Hypertext Markup Language">HTML</abbr> based upon best practices
in web standards, a total separation between content and layout/style should be achieved. At this point you
probably only have one screen stylesheet, your default design. However, more, completely different designs can
easily be layed over the existing <abbr title="Hypertext Markup Language">HTML</abbr>.</p>

<p>This article documents how a user can change between these different designs or stylesheets, and the best cross-browser solution.</p>


<h4 id="applying_stylesheets"><span></span>Applying Stylesheets</h4>

<p>A stylesheet can be applied to a site using the <code>&lt;link&gt;</code> element within the <code>&lt;head&gt;</code> of the document.
However, an external, linked stylesheet can take three different relationships with the site. These are persistent, preferred and alternate.</p>

<h5><span></span>Persistent</h5>

<p>These stylesheets are always applied to the page and are combined with the active stylesheet. Persistent stylesheet links
lack a title attribute.</p>

<pre class="html"><code>&lt;link rel="stylesheet" type="text/css" href="style.css" /&gt;</code></pre>

<h5><span></span>Preferred</h5>

<p>Stylesheets with the same title attribute are applied to the page but are disabled when an alternative stylesheet is applied.
If there are numerous preferred stylesheets, the first stylesheet takes precedence.</p>

<pre class="html"><code>&lt;link rel="stylesheet" type="text/css" href="style.css" title="default" /&gt;</code></pre>

<h5><span></span>Alternate</h5>

<p>These stylesheets can only be selected by the user as an alternative to the preferred stylesheet. The persistent stylesheet
is still applied. An alternative stylesheet can be applied by prefixing "alternate" to the <code>rel</code> attribute.
These alternative stylesheets can be grouped, in the same way as the preferred stylesheets, with the same title attribute.</p>

<pre class="html"><code>&lt;link rel="alternative stylesheet" type="text/css" href="style.css" /&gt;</code></pre>

<p>The examples assume the file <code>style.css</code> is in the same folder as the <abbr title="Hypertext Markup Language">HTML</abbr> document.</p>


<h4 id="changing_stylesheets"><span></span>Changing Stylesheets</h4>

<p>The <strong>persistent and preferred</strong> stylesheets are applied when the document is initially loaded. The alternate
stylesheets can be selected by the user.</p>

<blockquote cite="http://www.w3.org/TR/cuap#rendering">
<p>A document may have more than one style sheet associated with it, and users should be able to select from alternative style sheets.</p>
<p><cite><a href="http://www.w3.org/TR/cuap#rendering" title="Common User Agent Problems">http://www.w3.org/TR/cuap#rendering</a></cite></p>
</blockquote>

<p>In Mozilla Firefox users a presented with the following icon, <img src="images/style_switcher/ff_easle.gif" alt="A Brush &amp; Easel" />
in the status bar when alternate stylesheets are available. Clicking this icon will show a list of titled (preferred &amp; alternate) stylesheets
which can be applied. Users can also navigate to the Page Style menu, under View in the main menu, here they can choose the same stylesheets as
well as completely disable them all, defined as "No style".</p>

<p>In the Mozilla suite browser users can navigate to the User Style menu, under View in the main menu. The menu presented is the same as in
Mozilla Firefox. The "Basic Style" option completely disables all stylesheets.</p>

<p>In Opera users can access the stylesheet list by either navigating to the Style menu via View in the main menu or via the camera icon on the
address bar.</p>

<p>However, Microsoft Internet Explorer does not provide any means of selecting an alternative stylesheet, only to completely disable styles.</p>


<h4 id="solutions"><span></span>The Solutions</h4>

<p>To enable all browsers to switch stylesheets, methods must be implemented by the web developer. There are two solutions to this problem involving
two different approaches, using two different scripting methods but achieve the same outcome.</p>

<h5><span></span>Javascript</h5>

<p>Javascript is a client side scripting language. This means it is activated and applied when the page is loaded and can easily be turned off
by the user. The user change run client side scripts without having to reload a web page. The developer has no control over the users settings
so can not guarentee the success of the script, or whether it would be activated at all.</p>

<h5><span></span>Serverside</h5>

<p>Serverside technologies include <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>, <abbr title="Active Server Page">ASP</abbr> and Perl.
This solution requires the user to reload a web page to run the script. However, with serverside solutions, the web developer can guarentee
the success of the script. This article concentrates on <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>, however could be applied quite easily
to the other technologies.</p>

<h5><span></span>Cookies</h5>

<p>Nope, not the type you can eat unfortunately.</p>

<blockquote cite="http://www.idcide.com/pages/res_term.htm#cookies">
<p>Cookies are small text files that Web sites place in your computer to help your browsers remember specific information</p>
<p><cite><a href="http://www.idcide.com/pages/res_term.htm#cookies" title="Privacy Compliance Resources, Privacy Glossary">
http://www.idcide.com/pages/res_term.htm#cookies</a></cite></p>
</blockquote>

<p>In these solutions the cookie is used to stored the user-desired stylesheet. Cookies are used with both methods and must be enabled for either method to work.</p>

<h4 id="style_this"><span></span>Style This</h4>

<p>This website uses the <abbr title="PHP: Hypertext Preprocessor">PHP</abbr> style switcher discussed above. This sites style sheet changer can be
accessed via the colophon section at the bottom of the page or via this the following link -
<a href="colophon/#style_changer" title="This sites style switcher">http://<?=$server_url;?>/final/colophon/#style_changer</a>.</p>


<?php require_once('further_reading.php'); ?>

<dl>
	<dt>Build a PHP Switcher</dt>
	<dd>
	<blockquote cite="http://www.alistapart.com/articles/phpswitch/">
	<p>For your style-sheet-switching pleasure, A List Apart offers the Switcher, a piece of JavaScript that dynamically changes page styles.
	Functional as it is, it quite unfortunately relies on the user to have both JavaScript and cookies enabled. There's not much we can do
	about the cookies, but we can sidestep client-side processing with a little help from PHP.</p>
	<p><cite><a href="http://www.alistapart.com/articles/phpswitch/" title="Build a PHP Switcher">http://www.alistapart.com/articles/phpswitch/</a></cite></p>
	</blockquote>
	</dd>

	<dt>Alternative Style: Working With Alternate Style Sheets</dt>
	<dd>
	<blockquote cite="http://www.alistapart.com/articles/alternate/">
	<p>We have several style sheets and the visitor can choose their favorite from a menu. But then we encounter a problem. A major one.
	Mozilla provides a menu to select the style sheet we want to use under the view menu item. But Microsoft Internet Explorer
	(<abbr title="Microsoft Internet Explorer">MSIE</abbr>) provides no such menu. So we have several style sheets, and no way to acces
	them in <abbr title="Microsoft Internet Explorer">MSIE</abbr>.</p>
	<p><cite><a href="http://www.alistapart.com/articles/alternate/" title="Alternative Style: Working With Alternate Style Sheets">
	http://www.alistapart.com/articles/alternate/</a></cite></p>
	</blockquote>
	</dd>
</dl>

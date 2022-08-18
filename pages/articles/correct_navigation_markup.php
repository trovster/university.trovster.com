<h3><span></span>Correct Navigation Markup</h3>

<h4 id="introduction"><span></span>Introduction</h4>

<p>One of the most important area of a website is its navigation. If the navigation is done well, a user will find it intuitive
and will be able to easily find information. This article will describe how to semantically mark up navigation areas
and provide examples showing how to achieve basic menus.</p>

<p>The resources have extensive examples of numerous designs that can be applied to the simple navigation markup.</p>
<!-- with the use of <abbr title="Cascading Style Sheets">CSS</abbr>, they can be transfered into numerous different styles.-->

<h4 id="dissect"><span></span>Dissecting the Navigation</h4>

<p>When deciding on what type of <abbr title="HyperText Markup Language">HTML</abbr> element to use when marking up content, strip out all
the presentation and visual eye candy you've got in your design and think about what the content actually is. Another good check is to test
what the content looks like when stylesheets have been removed. This is important as the content should still be extremely readable and show structure.</p>

<p>Navigation areas are simply just a list of links. This is exactly how they should be marked up, using an unordered list element, <code>ul</code>, for the container
and <code>li</code> for the list items.</p>

<h4 id="markup"><span></span>Simple Markup</h4>

<p>Below are two exmaples of all that is needed when marking up navigations. The first uses <code>id="active"</code> to denote the active section or page, the
second uses a method which doesn't require any differences between pages, but slightly more markup to begin with. There are two benefits to the second markup
method, these are discussed later.</p>

<h5 id="example1.1"><span></span>Example 1.1</h5>
<pre><code class="html">&lt;ul id="navigation"&gt;
&lt;li&gt;&lt;a href="#" title=""&gt;List Item 1&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href="#" title=""&gt;List Item 2&lt;/a&gt;&lt;/li&gt;
&lt;li id="active"&gt;&lt;a href="#" title=""&gt;List Item 3&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href="#" title=""&gt;List Item 4&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</code></pre>

<h5 id="example1.2"><span></span>Example 1.2</h5>
<pre><code class="html">&lt;ul id="navigation"&gt;
&lt;li id="section1"&gt;&lt;a href="#" title=""&gt;List Item 1&lt;/a&gt;&lt;/li&gt;
&lt;li id="section2"&gt;&lt;a href="#" title=""&gt;List Item 2&lt;/a&gt;&lt;/li&gt;
&lt;li id="section3"&gt;&lt;a href="#" title=""&gt;List Item 3&lt;/a&gt;&lt;/li&gt;
&lt;li id="section4"&gt;&lt;a href="#" title=""&gt;List Item 4&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</code></pre>

<p>Because <code>ul</code> is a block element, it doesn't need to be wrapped in a generic container, <code>div</code>. Also because the <code>ul</code>
has an id, all the elements nested within it can be easily referenced using the <abbr title="Cascading Style Sheets">CSS</abbr> descendant selector.</p>

<p>That is all that is required for the majority of navigation needs on the internet.</p>


<h4 id="horizontal"><span></span>I Want My Navigation Horizontal</h4>

<p>A lot of web design layouts call for horizontal navigation areas and not a vertical list of links with bullets. This is where
<abbr title="Cascading Style Sheets">CSS</abbr> comes to the rescue and it's pretty simple. There are two different methods for repositioning the
list items in a horizontal line.</p>

<p>The first method is shown below, which uses <code>display: inline;</code> to force the list items horizontally.</p>

<pre><code class="css">ul#navigation li {
  display: inline;
}
</code></pre>

<p>This method removes the bullets which appear in list items. However, it restricts the <abbr title="Cascading Style Sheets">CSS</abbr>
you are able to apply because the list items and anchors nested within them can only act like inline elements.</p>

<p>The second method is more versatile and makes the anchors block elements, which allows more control when positioning the content with padding. However,
this method causes some other problems which need addressing, these are discussed after the example. Note that the list style must be removed manually.</p>

<pre><code class="css">ul#navigation {
  list-style: none;
}
ul#navigation li {
  float: left;
}
ul#navigation li a {
  display: block;
}
</code></pre>

<p>A possible undesired effect is the container <code>ul</code> doesn't expand to the height of the contents. This is correct behaviour when using floats. There
are two solutions to rectify this effect. First is adding a <code>clear</code> within the <code>ul</code>, but much easier is adding a height to the <code>ul</code>
itself. Remember to use a relative font size which allows the navigation to expand correctly. Another issue because of the <code>float</code> is that content
below needs to be cleared. This is easy to solve, by adding <code>clear: both;</code> on the first element after the navigation.</p>


<h4 id="active_state"><span></span>Styling The Active Page</h4>

<p>Using a different colour or style on the current section/page is a good visual key. This can be achieved with two different markup methods, shown in
examples 1.1 and 1.2 above. Using the markup in example <a href="development_articles/correct-navigation-markup#example1.1">example 1.1</a>, the following
<abbr title="Cascading Style Sheets">CSS</abbr> can be applied to add this visual key.</p>

<pre><code class="css">ul#navigation li#active {
  background-color: #aaa;
 }
ul#navigation li#active a {
  cursor: text;
 }
</code></pre>

<p>The second <abbr title="Cascading Style Sheets">CSS</abbr> property changes the cursor from the normal hand which appears for links, to the text cursor which appears
over text. This is a usability trick because pages shouldn't link back to themselves. removing the link entirely is preferred than using this trick. If you require an
active state for navigation links in the footer, change the <code>id</code> to a <code>class</code> and amend the
<abbr title="Cascading Style Sheets">CSS</abbr> appropriately.</p>



<p>The markup in <a href="development_articles/correct-navigation-markup#example1.2">example 1.2</a> is slightly different as it doesn't have a specific
active attribute. However, this technique uses an id that can be changed per page/section, placed on the navigations container. Usually this is set on the body
because that can be directly styled globally as there is only one per page.</p>

<p>The <abbr title="Cascading Style Sheets">CSS</abbr> for the active page is just generated using the descendant selector relating to the body <code>id</code>
and the list item <code>id</code>. Create a different section <code>id</code> for each page/section, such as <code>page-section1</code>, and apply it
to the <code>body</code>. The example below shows how this is applied to example 1.2.</p>

<pre><code class="css">body#page-section1 ul#navigation li#section1,
body#page-section2 ul#navigation li#section2,
body#page-section3 ul#navigation li#section3,
body#page-section4 ul#navigation li#section4 {
  background-color: #aaa;
}
</code></pre>

<p>The selectors can be simplified to the following code that also shows the anchor styling, such as changing the cursor icon.</p>

<pre><code class="css">#page-section1 #section1, #page-section2 #section2,
#page-section3 #section3, #page-section4 #section4 {
  background-color: #aaa;
}
#page-section1 #section1 a, #page-section2 #section2 a,
#page-section3 #section3 a, #page-section4 #section4 a {
  cursor: text;
}
</code></pre>

<p>Placing an <code>id</code> which changes depending of page/section also allows control of styling specific areas of one section and not another.
This is useful for adding a different layout for the welcome/introduction page.</p>


<h4 id="full_example"><span></span>A Full Example</h4>

<p>Below is a basic example of the <abbr title="HyperText Markup Language">HTML</abbr> and <abbr title="Cascading Style Sheets">CSS</abbr> to create a
horizontal menu using the float/id technique.</p>

<h5><span></span>Basic <abbr title="HyperText Markup Language">HTML</abbr> Navigation</h5>

<pre><code class="html">&lt;body id="page-section2"&gt;

&lt;ul id="navigation"&gt;
&lt;li id="section1"&gt;&lt;a href="#" title=""&gt;List Item 1&lt;/a&gt;&lt;/li&gt;
&lt;li id="section2"&gt;&lt;a href="#" title=""&gt;List Item 2&lt;/a&gt;&lt;/li&gt;
&lt;li id="section3"&gt;&lt;a href="#" title=""&gt;List Item 3&lt;/a&gt;&lt;/li&gt;
&lt;li id="section4"&gt;&lt;a href="#" title=""&gt;List Item 4&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;

&lt;div id="content"&gt;
...
</code></pre>

<h5><span></span>Basic <abbr title="Cascading Style Sheets">CSS</abbr> Navigation Styling</h5>
<pre><code class="css">ul#navigation {
  height: 2em;
  background-color: #eee;
  list-style: none;
}
ul#navigation li {
  float: left;
}
ul#navigation li a {
  display: block;
  padding: 5px 20px;
  text-align: center;
  border: 1px solid #ccc;
}
ul#navigation li a:hover {
  background-color: #ccc;
}
#page-section1 #section1, #page-section2 #section2,
#page-section3 #section3, #page-section4 #section4 {
  background-color: #aaa;
}
#page-section1 #section1 a, #page-section2 #section2 a,
#page-section3 #section3 a, #page-section4 #section4 a {
  cursor: text;
}

div#content {
  clear: both;
}
</code></pre>

<p><a href="/pages/articles/examples/simple_menu.html">An example of the simple semantic navigation</a> shows
the application of the techniques discussed above. The styling on this page is extremely simple. For more complex stylings please read
<a href="http://css.maxdesign.com.au/listamatic/" title="Listamatic: One List, Many Options">the examples at Listamatic</a>.</p>

<?php require_once('further_reading.php'); ?>

<dl>
	<dt>Turning a list into a navigation bar</dt>
	<dd>
	<blockquote cite="http://www.456bereastreet.com/archive/200501/turning_a_list_into_a_navigation_bar/">
	<p>Why use a list? Because a navigation bar, or menu, is a list of links. The best (most semantic) way of marking up a list of links is to use
	a list element. Using a list also has the benefit of providing structure even if <abbr title="Cascading Style Sheets">CSS</abbr> is disabled.</p>
	<p><cite><a href="http://www.456bereastreet.com/archive/200501/turning_a_list_into_a_navigation_bar/" title="Turning a list into a navigation bar">
	http://www.456bereastreet.com/archive/200501/turning_a_list_into_a_navigation_bar/</a></cite></p>
	</blockquote>
	</dd>
</dl>

<dl>
	<dt>Listamatic: One List, Many Options</dt>
	<dd>
	<blockquote cite="http://css.maxdesign.com.au/listamatic/">
	<p>Can you take a simple list and use different Cascading Style Sheets to create radically different list options? The Listamatic shows the power of
	<abbr title="Cascading Style Sheets">CSS</abbr> when applied to one simple list using samples from Eric Meyer, ProjectSeven, SimpleBits, Jeffrey Zeldman
	and others. Choose from one of the samples below:</p>
	<p><cite><a href="http://css.maxdesign.com.au/listamatic/" title="Listamatic: One List, Many Options">
	http://css.maxdesign.com.au/listamatic/</a></cite></p>
	</blockquote>
	</dd>
</dl>

<dl>
	<dt><abbr title="Cascading Style Sheets">CSS</abbr> Design: Taming Lists</dt>
	<dd>
	<blockquote cite="http://www.alistapart.com/articles/taminglists/">
	<p>In this article, I'll demonstrate how to use <abbr title="Cascading Style Sheets">CSS</abbr> to bring unwieldy lists
	under control. It�s time for you to tell lists how to behave, instead of letting them run wild on your web page.</p>
	<p><cite><a href="http://www.alistapart.com/articles/taminglists/" title="CSS Design: Taming Lists">
	http://www.alistapart.com/articles/taminglists/</a></cite></p>
	</blockquote>
	</dd>
</dl>

<h3><span></span>Choosing Class Names</h3>

<h4 id="introduction"><span></span>Introduction</h4>

<p>Semantics should also be used when deciding on class or id names for elements. Developers usually choose unwisely when deciding on these names, as they
choose a name specific to the design they are creating at the time. This article will discuss what good class/id names are with examples of both bad and
better choices.</p>

<h4 id="bad_names"><span></span>Bad Choices</h4>

<ul>
<li>leftmenu</li>
<li>redlink</li>
<li>no_border</li>
</ul>

<p>The reason these aren't very good class/id names is because they relate to the current design of the website. With the ability of
<abbr title="Cascading Style Sheets">CSS</abbr> to change a design extremely easily makes naming elements properly important.
A new design might have the menu on the right, and the "redlink" might be normal. When choosing class and id names keep in mind the purpose
of the styling not the styling itself.</p>


<h4 id="good_names"><span></span>Better Choices</h4>
<p>Below are examples of good class/id names:</p>

<ul>
<li>container or wrapper</li>
<li>navigation</li>
<li>submenu</li>
<li>external_link</li>
</ul>

<p>With names like these it's clear to see what the function of that area is. This is important when creating a new design as you can easily
identify the purpose of the styling.</p>


<h4 id="generic_names"><span></span>Generic Names</h4>
<p>A page is often made up of five main areas. Below are some suggestions of the naming of these containers. Using these naming conventions
also help people who use custom stylesheets to override certain styles to improve their own experience target the areas more easily.</p>

<ul>
<li>header</li>
<li>navigation</li>
<li>content</li>
<li>sidebar</li>
<li>footer</li>
</ul>


<h4 id="conlusion"><span></span>Conclusion</h4>

<p>Simply keep in mind what the elements function is, such as external link or more information, and not what the element is going to look like during
the current design. Check this by reading through the code to check whether you can work out what each element does and not what it looks like.
If you can do this then the class/id names are good.</p>

<?php
require_once('further_reading.php');
?>

<dl>
	<dt>What's in a Name</dt>
	<dd>
	<blockquote cite="http://www.stuffandnonsense.co.uk/archives/whats_in_a_name.html">
	<p>This got me thinking about the benefits of naming conventions and I began to realize that these conventions matter,
	not just for the sake of web designers (and easier site redesigns), but for users too!</p>
	<p><cite><a href="http://www.stuffandnonsense.co.uk/archives/whats_in_a_name.html" title="What's in a Name">
	http://www.stuffandnonsense.co.uk/archives/whats_in_a_name.html</a></cite></p>
	</blockquote>
	</dd>
</dl>
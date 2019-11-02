<h3><span></span>Web Content Accessibility Guideline Checkpoints</h3>

<p>There are a total of fourteen checkpoints set out by the <abbr title="World Wide Web Consortium">W3C</abbr> in the Web Content Accessibility Guidelines.
Below is a summary of the fourteen checkpoints, followed by more detailed information.</p>

<ol id="checkpoint_summary">
<li>Provide equivalent alternatives to auditory and visual content. <a href="references/wcag/#checkpoint1">Details on checkpoint 1</a></li>
<li>Do not rely on colour alone. <a href="references/wcag/#checkpoint2">Details on checkpoint 2</a></li>
<li>Use mark up and style sheets and do so properly. <a href="references/wcag/#checkpoint3">Details on checkpoint 3</a></li>
<li>Clarify natural language usage. <a href="references/wcag/#checkpoint4">Details on checkpoint 4</a></li>
<li>Create tables that transform gracefully. <a href="references/wcag/#checkpoint5">Details on checkpoint 5</a></li>
<li>Ensure that pages featuring new technologies transform gracefully. <a href="references/wcag/#checkpoint6">Details on checkpoint 6</a></li>
<li>Ensure user control of time-sensitive content changes. <a href="references/wcag/#checkpoint7">Details on checkpoint 7</a></li>
<li>Ensure direct accessibility of embedded user interfaces <a href="references/wcag/#checkpoint8">Details on checkpoint 8</a></li>
<li>Design for device-independence. <a href="references/wcag/#checkpoint9">Details on checkpoint 9</a></li>
<li>Use interim solutions. <a href="references/wcag/#checkpoint10">Details on checkpoint 10</a></li>
<li>Use <abbr title="World Wide Web Consortium">W3C</abbr> technologies and guidelines. <a href="references/wcag/#checkpoint11">Details on checkpoint 11</a></li>
<li>Provide context and orientation information. <a href="references/wcag/#checkpoint12">Details on checkpoint 12</a></li>
<li>Provide clear navigation mechanisms. <a href="references/wcag/#checkpoint13">Details on checkpoint 13</a></li>
<li>Ensure that documents are clear and simple. <a href="references/wcag/#checkpoint14">Details on checkpoint 14</a></li>
</ol>

<table summary="Table documenting in detail the fourteen checkpoints of the Web Content Accessibility Guidelines, with links on techniques to solve issues." id="checkpoints">
<caption>Web Content Accessibility Guideline Extended Summary</caption>
<thead>
  <tr>
  <th>Checkpoint</th>
  <th>Summary</th>
  <th>Level</th>
 </tr>
</thead>

<tbody id="checkpoint1">
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-text-equivalent" title="Techniques for checkpoint 1.1">1.1</a></td>
  <td class="desc">Provide a text equivalent for every non-text element
  (e.g., via "<code>alt</code>", "<code>longdesc</code>", or in element content). This includes: images, graphical representations of text
  (including symbols), image map regions, animations (e.g., animated <abbr title="Graphic Interchange Format">GIF</abbr>s), applets and programmatic
  objects, <abbr title="American Standard Code for Information Interchange">ascii</abbr> art, frames, scripts, images used as list bullets,
  spacers, graphical buttons, sounds (played with or without user interaction), stand-alone audio files, audio tracks of video, and video.</td>
  <td>A</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-redundant-server-links" title="Techniques for checkpoint 1.2">1.2</a></td>
  <td class="desc">Provide redundant text links for each active region of a server-side image map.</td>
  <td>A</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-auditory-descriptions" title="Techniques for checkpoint 1.3">1.3</a></td>
  <td class="desc">Until user agents can automatically read aloud the text equivalent of a visual track, provide an auditory description
  of the important information of the visual track of a multimedia presentation.</td>
  <td>A</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-synchronize-equivalents" title="Techniques for checkpoint 1.4">1.4</a></td>
  <td class="desc">For any time-based multimedia presentation (e.g., a movie or animation), synchronize equivalent alternatives
  (e.g., captions or auditory descriptions of the visual track) with the presentation.</td>
  <td>A</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-redundant-client-links" title="Techniques for checkpoint 1.5">1.5</a></td>
  <td class="desc">Until user agents render text equivalents for client-side image map links, provide redundant text links
  for each active region of a client-side image map.</td>
  <td>AAA</td>
 </tr>
 </tbody>

 <tbody id="checkpoint2">
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-color-convey" title="Techniques for checkpoint 2.1">2.1</a></td>
  <td class="desc">Ensure that all information conveyed with color is also available without color, for example from context or markup.</td>
  <td>A</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-color-contrast" title="Techniques for checkpoint 2.1">2.2</a></td>
  <td class="desc">Ensure that foreground and background color combinations provide sufficient contrast
  when viewed by someone having color deficits or when viewed on a black and white screen.</td>
  <td>AA</td>
 </tr>
 </tbody>

 <tbody id="checkpoint3">
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-use-markup" title="Techniques for checkpoint 3.1">3.1</a></td>
  <td class="desc">When an appropriate markup language exists, use markup rather than images to convey information.</td>
  <td>AA</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-identify-grammar" title="Techniques for checkpoint 3.2">3.2</a></td>
  <td class="desc">Create documents that validate to published formal grammars.</td>
  <td>AA</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-style-sheets" title="Techniques for checkpoint 3.3">3.3</a></td>
  <td class="desc">Use style sheets to control layout and presentation.</td>
  <td>AA</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-relative-units" title="Techniques for checkpoint 3.4">3.4</a></td>
  <td class="desc">Use relative rather than absolute units in markup language attribute values and style sheet property values.</td>
  <td>AA</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-logical-headings" title="Techniques for checkpoint 3.5">3.5</a></td>
  <td class="desc">Use header elements to convey document structure and use them according to specification.</td>
  <td>AA</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-list-structure" title="Techniques for checkpoint 3.6">3.6</a></td>
  <td class="desc">Mark up lists and list items properly.</td>
  <td>AA</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-quotes" title="Techniques for checkpoint 3.7">3.7</a></td>
  <td class="desc">Mark up quotations. Do not use quotation markup for formatting effects such as indentation.</td>
  <td>AA</td>
 </tr>
 </tbody>

 <tbody id="checkpoint4">
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-identify-changes" title="Techniques for checkpoint 4.1">4.1</a></td>
  <td class="desc">Clearly identify changes in the natural language of a document's text and any  text equivalents (e.g., captions).</td>
  <td>A</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-expand-abbr" title="Techniques for checkpoint 4.2">4.2</a></td>
  <td class="desc">Specify the expansion of each abbreviation or acronym in a document where it first occurs.</td>
  <td>AAA</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-identify-lang" title="Techniques for checkpoint 4.3">4.3</a></td>
  <td class="desc">Identify the primary natural language of a document.</td>
  <td>AAA</td>
 </tr>
 </tbody>

 <tbody id="checkpoint5">
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-table-headers" title="Techniques for checkpoint 5.1">5.1</a></td>
  <td class="desc">For data tables, identify row and column headers.</td>
  <td>A</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-table-structure" title="Techniques for checkpoint 5.2">5.2</a></td>
  <td class="desc">For data tables that have two or more logical levels of row or column headers, use markup to associate data cells and header cells.</td>
  <td>A</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-avoid-table-for-layout" title="Techniques for checkpoint 5.3">5.3</a></td>
  <td class="desc">Do not use tables for layout unless the table makes sense when linearized. Otherwise, if the table does not make sense,
  provide an alternative equivalent (which may be a linearized version).</td>
  <td>AA</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-table-layout" title="Techniques for checkpoint 5.4">5.4</a></td>
  <td class="desc">If a table is used for layout, do not use any structural markup for the purpose of visual formatting.</td>
  <td>AA</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-table-summaries" title="Techniques for checkpoint 5.5">5.5</a></td>
  <td class="desc">Provide summaries for tables.</td>
  <td>AAA</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-abbreviate-labels" title="Techniques for checkpoint 5.6">5.6</a></td>
  <td class="desc">Provide abbreviations for header labels.</td>
  <td>AAA</td>
 </tr>
 </tbody>

 <tbody id="checkpoint6">
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-order-style-sheets" title="Techniques for checkpoint 6.1">6.1</a></td>
  <td class="desc">Organize documents so they may be read without style sheets. For example, when an <abbr title="Hypertext Markup Language">HTML</abbr>
  document is rendered without associated style sheets, it must still be possible to read the document.</td>
  <td>A</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-dynamic-source" title="Techniques for checkpoint 6.2">6.2</a></td>
  <td class="desc">Ensure that equivalents for dynamic content are updated when the dynamic content changes.</td>
  <td>A</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-scripts" title="Techniques for checkpoint 6.3">6.3</a></td>
  <td class="desc">Ensure that pages are usable when scripts, applets, or other programmatic objects are turned off or not supported.
  If this is not possible, provide equivalent information on an alternative accessible page.</td>
  <td>A</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-keyboard-operable-scripts" title="Techniques for checkpoint 6.4">6.4</a></td>
  <td class="desc">For scripts and applets, ensure that event handlers are input device-independent.</td>
  <td>AA</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-fallback-page" title="Techniques for checkpoint 6.5">6.5</a></td>
  <td class="desc">Ensure that dynamic content is accessible or provide an alternative presentation or page.</td>
  <td>AA</td>
 </tr>
 </tbody>

 <tbody id="checkpoint7">
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-avoid-flicker" title="Techniques for checkpoint 7.1">7.1</a></td>
  <td class="desc">Until user agents allow users to control flickering, avoid causing the screen to flicker.</td>
  <td>A</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-avoid-blinking" title="Techniques for checkpoint 7.2">7.2</a></td>
  <td class="desc">Until user agents allow users to control blinking, avoid causing content to blink
  (i.e., change presentation at a regular rate, such as turning on and off).</td>
  <td>AA</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-avoid-movement" title="Techniques for checkpoint 7.3">7.3</a></td>
  <td class="desc">Until user agents allow users to freeze moving content, avoid movement in pages.</td>
  <td>AA</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-no-periodic-refresh" title="Techniques for checkpoint 7.4">7.4</a></td>
  <td class="desc">Until user agents provide the ability to stop the refresh, do not create periodically auto-refreshing pages.</td>
  <td>AA</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-no-auto-forward" title="Techniques for checkpoint 7.5">7.5</a></td>
  <td class="desc">Until user agents provide the ability to stop auto-redirect, do not use markup to redirect pages automatically.
  Instead, configure the server to perform redirects.</td>
  <td>AA</td>
 </tr>
 </tbody>

 <tbody id="checkpoint8">
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-directly-accessible" title="Techniques for checkpoint 8.1">8.1</a></td>
  <td class="desc">Make programmatic elements such as scripts and applets directly accessible or compatible with assistive technologies
  [Priority 1 if functionality is important and not presented elsewhere, otherwise Priority 2].</td>
  <td>AA</td>
 </tr>
 </tbody>

 <tbody id="checkpoint9">
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-client-side-maps" title="Techniques for checkpoint 9.1">9.1</a></td>
  <td class="desc">Provide client-side image maps instead of server-side image maps except where the regions cannot be defined
  with an available geometric shape.</td>
  <td>A</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-keyboard-operable" title="Techniques for checkpoint 9.2">9.2</a></td>
  <td class="desc">Ensure that any element that has its own interface can be operated in a device-independent manner.</td>
  <td>AA</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-device-independent-events" title="Techniques for checkpoint 9.3">9.3</a></td>
  <td class="desc">For scripts, specify logical event handlers rather than device-dependent event handlers.</td>
  <td>AA</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-tab-order" title="Techniques for checkpoint 9.4">9.4</a></td>
  <td class="desc">Create a logical tab order through links, form controls, and objects.</td>
  <td>AAA</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-keyboard-shortcuts" title="Techniques for checkpoint 9.5">9.5</a></td>
  <td class="desc">Provide keyboard shortcuts to important links (including those in client-side image maps),
  form controls, and groups of form controls.</td>
  <td>AAA</td>
 </tr>
 </tbody>

 <tbody id="checkpoint10">
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-avoid-pop-ups" title="Techniques for checkpoint 10.1">10.1</a></td>
  <td class="desc">Until user agents allow users to turn off spawned windows, do not cause pop-ups or other windows to
  appear and do not change the current window without informing the user.</td>
  <td>AA</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-unassociated-labels" title="Techniques for checkpoint 10.2">10.2</a></td>
  <td class="desc">Until user agents support explicit associations between labels and form controls, for all form controls with
  implicitly associated labels, ensure that the label is properly positioned.</td>
  <td>AA</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-linear-tables" title="Techniques for checkpoint 10.3">10.3</a></td>
  <td class="desc">Until user agents (including assistive technologies) render side-by-side text correctly, provide a linear
  text alternative (on the current page or some other) for all tables that lay out text in parallel, word-wrapped columns.</td>
  <td>AAA</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-place-holders" title="Techniques for checkpoint 10.4">10.4</a></td>
  <td class="desc">Until user agents handle empty controls correctly, include default, place-holding characters in edit boxes and text areas</td>
  <td>AAA</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-divide-links" title="Techniques for checkpoint 10.5">10.5</a></td>
  <td class="desc">Until user agents (including assistive technologies) render adjacent links distinctly, include non-link,
  printable characters (surrounded by spaces) between adjacent links.</td>
  <td>AAA</td>
 </tr>
 </tbody>

 <tbody id="checkpoint11">
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-latest-w3c-specs" title="Techniques for checkpoint 11.1">11.1</a></td>
  <td class="desc">Use <abbr title="World Wide Web Consortium">W3C</abbr> technologies when they are available and appropriate for a task and use the latest versions when supported.</td>
  <td>AA</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-avoid-deprecated" title="Techniques for checkpoint 11.2">11.2</a></td>
  <td class="desc">Avoid deprecated features of <abbr title="World Wide Web Consortium">W3C</abbr> technologies.</td>
  <td>AA</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-content-preferences" title="Techniques for checkpoint 11.3">11.3</a></td>
  <td class="desc">Provide information so that users may receive documents according to their preferences (e.g., language, content type, etc.)</td>
  <td>AAA</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-alt-pages" title="Techniques for checkpoint 11.4">11.4</a></td>
  <td class="desc">If, after best efforts, you cannot create an accessible page, provide a link to an alternative page that uses <abbr title="World Wide Web Consortium">W3C</abbr> technologies,
  is accessible, has equivalent information (or functionality), and is updated as often as the inaccessible (original) page.</td>
  <td>A</td>
 </tr>
 </tbody>

 <tbody id="checkpoint12">
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-frame-titles" title="Techniques for checkpoint 12.1">12.1</a></td>
  <td class="desc">Title each frame to facilitate frame identification and navigation.</td>
  <td>A</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-frame-longdesc" title="Techniques for checkpoint 12.2">12.2</a></td>
  <td class="desc">Describe the purpose of frames and how frames relate to each other if it is not obvious by frame titles alone.</td>
  <td>AA</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-group-information" title="Techniques for checkpoint 12.3">12.3</a></td>
  <td class="desc">Divide large blocks of information into more manageable groups where natural and appropriate.</td>
  <td>AA</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-associate-labels" title="Techniques for checkpoint 12.4">12.4</a></td>
  <td class="desc">Associate labels explicitly with their controls.</td>
  <td>AA</td>
 </tr>
 </tbody>

 <tbody id="checkpoint13">
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-meaningful-links" title="Techniques for checkpoint 13.1">13.1</a></td>
  <td class="desc">Clearly identify the target of each link.</td>
  <td>AA</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-use-metadata" title="Techniques for checkpoint 13.2">13.2</a></td>
  <td class="desc">Provide metadata to add semantic information to pages and sites.</td>
  <td>AA</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-site-description" title="Techniques for checkpoint 13.3">13.3</a></td>
  <td class="desc">Provide information about the general layout of a site (e.g., a site map or table of contents).</td>
  <td>AA</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-clear-nav-mechanism" title="Techniques for checkpoint 13.4">13.4</a></td>
  <td class="desc">Use navigation mechanisms in a consistent manner.</td>
  <td>AA</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-nav-bar" title="Techniques for checkpoint 13.5">13.5</a></td>
  <td class="desc">Provide navigation bars to highlight and give access to the navigation mechanism.</td>
  <td>AAA</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-group-links" title="Techniques for checkpoint 13.6">13.6</a></td>
  <td class="desc">Group related links, identify the group (for user agents), and, until user agents do so, provide a way to bypass the group.</td>
  <td>AAA</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-searches" title="Techniques for checkpoint 13.7">13.7</a></td>
  <td class="desc">If search functions are provided, enable different types of searches for different skill levels and preferences.</td>
  <td>AAA</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-front-loading" title="Techniques for checkpoint 13.8">13.8</a></td>
  <td class="desc">Place distinguishing information at the beginning of headings, paragraphs, lists, etc.</td>
  <td>AAA</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-bundled-version" title="Techniques for checkpoint 13.9">13.9</a></td>
  <td class="desc">Provide information about document collections (i.e., documents comprising multiple pages.).</td>
  <td>AAA</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-skip-over-ascii" title="Techniques for checkpoint 13.10">13.10</a></td>
  <td class="desc">Provide a means to skip over multi-line <abbr title="American Standard Code for Information Interchange">ASCII</abbr> art.</td>
  <td>AAA</td>
 </tr>
 </tbody>

 <tbody id="checkpoint14">
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-simple-and-straightforward" title="Techniques for checkpoint 14.1">14.1</a></td>
  <td class="desc">Use the clearest and simplest language appropriate for a site's content.</td>
  <td>A</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-icons" title="Techniques for checkpoint 14.2">14.2</a></td>
  <td class="desc">Supplement text with graphic or auditory presentations where they will facilitate comprehension of the page.</td>
  <td>AAA</td>
 </tr>
 <tr>
  <td><a href="http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-consistent-style" title="Techniques for checkpoint 14.3">14.3</a></td>
  <td class="desc">Create a style of presentation that is consistent across pages.</td>
  <td>AAA</td>
 </tr>
</tbody>

</table>

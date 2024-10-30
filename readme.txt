=== Hoverswap ===
Contributors: bbqiguana 
Donate link: http://www.bbqiguana.com/donate/
Tags: hover, text, swap, title
Requires at least: 2.1
Tested up to: 3.3.1
Stable tag: 1.0

Swaps the content of a tag with the content of its title when the user hovers over it.

== Description ==
On my language-learning blog, I have a feature that shows a translation inline by swapping out text when the mouse rolls over it. It’s very handy, and it occurred to me that I should make it a plugin, so other people can use it too!

Hoverswap allows you to create swapping elements, whose content is swapped for its title when the user hovers over them.

Excellent for foreign language learning and translation web sites.

= Use =
Version 1.0 has no configuration. That will be added later.
For now, in order to use the plugin, you create an EM tag containing the text you want to be active, and then you put the text for its hover state into its title attribue. 

Then, to ensure that only the text you WANT to be swapped gets swapped, you must wrap that in an element of the class "translate".

One example implementation would be create the following unordered list:
&lt;UL class="translate"&gt;
&lt;LI&gt;&lt;EM title="How are you?"&gt;Como estas?&lt;/EM&gt;&lt;/LI&gt;
&lt;/UL&gt;


= Features =
* Add the “translate” class to a containing element, such as a blockquote or a ul tag. Then, any em tags with a title attribute will automatically swap their content for the title when you move the mouse over them.

= Planned features: =
* Allow any tag or classname to be specified as the containing element.
* Allow any tag or classname to be specified as the translate element.

== Installation ==
1. Download the Hoverswap zip file.
2. Extract the files to your WordPress plugins directory.
3. Activate the plugin via the WordPress Plugins tab.

== Frequently Asked Questions ==
none

== Screenshots ==
none

== Changelog ==

= 1.0 =
* Initial version.


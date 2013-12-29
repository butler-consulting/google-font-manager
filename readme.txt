=== Google Font Manager ===

Contributors: Thomas S. Butler - http://butlerconsulting.com/
Tags: fonts, google, google fonts, manage fonts, add fonts, styles, site style, css, stylesheet
Requires at least: 3.1
Tested up to: 3.8
Stable tag: 1.0
License: GPLv3 (or higher)

Easily add and manage Google fonts to your WordPress website. With multiple use options, this plugin is perfect for programmers, designers and general users alike.


== Description ==

This plugin was written to help you quickly and easily add Google fonts to your WordPress website. It was designed with both the regular and advanced WordPress user in mind. With minimal overhead, it will not add any unnecessary "bloat" to your site, adding only what you need according to your settings. You can use this plugin to simply add Google fonts to your site and reference them in your own custom style sheets (if you are using a child theme). Or, if you are not coding your own theme, there are a variety of ways you can use the built-in functions of WordPress to make use of the fonts you add. Either way, it provides the perfect solution for adding Google fonts to your website.

Some of the features:

* Add as many Google Fonts as you want to your site
* Full integration with Google Fonts API
* Automatically adds fonts to Visual Editor (tinyMCE)
* Optionally adds "Web Safe Fonts" to Visual Editor 
* Customize style sheet to override theme default
* AJAX-powered, no screen refreshes! 
* Clean and fresh UI and UX design
* Fully responsive Admin (as of WP 3.8)
* Light-Weight turn on and off options
* Resources only loaded in WP Admin when needed

If you have any problems with the plugin after reading the FAQ, Other Notes, etc. please visit the [support forums](http://wordpress.org/support/plugin/google-font-manager/).


= Translated Languages Available =

Sorry, no translations available at this time.  We will be working on that for the next upgrade. If you'd like to contribute a translation, please let us know on the [support forums](http://wordpress.org/support/plugin/google-font-manager/).

* American English - Default... Also supports Canadian, British, Australian and a few others (that's a joke)


== Installation ==

1. Upload this plugin to the `/wp-content/plugins/` directory and unzip it, or simply upload the zip file within your wordpress installation.

2. Activate the plugin through the 'Plugins' menu in WordPress.

3. Click on "Google Font Manager" in your admin toolbar, located under the settings tab.

4. Follow the link and instructions provided to get your Google Fonts API key, add your API key and update settings.

5. Start previewing and adding fonts to your site.  Happy Typography!


== Notes & Known Issues ==

This plugin has been developed for modern browsers and makes liberal use of HTML5 data attributes and may not function as intended in older web browsers... YOU HAVE BEEN WARNED! As this plugin was developed for internal training purposes to teach new programmers how to write plugins "our way", we have full documentation available.  Although a languages folder exists in the plugin (google-font-manager/lang) no translations have been added to this version.  As this plugin is used as a training tool, we are also utilizing it for producing an instructional video on how to add translations to your WordPress plugins.  Once that tutorial is complete, we will update this plugin with some added translations.  Finally, and along the same lines, some of the "responsivness" in the UI may seem lacking in this initial version.  This is for the same reason.  We will be adding a tutorial on how to add responsive conditionals and will update the plugin when that is complete.  In the meantime, have fun with the plugin and let us know what you think!


== Screenshots ==

1. Preview all Google fonts without leaving the WP Admin.

2. Easily add and remove Google Fonts to your WordPress Site.

3. Automatic integration with the Visual Editor (tinyMCE - optional)

4. Build and customize your own CSS style sheet (no programming required).

5. Fully documented with lots of information.


== Frequently Asked Questions ==

= How do I get a Google API key? =
You will need a Google API key to make use of this plugin. Your key is free and easy to get. However, many people get confused on this.  It's really quite simple: 

    1) logged in to your Gmail account; 
    2) go here https://cloud.google.com/console; 
    3) create a project (example: "my google fonts");
    5) under "APIs & auth" click APIs and add "Web Fonts Developer API";
    4) under "APIs & auth" click credentials (create new key);
    5) copy the API key under "Key for browser applications", that's it.

= Why don't my changes appear in my site? =
Once you have selected fonts and added them to your site, you must either add them to your style sheet manually, apply them within your blog post or pages by using the visual editor. Also, make sure you have enabled the "Style Defaults" and apply them to your site elements. 

= I have followed the instructions above and my fonts still aren't working. What can I do? =
If you have done all of the above and you still can't see any changes, you should turn on the "!important" CSS constructor, rebuild your style sheet and refresh your page.  Also, make sure to delete your cache and refresh your page - particularly if you are using a cache plugin.
 
= I am a programmer/designer and I don't need any add-ons. Can I turn them off? =
Yes.  By default, we assume that you don't know how to code or do not want to.  So, font selection in the visual editor along with web safe fonts is enabled by default.  This plugin allows you to turn off all of these added utilities for applying fonts, under the settings tab.

= I really like how this plugin works and looks. Are you for hire? =
Yes.  We make a living by doing this sort of thing.  You can learn more about us and what we can do for you by visiting our home page at: http://butlerconsulting.com.

For further instructions and step-by-step instructions you can go here: http://plugins.butlerconsulting.com/docs/google-font-manager/.


== Credits and include files ==

Of course a big "shout out" must be given to Matt Mullenweg and the WordPress team for making the world possible! This plugin makes use of jQuery (jquery.com) along with a few additional jQuery libraries that have been written by others.  Each of these may have their own licenses but all are "Open Source". Some of the icons were used from Windows Icons [Modern UI Icons](http://modernuiicons.com/). Additional resources:

jQuery autocomplete provided by http://jqueryui.com, 
jQuery Easing v1.3 - http://gsgd.co.uk/sandbox/jquery/easing/, 
A modified version of "tipsy tip roller" by jason frame [jason@onehackoranother.com] was added to the main jQuery file,
jQuery.LocalScroll and jQuery.ScrollTo by Ariel Flesler - aflesler(at)gmail(dot)com | http://flesler.blogspot.com, 
jQuery custom radiobuttons by Tomasz Wójcik (bthlabs.pl) labs@tomekwojcik.pl 
SpinBox JavaScript widget //code.stephenmorley.org http://code.stephenmorley.org/javascript/spin-box-widget/


== Changelog ==

= 1.0 =
* Initial release December 28th 2013, Nothing to see here. These are not the droids we're looking for... move along.

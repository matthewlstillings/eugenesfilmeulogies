=== Prevent Browser Caching ===
Tags: browser caching, browser cache, update css, update js, assets, frontend, development
Requires at least: 4.0
Tested up to: 4.9.6
Stable tag: 2.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Update the version of all CSS and JS files. Show the latest changes on the site without asking the client to clear browser cache.

== Description ==

Are you a frontend developer? Do you want to clear browser cache for all users?
Just activate this plugin and show your work!

Prevent Browser Caching allows you to update the version of all CSS and JS files automatically or manually in one click.

Now you can show the latest changes on the site without asking the client to clear the cache.

= How it works? =

By default, WordPress loads assets using query param "ver" in the URL (e.g., style.css?ver=4.9.6). It allows browsers to cache this files until the WordPress core will not be upgraded to a newer version.

To prevent caching of CSS and JS files, this plugin adds query param "time" (e.g., style.css?ver=4.9.6&time=1526905286) to all links, loaded using wp_enqueue_style and wp_enqueue_script functions.

== Installation ==

= From WordPress dashboard =

1. Visit "Plugins > Add New".
2. Search for "Prevent Browser Caching".
3. Install and activate Prevent Browser Caching plugin.

= From WordPress.org site =

1. Download Prevent Browser Caching plugin.
2. Upload the "prevent-browser-caching" directory to your "/wp-content/plugins/" directory.
3. Activate Prevent Browser Caching on your Plugins page.

== Changelog ==

= 2.1 =
* Added option to show "Update CSS/JS" button on the toolbar.

= 2.0 =
* Added setting page to the admin panel.
* Added automatically updating CSS and JS files every period for individual user
* Added manually updating CSS and JS files for all site visitors

= 1.1 =
* Added plugin text domain.

= 1.0 =
* First version of Prevent Browser Caching plugin.
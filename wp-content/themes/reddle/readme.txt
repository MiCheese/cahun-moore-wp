== Changelog ==

= 26 October 2015 =
* Add responsive menu.

= 25 September 2015 =
* Add screen-reader-text styles and minor CSS formatting
* Moved infinte scrolling code into theme;

= 20 August 2015 =
* Add text domain and/or remove domain path. (O-S)

= 16 June 2015 =
* Hook widget function into widgets_init rather than init for WP.org submission requirements; update readme and version number in preparation for regenerating download

= 15 June 2015 =
* Updating version number for regenerated download

= 6 June 2015 =
* adding missing attr escaping;

= 26 August 2014 =
* switch to using 'large' image size and `the_post_thumbnail()` instead of printing image source and letting HTML resize images

= 24 July 2014 =
* change theme/author URIs and footer links to `wordpress.com/themes`.

= 1 June 2014 =
* add/update pot files.

= 22 May 2014 =
* Make sure that the secondary widget area is positioned to the right, below the primary widget area.

= 14 April 2014 =
* Update Responsive video support

= 28 February 2014 =
* Change text strings to reduce theme string proliferation.

= 14 January 2014 =
* Adjusts content_width value for when there are no active widgets in the sidebar but removed the header image check.
* Add responsive video support.

= 6 December 2013 =
* update Width terms to Layout.

= 29 October 2013 =
* Update font CSS rules such that they'll work properly in Internet Explorer.
* Ensure non-captioned images do not have borders.
* Ensure captioned images don't overflow the content container.

= 11 October 2013 =
* Hide comments link from password protected posts.

= 5 August 2013 =
* update author in footer and stylesheet.

= 24 July 2013 =
* remove hardcoded inclusion of wpcom.php.

= 22 July 2013 =
* Update readme.txt with latest changes.
* Replace deprecated hgroup element and bump version.
* Update .pot file.
* Always test if statement is true in ternary operators.
* Add wp.com compat file.
* Clean up functions file and extract wp.com-specific code.
* Address indentation in sidebar and searchform templates.
* Reorder and indent prefexed attributes.
* Don't unnecessarily separated comments.
* Simplify custom header logic and markup.
* Move to a custom template tag to display the image and streamline template markup.
* Cleanup content templates.
* Simplify password check for comments.
* Update archive titles and taxonomy description.

= 15 July 2013 =
* Remove mention of the_post_format_image.

= 5 July 2013 =
* Remove the_post_format_* functions.

= 3 July 2013 =
* Move away from using deprecated functions and improve compliance with .org theme review guidelines.

= 17 June 2013 =
* Removing the business tag -- reddle is a blog theme!

= 17 May 2013 =
* Remove auto height from embeds, objects, and iframes; it was causing videos to shrink in height.

= 15 May 2013 =
* Update image post format for better compatibility with 3.6, with backward compat for earlier versions.

= 13 May 2013 =
* Update license.

= 2 April 2013 =
* Update to version 1.2 for .org release.

= 25 February 2013 =
* new screenshot at 600x450 for HiDPI support.

= 26 January 2013 =
* removing add_theme_support for print styles, since the theme actually does not have any print styles defined. The add_theme_support was causing blank print previews and blank printed pages.

= 11 January 2013 =
* Move $content_width adjustment in a callback and extend use cases.

= 28 December 2012 =
* Prepare for resubmission to Extend.

= 5 November 2012 =
* REmove duplicate post date, fixing #1472. Also fix color of edit link on image post format.

= 1 November 2012 =
* Let's make the post edit link less conspicuous -- treat it like tags and categories and include it in the post instead of as a circle to the left of the post.

= 31 October 2012 =
* Let's ensure the permalink is viewable to users whether logged in or logged out. Also ensure there is always a permalink available in the date by linking the date and styling it to look like regular entry meta information.

= 18 August 2012 =
* Remove loading of $locale.php.

= 19 July 2012 =
* Add Custom Colors tag to style.css

= 29 June 2012 =
* Make sure attribute escaping occurs after printing.

= 27 June 2012 =
* Adding infnite-scroll to style.css tags.

= 23 May 2012 =
* add styling for HTML5 email inputs;

= 18 April 2012 =
* enable print styles.

= 28 March 2012 =
* adding a required class for .org theme submission

= 10 March 2012 =
* Variables should not be passed to gettext functions.

= 6 January 2012 =
* Add image stretching CSS prevent rules for main content area images.

= 15 December 2011 =
* Filtering attachment link urls that don't have pretty permalinks will cause a 404 when viewing an unattached attachment

= 8 December 2011 =
* make sure the fixed width layout actually is fixed when there aren't any sidebars

= 5 December 2011 =
* using a larger content width if the theme has no header image and is fluid
* cleaning up videos for small screens
* make sure the second sidebar doesn't float up into the content
* removing some unneeded tabs from the stylesheet
* improving the display of WP.com widgets
* correclty hide the header text on front and back end to relect the custom header options
* a little more space around aligned items
* separate h1s in content by adding a border to the bottom and making them more distinct from the h2 element
* more bottom alignment for floated images should look better
* a little margin for comment-liking
* adding a screenshot
* updating the stylesheet header with a description and tags

= 30 November 2011 =
* removing unused font declaration
* correct font-size and fallback
* missing fallback to px for browsers that don't support rems
* overflow for pre element
* clean out unneeded tabs and newlines
* tighten up the display of multiple pingbacks
* nicer styles for the post password form
* better, scalable, margins for captioned images
* more finished styles for the no comments message
* removing unneeded elements from the stylesheet header
* first pass at RTL
* no need to link titles or featured images on single post and page views
* updated themecolors to the correct theme colors
* set the content_width to the max size of the content area with two-columns and a custom header active
* highlight post authors with a simple italic on their name
* adding support for a custom background
* all entry titles need a right margin to miss the comments link -- not just the image format

= 29 November 2011 =
* nicer image attachment pages
* prevents the image format post title from flowing under the comment bubble icon
* friendlier footer text
* repositioning the comment avatars so they're not off the screen on small screens
* re-hiding the permalinks on small screens;
* update the positioning of the datestamps and avatars in below 900px to reflect the changes in r8259
* The one column style looks better when the content uses all the available columns on the grid
* a simpler 404 page
* styles for the admin header image
* if there isn't a menu beneath it the header image needs more margin
* the header padding needs to also go if the next is gone
* moving wp.com styles to the bottom of the stylesheet for easier management when submitting to wp.org
* add in optional footer sidebars
* Webkit won't round images that have borders but adding a rounded element behind those images with CSS content will approximate that effect
* move the wp.com specific functions to the bottom of the file so they're easier to manage when submitting to WP.org

= 28 November 2011 =
* sticky styles
* Reddle first pass at responsive layout
* get the one column tumblelog looking a little better with a dynamic class based width determined by the body padding
* correctly position comment avatars on the edge of the page for the fully fluid layout
* Reddle
* Reddle

= 25 November 2011 =
* Initial import of Reddle

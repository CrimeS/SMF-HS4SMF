[hr]
[center][size=16pt][b]Highslide 4 SMF Version 0.8[/b][/size]
[url=http://custom.simplemachines.org/mods/index.php?action=search;author=11359][b]By Spuds[/b][/url]
[url=http://custom.simplemachines.org/mods/index.php?mod=2518][b]Link to Mod[/b][/url]
[/center]
[hr]

[color=blue][b][size=12pt][u]License[/u][/size][/b][/color]
This modification is released under a MPL V1.1 license, a copy of it with its provisions is included with the package.

[color=blue][b][size=12pt][u]Introduction[/u][/size][/b][/color]
This modification adds the highslide lightbox effect to images and attachments in your post.
===
Highslide JS is licensed under a Creative Commons Attribution-Non Commercial 2.5 License. This means you must get the author's permission and a commerical license to use Highslide JS on a commercial or governmental website, web application or SaaS project.  [url=http://highslide.com/#licence]Highslide[/url]

[color=blue][b][size=12pt][u]Features[/u][/size][/b][/color]
o Expands a thumbnail (attachment or in-line image) in to a full-size image in a picture frame when clicked
o Auto size images to fit browser window, with option to expand to full size with scrollbars
o Slideshow for images on page, grouping by topic or by individual messages in the topic
o Prev/Next with arrow keys
o Works for thumbnails from Postimage, Imageshack, Photobucket, iPicture, Radikal, Keep4u, Xs and Fotosik.
o Auto attaches to all images and optionally attachments.  Can override an image from sliding by using the alt="ns" option to prevent specified images from highsliding, use it as [nobbc][img alt="ns"]your image[/img][/nobbc]

There are many admin settings available with this mod, go to admin - configuration - modification settings - Highslide
o Disable/enable the mod
o Disable/enable the use of Coral CDN as JS/CSS source
o Disable/enable fade In/Out transition in Galleries
o Disable/enable Highslide credits
o Disable/enable Highslide on attachments
o Enable the slideshow feature, includes attachments and post images
o Smart slideshow option allowing each message in a post to have its own slideshow
o Provide similiar highslide effects on Aeva Gallery
o Expanded images to center of page or in place
o Define slideshow delay in seconds (0-10)
o Define graphical or mac style text boxes for slideshow controls
o Define the sideshow control bar location
o Define the frame style around the highslide image
o Define how dark to make the background page when highsliding an image
o Define the source for the text in the heading
o Define the source for the text in the caption
o Define how dark to make the background in the heading and caption area
o Define the location for the caption
o Define the location for the footer
o Disable/enable hiding the heading, caption and slide controls on mouse out
o Define the size and style of the slide controls

[color=blue][b][size=12pt][u]Installation[/u][/size][/b][/color]
Simply install the package to install this modification on the SMF Default Curve theme.
Manual edits may be required for other themes.

This mod is compatible with SMF 2.0 only.

[color=blue][b][size=12pt][u]Support[/u][/size][/b][/color]
Please use the HS4SMF modification thread for support with this modification.

[color=blue][b][size=12pt][u]Changelog[/u][/size][/b][/color]
[b]0.8.1 - 22 January 2012[/b]
o ! Fixed minor compatibility issue with ILA
o ! Some more code cleanup, still needs more :'/

[b]0.8 - 6 January 2012[/b]
o + Updated highslide to 4.1.13
o + Moved HS language strings to language file from js files
o + Moved hs4smf language strings to own file instead of modifications.language
o + Added option to count highslide views in a message as a gallery view
o + Added open license
o ! Fixed error with captionOverlay opacity
o ! Small updates to options panel layout
o ! Some code cleanup, needs more :X

[b]0.7 - 21 March 2011[/b]
o + Minor updates for 2.0 Gold
o ! fixed issue where aeva links were being hidden in a portal block
o ! fixed issue where the aspect ratio was being changed when the aeva option was enabled
o + Improved the caption logic, it will now show the aeva caption text when available on a gallery image and show the caption as defined in the admin panel for other images (attachments, in line image, etc).
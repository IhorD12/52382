=== Globaly Block ===
Contributors: Jules (AI Assistant)
Tags: block-theme, full-site-editing, two-columns, left-sidebar, right-sidebar, custom-background, custom-colors, custom-logo, custom-menu, featured-images, threaded-comments, translation-ready, wide-blocks, accessibility-ready
Requires at least: 6.0
Tested up to: 6.4
Stable tag: 1.0.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A modern block-based WordPress theme, rebuilt from the legacy Globaly theme.

== Description ==

Globaly Block is a modern, block-based WordPress theme designed for full site editing. It takes inspiration from the design and content structure of the legacy "Globaly" (also known as "Advisto") theme, rebuilding it from the ground up using current WordPress best practices. This theme supports all features necessary for full site editing, including `theme.json` for global styles and settings, block patterns, and block-based template parts.

The theme is intended to be lightweight, fast-loading, responsive, and accessible.

== Installation ==

1.  Download the `globaly-block.zip` file from [Your Theme Source, e.g., GitHub repository or WordPress.org page - **USER TO UPDATE**].
2.  In your WordPress admin panel, go to Appearance > Themes and click the "Add New" button.
3.  Click the "Upload Theme" button.
4.  Upload the `globaly-block.zip` file you downloaded.
5.  Activate the theme.

Alternatively, you can install it by:
1.  Extracting the `globaly-block.zip` file.
2.  Uploading the extracted `globaly-block` folder to the `/wp-content/themes/` directory on your server.
3.  In your WordPress admin panel, go to Appearance > Themes and activate Globaly Block.

== Using Homepage Patterns ==

Globaly Block includes several block patterns to help you quickly set up your homepage or other pages. These patterns are based on common sections found in the legacy Globaly theme design:

*   **Hero Section:** A large banner area for your main headline and call to action.
*   **Services Section (3 Columns):** Showcase your key services or features with icons and text.
*   **About Us Section:** A two-column layout for introducing your company, typically with an image and text.
*   **Featured Content Section (3 Columns):** Highlight projects, portfolio items, or key pages.
*   **Testimonials Section:** Display client quotes to build trust.
*   **CTA Section:** A prominent call to action banner.
*   **Latest Posts Section:** Show excerpts from your recent blog posts.

To use these patterns:
1.  Edit a page (e.g., your homepage).
2.  Click the "+" icon to add a new block.
3.  Go to the "Patterns" tab.
4.  Select the "Globaly Block Patterns" category from the dropdown (if categories are used and registered).
5.  Choose the desired pattern to insert it onto your page.
6.  Customize the content (text, images, links) within the pattern as needed.

== Customization via theme.json ==

Globaly Block leverages `theme.json` for managing global styles and settings. You can customize:

*   **Colors:** The theme defines a color palette. You can adjust these colors or add your own via the Site Editor's "Styles" panel (Global Styles > Colors).
*   **Typography:** Default fonts (Merriweather Sans for body, Merriweather for headings, Lato for UI elements), font sizes, and line heights are defined. These can be customized via Global Styles > Typography. The theme is set up to use locally hosted versions of these Google Fonts (Merriweather, Merriweather Sans, Lato), which you would need to ensure are placed in the `assets/fonts/` directory of the theme.
*   **Layout:** Default content width (`800px`) and wide width (`1200px`) can be adjusted via Global Styles > Layout.
*   **Block Styles:** Default styles for various core blocks (buttons, tables, lists, etc.) are defined and can be further customized.

== Custom Page Templates ==

The theme includes the following custom page templates:

*   **Page, Full Width:** A template that allows content to span the full browser width, while still using the standard theme header and footer. Ideal for pages where you want edge-to-edge sections.
*   **Landing Page (No Header/Footer):** A minimal template that removes the standard theme header and footer, perfect for distraction-free landing pages.

You can select these templates when editing a page in the WordPress editor under "Page Attributes" > "Template".

== Licensing ==

Globaly Block is licensed under the GNU General Public License v2 or later.
License URI: http://www.gnu.org/licenses/gpl-2.0.html

*   **Fonts:** This theme is designed to use Merriweather, Merriweather Sans, and Lato fonts. If you download them from Google Fonts, they are typically licensed under the SIL Open Font License. Please ensure you have the necessary font files in the `assets/fonts/` directory.
*   **Placeholder Images:** Placeholder images included with the theme are for demonstration purposes only. Please replace them with your own licensed images.
*   **Icons:** The theme may use icons from icon libraries which have their own licenses (e.g., Material Icons - Apache License 2.0, Font Awesome - SIL OFL 1.1/MIT License for icons). Ensure compliance if using these icon sets directly.

== Changelog ==

= 1.0.0 - YYYY-MM-DD =
* Initial release.

== Notes ==
This theme was developed by Jules, an AI assistant, based on instructions to modernize the legacy Globaly theme. Further refinements and testing in a live WordPress environment are recommended. The user is responsible for ensuring all assets (images, fonts if self-hosted) are properly licensed for their use case.
The `screenshots/52382-wpgpl-b.jpg` file provided as a visual reference could not be directly accessed during development, so patterns are based on common structures and the theme's derived styles.

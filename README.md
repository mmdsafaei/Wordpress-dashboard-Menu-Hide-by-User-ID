=== Wordpress dashboard Menu Hide by User ID ===
Contributors: Hosh Ario
Tags: admin, menu, hide, restrict, dashboard, user, role, elementor, booknetic
License: free

== Description ==

This plugin allows you to visually restrict and hide specific WordPress admin dashboard menu items for a specific administrator user (by user ID). It is especially useful when you want to grant someone full admin access (for example, to manage a plugin that only works for administrators), but you want to limit their access to other parts of the dashboard for security or usability reasons.

**Important:**
This plugin works based on a specific user ID. You must set the user ID of the admin you want to restrict by editing the plugin PHP file and changing the user ID value in the code (default is 5).

**Key Features:**
- Hide any combination of admin menu items for a specific admin user (by user ID)
- Works for built-in menus (Posts, Pages, Plugins, Appearance, Settings, Media, Users, Tools, Comments, Dashboard, etc.)
- Supports hiding custom plugin menus (e.g. Elementor, Booknetic, etc.)
- No effect on other administrators or users
- No changes to user roles or real permissions (only UI/UX is affected)

**Typical Use Case:**
If you need to give someone administrator access so they can manage a plugin (for example, Booknetic appointment booking plugin, which only works for admins), but you do not want them to see or access other parts of the dashboard, this plugin is the perfect solution. You can visually limit their dashboard to only what they need.

== Installation ==
1. Upload the plugin folder to the `/wp-content/plugins/` directory, or install the plugin as a .zip file via the WordPress admin.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. By default, the plugin is set to hide menus for user ID 5. You can change the user ID in the plugin PHP file if needed.

== Frequently Asked Questions ==

= Does this plugin change user roles or permissions? =
No. It only hides menu items visually for the specified user. The user still has full admin rights and can access pages directly if they know the URL.

= Can I use this for more than one user? =
Currently, the plugin is set for a single user ID. You can modify the code to support multiple IDs if needed.

= Can I hide custom plugin menus? =
Yes! Just add the correct menu slug to the list in the plugin PHP file. For example, to hide Booknetic or Elementor menus, add their slugs.

== Changelog ==
= 1.0 =
* Initial release.

== Usage Example ==

Suppose you use the Booknetic plugin for appointment booking, and you want to give your staff admin access so they can manage Booknetic, but you do not want them to see or access other dashboard sections. This plugin lets you hide all unnecessary menus for that user, keeping their admin panel clean and focused only on Booknetic.

== Important Note ==
This plugin is for UI/UX customization only. It does not provide real security or access restriction. For true security, use a role editor or permissions plugin. 

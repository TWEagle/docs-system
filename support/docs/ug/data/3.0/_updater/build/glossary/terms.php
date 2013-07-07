<?php
		// The page title
		$page_title = '6.1. Terms';

$navigation = array(
	'home' => array('../index.php','phpBB 3.0 Olympus Documentation'),
	'this' => array('../glossary/terms.php','Terms'),
	'prev' => array('../',''),
	'next' => array('../',''),
	'up'   => array('../glossary/index.php','Glossary'),
	'toc'  => array('../index.php','phpBB 3.0 Olympus Documentation',array(array('../quickstart/index.php','Quick Start Guide',array(array('../quickstart/quick_requirements.php','Requirements',array()),
			array('../quickstart/quick_installation.php','Installation',array(array('../quickstart/quick_installation_intro.php','Introduction',array()),
			array('../quickstart/quick_installation_requirements.php','Requirements',array()),
			array('../quickstart/quick_installation_database.php','Database settings',array()),
			array('../quickstart/quick_installation_admin.php','Administrator details',array()),
			array('../quickstart/quick_installation_config.php','Configuration file',array()),
			array('../quickstart/quick_installation_advanced.php','Advanced settings',array()),
			)),
			array('../quickstart/quick_settings.php','General settings',array(array('../quickstart/quick_settings_boardsettings.php','Board Settings',array()),
			array('../quickstart/quick_settings_boardfeatures.php','Board Features',array()),
			)),
			array('../quickstart/quick_forums.php','Creating and setting up forums',array()),
			array('../quickstart/quick_permissions.php','Setting permissions',array(array('../quickstart/quick_permissions_types.php','Permission types',array()),
			array('../quickstart/quick_permissions_forum.php','Setting forum permissions',array()),
			array('../quickstart/quick_permissions_manual.php','Manual permissions',array()),
			array('../quickstart/quick_permissions_roles.php','Permissions roles',array()),
			array('../quickstart/quick_permissions_moderators.php','Assign moderators to forums',array()),
			array('../quickstart/quick_permissions_global.php','Setting global permissions',array()),
			)),
			array('../quickstart/quick_support.php','Obtaining support',array()),
			)),
			array('../upgradeguide/index.php','Upgrade Guide',array(array('../upgradeguide/upgrade.php','Upgrading from 2.0 to 3.0',array()),
			array('../upgradeguide/upgrade_general.php','Upgrading from any board software to phpBB3',array(array('../upgradeguide/upgrade_general_requirements.php','Requirements',array()),
			array('../upgradeguide/upgrade_general_preliminary.php','Preliminary steps',array()),
			array('../upgradeguide/upgrade_general_conversion.php','Conversion steps',array()),
			)),
			)),
			array('../adminguide/index.php','Administration Guide',array(array('../adminguide/admin_control_panel.php','The Administration Control Panel',array()),
			array('../adminguide/acp_general.php','General Configuration and Front Page',array(array('../adminguide/acp_general_config.php','Board Configuration',array()),
			array('../adminguide/acp_general_client.php','Client communication',array()),
			array('../adminguide/acp_general_server.php','Server configuration',array()),
			)),
			array('../adminguide/acp_forums.php','Forum Admin',array(array('../adminguide/acp_forums_types.php','Explanation of forum types',array()),
			array('../adminguide/acp_forums_subforums.php','Subforums',array()),
			array('../adminguide/acp_forums_manage.php','Manage forums',array()),
			)),
			array('../adminguide/acp_posting.php','Posting Settings',array(array('../adminguide/acp_posting_bbcodes.php','BBCodes',array()),
			array('../adminguide/acp_posting_pm_settings.php','Private message settings',array()),
			array('../adminguide/acp_posting_topic_icons.php','Topic icons',array()),
			array('../adminguide/acp_posting_smilies.php','Smilies',array()),
			array('../adminguide/acp_posting_censors.php','Word censoring',array()),
			array('../adminguide/acp_attach_settings.php','Attachment Settings',array()),
			array('../adminguide/acp_attach_extensions.php','Manage extensions',array()),
			array('../adminguide/acp_attach_extension_groups.php','Manage extension groups',array()),
			array('../adminguide/acp_attach_orphaned.php','Orphaned attachments',array()),
			)),
			array('../adminguide/acp_users.php','Users Management',array(array('../adminguide/acp_users_manage.php','Manage Users',array()),
			array('../adminguide/acp_users_inactive.php','Inactive Users',array()),
			array('../adminguide/acp_users_permissions.php','Users\' permissions',array()),
			array('../adminguide/acp_users_forum_permissions.php','Users\' forum permissions',array()),
			array('../adminguide/acp_users_custom_profile_fields.php','Custom profile fields',array()),
			array('../adminguide/acp_user_ranks.php','Managing ranks',array()),
			array('../adminguide/acp_user_security.php','User Security',array()),
			)),
			array('../adminguide/acp_groups.php','Group Management',array(array('../adminguide/acp_groups_types.php','Group types',array()),
			array('../adminguide/acp_groups_edit.php','Group attributes',array()),
			array('../adminguide/acp_groups_default.php','Default groups',array()),
			)),
			array('../adminguide/acp_permissions.php','Permission Overload',array(array('../adminguide/acp_permissions_global.php','Global Permissions',array()),
			array('../adminguide/acp_permissions_forumbased.php','Forum Based Permissions',array()),
			array('../adminguide/acp_permissions_roles.php','Permission Roles',array()),
			array('../adminguide/acp_permissions_masks.php','Permission Masks',array()),
			)),
			array('../adminguide/acp_styles.php','Styles',array(array('../adminguide/acp_styles_manage.php','Installing and managing styles',array()),
			array('../adminguide/acp_styles_templates.php','Templates',array()),
			array('../adminguide/acp_styles_themes.php','Themes',array()),
			array('../adminguide/acp_styles_imagesets.php','Imagesets',array()),
			)),
			array('../adminguide/acp_maintenance.php','Board Maintenance',array(array('../adminguide/acp_maintenance_logs.php','Forum Logs',array()),
			array('../adminguide/acp_maintenance_database.php','Database backup and restore',array()),
			array('../adminguide/acp_maintenance_search.php','Search Indexing',array()),
			)),
			array('../adminguide/acp_system.php','System Configuration',array(array('../adminguide/acp_system_updates.php','Checking for updates',array()),
			array('../adminguide/acp_system_spiders.php','Managing Search Robots',array()),
			array('../adminguide/acp_system_mail.php','Mass email',array()),
			array('../adminguide/acp_system_language.php','Language Packs',array()),
			array('../adminguide/acp_system_phpinfo.php','PHP Information',array()),
			array('../adminguide/acp_system_reasons.php','Manage reasons for reporting and denying posts',array()),
			array('../adminguide/acp_system_modules.php','Module Management',array()),
			)),
			)),
			array('../moderatorguide/index.php','Moderator Guide',array(array('../moderatorguide/moderator_edit.php','Editing posts',array()),
			array('../moderatorguide/moderator_modtools.php','Moderation tools',array(array('../moderatorguide/modtools_lock.php','Locking a topic or post',array()),
			array('../moderatorguide/modtools_delete.php','Deleting a topic or post',array()),
			array('../moderatorguide/modtools_move.php','Moving a topic into another forum',array()),
			array('../moderatorguide/modtools_copy.php','Duplicating a topic',array()),
			array('../moderatorguide/modtools_type.php','Announcements and stickies',array()),
			array('../moderatorguide/modtools_split.php','Splitting posts off a topic',array()),
			array('../moderatorguide/modtools_mergetopics.php','Merge topics',array()),
			array('../moderatorguide/modtools_mergeposts.php','Merge posts into another topic',array()),
			)),
			array('../moderatorguide/moderator_queue.php','What is the “Moderation queue”?',array()),
			array('../moderatorguide/moderator_reported.php','What are “Reported posts”?',array()),
			array('../moderatorguide/moderator_mcp.php','The Moderator Control Panel (MCP)',array(array('../moderatorguide/mcp_queue.php','Moderation queue',array()),
			array('../moderatorguide/mcp_reported.php','Reported posts',array()),
			array('../moderatorguide/mcp_forum.php','Forum moderation',array()),
			)),
			)),
			array('../userguide/index.php','User Guide',array(array('../userguide/user_permissions.php','How user permissions affect forum experience',array()),
			array('../userguide/user_registering.php','Registering on a phpBB3 board',array()),
			array('../userguide/user_control_panel.php','Orienting Yourself in the User Control Panel',array(array('../userguide/ucp_overview.php','Overview',array()),
			array('../userguide/ucp_profile.php','Profile',array()),
			array('../userguide/ucp_preferences.php','Preferences',array()),
			array('../userguide/ucp_friends_foes.php','Friends and Foes',array()),
			array('../userguide/ucp_attachments.php','Attachments',array()),
			array('../userguide/ucp_usergroups.php','Usergroups',array()),
			)),
			array('../userguide/user_posting.php','Mastering the Posting Screen',array(array('../userguide/posting_form.php','Posting Form',array()),
			array('../userguide/posting_smilies.php','Smilies',array()),
			array('../userguide/posting_bbcodes.php','BBCodes',array()),
			array('../userguide/posting_options.php','Post Options',array()),
			array('../userguide/posting_attachments.php','Attachments',array()),
			array('../userguide/posting_polls.php','Polls',array()),
			array('../userguide/posting_drafts.php','Drafts',array()),
			)),
			array('../userguide/user_pm.php','Communicate with Private Messages',array(array('../userguide/pm_display.php','Message display',array()),
			array('../userguide/pm_new.php','Composing a new message',array()),
			array('../userguide/pm_folders.php','Message Folders',array()),
			array('../userguide/pm_filters.php','Message filters',array()),
			)),
			array('../userguide/user_search.php','Search - How to Find What You are Looking For',array()),
			array('../userguide/user_memberlist.php','The Memberlist - More Than Meets the Eye',array()),
			)),
			array('../glossary/index.php','Glossary',array(array('../glossary/terms.php','Terms',array()),
			)),
			)),
			
);

ob_start();
?>
<div xmlns="http://www.w3.org/1999/xhtml" class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both"><span xmlns="" id="terms"/>6.1. Terms</h2></div><div><div class="authorgroup"><div class="author"><h3 class="author"><span class="othername">MennoniteHobbit</span></h3></div><div class="author"><h3 class="author"><span class="othername">pentapenguin</span></h3></div><div class="author"><h3 class="author"><span class="othername">Techie-Micheal</span></h3></div><div class="author"><h3 class="author"><span class="othername">ameeck</span></h3></div></div></div></div></div><p>There are quite a few terms that are commonly used throughout phpBB and the support forums. Here is some information on these terms.</p><div class="variablelist"><dl><dt><span class="term">ACP</span></dt><dd><p>The <a href="../adminguide/admin_control_panel.php" title="3.1. The Administration Control Panel"><span class="acronym">ACP</span></a>, which stands for "Administration Control Panel",  is the main place from which you, the administrator, can control every aspect of your forum.</p></dd><dt><span class="term">ASCII</span></dt><dd><p><span class="acronym">ASCII</span>, or "American Standard Code for Information Interchange", is a common way of encoding data to transfer it to a different computer. <span class="acronym">FTP</span> clients have ASCII as a mode to transfer files. All phpBB files (files with the file extensions .php, .inc, .sql, .cfg, .htm, and .tpl), except for the image files, should be uploaded in ASCII mode.</p></dd><dt><span class="term">Attachments</span></dt><dd><p><a href="../adminguide/acp_general_config.php#acp_board_attachments" title="3.2.1.1. Attachment Settings">Attachments</a> are files that can be attached to posts, like e-mail attachments. Certain restrictions, set by the board administrator, control what users can attach.</p></dd><dt><span class="term">Avatar</span></dt><dd><p><a href="../userguide/ucp_profile.php#ucp_avatar" title="5.3.2.3. Avatar">Avatars</a> are small images that are displayed next to a username. Avatars can be changed in your profile and settings (such as allow/disallow uploading) edited from the <span class="acronym">ACP</span>.</p></dd><dt><span class="term">BBCode</span></dt><dd><p><a href="../userguide/posting_bbcodes.php" title="5.4.3. BBCodes">BBCode</a> is a special way of formatting posts that offers great control over what and how something is displayed. BBCode has a syntax similar to HTML.</p></dd><dt><span class="term">Binary</span></dt><dd><p>Within phpBB, "binary" usually refers to another common way of encoding data for transfer (the other being <span class="acronym">ASCII</span>. This is often found as a mode in an <span class="acronym">FTP</span> clients to upload files. All of phpBB's images (found mainly in the images/ directory and the style's directories) should be uploaded in binary mode. </p></dd><dt><span class="term">Cache</span></dt><dd><p>Cache is a way of storing frequently-accessed data. By storing this data, your server will have less load put on it, allowing it to process other tasks. By default, phpBB caches its templates, when they are compiled and used, and common static SQL queries.</p></dd><dt><span class="term">Category</span></dt><dd><p>A category is a group of any sort of similar items; for example, forums.</p></dd><dt><span class="term">chmod</span></dt><dd><p><span class="abbrev">chmod</span> is a way of changing the permissions of a file on a *nix (UNIX, Linux, etc.) server. Files in phpBB should be chmodded 644. Directories should be chmodded to 755. Avatar upload directories and templates cache directories should be chmodded to 777. For more information regarding chmod, please consult your <span class="acronym">FTP</span> client's documentation.</p></dd><dt><span class="term">Client</span></dt><dd><p>A client is a computer that accesses another computer's service(s) via a network.</p></dd><dt><span class="term">Cookie</span></dt><dd><p>A cookie is a small piece of data put onto the user's computer. Cookies are used with phpBB to store login information (used for automatic logins).</p></dd><dt><span class="term">Database</span></dt><dd><p>A database is a collection stored in a structured, organized manner (with different tables, rows, and columns, etc.). Databases provide a fast and flexible way of storing data, instead of the other commonly used data storage system of flat files where data is stored in a file. phpBB 3.0 supports a number of different <span class="acronym">DBMSs</span>  and uses the database to store information such as user details, posts, and categories. Data stored in a database can usually be backed up and restored easily.</p></dd><dt><span class="term">DBAL</span></dt><dd><p><span class="acronym">DBAL</span>, or "Database Abstraction Layer", is a system that allows phpBB 3.0 to access many different <span class="acronym">DBMSs</span> with little overhead. All code made for phpBB (including MODs) need to use the phpBB <span class="acronym">DBAL</span> for compatibility and performance purposes.</p></dd><dt><span class="term">DBMS</span></dt><dd><p>A <span class="acronym">DBMS</span>, or "Database Management System", is a system or software designed to manage a database. phpBB 3.0 supports the following DBMSs: Firebird, MS SQL Server, mySQL, Oracle, postgreSQL, and SQLite.</p></dd><dt><span class="term">FTP</span></dt><dd><p><span class="acronym">FTP</span> stands for "File Transfer Protocol". It is a protocol which allows files to be transferred between computers. <span class="acronym">FTP</span> clients are programs that are used to transfer files via <span class="acronym">FTP</span>.</p></dd><dt><span class="term">Founder</span></dt><dd><p>A founder is a special board administrator that cannot be edited or deleted. This is a new user level introduced in phpBB 3.0.</p></dd><dt><span class="term">GZip</span></dt><dd><p>GZip is a compression method often used in web applications and software such as phpBB to improve speed. Most modern browsers support this on-the-fly algorithm. Gzip is also used to compress an archive of files. Higher compression levels, however, will increase server load.</p></dd><dt><span class="term">IP address</span></dt><dd><p>An IP address, or Internet Protocol address, is a unique address that identifies a specific computer or user.</p></dd><dt><span class="term">Jabber</span></dt><dd><p>Jabber is an open-source protocol that can be used for instant messenging. For more information on Jabber's role in phpBB, see <a href="../adminguide/acp_general_client.php#acp_client_jabber" title="3.2.2.3. Jabber settings">Section 3.2.2.3, “Jabber settings”</a>.</p></dd><dt><span class="term">MCP</span></dt><dd><p>The <span class="acronym">MCP</span>, or Moderation Control Panel, is the central point from which all moderators can moderate their forums. All moderation-related features are contained in this control panel.</p></dd><dt><span class="term">MD5</span></dt><dd><p><span class="acronym">MD5</span> (Message Digest algorithm 5) is a commonly-used hash function used by phpBB. MD5 is an algorithm which takes an input of any length and outputs a message digest of a fixed length (128-bit, 32 characters). MD5 is used in phpBB to turn the users' passwords into a one-way hash, meaning that you cannot "decrypt" (reverse) an MD5 hash and get users' passwords. User passwords are stored as MD5 hashes in the database.</p></dd><dt><span class="term">MOD</span></dt><dd><p>A <span class="abbrev">MOD</span> is a code modification for phpBB that either adds, changes, or in some other way enhances, phpBB. <span class="abbrev">MODs</span> are written by third-party authors; as such, the phpBB Group does not assume any responsibility for MODs.</p></dd><dt><span class="term">PHP</span></dt><dd><p><span class="acronym">PHP</span>, or "PHP: Hypertext Preprocessor", is a commonly-used open-source scripting language. phpBB is written in <span class="acronym">PHP</span> and requires the <span class="acronym">PHP</span> runtime engine to be installed and properly configured on the server phpBB is run on. For more information about <span class="acronym">PHP</span>, please see the <a href="http://www.php.net" target="_top">PHP</a> home page.</p></dd><dt><span class="term">phpMyAdmin</span></dt><dd><p>phpMyAdmin is a popular open-source program that is used to manage MySQL databases. When <span class="abbrev">MODding</span> phpBB or otherwise changing it, you may have to edit your database. phpMyAdmin is one such tool that will allow you to do so. For more information regarding phpMyAdmin, please see the <a href="http://www.phpmyadmin.net" target="_top">phpMyAdmin project home page</a>.</p></dd><dt><span class="term">Private Messages</span></dt><dd><p>Private messages are a way for registered members to communicate privately through your board without the need to fall back to e-mail or instant messaging. They can be sent between users (they can also be forwarded and have copies sent, in phpBB 3.0) that cannot be viewed by anyone other than the intended recipient. The user guide contains more information on <a href="../userguide/user_pm.php" title="5.5. Communicate with Private Messages">using phpBB3's private messaging system</a>.</p></dd><dt><span class="term">Rank</span></dt><dd><p>A rank is a sort of title that is assigned to a user. Ranks can be added, edited, and deleted by administrators.</p><div class="note" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Note</h3><p>When assigning a special rank name to a user, remember that no permissions are associated. For example, if you create a "Support Moderator" rank and assign it to a user, that user will not automatically get moderator permissions. You must assign the user the special permissions separately.</p></div></dd><dt><span class="term">Server-writable</span></dt><dd><p>Anything on your server that is server-writable means that the file(s) or folder(s) in question have their permissions properly set so that the server can write to them. Some phpBB3 functions that may require some files and/or folders to be writable by the server include caching and the actual installation of phpBB3 (the config.php file needs to be written during the installation process). Making files or folders server-writable, however, depends on the operating system that the server is running under. On *nix-based servers, users can configure file and folder permissions via the <em class="glossterm">CHMOD</em> utility, while Windows-based servers offer their own permissions scheme. It is possible with some <em class="glossterm">FTP</em> clients to change file and folder permissions as well.</p></dd><dt><span class="term">Session</span></dt><dd><p>A session is a visit to your phpBB forums. For phpBB, a session is how long you spend on the forums. It is created when you login deleted when you log off. Session <span class="acronym">IDs</span> are usually stored in a cookie, but if phpBB is unable to get cookie information from your computer, then a session <span class="acronym">ID</span> is appended to the URL (e.g. index.php?sid=999). This session <span class="acronym">ID</span> preserves the user's session without use of a cookie. If sessions were not preserved, then you would find yourself being logged out every time you clicked on a link in the forum.</p></dd><dt><span class="term">Signature</span></dt><dd><p>A signature is a message displayed at the end of a user's post. Signatures are set by the user. Whether or not a signature is displayed after a post is set by the user's profile settings.</p></dd><dt><span class="term">SMTP</span></dt><dd><p><span class="acronym">SMTP</span> stands for "Simple Mail Transfer Protocol". It is a protocol for sending email. By default, phpBB uses <span class="acronym">PHP</span>'s built-in <a href="http://www.php.net/manual/en/function.mail.php" target="_top">mail()</a> function to send email. However, phpBB will use <span class="acronym">SMTP</span> to send emails if the required <span class="acronym">SMTP</span> data is correctly set up.</p></dd><dt><span class="term">Style</span></dt><dd><p>A style is made up of a template set, image set, and stylesheet. A style controls the overall look of your forum.</p></dd><dt><span class="term">Sub-forum</span></dt><dd><p>Sub-forums are a new feature introduced in phpBB 3.0. Sub-forums are forums that are nested in, or located in, other forums.</p></dd><dt><span class="term">Template</span></dt><dd><p>A template is what controls the layout of a style. phpBB 3.0 template files have the .html file extension. These template files contain mostly <span class="acronym">HTML</span> (no <span class="acronym">PHP</span>, however), with some variables that phpBB uses (contained in braces: { and }).</p></dd><dt><span class="term">UCP</span></dt><dd><p>The <span class="acronym">UCP</span>, or User Control Panel, is the central point from which users can manage all of the settings and features that pertain to their accounts.</p></dd><dt><span class="term">UNIX Timestamp</span></dt><dd><p>phpBB stores all times in the <a href="http://en.wikipedia.org/wiki/Unix_time" target="_top">UNIX timestamp</a> format for easy conversion to other time zones and time formats.</p></dd><dt><span class="term">Usergroup</span></dt><dd><p>Usergroups are a way of grouping users. This makes it easier to set permissions to many people at the same time (e.g. create a moderator group and give it moderating permissions to a certain forum instead of giving lots of individual people moderating permissions separately). A usergroup has a usergroup moderator (a leader, essentially), who has the ability to add or delete users from the group. Usergroups can be set to hidden, closed or open. If a usergroup is open, users can try requesting membership via the proper page within the <a href="../userguide/user_control_panel.php" title="5.3. Orienting Yourself in the User Control Panel">group control panel</a>. phpBB 3.0 has six pre-defined usergroups.</p></dd></dl></div></div><div class="copyright">© 2006, 2008 phpBB Group — Licensed under the Creative Commons <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/">Attribution-NonCommercial-ShareAlike 3.0</a> license</div>
<?php

$content = str_replace(' xmlns="http://www.w3.org/1999/xhtml"', '', ob_get_clean());

?>
<?php

//	------------------------------------------------------------------------
//	Admin Output - Alert Values
//	------------------------------------------------------------------------
//	General Alert Values
//	------------------------------------------------------------------------
$lang['alert.success']				= 'Success!';
$lang['alert.error']				= 'An Error Occurred!';
$lang['alert.info']					= 'Reminder:';
$lang['alert.block']				= 'Warning!';

// v2.1.0
$lang['alert.dunamis.compatible']	=	'The version of Dunamis you are using is not compatible with this version of In Touch.  Please upgrade Dunamis before proceeding.';


//
//	Licensing Alerts
//	------------------------------------------------------------------------
$lang['alert.license.invalid']		= 'Your license is invalid!  Please check your license key before continuing.';
$lang['alert.license.saved']		= 'License successfully saved.';

//
//	Groups Alerts
//
$lang['alert.group.saved']			= 'The %s group has been saved!';
$lang['alert.group.deleted']		= 'Group has been successfully deleted!';

//
//	Configure Alerts
$lang['alert.configure.saved']		= 'Settings have been saved!';


//
//	Admin Configuration Values
//		WHMCS > Setup > Addon Modules
//	------------------------------------------------------------------------
$lang['addon.title']		= 'In Touch';
$lang['addon.author']		= '<div style="text-align: center; width: 100%; ">Go Higher<br/>Information Services, LLC</div>';
$lang['addon.description']	= 'This module permits you to setup multiple companies to send out emails and invoices through the same WHMCS application.';


//
//	Admin Output - General Items
//		WHMCS > Addons > In Touch
//	------------------------------------------------------------------------
$lang['admin.title']						= 'In Touch %s';
$lang['admin.title.default']				=
$lang['admin.title.default.default']		= '<small>Dashboard</small>';
$lang['admin.title.groups']					=
$lang['admin.title.groups.default']			= '<small>Group</small>';
$lang['admin.title.groups.addnew']			= '<small>Groups :: Add New</small>';
$lang['admin.title.groups.edit']			= '<small>Groups :: Edit</small>';
$lang['admin.title.groups.save']			= '<small>Groups :: Save</small>';
$lang['admin.title.groups.delete']			= '<small>Groups :: Deletion</small>';
$lang['admin.title.license']				=
$lang['admin.title.license.default']		= '<small>Licensing</small>';
$lang['admin.title.license.save']			= '<small>Licensing :: Save License</small>';
$lang['admin.title.configure']				=
$lang['admin.title.configure.default']		= '<small>Configure</small>';
$lang['admin.title.configure.save']			= '<small>Configure :: Save Settings</small>';
// 2.0.8
$lang['admin.title.updates.default']		=	'<small>Update Manager</small>';
// 2.2.2
$lang['admin.title.syscheck.default']		=	'<small>System Check</small>';

// Navigation Bar
$lang['admin.navbar.default']	= 'Dashboard';
$lang['admin.navbar.groups']	= 'Groups';
$lang['admin.navbar.configure']	= 'Configure';
$lang['admin.navbar.license']	= 'License';
// 2.0.8
$lang['admin.navbar.updates']	= 'Updates';
// 2.2.2
$lang['admin.navbar.syscheck']	=	'System Check';


//	------------------------------------------------------------------------
//	Admin Output - General Form Items
//	------------------------------------------------------------------------
$lang['form.submit']				= 'Submit';
$lang['form.reset']					= 'Reset';
$lang['form.cancel']				= 'Cancel';
$lang['form.close']					= 'Close';
$lang['form.edit']					= 'Edit';
$lang['form.delete']				= 'Delete';
$lang['form.toggleyn.enabled']		= 'Enabled';
$lang['form.toggleyn.disabled']		= 'Disabled';
$lang['form.button.addnew']			= 'Add New';





//	========================================================================
//	Admin Output - Page Specific
//	========================================================================
//	------------------------------------------------------------------------
//	Dashboard Page
//		WHMCS > Addons > In Touch > Default
//		as of 2.0.0
//	------------------------------------------------------------------------
$lang['admin.default.body']		=	'<p>In Touch provides the ability to customize invoices, quotes and outbound emails based upon a customer\'s client group.  Features include:<ul>'
								.	'<li><i class="icon-hang icon-ok"></i> Customization of outgoing emails including emails containing client information, quotes, invoices, support tickets, affiliate data and product emails</li>'
								.	'<li><i class="icon-hang icon-ok"></i> Inclusion of a legal field at the bottom of each email sent out (if group is configured with a legal footer )</li>'
								.	'<li><i class="icon-hang icon-ok"></i> Quote generation for non-clients now permits specification of the intended client group of the non-client</li>'
								.	'<li><i class="icon-hang icon-ok"></i> Customization of invoice and quote PDF and html output</li>'
								.	'<li><i class="icon-hang icon-ok"></i> WYSIWYG editor for customizing header, signature, footer and legal fields</li>'
								.	'</ul></p>'
								.	'<h2>Configuration</h2>'
								.	'<p>Configuring In Touch is fairly straight forward.  If you already have client groups configured in WHMCS then you can go into the Group section and create a matching group for each Client Group.  If a client group does not have a matching In Touch group, then the default information as set in your WHMCS configuration will be used.</p>'
								.	'<p>Keep in mind when using images that the same constratints that WHMCS places upon your logo for invoices and quotes also applies.  In other words, you don\'t to use an image that is 1920 x 400 pixels in size for your invoices, since it would be incredibly large on the printout.  In Touch does not resize your images, it simply places them into the invoice or quote just as WHMCS does.</p>'
								.	'<p>In Touch will permit you to setup multiple groups for the same client group so you can for instance start designing another group while still using an old style.  Having multiple In Touch groups that are active will result in a notice being thrown on the right side of this page to alert you.  The group that has the lowest ID number will be the group that In Touch will use if multiple active groups apply to the same client group.</p>'
								.	'';
// Update Widget
$lang['admin.widget.header.updates']		= 'Software Updates';
$lang['admin.widget.body.updates.none']		=	'<p>You are running the latest version of In Touch!</p>';
$lang['admin.widget.body.updates.error']	=	'<p>An error occurred checking for the latest updates:</p><pre>%s</pre>';
$lang['admin.widget.body.updates.exist']	=	'<p><strong>In Touch version %s</strong> is available for download.  Please visit our web site at https://www.gohigheris.com to download the latest product.</p>';
// Configuration Widget
$lang['admin.widget.header.status']				= 'Product Configuration';
$lang['admin.widget.body.status.license']		=	'<p>Your license is coming back invalid and must be corrected first.</p>';
$lang['admin.widget.body.status.enable']		=	'<p>The product is disabled in the configuration settings.  No groups will be applied until this is enabled.</p>';
$lang['admin.widget.body.status.nogroups']		=	'<p>You haven\'t configured any groups yet in the product to apply.</p>';
$lang['admin.widget.body.status.noactivegrps']	=	'<p>You don\'t have any active groups in your configuration yet.</p>';
$lang['admin.widget.body.status.dupgroups']		=	'<p>You have duplicate active groups - only the group with the lowest ID number on the list will be applied for a given group, as you can only apply one group per client group.</p>';
$lang['admin.widget.body.status.good']			=	'<p>The basic configuration of your product checks out.  There should be minimal conflicts or issues experienced.</p>';

// License Widget
$lang['admin.widget.header.license']		= 'License Status';
$lang['admin.widget.body.license.success']	=	'<p>Your license is valid and current!</p>';
$lang['admin.widget.body.license.alert']	=	'<p>Your Support and Upgrade Pack expired on %s!  Please renew your Support and Upgrade Pack to ensure you have the latest updates available to you.</p>';
$lang['admin.widget.body.license.danger']	=	'<p>There is a problem with your license!</p><p>Please double check that your license key as entered is valid.  You will be unable to save or modify settings until the license is updated.</p>';
// Like Us Widget
$lang['admin.widget.header.likeus']		= '';
$lang['admin.widget.body.likeus']		=	'<p>If you find In Touch useful please tell others about it by visiting <a href="https://www.whmcs.com/appstore/1102/In-Touch.html" target="blank">WHMCS App Store<?a> and liking the product!</p>';

//	------------------------------------------------------------------------
//	Licensing Page
//		WHMCS > Addons > In Touch > License
//		as of 2.0.0
//	------------------------------------------------------------------------
$lang['admin.form.config.label.license']		= 'License';
$lang['admin.form.config.label.info']			= 'Licensed To';
$lang['admin.form.config.label.status']			= 'Status';

$lang['admin.form.config.description.license']	= 'Enter the license you received upon purchasing In Touch from <a href="https://www.gohigheris.com/" target="_blank">Go Higher Information Services</a>.';
$lang['admin.form.config.description.status']	= 'This is the status of your Support and Upgrade pack.';

$lang['admin.form.config.info.registeredname']	= '<h4 style="margin: -2px 0 0;">%s</h4>';
$lang['admin.form.config.info.companyname']		= '<h6 style="margin-top: 0; ">%s</h6>';
$lang['admin.form.config.info.regdate']			= '<div><em>Registered on</em> <strong>%s</strong></div>';
$lang['admin.form.config.info.supnextdue']		= '<div class="alert alert-%s" style="margin-top: 12px; "><em>Support and Upgrade next due on</em> <strong>%s</strong></div>';
$lang['admin.form.config.info.invalidkey']		= '<div class="alert alert-error">The license you entered above is invalid.  Please double check the license and try again.</div>';
$lang['admin.form.config.info.invalidmsg']		= '<div class="alert alert-error">The license above came back with an error message: %s</div>';


//	========================================================================
//	Configure Page
//		WHMCS > Addons > In Touch > Configure
//	========================================================================
//		as of 2.0.0
//	------------------------------------------------------------------------
$lang['admin.form.config.label.enable']		= 'Enable';
$lang['admin.form.config.label.apiuser']	= 'API User';
$lang['admin.form.config.label.usewysiwyg'] = 'Use WYSIWYG';
$lang['admin.form.config.label.dlid']			= 'Download ID';

$lang['admin.form.config.desc.enable']		= 'This field actually enabled or disables the product globally.';
$lang['admin.form.config.desc.apiuser']		= 'This field allows you to select which admin user to make system level calls to your local WHMCS.  This permits you to audit the system.';
$lang['admin.form.config.desc.usewysiwyg']	= 'This field permits you to disable the use of the WYSIWYG editor on the groups page.';
$lang['admin.form.config.description.dlid']			=	'This is the Download ID available from our web site.  Simply retrieve it and enter it here for the update feature to work.  You must have an active In Touch license to be able to download updates.';

//		as of 2.1.0
//	------------------------------------------------------------------------
$lang['admin.form.config.label.fetoenable']	=	'Override Template';
$lang['admin.form.config.desc.fetoenable']	=	'This permits you to override the selected WHMCS template based on a users client group.';

//		as of 2.1.1
//	------------------------------------------------------------------------
$lang['admin.form.settings.label.preservedb']				=	'Preserve Settings';
$lang['admin.form.settings.description.preservedb']			=	'Set this to Enabled to ensure if your product is ever deactivated through the WHMCS > Addon Manager that the database settings will be preserved.  This is advised if you ever allow third party support staff to troubleshoot problems on your WHMCS application.';


//	========================================================================
//	Groups Page
//		WHMCS > Addons > In Touch > Groups
//	========================================================================
//		as of 2.0.0
//	------------------------------------------------------------------------
$lang['admin.form.group.label.name']		= 'Group Name';
$lang['admin.form.group.desc.name']			= 'Enter a friendly and memorable name to use to reference this configuration.';
$lang['admin.form.group.label.group']		= 'Client Group';
$lang['admin.form.group.desc.group']		= 'Select which client group to ';
$lang['admin.form.group.label.active']		= 'Enable Group';
$lang['admin.form.group.desc.active']		= 'Use this setting to enable or disable the use of this group.  When disabled, In Touch will revert to whichever group you have set to use when `No Group` is selected, or if not set or enabled, then the default WHMCS response will be generated.';
// Option Group
$lang['admin.form.group.params.label']		= 'Options';
$lang['admin.form.group.params.optn.emails']	= 'Emails';
$lang['admin.form.group.params.optn.invoices']	= 'Invoices';
$lang['admin.form.group.params.optn.quotes']	= 'Quotes';
// Emails
$lang['admin.form.group.label.emailenabled']	=	'Customize Emails';
$lang['admin.form.group.desc.emailenabled']		=	'Enabling this setting will allow you to customize emails sent for clients belonging to this group.';
$lang['admin.form.group.label.emailcss']	= 'Email CSS Styles';
$lang['admin.form.group.desc.emailcss']		= 'Enter some styles to apply to your email content.  This field does not contain HTML but should contain CSS style declarations that will be declared for emails sent out.  <strong>Do not wrap with style tags!</strong> - they will be added for you if this field is not left empty.';
$lang['admin.form.group.label.emailheader']	= 'Email Header';
$lang['admin.form.group.desc.emailheader']	= 'Use this field to create a custom header for your emails going out for users of this group.';
$lang['admin.form.group.label.emailsig']	= 'Email Signature';
$lang['admin.form.group.desc.emailsig']		= 'Enter a custom signature to use for this group here.';
$lang['admin.form.group.label.emailfooter']	= 'Email Footer';
$lang['admin.form.group.desc.emailfooter']	= 'Use this field to create a custom footer for your emails going out for users of this group.';
$lang['admin.form.group.label.emaillegal']	= 'Legal Footer';
$lang['admin.form.group.desc.emaillegal']	= 'You can enter a legal disclaimer in this field to be added to every outgoing email for this group.';
//	Invoices
$lang['admin.form.group.label.invoiceenabled']	=	'Customize Invoices';
$lang['admin.form.group.desc.invoiceenabled']	=	'Enabling this setting will allow you to replace the logo on invoices generated by your system.';
$lang['admin.form.group.label.invoicelogo']		=	'Custom Logo';
$lang['admin.form.group.desc.invoicelogo']		=	'Enter the location of the logo you would like to use on these invoices.  Be sure this is a path relative to the root of your WHMCS installation!';
$lang['admin.form.group.label.invoiceadd']		=	'Custom Address';
$lang['admin.form.group.desc.invoiceadd']		=	'Enter an address you would like to have appear on the upper right of your invoices.';
//	Quotes
$lang['admin.form.group.label.quoteenabled']	=	'Customize Quotes';
$lang['admin.form.group.desc.quoteenabled']		=	'Enabling this setting will allow you to replace the logo and address on quotes generated by your system.';
$lang['admin.form.group.label.quotelogo']		=	'Custom Logo';
$lang['admin.form.group.desc.quotelogo']		=	'Enter the location of the logo you would like to use on these quotes.  Be sure this is a path relative to the root of your WHMCS installation!';
$lang['admin.form.group.label.quoteadd']		=	'Custom Address';
$lang['admin.form.group.desc.quoteadd']			=	'Enter an address you would like to have appear on the upper right of your quotes.';

$lang['admin.list.status.success']	= 'Active';
$lang['admin.list.status.error']	= 'Inactive';

$lang['admin.group.modal.delete.header']	= 'Confirm Delete';
$lang['admin.group.modal.delete.title']		= 'Delete %s?';
$lang['admin.group.modal.delete.body']		= 'This action cannot be undone and may have unwanted results.';
//
//	2.1.0
//	------------------------------------------------------------------------
$lang['admin.form.group.label.template']	=	'Template Group';
$lang['admin.form.group.desc.template']		=	'If you have enabled the front end template override feature, this setting allows you to use a different template for this user group.';
$lang['admin.form.group.option.template']	=	' - Use WHMCS Default Template -';
//
//	2.1.2
//	------------------------------------------------------------------------
$lang['admin.form.group.label.invoiceusefooter']	=	'Enable Legal Footer';
$lang['admin.form.group.desc.invoiceusefooter']		=	'Enable this option to include a legal footer at the bottom of your invoices.';
$lang['admin.form.group.label.invoicelegalfooter']	=	'Legal Footer';
$lang['admin.form.group.desc.invoicelegalfooter']	=	'Enter what you would like to use for the legal footer on your invoices.';
$lang['admin.form.group.label.quoteusefooter']		=	'Enable Legal Footer';
$lang['admin.form.group.desc.quoteusefooter']		=	'Enable this option to include a legal footer at the bottom of your quotes.';
$lang['admin.form.group.label.quotelegalfooter']	=	'Legal Footer';
$lang['admin.form.group.desc.quotelegalfooter']		=	'Enter what you would like to use for the legal footer on your quotes.';
//
//	2.2.0
//	------------------------------------------------------------------------
$lang['admin.form.group.label.emailname']		=	'Email From Name';
$lang['admin.form.group.desc.emailname']		=	'This setting permits you to specify a name that an email is from for emails sent to clients that belong to this group.  Note that if you dont specify a name here, that WHMCS will use your system settings.  Also note that for support tickets, this name will be used followed by the settings in the support department.  Also note that if you have a specific name set in the email template that is being sent to a customer that this setting will NOT be used, and the setting in the email template will be used instead.';
$lang['admin.form.group.label.emailfrom']		=	'Email From Address';
$lang['admin.form.group.desc.emailfrom']		=	'This setting permits you to specify an email address for emails sent to clients that belong to this group.  Note that if you dont specify an email address here, that WHMCS will use your system settings.  Also note that for support tickets, this will not be used but instead the department email address will be used.  Also note that if you have a specific email address set in the email template that is being sent to a customer that this setting will NOT be used, and the setting in the email template will be used instead.';


//	------------------------------------------------------------------------
//	Admin Area Pages
//		as of 2.0.0
//	------------------------------------------------------------------------
//	Quotes
$lang['adminarea.quotes.clientgroup']	= 'Client Group';



//	------------------------------------------------------------------------
//	Updates
//		as of 2.0.8
//	------------------------------------------------------------------------
$lang['updates.checking.title']		=	"Checking for Updates";
$lang['updates.checking.subtitle']	=	"Please wait...";

$lang['updates.none.title']		=	"Check Complete";
$lang['updates.none.subtitle']	=	"Your version %s is the latest release";

$lang['updates.exist.title']	=	"Updates Found!";
$lang['updates.exist.subtitle']	=	"Click to update";

$lang['updates.init.title']		=	"Downloading Update";
$lang['updates.init.subtitle']	=	"Downloading version %s...";

$lang['updates.download.title']		=	"Installing Update";
$lang['updates.download.subtitle']	=	"Installing version %s...";

$lang['updates.complete.title']		=	"Upgrade Complete!";
$lang['updates.complete.subtitle']	=	"Version %s installed";



//	========================================================================
//	System Check Page
//		WHMCS > Addons > In Touch > System Check
//	========================================================================
//		as of 2.2.2
//	------------------------------------------------------------------------

$lang['install.file.error.read']	=	'There was a problem reading the %s file';
$lang['install.file.error.version']	=	'Unable to determine the version of the %s file';
$lang['install.file.error.newer']	=	'%s is newer than %s';
$lang['install.file.jwhmcs']		=	'the In Touch template file';
$lang['install.file.template']		=	'the template file currently being used';

$lang['syscheck.general.supported.yes']	=	'Supported';
$lang['syscheck.general.supported.no']	=	'Not Supported';
$lang['syscheck.general.yesno.yes']		=	'Yes';
$lang['syscheck.general.yesno.no']		=	'No';
$lang['syscheck.general.attention']		=	'Attention: ';
$lang['syscheck.general.fixit']			=	'Correct';


$lang['syscheck.tblhdr.whmcs']		=	'<h4>WHMCS System Check</h4>';
$lang['syscheck.tbldata.whmcs.version']		=	'%s Version';
$lang['syscheck.tbldata.whmcs.sslenabled']	=	'%s SSL Enabled';
$lang['syscheck.tbldata.whmcs.template']	=	'%s System Template';
$lang['syscheck.tbldata.whmcs.urlproper']	=	'%s URLs Proper';

$lang['syscheck.version.help']		=	' The version of In Touch you are running does not explicitly support the version of WHMCS you are running.  If you have recently upgraded WHMCS, you will need to check for an update from Go Higher for the In Touch to ensure any changes in the system API will work with In Touch.';
$lang['syscheck.sslenabled.help']	=	' In Touch has determined that you are not using SSL on your system.  If you are in fact using SSL but haven\'t changed your System URLs in the WHMCS settings to allow for the system to operate in SSL mode, then this will cause problems when wrapping your Joomla site around WHMCS.  If you don\'t have an SSL certificate';
$lang['syscheck.template.help']		=	' The template you have selected in the WHMCS settings is not a supported template.  You will need to change your settings in the WHMCS General Settings area to one of the standard template types from WHMCS - Classic, Default or Portal.';
$lang['syscheck.urlmix.help']		=	' In Touch has determined that the System URL and the System SSL URL set in your WHMCS General Settings are not using the same host name.  This can pose problems for the user and log in integration tasks, as WHMCS is very specific about which hostname a user is logged in on (for example, a user logged in at www.yourdomain.com will not be seen as logged in on yourdomain.com, only www.yourdomain.com).';

// v2.5.4
$lang['syscheck.template.info']		=	'The template you have selected in the WHMCS settings is setup to be supported by In Touch, however you will need to keep in mind that updates to WHMCS will require additional steps to be taken to ensure your templates remain current.';


$lang['syscheck.tblhdr.env']			=	'<h4>Environment Check</h4>';
$lang['syscheck.tbldata.env.curl']			=	'%s Curl Support';
$lang['syscheck.tbldata.env.iconv']			=	'%s iconv Found';
$lang['syscheck.tbldata.env.mbdetect']		=	'%s Multibyte';
$lang['syscheck.tbldata.env.phpvers']		=	'%s PHP Version';

$lang['syscheck.curl.help']			=	' The Client URL Library (curl) could not be found in your environment.  You must compile your PHP with curl in order for In Touch to operate properly.';
$lang['syscheck.iconv.help']		=	' In Touch was unable to locate the iconv function which is used to transliterate a Joomla site to match your WHMCS character encoding.  This may not be a big deal if you are using ISO-8895-1 or UTF-8 in WHMCS, but for any other character encoding you will want to build php with this capability.';
$lang['syscheck.mbdetect.help']		=	' In Touch was unable to locate the multibyte string functionality needed to transliterate a Joomla site to match your WHMCS character encoding.  This may not be a big deal if you are using ISO-8895-1 or UTF-8 in WHMCS, but for any other character encoding you will want to build php with this capability.';
$lang['syscheck.phpvers.help']		=	' You must use PHP version 5.2 or higher!';


$lang['syscheck.tblhdr.api']		=	'<h4>API Check</h4>';
$lang['syscheck.tbldata.api.apiurl']	=	'%s API URL';
$lang['syscheck.tbldata.api.apifound']	=	'%s URL Found';
$lang['syscheck.tbldata.api.token']		=	'%s Token Set';
$lang['syscheck.tbldata.api.tokenauth']	=	'%s Token Valid';

$lang['syscheck.apiurl.help']		=	' You haven\'t set a value for the Integrator URL yet in the settings for In Touch.  Please click on Settings above to do so now.';
$lang['syscheck.apifound.help']		=	' The API attempted to verify the URL you entered in your settings and received this message back: %s';
$lang['syscheck.token.help']		=	' You haven\'t set a Token yet in the settings for In Touch.  Please click on Settings above to do so now.';
$lang['syscheck.tokenauth.help']	=	' The API attempted to verify the token and authorize access to Joomla but received this message back from Joomla: %s';

$lang['syscheck.tblhdr.files']		=	'<h4>File Check</h4>';

// v2.5.11
$lang['syscheck.general.fixall']	=	'Correct All';
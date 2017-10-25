=== SpeakOut! Email Petitions ===
Contributors: 123host, kreg
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=4PPYZ8K2KLXUJ
Tags: petition, activism, community, email, social media
Requires at least: 3.4
Tested up to: 4.8
Stable tag: trunk

SpeakOut! Email Petitions makes it easy to add petitions to your website and rally your community to Speak Out about a cause by using direct action.

== Description ==

SpeakOut! Email Petitions allows you to easily create petition forms on your site.

When visitors to your site submit the petition form, a copy of your message will be sent to the email address you specified e.g. your mayor. They can also choose to have the email BCC'd to themselves (default).  The petition message will be signed with the contact information provided by the form submitter. After signing the petition, visitors will have the option of sharing your petition page with their followers on Facebook or Twitter.

Signatures are stored in the database and can be easily exported to CSV format for further analysis. You may set a goal for the number of signatures you hope to collect and then watch as a progress bar tracks your petition's advance toward it's goal. Petitions may also be configured to stop accepting new signatures on a specified date.

This plugin is a fork of the SpeakUp plugin by Kreg Wallace that was quite good but needed updates and appears to have been abandoned.  Current versions of SpeakOut! include an importer to migrate from SpeakUp.

= Localizations =

* Czech **cs_CZ** (Petr Štěpán)
* Dutch **nl_NL** (Kris Zanders)
* Finnish **fi_FI** 
* French **fr_FR**
* German **de_DE** (Hannes Heller, Armin Vasilico, Andreas Kumlehn)
* Hebrew **he_IL** (Oren L)
* Italian **it_IT** ([MacItaly](http://wordpress.org/support/profile/macitaly))
* Norwegian **nb_NO**
* Polish **pl_PL** (Damian Dzieduch)
* Romanian **ro_RO** ([Web Hosting Geeks](http://webhostinggeeks.com))
* Russian **ru_RU** ([Teplitsa](te-st.ru))
* Slovenian **sl_SI** ([MA-SEO](http://ma-seo.com))
* Spanish **es_ES**
* Swedish **sv_SE** (Susanne Nyman Furugård @sunyfu)

If you would like to request or contribute a specific translation not listed above, visit the [SpeakOut! Email Petitions website](http://speakout.123host.com.au/) and use the contact form.

== Changelog ==

= 1.6.2 =
* Some edited files not included in 1.6.1

= 1.6.1 =

* forgot about the translation of honorifics (Ms, Mr etc)

= 1.6.0 =

* rearranged fields on dashboard > speakout > settings > signature list, moving the Display above Columns as choosing _long list_ disables the Columns fields.  This makes it more clear why they might be disabled
* petition admin display options, _Display custom message_ slider wasn't opening
* added honorific (Ms, Mr etc) field on petition.  This is displayed in target email.

= 1.5.6 =
* fixed bug where comma separated signature list only showed abbreviated surnames. Thanks Stefan

= 1.5.5 =
* for new installs removed extra space character after the petition title in confirmation message.  Existing installs can edit this in dashboard > speakout > settings > confirmation emails
* changed the email content type from text/html to text/plain following reports it messed with Outlook emails.

= 1.5.4 =

* changed the email for confirmation emails to utf-8 to fix the link only being half clickable in some email apps (GMX in particular).  It will now be a non clickable URL in some software, but it is still fine in gmail.  Not quite sure what is going on here, but this solves the problem of the link breaking.
* to match the previous fix, default text for confirmation emails in new installs is now "Please confirm your email address by clicking _or copying and pasting_ the link below:".  In existing installs you can change the text by going to dashboard > speakout > settings > confirmation emails > email message

= 1.5.3 =

* set default value for 'custom field value' (new installs only)
* set default value 0 for 'signature confirmation' field (new installs only)
* tweaked default email confirmation message to include petition title (new installs only)
* changed function type to fix errors when landing on email confirmation page
* added text on Admin Display tab of settings to remind about default values
* added missing translation for the word 'signatures'
* updated all translations - I am sure some of them are a bit dodgy

= 1.5.2 =

* typo in database update - not sure why I can see this on the development site before I commit update :o(

= 1.5.1 =

* typo in database update

= 1.5.0 =

* Fixed mislabelling of petition version so that it updates properly automatically.
* Trying to get languages more efficient a few functions were broken e.g. deleting petitions  They should be fixed.
* When choosing to display signatures in a row rather than a table, column checkboxes are disabled.
* Only display 1st 100 characters of custom message column in signature list
* Added nowrap to signer's name in signature list

= 1.4.5 =

* changed the name of the translation text domain from dk_speakout to speakout as specified here https://developer.wordpress.org/plugins/internationalization/how-to-internationalize-your-plugin/

= 1.4.4 =

* fixed a typo that caused radio buttons to not fill on the petition tab of the setup page.

= 1.4.3 =

* added ability to display in signature list a custom message signer has sent. _dashboard > SpeakOut! > Signature List > check Custom Message
* added requested option (dashboard > speakout > settings > signatures) to display signatures as long comma separated list rather than table e.g. Judy R., Robert F., Steve D., etc
* remembered to update language files to match :o)
* changed width of count column to 12% when displaying signatures in table
* extended maximum execution time of CSV exporter from the default 30 seconds to 3 minutes

= 1.4.2 =

* fixed settings page not displaying in 1.4.1 - ouch! 

= 1.4.1 =
* Forgot to update translations to include new "Display BCC field" phrase

= 1.4.0 =
* Added option to globally display or hide BCC field
* Added code to theme_basic.css to fix size of modal popup on mobile devices - thanks @pattihis

= 1.3.11 =
* Add Czech translation.  Thanks Petr Štěpán

= 1.3.10 =
* updating some phrases
* language file updates to match

= 1.3.9 =
* Fixed warning that '$this->WP_Widget' is deprecated, replaced with 'parent::__construct' - had already done this in 1.3.0.  Not sure what happened there.
* fixed typo in German translation

= 1.3.8 =
* Fixed bug BCC not working (again).  Discovered that I hadn't uploaded an edited file from my development site, then when I did the upgrade locally it over-wrote my changes with the original code that should have been changed...sigh...
* Housekeeping cleanups
* Fixed Norwegian translation

= 1.3.7 =
* Added Norwegian translation (requested by Robert)
* Added Estonian translation (requested by Janno)
* Updated all translation files with missing strings
* Replaced some hard coded strings with translatable strings

= 1.3.6 =
* Fixed bug BCC not working
* Fixed bug class.petitions.php
* Updated all translation files - I have bought poedit, so translation requests are welcome
* Fixed misnamed German translation file

= 1.3.5 =
* Removed non-breaking-space '&nbsp' from the shortcode example so that if people copy and past the example it doesn't break the petition.

= 1.3.4 =

* Tidied up uninstall to be better behaved and remove options from database
* Made label text for BCC field auto translatable

= 1.3.3 =

* Importer from speakup had bug.  Only change in this version, upgrade not needed if not using importer.

= 1.3.2 =

* Oops!  When copying code from test site to code store, accidentally copied contents of one file into another similarly named.  FIXED!
* Typo in CSS caused new BCC field to be out of alignment
* Fixed typo and reworded import page for clarity

= 1.3.1 =

* Added option for person signing to BCC self
* Added option to import global settings from speakup over-writing settings in SpeakOut!
* Added some fancies to disable the import button if there are no legacy speakup petitions to import, but enable if settings import is checked
* Added new column with Petition ID to petition list.  ID was in display of short codes, but wasn't intuitive.
* Added petition ID number to edit success message
* Changed settings page title and header from Email Petitions Settings to SpeakOut! Petition Settings to further distinguish from old plugin
* Changed option from "Allow custom messages" to "Allow message to be edited" for clarity
* If option "Allow message to be edited" is checked, on petition top section text will change from "READ THE PETITION" to "READ OR EDIT THE PETITION"

= 1.3.0 =

* Added importer from speakup to SpeakOut!
* Version jump to clean up some confusion after roll back due to broken widget
* Changed dashboard menu titles including main title SpeakOut! to make distinct from "email petition" used in SpeakUp
* Add clarification that multiple email target email addresses can be comma separated
* Removed list of US states from drop-down.  This is an international plugin :P
* Added how to make postal code required to FAQ - thanks @altinkaya
* Fixed warning that $this->WP_Widget is deprecated, replaced with parent::__construct - thanks @mannweb
* Various typo fixes

= 1.2.0 =

Abandon this version - widget broken, version control messed up.

= 1.1.3 =

Wrong icon being displayed

= 1.1.2 =

File missed in commit

= 1.1.1 =

Getting dashboard icons right

= 1.1.0 =

Fix broken directory references missed as part of fork.

= 1.0.0 =

Initial fork of SpeakUp! with additional privacy option in setting so only display first letter of surname

== Installation ==

Use the automatic installer. Or...

1. Download and unzip the the plugin zip file.
2. Upload the 'speakout' folder to your '/wp-content/plugins/' directory
3. Activate SpeakOut! Email Petitions through the "Plugins" menu in the WordPress admin.

== Frequently Asked Questions ==

= How do I create a new petition =
1. Select "Add New" from the "SpeakOut!" menu in the dashboard.
2. Complete the "Add New Email Petition" form with the options you desire and save your petition by clicking the "Create Petition" button.
3. Enter the petition's shortcode into any page or post where you want the petition form to appear. Example:
'[emailpetition id="1"]'

= I have a petition that isn't displaying, it is showing the shortcode =
Find the shortcode on the page e.g. [emailpetition id="3"], delete the space and type it again.  The original code included a non-breaking space which caused a problem with Wordpress. It might have been a WordPress update that caused it to stop working.

= Can I display the petition as a widget? =
Yes. Once you've created a petition, go to the Widgets screen and drag the "SpeakOut! Email Petitions" widget into a sidebar. In the widget's options, enter a Title and a Call to Action and then select the petition you wish to display.

= My language isn't available, will you translate Speakout! for me? = 
More than likely, head to https://speakout.123host.net.au/contact and send a message.

= Facebook is showing a different image to what I want =
Add a featured image to the page.  Also check out this post https://nathaningram.com/when-facebook-isnt-using-the-featured-image-for-your-wordpress-post/

= Why are some phrases not translated into my language? = 
It is only the fixed phrases that will will automatically translate. Some of the strings on a petition can be edited, change them in dashboard > SpeakOut! > settings > check all the tabs.  

= Why are some people not receiving the confirmation emails? =
Some email services (like AOL, Hotmail, and a few others) do not accept mail sent from the PHP mail() function. So, people who sign your petition with an email address from one of these providers may not be able to receive a confirmation email. To get around this problem, try installing the [WP Mail SMTP plugin](http://wordpress.org/extend/plugins/wp-mail-smtp/) which will redirect calls to the PHP mail() function through your webserver's SMTP configuration.

= How can I create a custom style for the petition form? =
First, select "None" as your theme on the Settings screen. Then add a 'petition.css' file to your theme folder. You can use the styles included in the plugin's CSS folder as a starting point for your custom theme — just copy the contents of 'theme-standard.css' or 'theme-basic.css' into your 'petition.css' file and make any modifications you desire.

Custom styles can also be created for the widget and signaturelists by adding petition-widget.css or petition-signaturelist.css to your theme and changing the theme for these items to "None".

= The First Name, Last Name or Email fields in the petition form display the name and email of the site administrator. What's going on? =
These fields are filled automatically for logged-in users. You are seeing the name and email info associated with your user account. Other users will see their own information in these fields. Or, if the user is not logged-in, the fields will be empty.

= Can the petition message be sent to multiple email addresses? =
Yes. In the Target Email field, simply enter a comma-separated list of email addresses.

= Is there a way to confirm a user's email address when they sign a petition? =
Yes. Simply select "Confirm signatures" when creating a petition and a confirmation email will be sent to the address used to sign the petition. By clicking the link in the confirmation email, the signer can confirm their email address. The petition message will not be sent until the signer's email address is confirmed.

= Can I run a petition without having it send email? =
Yes. when you create a new petition, simply select the checkbox labelled "Do not send email (only collect signatures)" at the top of the Petition box and email will not be sent out when the petition is signed.

= Is there a way to publicly display the names of people who have signed my petition? =
Yes, simply place the signaturelist shortcode wherever you want the list to appear in your post (be sure to set the 'id' value to match the id number of your petition). Example:

'[signaturelist id="1"]'

= What if I don't want their full name displayed? =
See dashboard > SpeakOut! > settings > Signature List tab > Privacy 

= Can I download a list of my petition's signatures? =
Yes. To download the signatures in CSV format, click the "Download as CSV" button at the top of the Signatures screen. If you do not see a "Download as CSV" button on this screen, you will first need to select your petition from the drop-down list.

= I downloaded the CSV file, but when I open it in a spreadsheet application, the values aren't in the correct columns. Can I fix this? =
If the CSV file looks scrambled, try changing its filename extension from .csv to .txt and then re-opening it in your spreadsheet app. The columns should be arranged correctly. (If you wish to keep the .csv extension, once you've opened the .txt file, re-save it as a CSV from your spreadsheet app, which will structure the contents of the file in a version of the CSV format that it understands.)

= Can I import existing petitions and signatures from SpeakUp?=
Since version 1.3.0 there is an item in the dashboard menu to import from SpeakUp to SpeakOut!  This is a non descructive import, it doesn't affect the existing SpeakUp data at all, simply copies it to SpeakOut!  If you have any previous petitions in SpeakOut! they will not be affected.  Legacy SpeakUp shortcodes will still work, but the petition ID may need to be updated.

After importing it is strongly recommended that SpeakUp be deactivated.

=  Can I make the postal code a required field? = 
You need to edit two files in order to complete the new “required” fields to get working. First file is speakout/includes/emailpetition.php and the second file is speakout/js/public.js

The first file “emailpetition.php”

The following steps are required in order to make the relevant to “required”.
Find the following line.

  <label for=”dk-speakout-postcode-' . $petition->id . '”>’ . __( 'Post Code', 'dk_speakout' ) . '</label>

Change this line to;
  <label for=”dk-speakout-postcode-' . $petition->id . '” class=”required”' . '>' . __( 'Post Code', 'dk_speakout' ) . '</label>

The second file public.js

Find the following lines:
  if ( lastname === '' ) {
  $( '#dk-speakout-last-name-' + id ).addClass( 'dk-speakout-error' );
  errors ++;
  }
  Append just after this if statement section the following if statement.
  if ( postcode === '' ) {
  $( '#dk-speakout-postcode-' + id ).addClass( 'dk-speakout-error' );
  errors ++;
  }

So it should look like this:

  if ( lastname === ” ) {
  $( '#dk-speakout-last-name-' + id ).addClass( 'dk-speakout-error' );
  errors ++;
  }
  if ( postcode === ” ) {
  $( '#dk-speakout-postcode-' + id ).addClass( 'dk-speakout-error' );
  errors ++;
  }
(Thanks to @altinkaya)

== Screenshots ==

1. Public-facing petition form
2. Form for creating and editing email petitions
3. Table view of existing petitions
4. Table view of collected signatures
5. Plugin settings screen
6. Sidebar widget
7. Pop-up Petition form (widget)
8. Email confirmation screen

== Upgrade Notice ==

= 1.6.1 =

Translations only update

== Emailpetition Shortcode Attributes ==

The following attributes may be applied when using the '[emailpetition]' shortcode

= id =
The ID number of your petition (required). To display a basic petition, use this format:
'[emailpetition id="1"]'

= width =
This sets the width of the wrapper '<div>' that surrounds the petition form. Format as you would a width rule for any standard CSS selector. Values can be denominated in px, pt, em, % etc. The units marker (px, %) must be included.

To set the petition from to display at 100% of it's container, use:
'[emailpetition id="1" width="100%"]'

A petition set to display at 500 pixels wide can be achieved using:
'[emailpetition id="1" width="500px"]'

= height =
This sets the height of the petition message box (rather than the height of the entire form). Format as you would a height rule for any standard CSS selector. Values can be denominated in px, pt, em, % etc. The units marker (px, %) must be included.

A few notes on using percentages:
Using a % value only works when the "Allow messages to be edited" feature is turned off—because the petition message will be displayed in a '<div>'. When "Allow  messages to be edited" is turned on, the petition message is displayed in a '<textarea>', which cannot be styled with % heights. Use px to set the height on petitions that allow message customization.

To set the message box to scale to 100% of the height of the message it contains, use any % value (setting this to 100%, 0%, 200% or any other % value has the same result). Use px if you want the box to scale to a specific height.

Examples:
'[emailpetition id="1" height="500px"]'
'[emailpetition id="1" height="100%"]'

= progresswidth =
Sets the width of the outer progress bar. The filled area of the progress bar will automatically scale proportionally with the width of the outer prgress bar. Provide a numeric value in pixels only. Do not include the px unit marker.

To display the progress bar at 300 pixels wide, use:
'[emailpetition id="1" progresswidth="300"]'

= class =
Adds an arbitrary class name to the wrapper '<div>' that surrounds the petition form. Typically used to assign the alignright, alignleft or aligncenter classes to the petition in order to float the petition form to one side of its container. To assign multiple classes, separate the class names with spaces.

Examples:
'[emailpetition id="1" class="alignright"]'
'[emailpetition id="1" class="style1 style2"]'

== Signaturelist Shortcode Attributes ==

= id =
The ID number of your petition (required). To display a basic signature list, use this format:
'[signaturelist id="1"]'

= rows =
The number of signature rows to display in the table. This will override the default value provided on the Settings page. To display 10 rows, use:
'[signaturelist id="1" rows="10"]'

= dateformat =
Format of values in the date column. Use any of the standard [PHP date formating characters](http://php.net/manual/en/function.date.php). Default is 'M d, Y'. A date such as "Sunday October 14, 2012 @ 9:42 am" can be displayed using:
'[signaturelist id="1" dateformat="l F d, Y @ g:i a"]'

= prevbuttontext =
The text that displays in the previous signatures pagination button. Default is &lt;.

= nextbuttontext =
The text that displays in the next signatures pagination button. Default is &gt;.

== Signaturecount Shortcode ==
Display the number (as text) of signatures collected for a given petition:

= id =
The ID number of your petition (required).
'[signaturecount id="3"]'
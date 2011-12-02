<?php

// Guestbook Version -----------------------------------------------------------------

$gb_system_version 	= "1.8.0";

// Templates to be selected ----------------------------------------------------------

$template_folder 	= 'Default';

// Language File to be included ------------------------------------------------------

$language_file		= 'language/language.php';

// Variables for making a field optional in form -------------------------------------

$email_optional     = 0;      // Set "1" for optional email, "0" to make it required
$name_optional      = 0;      // Set "1" for optional name, "0" to make it required
$message_optional   = 0;      // Set "1" for optional message, "0" for required

// Variables for notifying administrator when a new message is posted ----------------

$notify_admin       = 0;      // Set "1" to notify administrator through email
                              // when a new guestbook entry is written.
                              // Warning: To use this feature you will have to have
                              // your "SMTP" and "smtp_port" setting in php.ini set.

                              // Enter the admin notification email subject bellow
$notify_subject     = "You have a new entry in your DigiOz Guestbook";
                              // Enter administrative email to receive notification
$notify_admin_email = "webmaster@yourdomain.com";
                              // Body of the notification message
$notify_message     = "A new entry has been submitted to your DigiOz Guestbook.";

// Image Verification Feature -------------------------------------------------------

$image_verify       = 0;      // Do Image Verification to prevent spam post
							  // Set to 1 for standard image verification. 
                              // This option requires your PHP to have been
                              // compiled with GD 2.0.x or higher library so
                              // it may not work with all server environments.
                              // Set to 2 for reCaptcha system. If you use option 
							  // 2 you have to obtain a reCaptcha API key from 
							  // here: https://www.google.com/recaptcha/admin/create
					
// ReCaptcha API Keys ---------------------------------------------------------------

$recaptcha_public_key = "";
$recaptcha_private_key = "";

// Email Display Options To Prevent Spam Bots from harvesting posted emals -------------------------

$email_display      = 1;      // Options:
                              // 0 - Email will be displayed as plain text. (Not recommended)
                              // 1 - Email will be displayed using ASCII. (Default)
                              // 2 - Email will be displayed as an image. (Requires $image_verify set to 1)
                              // Note: option 2 is not in APLHA.

// Records listing options -------------------------------------------------------------------------
$records_per_page = 10;       //how many guestbook records should appear on each page?
                            //a reasoanble number is something between 3 and 12

// Admin Interface Username ---------------------------------------------------------

$_Username         = "admin";
$_Password         = "admin";

// Flood protection setting ---------------------------------------------------------

$gbflood            = 0;      // Set "1" to prevent flooding, "0" to disable it

$referersKey        = 0;      // Set "1" to check to see where submitted guestbook
                              // messages are coming from or "0" to disable it
$referers = array (
  'yourdomain.com',           // Your domain name without WWW
  'www.yourdomain.com',       // Your domain name with WWW
  '111.222.333.444');         // IP Address of your site

$gbIPLogKey         = 1;      // Set "1" to log IP of Visitor for each post "0" to disable

$banIPKey           = 1;      // Set "1" to block posting of banned IP or "0" to disable

// Special Character Security Breach Protection----------------------------------------
                              //PLEASE DO NOT REMOVE ANY OF THE BELOW "$SPEC="
                              //LINES OR VALUES.  HOWEVER, YOU MAY ADD TO IT.
                              //THIS IS FOR REMOVING SPECIAL CHARACTERS FROM SEARCH QUERYS,
                              //WHICH COULD CAUSE SECURITY PROBLEMS.
$spec=array();
$spec[]='>';
//$spec[]='<';
$spec[]='/';
$spec[]='|';
$spec[]='~';
$spec[]='{';
$spec[]='}';
$spec[]='[';
$spec[]=']';
$spec[]='^';
$spec[]='%';
$spec[]='=';

// Guestbook Fields to be displayed ---------------------------------------------------

$gb_entry_fields = array();
$gb_entry_fields[] = 'id|NUMERIC|50';
$gb_entry_fields[] = 'name|STRING|100';
$gb_entry_fields[] = 'email|EMAIL|100';
$gb_entry_fields[] = 'msg|STRING|5000';

// Anti-spam IP Address Checking - Local database fields
$ip_database_fields = array();
$ip_database_fields[] = 'ip|STRING|15';
$ip_database_fields[] = 'status|STRING|3';
$ip_database_fields[] = 'timestamp|NUMERIC|8';

// ---------------------------------------------------------------------------------
// Bellow you can list known IP addresses you would like to block. -----------------
// We have given you a list of known spammers bellow. Feel free --------------------
// to either use our list or delete our list and create your own -------------------
// based on the IP logs of the guestbook. For updates to our list ------------------
// of known spammers please visit www.digioz.com or email our ----------------------
// tech support team. --------------------------------------------------------------
// ---------------------------------------------------------------------------------

$banned_ip = array();
$banned_ip[] = '195.225.176.57';
$banned_ip[] = '212.62.19.185';
$banned_ip[] = '202.3.130.20';
$banned_ip[] = '222.104.7.196';
$banned_ip[] = '61.33.229.80';
$banned_ip[] = '63.138.25.195';
$banned_ip[] = '205.208.226.61';
$banned_ip[] = '213.46.224.101';
$banned_ip[] = '167.193.194.101';
$banned_ip[] = '207.63.100.162';
$banned_ip[] = '210.177.248.130';
$banned_ip[] = '195.225.176.57';
$banned_ip[] = '80.58.50.107';
$banned_ip[] = '80.58.33.170';
$banned_ip[] = '80.58.11.42';
$banned_ip[] = '207.63.100.163';
$banned_ip[] = '211.233.9.201';
$banned_ip[] = '82.236.86.223';
$banned_ip[] = '63.98.230.188';
$banned_ip[] = '195.228.156.106';
$banned_ip[] = '200.9.37.220';
$banned_ip[] = '200.57.91.108';
$banned_ip[] = '69.212.48.169';
$banned_ip[] = '61.0.62.4';
$banned_ip[] = '12.160.225.230';
$banned_ip[] = '219.93.174.101';
$banned_ip[] = '203.162.27.199';
$banned_ip[] = '66.94.81.202';
$banned_ip[] = '210.113.222.227';
$banned_ip[] = '59.23.9.141';
$banned_ip[] = '58.227.196.150';
$banned_ip[] = '59.23.9.141';
$banned_ip[] = '218.26.207.66';
$banned_ip[] = '84.254.189.37';
$banned_ip[] = '203.162.27.195';
$banned_ip[] = '202.101.173.69';
$banned_ip[] = '203.145.159.45';
$banned_ip[] = '63.138.25.195';
$banned_ip[] = '207.63.100.162';
$banned_ip[] = '80.56.174.130';
$banned_ip[] = '211.53.64.127';
$banned_ip[] = '200.2.128.2';
$banned_ip[] = '204.113.91.19';

// Bad word filter for guestbook -----------------------------------------------------

$gbBadWordsKey = 1;           // Set "1" to filter bad words, "0" to not filter
$gbBadWords = array(
  'ass',
  'bitch',
  'clit',
  'cock',
  'c0ck',
  'cum',
  'cunt',
  'fucking',
  'fuck',
  'fuking',
  'fuk',
  'shit');

// Spam Detection -------------------------------------------------------------------

$gbSpamKey = 1;               // Set "1" to Block Spam based on Keyword entered
$gbSpam = array (
  "cheap",
  "phentermine",
  "splinder",
  "hydrocodone",
  "vicodin",
  "vicodin",
  "pharmacy",
  "prescription",
  "buy",
  "drug",
  "pills",
  "soma");

// End of Configuration File --------------------------------------------------------


?>

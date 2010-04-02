<?php

########################################################################
# Extension Manager/Repository config file for ext "gh_accordion".
#
# Auto generated 02-04-2010 19:57
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'GH Accordion',
	'description' => 'Prototype / Scriptaculous based accordion for content elements.',
	'category' => 'fe',
	'author' => 'Gregor Hermens',
	'author_email' => 'gregor@a-mazing.de',
	'shy' => '',
	'dependencies' => 'cms',
	'conflicts' => 'rgaccordion,kiwi_accordion,pf_accordion',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.0.1',
	'constraints' => array(
		'depends' => array(
			'cms' => '4.3.0 - 0.0.0',
		),
		'conflicts' => array(
			'rgaccordion' => '',
			'kiwi_accordion' => '',
			'pf_accordion' => '',
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:14:{s:9:"ChangeLog";s:4:"1b60";s:10:"README.txt";s:4:"ee2d";s:12:"ext_icon.gif";s:4:"59cf";s:14:"ext_tables.php";s:4:"91cf";s:14:"ext_tables.sql";s:4:"3f26";s:16:"locallang_db.xml";s:4:"2562";s:14:"doc/manual.sxw";s:4:"2ab4";s:19:"doc/wizard_form.dat";s:4:"2600";s:20:"doc/wizard_form.html";s:4:"ff98";s:17:"res/img/minus.gif";s:4:"5bde";s:16:"res/img/plus.gif";s:4:"7bb2";s:32:"res/js/gh_accordion_functions.js";s:4:"50df";s:33:"static/gh_accordion/constants.txt";s:4:"d41d";s:29:"static/gh_accordion/setup.txt";s:4:"da31";}',
	'suggests' => array(
	),
);

?>
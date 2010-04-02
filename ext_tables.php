<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}
$tempColumns = array (
	'tx_ghaccordion_isaccordion' => array (
		'exclude' => 1,
		'label' => 'LLL:EXT:gh_accordion/locallang_db.xml:tt_content.tx_ghaccordion_isaccordion',
		'config' => array (
			'type' => 'check',
		)
	),
	'tx_ghaccordion_open' => array (
		'exclude' => 1,
		'label' => 'LLL:EXT:gh_accordion/locallang_db.xml:tt_content.tx_ghaccordion_open',
		'config' => array (
			'type' => 'check',
		)
	),
);


t3lib_div::loadTCA('tt_content');
t3lib_extMgm::addTCAcolumns('tt_content',$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes('tt_content','tx_ghaccordion_isaccordion;;;;1-1-1, tx_ghaccordion_open', '', 'after:header,before:linkToTop');

t3lib_extMgm::addStaticFile($_EXTKEY,'static/gh_accordion/', 'gh_accordion');
?>
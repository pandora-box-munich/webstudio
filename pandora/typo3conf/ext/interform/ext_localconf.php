<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Interain.' . $_EXTKEY,
	'Interform',
	array(
		'Kontakt' => 'new, create',
		'WeddingForm' => 'show, new, create, ',
		'Event' => 'show, new, create',
		'Spa' => 'show, new, create',
		
	),
	// non-cacheable actions
	array(
		'Kontakt' => 'create, new',
		'WeddingForm' => 'create, new',
		'Event' => 'create, new',
		'Spa' => 'create, new',
		
	)
);

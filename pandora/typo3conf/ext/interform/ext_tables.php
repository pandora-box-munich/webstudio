<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Interform',
	'Kontaktformular'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Intertain Kontaktformular');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_interform_domain_model_kontakt', 'EXT:interform/Resources/Private/Language/locallang_csh_tx_interform_domain_model_kontakt.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_interform_domain_model_kontakt');
$GLOBALS['TCA']['tx_interform_domain_model_kontakt'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_kontakt',
		'label' => 'vorname',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'vorname,nachname,mail,unternehmen,position,telefon,nachricht,anhang,sonstiges,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Kontakt.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_interform_domain_model_kontakt.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_interform_domain_model_weddingform', 'EXT:interform/Resources/Private/Language/locallang_csh_tx_interform_domain_model_weddingform.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_interform_domain_model_weddingform');
$GLOBALS['TCA']['tx_interform_domain_model_weddingform'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_weddingform',
		'label' => 'salutation',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'salutation,first_name,last_name,street1,street2,city,state,zip,country,phone,mail,resort,comments,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/WeddingForm.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_interform_domain_model_weddingform.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_interform_domain_model_event', 'EXT:interform/Resources/Private/Language/locallang_csh_tx_interform_domain_model_event.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_interform_domain_model_event');
$GLOBALS['TCA']['tx_interform_domain_model_event'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_event',
		'label' => 'resort',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'resort,salutation,first_name,last_name,meeting,date1,date2,date_flexibility,alt_date1,alt_date2,room_numbers,company,street1,street2,city,state,zip,country,phone,mail,attendees,setup_rounds,setup_auditorium,setup_classroom,setup_conference,setup_exhibit,setup_cocktail,comments,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Event.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_interform_domain_model_event.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_interform_domain_model_spa', 'EXT:interform/Resources/Private/Language/locallang_csh_tx_interform_domain_model_spa.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_interform_domain_model_spa');
$GLOBALS['TCA']['tx_interform_domain_model_spa'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_spa',
		'label' => 'resort',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'resort,salutation,first_name,last_name,mail,phone,couple_names,treatment1,treatment1number,treatment1numbermore,treatment1date,treatment1time,treatment1timerange,treatment2,treatment2number,treatment2numbermore,treatment2date,treatment2time,treatment2timerange,treatment3,treatment3number,treatment3numbermore,treatment3date,treatment3time,treatment3timerange,message,requirements,occassion,occassion_other,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Spa.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_interform_domain_model_spa.gif'
	),
);

## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder

$pluginSignature = str_replace('_','',$_EXTKEY) . '_interform';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_kontakt.xml');

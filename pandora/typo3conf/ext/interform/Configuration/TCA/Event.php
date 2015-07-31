<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_interform_domain_model_event'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_interform_domain_model_event']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, resort, salutation, first_name, last_name, meeting, date1, date2, date_flexibility, alt_date1, alt_date2, room_numbers, company, street1, street2, city, state, zip, country, phone, mail, attendees, setup_rounds, setup_auditorium, setup_classroom, setup_conference, setup_exhibit, setup_cocktail, comments',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, resort, salutation, first_name, last_name, meeting, date1, date2, date_flexibility, alt_date1, alt_date2, room_numbers, company, street1, street2, city, state, zip, country, phone, mail, attendees, setup_rounds, setup_auditorium, setup_classroom, setup_conference, setup_exhibit, setup_cocktail, comments, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_interform_domain_model_event',
				'foreign_table_where' => 'AND tx_interform_domain_model_event.pid=###CURRENT_PID### AND tx_interform_domain_model_event.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'resort' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_event.resort',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'salutation' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_event.salutation',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'first_name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_event.first_name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'last_name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_event.last_name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'meeting' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_event.meeting',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'date1' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_event.date1',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'date2' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_event.date2',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'date_flexibility' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_event.date_flexibility',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'alt_date1' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_event.alt_date1',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'alt_date2' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_event.alt_date2',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'room_numbers' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_event.room_numbers',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'company' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_event.company',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'street1' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_event.street1',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'street2' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_event.street2',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'city' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_event.city',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'state' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_event.state',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'zip' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_event.zip',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'country' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_event.country',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'phone' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_event.phone',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'mail' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_event.mail',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'attendees' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_event.attendees',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'setup_rounds' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_event.setup_rounds',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'setup_auditorium' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_event.setup_auditorium',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'setup_classroom' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_event.setup_classroom',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'setup_conference' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_event.setup_conference',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'setup_exhibit' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_event.setup_exhibit',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'setup_cocktail' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_event.setup_cocktail',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'comments' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_event.comments',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		
	),
);

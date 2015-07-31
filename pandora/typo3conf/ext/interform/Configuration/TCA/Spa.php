<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_interform_domain_model_spa'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_interform_domain_model_spa']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, resort, salutation, first_name, last_name, mail, phone, couple_names, treatment1, treatment1number, treatment1numbermore, treatment1date, treatment1time, treatment1timerange, treatment2, treatment2number, treatment2numbermore, treatment2date, treatment2time, treatment2timerange, treatment3, treatment3number, treatment3numbermore, treatment3date, treatment3time, treatment3timerange, message, requirements, occassion, occassion_other',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, resort, salutation, first_name, last_name, mail, phone, couple_names, treatment1, treatment1number, treatment1numbermore, treatment1date, treatment1time, treatment1timerange, treatment2, treatment2number, treatment2numbermore, treatment2date, treatment2time, treatment2timerange, treatment3, treatment3number, treatment3numbermore, treatment3date, treatment3time, treatment3timerange, message, requirements, occassion, occassion_other, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
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
				'foreign_table' => 'tx_interform_domain_model_spa',
				'foreign_table_where' => 'AND tx_interform_domain_model_spa.pid=###CURRENT_PID### AND tx_interform_domain_model_spa.sys_language_uid IN (-1,0)',
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
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_spa.resort',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'salutation' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_spa.salutation',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'first_name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_spa.first_name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'last_name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_spa.last_name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'mail' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_spa.mail',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'phone' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_spa.phone',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'couple_names' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_spa.couple_names',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'treatment1' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_spa.treatment1',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'treatment1number' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_spa.treatment1number',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'treatment1numbermore' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_spa.treatment1numbermore',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'treatment1date' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_spa.treatment1date',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'treatment1time' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_spa.treatment1time',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'treatment1timerange' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_spa.treatment1timerange',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'treatment2' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_spa.treatment2',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'treatment2number' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_spa.treatment2number',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'treatment2numbermore' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_spa.treatment2numbermore',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'treatment2date' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_spa.treatment2date',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'treatment2time' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_spa.treatment2time',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'treatment2timerange' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_spa.treatment2timerange',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'treatment3' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_spa.treatment3',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'treatment3number' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_spa.treatment3number',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'treatment3numbermore' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_spa.treatment3numbermore',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'treatment3date' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_spa.treatment3date',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'treatment3time' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_spa.treatment3time',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'treatment3timerange' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_spa.treatment3timerange',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'message' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_spa.message',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			)
		),
		'requirements' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_spa.requirements',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'occassion' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_spa.occassion',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'occassion_other' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:interform/Resources/Private/Language/locallang_db.xlf:tx_interform_domain_model_spa.occassion_other',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		
	),
);

#
# Table structure for table 'tx_interform_domain_model_kontakt'
#
CREATE TABLE tx_interform_domain_model_kontakt (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	salutation varchar(255) DEFAULT '' NOT NULL,
	first_name varchar(255) DEFAULT '' NOT NULL,
	last_name varchar(255) DEFAULT '' NOT NULL,
	street1 varchar(255) DEFAULT '' NOT NULL,
	street2 varchar(255) DEFAULT '' NOT NULL,
	city varchar(255) DEFAULT '' NOT NULL,
	state varchar(255) DEFAULT '' NOT NULL,
	zip varchar(255) DEFAULT '' NOT NULL,
	country varchar(255) DEFAULT '' NOT NULL,
	phone varchar(255) DEFAULT '' NOT NULL,
	mail varchar(255) DEFAULT '' NOT NULL,
	resort varchar(255) DEFAULT '' NOT NULL,
	comments varchar(255) DEFAULT '' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
 KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_interform_domain_model_weddingform'
#
CREATE TABLE tx_interform_domain_model_weddingform (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	salutation varchar(255) DEFAULT '' NOT NULL,
	first_name varchar(255) DEFAULT '' NOT NULL,
	last_name varchar(255) DEFAULT '' NOT NULL,
	street1 varchar(255) DEFAULT '' NOT NULL,
	street2 varchar(255) DEFAULT '' NOT NULL,
	city varchar(255) DEFAULT '' NOT NULL,
	state varchar(255) DEFAULT '' NOT NULL,
	zip varchar(255) DEFAULT '' NOT NULL,
	country varchar(255) DEFAULT '' NOT NULL,
	phone varchar(255) DEFAULT '' NOT NULL,
	mail varchar(255) DEFAULT '' NOT NULL,
	resort varchar(255) DEFAULT '' NOT NULL,
	comments varchar(255) DEFAULT '' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
 KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_interform_domain_model_event'
#
CREATE TABLE tx_interform_domain_model_event (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	resort varchar(255) DEFAULT '' NOT NULL,
	salutation varchar(255) DEFAULT '' NOT NULL,
	first_name varchar(255) DEFAULT '' NOT NULL,
	last_name varchar(255) DEFAULT '' NOT NULL,
	meeting varchar(255) DEFAULT '' NOT NULL,
	date1 varchar(255) DEFAULT '' NOT NULL,
	date2 varchar(255) DEFAULT '' NOT NULL,
	date_flexibility varchar(255) DEFAULT '' NOT NULL,
	alt_date1 varchar(255) DEFAULT '' NOT NULL,
	alt_date2 varchar(255) DEFAULT '' NOT NULL,
	room_numbers varchar(255) DEFAULT '' NOT NULL,
	company varchar(255) DEFAULT '' NOT NULL,
	street1 varchar(255) DEFAULT '' NOT NULL,
	street2 varchar(255) DEFAULT '' NOT NULL,
	city varchar(255) DEFAULT '' NOT NULL,
	state varchar(255) DEFAULT '' NOT NULL,
	zip varchar(255) DEFAULT '' NOT NULL,
	country varchar(255) DEFAULT '' NOT NULL,
	phone varchar(255) DEFAULT '' NOT NULL,
	mail varchar(255) DEFAULT '' NOT NULL,
	attendees varchar(255) DEFAULT '' NOT NULL,
	setup_rounds varchar(255) DEFAULT '' NOT NULL,
	setup_auditorium varchar(255) DEFAULT '' NOT NULL,
	setup_classroom varchar(255) DEFAULT '' NOT NULL,
	setup_conference varchar(255) DEFAULT '' NOT NULL,
	setup_exhibit varchar(255) DEFAULT '' NOT NULL,
	setup_cocktail varchar(255) DEFAULT '' NOT NULL,
	comments varchar(255) DEFAULT '' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
 KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_interform_domain_model_spa'
#
CREATE TABLE tx_interform_domain_model_spa (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	resort varchar(255) DEFAULT '' NOT NULL,
	salutation varchar(255) DEFAULT '' NOT NULL,
	first_name varchar(255) DEFAULT '' NOT NULL,
	last_name varchar(255) DEFAULT '' NOT NULL,
	mail varchar(255) DEFAULT '' NOT NULL,
	phone varchar(255) DEFAULT '' NOT NULL,
	couple_names varchar(255) DEFAULT '' NOT NULL,
	treatment1 varchar(255) DEFAULT '' NOT NULL,
	treatment1number varchar(255) DEFAULT '' NOT NULL,
	treatment1numbermore varchar(255) DEFAULT '' NOT NULL,
	treatment1date varchar(255) DEFAULT '' NOT NULL,
	treatment1time varchar(255) DEFAULT '' NOT NULL,
	treatment1timerange varchar(255) DEFAULT '' NOT NULL,
	treatment2 varchar(255) DEFAULT '' NOT NULL,
	treatment2number varchar(255) DEFAULT '' NOT NULL,
	treatment2numbermore varchar(255) DEFAULT '' NOT NULL,
	treatment2date varchar(255) DEFAULT '' NOT NULL,
	treatment2time varchar(255) DEFAULT '' NOT NULL,
	treatment2timerange varchar(255) DEFAULT '' NOT NULL,
	treatment3 varchar(255) DEFAULT '' NOT NULL,
	treatment3number varchar(255) DEFAULT '' NOT NULL,
	treatment3numbermore varchar(255) DEFAULT '' NOT NULL,
	treatment3date varchar(255) DEFAULT '' NOT NULL,
	treatment3time varchar(255) DEFAULT '' NOT NULL,
	treatment3timerange varchar(255) DEFAULT '' NOT NULL,
	message text NOT NULL,
	requirements varchar(255) DEFAULT '' NOT NULL,
	occassion varchar(255) DEFAULT '' NOT NULL,
	occassion_other varchar(255) DEFAULT '' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
 KEY language (l10n_parent,sys_language_uid)

);

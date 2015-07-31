<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'intertain Seitentemplates');
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Settings', 'intertain Seitentemplates: TS basierte Einstellungen');

\FluidTYPO3\Flux\Core::registerProviderExtensionKey('fluidpages_intertain', 'Page');
<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Fluid Content Elements: intertain');

\FluidTYPO3\Flux\Core::registerProviderExtensionKey('FluidTYPO3.FluidcontentIntertain', 'Content');

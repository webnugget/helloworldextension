<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'HelloWorld');
Tx_Flux_Core::registerProviderExtensionKey('helloworldbeispiel', 'Page');
Tx_Flux_Core::registerProviderExtensionKey('helloworldbeispiel', 'Content');


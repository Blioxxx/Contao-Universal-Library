<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Blioxxx',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Library
	'Blioxxx\uLibrary\images'                 => 'system/modules/bx_universal/library/images.php',
));
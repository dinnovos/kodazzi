<?php
/**
 * This file is part of the Kodazzi Framework.
 *
 * (c) Jorge Gaitan <info@kodazzi.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

define('Ki_ROOT', realpath(dirname(__FILE__) . '/../../') . '/');

define ('Ki_SYSTEM'		, 'system/');
define ('Ki_APP'		, Ki_ROOT . Ki_SYSTEM . 'app/');
define ('Ki_BUNDLES'	, Ki_ROOT . Ki_SYSTEM . 'bundles/');
define ('Ki_THEMES'	    , Ki_ROOT . Ki_SYSTEM . 'themes/');
define ('Ki_VND'		, Ki_ROOT . 'vendor/');
define ('Ki_PUBLIC'		, Ki_ROOT . 'public_html/');

define ('Ki_UPLOAD'		, 'upload/');

if(! defined('Ki_ENVIRONMENT'))
{
    // dev or prod
    define ('Ki_ENVIRONMENT', 'dev');
}

define ('Ki_DEBUG', true);

require Ki_VND . 'kodazzi/framework/src/bootstrap.php';
<?php
/**
 * This file is part of the Kodazzi Framework.
 *
 * (c) Jorge Gaitan <jgaitan@kodazzi.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

define('YS_ROOT', realpath(dirname(__FILE__) . '/../../') . '/');

define ('YS_SYSTEM'		, 'system/');
define ('YS_APP'		, YS_ROOT . YS_SYSTEM . 'app/');
define ('YS_BUNDLES'	, YS_ROOT . YS_SYSTEM . 'bundles/');
define ('YS_THEMES'	    , YS_ROOT . YS_SYSTEM . 'themes/');
define ('YS_VND'		, YS_ROOT . 'vendor/');
define ('YS_PUBLIC'		, YS_ROOT . 'public_html/');

define ('YS_UPLOAD'		, 'upload/');

if(!defined('YS_ENVIRONMENT'))
{
    // dev or prod
    define ('YS_ENVIRONMENT', 'dev');
}

define ('YS_DEBUG', true);

require YS_VND . 'kodazzi/framework/src/bootstrap.php';
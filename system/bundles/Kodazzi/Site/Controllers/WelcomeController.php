<?php
/**
 * This file is part of the Kodazzi Framework.
 *
 * (c) Jorge Gaitan <info@kodazzi.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kodazzi\Site\Controllers;

use Kodazzi\Site\Main\BundleController;

class WelcomeController extends BundleController
{
    public function indexAction()
    {
        return $this->render('Kodazzi\Site:Welcome:index', array(
        ));
	}
}
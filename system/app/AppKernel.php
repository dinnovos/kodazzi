<?php
 /**
 * This file is part of the Kodazzi Framework.
 *
 * (c) Jorge Gaitan <jgaitan@kodazzi.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Kodazzi\Kernel;

Class AppKernel extends Kernel
{
    public function start()
    {
        Service::registerBundles(array(
            'Dinnovos\Site\\'
        ));
    }
}
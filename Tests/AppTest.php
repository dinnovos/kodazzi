<?php
 /**
 * This file is part of the Kodazzi Framework.
 *
 * (c) Jorge Gaitan <info@kodazzi.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests;

use Kodazzi\Test\DevelopmentTesting;

class AppTest extends DevelopmentTesting
{
    public function testHome()
    {
        $response = $this->request('/');

        $this->assertContains('Bienvenidos a Kodazzi', $response->getContent());
    }
}
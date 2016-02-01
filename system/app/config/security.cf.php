<?php
/**
 * This file is part of the Kodazzi Framework.
 *
 * (c) Jorge Gaitan <info@kodazzi.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    'access_control' => [
        [
            'pattern'           => '^/admin',
            'role'              => 'ADMIN',
            'login_route'       => 'login',
            'forbidden_route'   => 'forbidden'
        ]
    ]
];
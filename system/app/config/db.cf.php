<?php
/**
 * This file is part of the Kodazzi Framework.
 *
 * (c) Jorge Gaitan <jgaitan@kodazzi.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return array(
	'prod' => array(
		'default' => array(
            'host' 		=> 'localhost',
            'dbname' 	=> 'db_Kodazzi',
            'user' 		=> 'user_Kodazzi',
            'password' 	=> '',
            'driver' 	=> 'pdo_mysql',
            'charset '	=> 'utf8'
		),
	),
	
	'dev' => array(
		'default' => array(
			'host' 		=> 'localhost',
			'dbname' 	=> 'ds_Kodazzi',
			'user' 		=> 'root',
			'password' 	=> '',
			'driver' 	=> 'pdo_mysql',
			'charset '	=> 'utf8'
		),
	),
);
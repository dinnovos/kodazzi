<?php
/**
 * This file is part of the Kodazzi Framework.
 *
 * (c) Jorge Gaitan <info@kodazzi.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return array(
	'prod' => array(
		'default' => array(
            'host' 		=> 'localhost',
            'dbname' 	=> 'ki_kodazzi',
            'user' 		=> 'user_kodazzi',
            'password' 	=> '',
            'driver' 	=> 'pdo_mysql',
            'charset '	=> 'utf8',
            'prefix'    => 'ki_'
		),
	),
	
	'dev' => array(
		'default' => array(
			'host' 		=> 'localhost',
			'dbname' 	=> 'ki_kodazzi',
			'user' 		=> 'root',
			'password' 	=> '',
			'driver' 	=> 'pdo_mysql',
			'charset '	=> 'utf8',
            'prefix'    => 'ki_'
		),
	),
);
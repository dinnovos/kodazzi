<?php

/*
* This file is part of the Kodazzi Framework.
*
* (c) Jorge Gaitan <jorge@dinnovos.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

/**
* PageFormBase
*
* @author Jorge Gaitan
*/

namespace Dinnovos\Site\Forms\Base;

Class PageFormBase extends \Kodazzi\Form\Form
{
	protected function config()
	{
		$this->setNameModel('Dinnovos\Site\Models\Page');

 		$this->setWidget('title', new \Kodazzi\Form\Fields\String());
 		$this->setWidget('orden', new \Kodazzi\Form\Fields\Integer())->setRequired(false);
 		$this->setWidget('nombre', new \Kodazzi\Form\Fields\Name());
 		$this->setWidget('email', new \Kodazzi\Form\Fields\Email())->setUnique(true);
	}
}
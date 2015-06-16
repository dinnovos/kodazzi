<?php
 /**
 * This file is part of the Kodazzi Framework.
 *
 * (c) Jorge Gaitan <jgaitan@kodazzi.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Events;

use Symfony\Component\EventDispatcher\Event;

class ContactEvent extends Event
{
    protected $form;

    public function __construct($form)
    {
        $this->form = $form;
    }

    public function getQreeting()
    {
        return $this->form;
    }
}
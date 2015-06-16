<?php
 /**
 * This file is part of the Kodazzi Framework.
 *
 * (c) Jorge Gaitan <jgaitan@kodazzi.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Listeners;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Events\ContactEvent;

class ContactListener implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            'kernel.request' => array(
                array('onRequest', 10),
            ),
            'contact.send' => array('onContact', 0),
        );
    }

    public function onRequest(GetResponseEvent $event)
    {

    }

    public function onContact(ContactEvent $event)
    {
        echo $event->getQreeting();
    }
}
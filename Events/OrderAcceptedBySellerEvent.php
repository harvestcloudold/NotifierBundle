<?php

/*
 * This file is part of the Harvest Cloud package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HarvestCloud\NotifierBundle\Events;

use \HarvestCloud\CoreBundle\Entity\Order;
use \HarvestCloud\NotifierBundle\Events\OrderEvent;

/**
 * OrderAcceptedBySellerEvent
 *
 * @author Tom Haskins-Vaughan <tom@harvestcloud.com>
 * @since  2012-06-21
 */
class OrderAcceptedBySellerEvent extends OrderEvent
{
    /**
     * getEmailTo
     *
     * @author Tom Haskins-Vaughan <tom@harvestcloud.com>
     * @since  2012-06-23
     *
     * @return array
     */
    public function getEmailTo()
    {
        $emailAddresses = array();

        foreach ($this->getOrder()->getBuyer()->getUsers() as $user) {
            $emailAddresses[] = $user->getEmail();
        }

        return $emailAddresses;
    }

    /**
     * getEmailSubject
     *
     * @author Tom Haskins-Vaughan <tom@harvestcloud.com>
     * @since  2012-06-23
     *
     * @return string
     */
    public function getEmailSubject()
    {
        return 'Your order has been accepted';
    }

    /**
     * getEmailBodyTemplateName
     *
     * @author Tom Haskins-Vaughan <tom@harvestcloud.com>
     * @since  2012-06-23
     *
     * @return string
     */
    public function getEmailBodyTemplateName()
    {
        return 'HarvestCloudNotifierBundle:Order:order_accepted_by_seller.buyer.email_body.txt.twig';
    }
}

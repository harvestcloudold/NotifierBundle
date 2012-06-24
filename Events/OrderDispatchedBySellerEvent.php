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
 * OrderDispatchedBySellerEvent
 *
 * @author Tom Haskins-Vaughan <tom@harvestcloud.com>
 * @since  2012-06-24
 */
class OrderDispatchedBySellerEvent extends OrderEvent
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
        return array('buyer@example.com' => 'Buyer Name');
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
        return 'Your order has been dispatched';
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
        return 'HarvestCloudNotifierBundle:Order:order_dispatched_by_seller.buyer.email_body.txt.twig';
    }
}

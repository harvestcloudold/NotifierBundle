<?php

/*
 * This file is part of the Harvest Cloud package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HarvestCloud\NotifierBundle\Events;

use \HarvestCloud\CoreBundle\Entity\Order;

/**
 * OrderEvent
 *
 * @author Tom Haskins-Vaughan <tom@harvestcloud.com>
 * @since  2012-06-24
 */
class OrderEvent extends Event
{
    /**
     * @var \HarvestCloud\CoreBundle\Entity\Order
     */
    protected $order;

    /**
     * __construct()
     *
     * @author Tom Haskins-Vaughan <tom@harvestcloud.com>
     * @since  2012-06-21
     *
     * @param  \HarvestCloud\CoreBundle\Entity\Order $order
     */
    public function __construct(Order $order)
    {
        $this->order        = $order;
    }

    /**
     * getOrder
     *
     * @author Tom Haskins-Vaughan <tom@harvestcloud.com>
     * @since  2012-06-23
     *
     * @return \HarvestCloud\CoreBundle\Entity\Order
     */
    public function getOrder()
    {
        return $this->order;
    }
}

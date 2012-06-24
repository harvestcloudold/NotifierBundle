<?php

/*
 * This file is part of the Harvest Cloud package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HarvestCloud\NotifierBundle;

use Symfony\Component\Templating\EngineInterface;

class Notifier
{
    protected $mailer;
    protected $templating;

    /**
     * __construct
     *
     * @author Tom Haskins-Vaughan <tom@harvestcloud.com>
     * @since  2012-06-20
     *
     * @param  \Swift_Mailer    $mailer
     * @param  EngineInterface  $templating
     */
    public function __construct(\Swift_Mailer $mailer, EngineInterface $templating)
    {
        $this->mailer     = $mailer;
        $this->templating = $templating;
    }

    /**
     * Notify an event
     *
     * @author Tom Haskins-Vaughan <tom@harvestcloud.com>
     * @since  2012-06-20
     *
     */
    public function notify($notification, $user)
    {
        // Notify by email
        $message = \Swift_Message::newInstance()
            ->setSubject($notification->getEmailSubject())
            ->setFrom(array('no-reply@harvestcloud.com' => 'Harvest Cloud'))
            ->setTo($notification->getEmailTo())
            ->setBody($this->templating->render(
                $notification->getEmailBodyTemplateName(),
                $notification->getEmailBodyTemplateParameters()
            ))
        ;

        $this->mailer->send($message);
    }
}

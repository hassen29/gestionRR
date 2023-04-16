<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class Mailing {


    public function __construct(private MailerInterface $mailer)
    {
        
    }

    public function sendEmail(
        $content ='<p>See Twig integration for better HTML integration!</p>'
    ): void
    {
        $email = (new Email())
            ->from('hassen.messaoudi@esprit.tn')
            ->to('hassenmessaoudi29@gmail.com')
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Time for Symfony Mailer!')
            ->text('Sending emails is fun again!');
            

        $this ->mailer->send($email);

        // ...
    }


}
<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\models;


use Phalcon\Mailer\Manager;

class Mailer
{
    static public function send($to, $from, $subj, $text)
    {
        $config = [
            'driver'    => 'mail',
            'from'      => $from
        ];

        $mailer = new Manager($config);

        $message = $mailer->createMessage()->to($to)->subject($subj)->content($text);

        $message->send();
    }
}
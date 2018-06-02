<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\models;


class Messager
{
    static public function send($subj ,$text)
    {
        $config = require __DIR__ . '/../config/config.php';

        $text = "<h3>$subj</h3>" . $text;

        $url = "https://api.telegram.org/" . $config['messager']['token'] . "/sendMessage?chat_id=" . $config['messager']['chatId'];
        $url = $url . "&text=" . urlencode($text);
        $ch = curl_init();
        $optArray = array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true
        );
        curl_setopt_array($ch, $optArray);
        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }
}
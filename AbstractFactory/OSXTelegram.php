<?php

namespace AbstractFactory;

class OSXTelegram implements AbstractTelegram
{
    public function sendMessage(): string
    {
        return "Message has been sent by Telegram on OSX!";
    }
}

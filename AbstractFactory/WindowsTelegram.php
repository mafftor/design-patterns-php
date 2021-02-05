<?php

namespace AbstractFactory;

class WindowsTelegram implements AbstractTelegram
{
    public function sendMessage(): string
    {
        return "Message has been sent by Telegram on Windows!";
    }
}

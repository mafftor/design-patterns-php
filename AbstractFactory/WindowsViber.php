<?php

namespace AbstractFactory;

class WindowsViber implements AbstractViber
{
    public function sendMessage(): string
    {
        return "Message has been sent by Viber on Windows!";
    }
}

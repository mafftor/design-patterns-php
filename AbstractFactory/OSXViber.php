<?php

namespace AbstractFactory;

class OSXViber implements AbstractViber
{
    public function sendMessage(): string
    {
        return "Message has been sent by Viber on OSX!";
    }
}

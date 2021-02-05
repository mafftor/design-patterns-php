<?php

namespace AbstractFactory;

class OSXMessengerFactory implements AbstractMessengerFactory
{
    public function createTelegram(): AbstractTelegram
    {
        return new OSXTelegram();
    }

    public function createViber(): AbstractViber
    {
        return new OSXViber();
    }
}

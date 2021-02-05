<?php

namespace AbstractFactory;

class WindowsMessengerFactory implements AbstractMessengerFactory
{
    public function createTelegram(): AbstractTelegram
    {
        return new WindowsTelegram();
    }

    public function createViber(): AbstractViber
    {
        return new WindowsViber();
    }
}

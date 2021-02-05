<?php

namespace AbstractFactory;

interface AbstractMessengerFactory
{
    public function createTelegram(): AbstractTelegram;

    public function createViber(): AbstractViber;
}

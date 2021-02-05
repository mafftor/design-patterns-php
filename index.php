<?php

require_once 'engine.php';

// Abstract Factory
$osxMessengerFactory = new \AbstractFactory\OSXMessengerFactory();
echo $osxMessengerFactory->createTelegram()->sendMessage();
echo $osxMessengerFactory->createViber()->sendMessage();

$windowsMessengerFactory = new \AbstractFactory\WindowsMessengerFactory();
echo $windowsMessengerFactory->createTelegram()->sendMessage();
echo $windowsMessengerFactory->createViber()->sendMessage();

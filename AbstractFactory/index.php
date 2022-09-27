<?php

include_once 'engine.php';

// Abstract Factory
echo "<h3>Abstract Factory:</h3>";
$osxMessengerFactory = new \AbstractFactory\OSXMessengerFactory();
echo "<p>" . $osxMessengerFactory->createTelegram()->sendMessage() . "</p>";
echo "<p>" . $osxMessengerFactory->createViber()->sendMessage() . "</p>";

$windowsMessengerFactory = new \AbstractFactory\WindowsMessengerFactory();
echo "<p>" . $windowsMessengerFactory->createTelegram()->sendMessage() . "</p>";
echo "<p>" . $windowsMessengerFactory->createViber()->sendMessage() . "</p>";
echo "<hr>";
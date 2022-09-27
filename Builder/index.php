<?php

include_once 'engine.php';

// Abstract Factory
echo "<h3>Builder:</h3>";

$englishBuilder = new \Builder\EnglishBuilder();
echo "<p>" . $englishBuilder->helloMom()->helloDad()->helloSister()->helloEveryone()->generate() . "</p>";

$ukrainianBuilder = new \Builder\UkrainianBuilder();
echo "<p>" . $ukrainianBuilder->helloMom()->helloDad()->helloSister()->helloEveryone()->generate() . "</p>";


echo "<hr>";
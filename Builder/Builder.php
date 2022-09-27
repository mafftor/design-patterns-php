<?php

namespace Builder;

interface Builder
{
    public function generate(): string;

    public function helloMom(): Builder;

    public function helloDad(): Builder;

    public function helloSister(): Builder;

    public function helloEveryone(): Builder;
}

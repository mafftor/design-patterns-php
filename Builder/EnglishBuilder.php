<?php

namespace Builder;

class EnglishBuilder implements Builder
{
    private $hello = [];

    public function generate(): string {
        return "I want to say hello to: " . implode(', ', $this->hello);
    }

    public function helloMom(): Builder {
        $this->hello[] = 'Mom';

        return $this;
    }

    public function helloDad(): Builder {
        $this->hello[] = 'Dad';

        return $this;
    }

    public function helloSister(): Builder {
        $this->hello[] = 'Sister';

        return $this;
    }

    public function helloEveryone(): Builder {
        $this->hello[] = 'Everyone';

        return $this;
    }
}

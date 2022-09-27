<?php

namespace Builder;

class UkrainianBuilder implements Builder
{
    private $hello = [];

    public function generate(): string {
        return "Я хочу привітати: " . implode(', ', $this->hello);
    }

    public function helloMom(): Builder {
        $this->hello[] = 'Маму';

        return $this;
    }

    public function helloDad(): Builder {
        $this->hello[] = 'Тато';

        return $this;
    }

    public function helloSister(): Builder {
        $this->hello[] = 'Сестру';

        return $this;
    }

    public function helloEveryone(): Builder {
        $this->hello[] = 'Кожного';

        return $this;
    }
}

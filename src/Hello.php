<?php

namespace App;

class Hello

{
    private string $talk = "Hello World";

    public function getTalk():string
    {
        return $this->talk;
    }

    public function setTalk(string $talk): void
    {
        $this->talk = $talk;
    }

}
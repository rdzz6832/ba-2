<?php

namespace BinaryStudioAcademy\Task1;

abstract class PokemonBase implements Pokemon
{
    protected $name = '';
    protected $battleCry = '';
    protected $image = '';

    public function battleCry(): string
    {
        return $this->battleCry;
    }

    public function imageUrl(): string
    {
        return $this->image;
    }

    public function shout(): string
    {
        return "{$this->name}: {$this->battleCry()}";
    }
}
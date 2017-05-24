<?php

namespace BinaryStudioAcademy\Task3;

class PokemonPresenter
{
    private $pokemons;

    public function __construct(array $pokemons)
    {
        $this->pokemons = $pokemons;
    }

    /**
     * Returns html-list (ul-li) of images (img)
     *
     * @return string
     */
    public function present(): string
    {
        $output = '<ul>';
        foreach ($this->pokemons as $pokemon) {
            $output .= '<li><img src="' . $pokemon->imageUrl() . '"></li>';
        }
        $output .= '</ul>';

        return $output;
    }
}

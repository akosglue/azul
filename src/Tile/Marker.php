<?php

namespace Azul\Tile;

class Marker extends Tile
{
    public function __construct()
    {
        parent::__construct('');
    }

    public function isFirstPlayerMarker(): bool
    {
        return true;
    }
}
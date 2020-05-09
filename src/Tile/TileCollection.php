<?php

namespace Azul\Tile;

class TileCollection extends \SplStack
{
    public function __construct($tiles = [])
    {
        foreach ($tiles as $tile) {
            $this->addTile($tile);
        }
    }

    public function addTile(Tile $tile): void
    {
        $this->push($tile);
    }
}

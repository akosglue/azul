<?php

namespace Tests;

use Azul\Tile\Color;
use Azul\Tile\Tile;

class TileTest extends BaseUnit
{
    public function testISameColor_EveryColor_ColorIsRight()
    {
        foreach (Color::getAll() as $colorForTile) {
            $tile = new Tile($colorForTile);
            foreach (Color::getAll() as $color) {
                if ($color === $colorForTile) {
                    $this->assertTrue($tile->isSameColor($color));
                } else {
                    $this->assertFalse($tile->isSameColor($color));
                }
            }
        }
    }
}
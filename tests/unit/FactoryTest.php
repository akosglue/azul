<?php

namespace Tests;

use Azul\Game\Factory;
use Azul\Tile\Color;
use Azul\Tile\Tile;
use Azul\Tile\TileCollection;

class FactoryTest extends BaseUnit
{
    public function testTakeRed_3Red1Black_1TileLeftInCenter()
    {
        $table = $this->tester->createGameTable();
        $factory = new Factory(
            $table,
            new TileCollection([
                new Tile(Color::RED),
                new Tile(Color::RED),
                new Tile(Color::RED),
                new Tile(Color::BLACK),
            ])
        );
        $this->assertEquals(0, $table->getCenterPileCount());
        $factory->take(Color::RED);
        $this->assertEquals(1, $table->getCenterPileCount());
    }

    public function testTake_NoExistedColor_Exception()
    {
        $factory = new Factory($this->tester->createGameTable(), new TileCollection(array_fill(0, 4, new Tile(Color::BLACK))));
        $this->expectExceptionMessageRegExp('#at least 1#');
        $factory->take(Color::CYAN);
    }

}
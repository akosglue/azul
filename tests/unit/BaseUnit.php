<?php

namespace Tests\unit;

use Codeception\Test\Unit;
use Azul\Game\Table;
use Azul\Tile\Marker;

abstract class BaseUnit extends Unit
{
	protected \UnitTester $tester;

    public function createGameTable(): \Azul\Game\Table {
        return new Table(new Marker());
    }
}
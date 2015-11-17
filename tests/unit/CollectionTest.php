<?php
/**
 * This file is part of the Everon framework.
 *
 * (c) Oliwier Ptak <EveronFramework@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Everon\Componnent\Collection\Tests;

use Everon\Component\Collection\Collection;

class CollectionTest extends \PHPUnit_Framework_TestCase
{
    protected $arrayFixture = [
        'foo' => 1,
        'bar' => 'barValue',
        'fuzz' => null
    ];

    public function testArrayInterfaces()
    {
        $Collection = new Collection($this->arrayFixture);

        $this->assertInstanceOf('Everon\Component\Collection\CollectionInterface', $Collection);
    }
}

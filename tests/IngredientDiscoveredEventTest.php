<?php

declare(strict_types=1);

namespace SocialFoodSolutions;

use PHPUnit\Framework\TestCase;

/**
 * @covers \SocialFoodSolutions\IngredientDiscoveredEvent
 */
class IngredientDiscoveredEventTest extends TestCase
{
    public function testCanDiscoveredEvent(): void
    {
        $event = new IngredientDiscoveredEvent(IngredientName::from('gurke'));

        $this->assertInstanceOf(IngredientDiscoveredEvent::class, $event);

        $this->assertEquals('gurke', $event->getIngredientName()->asString());
    }
}

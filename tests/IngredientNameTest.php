<?php

declare(strict_types=1);

namespace SocialFoodSolutions;

use PHPUnit\Framework\TestCase;

class IngredientNameTest extends TestCase
{
    /**
     * @covers \SocialFoodSolutions\IngredientName
     */
    public function testCanGetIngredientName(): void
    {
        $ingredientName = IngredientName::from('Tomate');

        $this->assertInstanceOf(IngredientName::class, $ingredientName);
        $this->assertEquals('Tomate', $ingredientName->asString());
    }

    /**
     * @covers \SocialFoodSolutions\IngredientName
     */
    public function testThrowsExceptionWhenNameIsEmpty(): void
    {
        $this->expectException(InvalidValueException::class);
        $this->expectExceptionMessage('IngredientName must not be empty.');

        IngredientName::from('');
    }
}

<?php

namespace Core\Domain\Entity;

use PHPUnit\Framework\TestCase;

class CategoryUnitTest extends TestCase
{
    public function testAttributes()
    {
        $category = new Category(
        id: '',
        name: 'New Cat',
        description: 'New Desc',
        isActive: true
        );

        $this->assertEquals('New Cat', $category->name);
        $this->assertEquals('New Desc', $category->description);
        $this->assertEquals(true, $category->isActive);
    }

    public function testActivate()
    {
        $category = new Category(
        id: '',
        name: 'New Cat',
        description: 'New Desc',
        isActive: false
        );

        $category->activate();

        $this->assertEquals(true, $category->isActive);

    }
}
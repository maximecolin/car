<?php

/*
 * This file is part of the Car package.
 *
 * (c) Maxime Colin <contact@maximecolin.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Car\Tests;

use Car\Resolver\ClassNameResolver;

/**
 * ClassNameResolver test
 */
class ClassNameResolverTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test the resolver return the right handler
     */
    public function testGetHandler()
    {
        $resolver = new ClassNameResolver();
        $command  = new Fixtures\FoobarCommand();
        $handler  = $resolver->getHandler($command);

        $this->assertInstanceOf('Car\Tests\Fixtures\FoobarCommandHandler', $handler);
    }

    /**
     * Test the resolver return null if no handler found
     */
    public function testHandlerNotFound()
    {
        $resolver = new ClassNameResolver();
        $command  = new Fixtures\BarfooCommand();
        $handler  = $resolver->getHandler($command);

        $this->assertNull($handler);
    }
}

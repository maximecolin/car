<?php

/*
 * This file is part of the Wheels package.
 *
 * (c) Maxime Colin <contact@maximecolin.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Wheels\Tests;

use Wheels\Resolver\ClassNameResolver;

class ClassNameResolverTest extends \PHPUnit_Framework_TestCase
{
    public function testGetHandler()
    {
        $resolver = new ClassNameResolver();
        $command  = new Fixtures\FoobarCommand();
        $handler  = $resolver->getHandler($command);

        $this->assertInstanceOf('Wheels\Tests\Fixtures\FoobarCommandHandler', $handler);
    }

    public function testHandlerNotFound()
    {
        $resolver = new ClassNameResolver();
        $command  = new Fixtures\BarfooCommand();
        $handler  = $resolver->getHandler($command);

        $this->assertNull($handler);
    }
}

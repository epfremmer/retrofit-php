<?php
/*
 * Copyright (c) Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Retrofit\Test\Unit\Annotation;

use Tebru\Retrofit\Annotation\Returns;
use Tebru\Retrofit\Test\MockeryTestCase;

/**
 * Class ReturnsTest
 *
 * @author Nate Brunette <n@tebru.net>
 */
class ReturnsTest extends MockeryTestCase
{
    /**
     * @expectedException \OutOfBoundsException
     * @expectedExceptionMessage An argument was not passed to a "Tebru\Retrofit\Annotation\Returns" annotation.
     */
    public function testConstructorThrowsException()
    {
        new Returns([]);
    }

    public function testSimple()
    {
        $annotation = new Returns(['value' => 'test']);

        $this->assertEquals('test', $annotation->getReturn());
    }
}

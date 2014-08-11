<?php

namespace spec\Kayla\Immutables;

use Kayla\Immutables\InvalidType;
use Kayla\Immutables\Stubs\ArbitrarilyTypedImmutableArray;
use Kayla\Immutables\Stubs\ArbitrarilyTypedObject;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TypedImmutableArraySpec extends ObjectBehavior
{
    function let(ArbitrarilyTypedObject $typedObject)
    {
        $this->beAnInstanceOf('Kayla\Immutables\Stubs\ArbitrarilyTypedImmutableArray');
        $this->beConstructedWith([$typedObject, $typedObject, $typedObject]);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Kayla\Immutables\Stubs\ArbitrarilyTypedImmutableArray');
    }

    function it_throws_an_exception_when_attempting_to_contain_an_invalid_type()
    {
        $this->shouldThrow(new InvalidType)->during('__construct', [['foo']]);
    }
}

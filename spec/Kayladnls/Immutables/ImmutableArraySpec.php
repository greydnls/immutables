<?php

namespace spec\Kayladnls\Immutables;

use Kayladnls\Immutables\CannotModifyImmutable;
use Kayladnls\Immutables\CannotModifyImmutableArrayException;
use Kayladnls\Immutables\ImmutableArray;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ImmutableArraySpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(['foo', 'bar', 'baz']);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Kayladnls\Immutables\ImmutableArray');
    }

    function it_can_count_the_items()
    {
        $this->count()->shouldBe(3);
    }

    function it_can_get_items()
    {
        $this->offsetGet(0)->shouldBe('foo');
        $this->offsetGet(1)->shouldBe('bar');
        $this->offsetGet(2)->shouldBe('baz');
    }

    function it_will_disallow_offset_assignment()
    {
        $this->shouldThrow(new CannotModifyImmutable)->duringOffsetSet('key', 'value');
    }

    function it_will_disallow_offset_unset()
    {
        $this->shouldThrow(new CannotModifyImmutable)->duringOffsetUnset('key');
    }
}

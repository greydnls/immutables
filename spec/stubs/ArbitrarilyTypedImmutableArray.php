<?php namespace Kayladnls\Immutables\Stubs;

use Kayladnls\Immutables\InvalidType;
use Kayladnls\Immutables\TypedImmutableArray;

final class ArbitrarilyTypedImmutableArray extends TypedImmutableArray
{
    protected function typeGuard($item)
    {
        if ( ! $item instanceof ArbitrarilyTypedObject)
            throw new InvalidType;
    }
}

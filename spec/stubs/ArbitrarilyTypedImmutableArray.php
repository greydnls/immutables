<?php namespace Kayla\Immutables\Stubs;

use Kayla\Immutables\InvalidType;
use Kayla\Immutables\TypedImmutableArray;

final class ArbitrarilyTypedImmutableArray extends TypedImmutableArray
{
    protected function typeGuard($item)
    {
        if ( ! $item instanceof ArbitrarilyTypedObject)
            throw new InvalidType;
    }
}

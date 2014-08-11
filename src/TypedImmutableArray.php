<?php namespace Kayla\Immutables;

/**
 * Class TypedImmutableArray
 * @package Kayla\Immutables
 */
abstract class TypedImmutableArray extends ImmutableArray
{
    /**
     * @var array
     */
    protected $items = [];

    /**
     * @param array $items
     */
    public function __construct(array $items)
    {
        foreach ($items as $item)
            $this->typeGuard($item);

        $this->items = $items;
    }

    /**
     * @param $item
     * @throws InvalidType
     */
    abstract protected function typeGuard($item);
}

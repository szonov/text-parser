<?php

namespace SZonov\Text\Parser;

use Iterator;

/**
 * Iterator by items from ParserInterface
 *
 * Class ParserIterator
 * @package SZonov\Text\Parser
 */
class ParserIterator implements Iterator
{
    protected mixed $pos = 0;
    protected mixed $item = false;

    /**
     * ParserIterator constructor.
     */
    public function __construct(protected ParserInterface $parser)
    {
    }

    /**
     * Implementation of Iterator interface
     */
    public function current(): mixed
    {
        return $this->item;
    }

    /**
     * Implementation of Iterator interface
     */
    public function key(): mixed
    {
        return $this->pos;
    }

    /**
     * Implementation of Iterator interface
     */
    public function next(): void
    {
        ++$this->pos;
    }

    /**
     * Implementation of Iterator interface
     */
    public function rewind(): void
    {
        $this->parser->rewind();
        $this->pos = 0;
        $this->item = false;
    }

    /**
     * Implementation of Iterator interfaces
     */
    public function valid(): bool
    {
        $this->item = $this->parser->getItem();
        return $this->item !== false;
    }
}
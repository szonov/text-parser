<?php

namespace SZonov\Text\Parser;

use Iterator;

/**
 * Iterator by items from ParserInterface
 *
 * Class ParserIterator
 * @package SZonov\Text\Parser
 */
class ParserIterator implements Iterator {

    /**
     * @var ParserInterface
     */
    protected $parser;

    /**
     * @var int
     */
    protected $pos = 0;

    /**
     * @var mixed
     */
    protected $item;

    /**
     * ParserIterator constructor.
     * @param ParserInterface $parser
     */
    public function __construct(ParserInterface $parser)
    {
        $this->parser = $parser;
    }

    /**
     * Implementation of Iterator interface
     * @return mixed
     */
    public function current ()
    {
        return $this->item;
    }

    /**
     * Implementation of Iterator interface
     * @return int
     */
    public function key ()
    {
        return $this->pos;
    }

    /**
     * Implementation of Iterator interface
     */
    public function next ()
    {
        ++$this->pos;
    }

    /**
     * Implementation of Iterator interface
     */
    public function rewind ()
    {
        $this->parser->rewind();
        $this->pos = 0;
        $this->item = false;
    }

    /**
     * Implementation of Iterator interfaces
     * @return bool
     */
    public function valid ()
    {
        $this->item = $this->parser->getItem();
        return $this->item !== false;
    }
}
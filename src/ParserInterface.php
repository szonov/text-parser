<?php

namespace SZonov\Text\Parser;

/**
 * List of functions which should be implemented by texts parsers
 *
 * Interface ParserInterface
 * @package SZonov\Text\Parser
 */
interface ParserInterface
{
    /**
     * Rewind parser (start parsing process from scratch)
     * @return void
     */
    public function rewind();

    /**
     * Get next parsed value
     * @return mixed
     */
    public function getItem();
}
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
     */
    public function rewind(): void;

    /**
     * Get next parsed value
     */
    public function getItem();
}
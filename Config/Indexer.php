<?php

namespace Pluk77\SymfonySphinxBundle\Config;

/**
 * Class Indexer
 *
 * @package Pluk77\SymfonySphinxBundle\Config
 */
class Indexer extends Block
{
    /**
     * Indexer constructor.
     *
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        $this
            ->setBlockType('indexer')
            ->setOptions($options);
    }
}

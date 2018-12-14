<?php

namespace Pluk77\SymfonySphinxBundle\Config;

/**
 * Class Daemon
 *
 * @package Pluk77\SymfonySphinxBundle\Config
 */
class Daemon extends Block
{
    /**
     * Daemon constructor.
     *
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        $this
            ->setBlockType('searchd')
            ->setOptions($options);
    }
}

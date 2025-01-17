<?php

declare(strict_types=1);

namespace SpecDoc\Contract\Reader;

use SpecDoc\Contract\Exception\ReaderExceptionInterface;

/**
 * Common reader interface. Contains methods for getting content.
 */
interface ReaderInterface
{
    /**
     * Returns content. Throws an exception when the content cannot be retrieved.
     *
     * @return string
     * @throws ReaderExceptionInterface
     */
    public function getContent(): string;
}

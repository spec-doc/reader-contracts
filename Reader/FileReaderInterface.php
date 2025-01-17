<?php

declare(strict_types=1);

namespace SpecDoc\Contract\Reader;

interface FileReaderInterface extends ReaderInterface
{
    /**
     * Returns a flag indicating whether the file extension is supported.
     *
     * @param string $extension
     *
     * @return bool
     */
    public function supports(string $extension): bool;
}

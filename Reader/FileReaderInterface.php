<?php

declare(strict_types=1);

namespace SpecDoc\Contract\Reader;

/**
 * The file reader interface. Contains methods for getting content and supporting
 * certain file extensions.
 */
interface FileReaderInterface extends ReaderInterface
{
    /**
     * Sets the file for reading.
     *
     * @param string $path
     *
     * @return static
     */
    public function setFile(string $path): static;

    /**
     * Returns a flag indicating whether the file extension is supported.
     *
     * @param string $extension
     *
     * @return bool
     */
    public function supports(string $extension): bool;
}

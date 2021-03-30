<?php

/**
 * A personal computer.
 */
class Desktop extends PC
{
    public string $monitor;

    /**
     * Turn on the desktop computer.
     */
    public function turnOn(): void
    {
        echo "Desktop computer built with $this->ram GBs of RAM and $this->disk GBs of storage space.\n";
    }
}
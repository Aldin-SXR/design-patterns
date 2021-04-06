<?php

/**
 * A desktop computer.
 */
class Laptop extends PC
{
    public string $screen;
    public string $touchPad;

    /**
     * Turn on the laptop.
     */
    public function turnOn(): void
    {
        echo "Laptop built with $this->ram GBs of RAM and $this->disk GBs of storage space.\n";
    }
}
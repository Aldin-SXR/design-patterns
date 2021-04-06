<?php

/**
 * The operating system interface.
 */
interface OperatingSystem
{
    public function halt();
    
    public function getName(): string;
}
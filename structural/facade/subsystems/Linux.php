<?php

/**
 * The Linux OS.
 */
class Linux implements OperatingSystem
{
    public function halt()
    {
        echo "Halting the system...\n";
    }
    
    public function getName(): string
    {
        return "Ubuntu Linux";
    }
}
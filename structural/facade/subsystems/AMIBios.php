<?php

/**
 * AMI BIOS class.
 */
class AMIBios implements Bios
{
    public function execute()
    {
        echo "Starting up BIOS...\n";
    }

    public function waitForKeyPress()
    {
        echo "Press any key to continue...\n";
    }

    public function launch(OperatingSystem $os)
    {
        echo "Launching " . $os->getName() . "...\n";
    }

    public function powerDown()
    {
        echo "Powering down...\n";
    }
}
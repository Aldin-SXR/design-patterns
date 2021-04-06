<?php

/**
 * The BIOS sinterface.
 */
interface Bios
{
    public function execute();

    public function waitForKeyPress();

    public function launch(OperatingSystem $os);

    public function powerDown();
}
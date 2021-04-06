<?php
/**
 * The "facade" Power class for turning a PC on or off.
 * It hides the internal complexities of the system and
 * provide a simple interface to clients. 
 */
class Power
{
    private Bios $bios;
    private OperatingSystem $os;

    public function __construct(Bios $bios, OperatingSystem $os)
    {
        $this->bios = $bios;
        $this->os = $os;
    }

    public function turnOn()
    {
        $this->bios->execute();
        $this->bios->waitForKeyPress();
        $this->bios->launch($this->os);
    }

    public function turnOff()
    {
        $this->os->halt();
        $this->bios->powerDown();
    }
}
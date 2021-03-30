<?php

class DesktopBuilder
{
    /**
     * A Desktop instance to be built.
     */
    private Desktop $desktop;

    public function __construct()
    {
        $this->desktop = new Desktop();
    }

    /**
     * Steps in the build process.
     */

    /**
     * Add motherboard.
    */
    public function addMotherboard()
    {
        $this->desktop->motherboard = 'Motherboard';
        return $this;
    }

    /**
     * Add power supply.
    */
    public function addPowerSupply()
    {
        $this->desktop->powerSupply = 'Power supply';
        return $this;
    }

    /**
     * Add monitor.
    */
    public function addMonitor()
    {
        $this->desktop->screen = 'LCD monitor';
        return $this;
    }

    /**
     * Add GPU.
    */
    public function addGPU()
    {
        $this->desktop->gpu = 'NVIDIA';
        return $this;
    }

    /**
     * Add keyboard.
    */
    public function addKeyboard()
    {
        $this->desktop->keyboard = 'Keyboard';
        return $this;
    }

    /**
     * Add mouse.
    */
    public function addMouse()
    {
        $this->desktop->touchPad = 'Wireless mouse';
        return $this;
    }

    /**
     * Add disk.
    */
    public function addDiskSpace(int $gbs)
    {
        $this->desktop->disk += $gbs;
        return $this;
    }

    /**
     * Add RAM.
    */
    public function addRAM(int $gbs)
    {
        $this->desktop->ram += $gbs;
        return $this;
    }

    /**
     * Finalize building.
     */
    public function build()
    {
        return $this->desktop;
    }

    /**
     * Reset object creation.
     */
    public function reset()
    {
        $this->desktop = new Desktop();
    }
}
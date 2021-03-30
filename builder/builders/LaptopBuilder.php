<?php

/**
 * A class that builds our Laptop.
 */
class LaptopBuilder
{
    /**
     * A Laptop instance to be built.
     */
    private Laptop $laptop;

    public function __construct()
    {
        $this->laptop = new Laptop();
    }

    /**
     * Steps in the build process.
     */

    /**
     * Add motherboard.
    */
    public function addMotherboard()
    {
        $this->laptop->motherboard = 'Motherboard';
        return $this;
    }

    /**
     * Add power supply.
    */
    public function addPowerSupply()
    {
        $this->laptop->powerSupply = 'Power supply';
        return $this;
    }

    /**
     * Add screen.
    */
    public function addScreen()
    {
        $this->laptop->screen = 'Laptop screen';
        return $this;
    }

    /**
     * Add GPU.
    */
    public function addGPU()
    {
        $this->laptop->gpu = 'Built-in GPU';
        return $this;
    }

    /**
     * Add keyboard.
    */
    public function addKeyboard()
    {
        $this->laptop->keyboard = 'Keyboard';
        return $this;
    }

    /**
     * Add touchpad.
    */
    public function addTouchpad()
    {
        $this->laptop->touchPad = 'Touchpad';
        return $this;
    }

    /**
     * Add disk.
    */
    public function addDiskSpace(int $gbs)
    {
        $this->laptop->disk += $gbs;
        return $this;
    }

    /**
     * Add RAM.
    */
    public function addRAM(int $gbs)
    {
        $this->laptop->ram += $gbs;
        return $this;
    }

    /**
     * Finalize building.
     */
    public function build()
    {
        return $this->laptop;
    }

    /**
     * Reset object creation.
     */
    public function reset()
    {
        $this->laptop = new Laptop();
    }

}
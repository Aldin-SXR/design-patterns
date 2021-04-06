<?php

/**
 * A director class for creating a "standardized" instance of a product.
 */
class PCDirector
{

    /**
     * Make a laptop according to pre-defined rules.
     */
    public function makeLaptop(LaptopBuilder $builder): Laptop
    {
        $laptop = $builder
                    ->addMotherboard()
                    ->addPowerSupply()
                    ->addGPU()
                    ->addDiskSpace(250)
                    ->addRAM(16)
                    ->addKeyboard()
                    ->addTouchpad()
                    ->addScreen()
                    ->build();
        
        return $laptop;
    }

    /**
     * Make a desktop computer according to pre-defined rules.
     */
    public function makeDesktop(DesktopBuilder $builder): Desktop
    {
        $desktop = $builder
                    ->addMotherboard()
                    ->addPowerSupply()
                    ->addGPU()
                    ->addMonitor()
                    ->addDiskSpace(512)
                    ->addRAM(32)
                    ->addKeyboard()
                    ->addMouse()
                    ->build();
        
        return $desktop;
    }
}
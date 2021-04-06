<?php

/**
 * The command interface.
 */
interface Command
{
    /**
     * Every command should be able to execute() something.
     */

     public function execute();
}
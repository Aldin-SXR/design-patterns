<?php

/**
 * Our Sender/Invoker class.
 * The Invoker class is using the command given to it. 
 */
class ConsoleInvoker
{
    private Command $command;

    /**
     * Set a command.
     */
    public function setCommand(Command $cmd)
    {
        $this->command = $cmd;
    }

    /**
     * Execute the command.
     */
    public function run()
    {
        $this->command->execute();
    }
}
<?php

/**
 * This concrete command will perform "print" operation on the Receiver,
 * but an external invoker just knows that it can call "execute()".
 */
class HelloCommand implements Command
{
    private ConsoleReceiver $output;

    /**
     * A command is usually built with a "Receiver" object.
     */
    public function __construct(ConsoleReceiver $console)
    {
        $this->output = $console;
    }

    public function execute()
    {
        $this->output->write("Hello world!");
    }
}
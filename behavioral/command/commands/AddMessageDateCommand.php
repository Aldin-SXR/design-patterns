<?php
/**
 * And undoable command: adding a message date
 */
class AddMessageDateCommand implements UndoableCommand
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
        $this->output->enableDate();
    }

    public function undo()
    {
        $this->output->disableDate();
    }
}
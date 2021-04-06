<?php

/**
 * Our Receiver class: the console.
 * Receivers know how to perform all kinds of operations, 
 * associated with carrying out a request.
 */
class ConsoleReceiver
{
    private bool $enableDate = false;

    /**
     * @var string[]
     */
    private array $output = [];


    public function write(string $str)
    {
        if ($this->enableDate) {
            $str .= ' ['.date('Y-m-d').']';
        }

        $this->output[] = $str;
    }

    public function getOutput(): string
    {
        return join("\n", $this->output);
    }

    /**
     * Enable the receiver to display message date.
     */
    public function enableDate()
    {
        $this->enableDate = true;
    }

    /**
     * Disable the receiver to display message date.
     */
    public function disableDate()
    {
        $this->enableDate = false;
    }
}
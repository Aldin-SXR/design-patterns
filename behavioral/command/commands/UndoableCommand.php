<?php

/**
 * A Command that you can undo.
 */
interface UndoableCommand extends Command
{
    /**
     * Revert the last command.
     */
    public function undo();
}
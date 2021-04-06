<?php

require_once 'ConsoleReceiver.php';

require_once 'commands/Command.php';
require_once 'commands/UndoableCommand.php';
require_once 'commands/HelloCommand.php';
require_once 'commands/AddMessageDateCommand.php';

require_once 'ConsoleInvoker.php';

/**
 * Write some lines onto the console.
 */

$console = new ConsoleReceiver();
$terminal = new ConsoleInvoker();

/* Run a command */
$terminal->setCommand(new HelloCommand($console));
$terminal->run();

/* Get the output */
echo $console->getOutput() . "\n";
echo "======\n";

$messageDateCommand = new AddMessageDateCommand($console);
$messageDateCommand->execute();

$terminal->run();
echo $console->getOutput() . "\n";
echo "======\n";

$messageDateCommand->undo();
$terminal->run();
echo $console->getOutput() . "\n";

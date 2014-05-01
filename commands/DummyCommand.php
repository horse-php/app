<?php namespace Commands;

use Horse\Command, Horse\Input, Horse\Output;

/**
 * @name dummy-command
 * @desc Very dummy command
 * @sign {name:required:"Your name"}
 */
class DummyCommand extends Command {

    /**
     * Run the command.
     *
     * @param Input $input
     * @param Output $output
     * @return void
     */
    public function go(Input $input, Output $output)
    {
        $output('Your name is '.$input('name'));
    }

}


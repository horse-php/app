<?php namespace Commands;

use Horse\Command, Horse\Input, Horse\Output;

/**
 * @name greet
 * @desc Greet a person
 * @sign {name:required:"Name of the person"}
 */
class GreetCommand extends Command {

    /**
     * Run the command.
     *
     * @param Input $input
     * @param Output $output
     * @return void
     */
    public function go(Input $input, Output $output)
    {
        $output('Hello '.$input('name'));
    }

}


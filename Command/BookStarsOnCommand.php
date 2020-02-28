<?php

include_once 'BookCommand.php';

class BookStarsOnCommand extends BookCommand {
    function execute() {
        $this->bookCommandee->setStarsOn();
    }
}


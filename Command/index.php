<?php

include_once 'BookComandee.php';

writeln('BEGIN TESTING COMMAND PATTERN');
writeln('');

$book = new BookCommandee('Design Patterns', 'Gamma, Helm, Johnson, and Vlissides');
writeln('book after creation: ');
writeln($book->getAuthorAndTitle());
writeln('');

$starsOn = new BookStarsOnCommand($book);
callCommand($starsOn);
writeln('book after stars on: ');
writeln($book->getAuthorAndTitle());
writeln('');

$starsOff = new BookStarsOffCommand($book);
callCommand($starsOff);
writeln('book after stars off: ');
writeln($book->getAuthorAndTitle());
writeln('');

writeln('END TESTING COMMAND PATTERN');

// the callCommand function demonstrates that a specified
// function in BookCommandee can be executed with only
// an instance of BookCommand.
function callCommand(BookCommand $bookCommand_in) {
    $bookCommand_in->execute();
}

function writeln($line_in) {
    echo $line_in."<br/>";
}

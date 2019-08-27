# learning-php
## Recap week- Terminal Emulator

Step by step "How to"
***

1. create form in index.php
2. use JS to submit the form when enter is pressed (POST REQUEST!!)
2. use JS to empty the input field and print the command above the input field
2. style it to look like a terminal
3. make a blinking cursor
6. auto scroll if input field is close to bottom of page (input field should always be visible, SCROLL WITHOUT ANIMATION)
4. create the class terminal in terminal.php

### Class structure

1. Give the class the following:

   * A property called: commands, which contains an array with all known commands [6548 => "command", 8794 => "command", 1267 => "command", ...]
   * A property called: responses, which contains an array with all responses for all commands [6548 => "response for command #6548", ...]
   * A property called: history, which contains an array with all commands and responses formulated as such ["command" => "response", ...]
   * A method that gets the command as a parameter and returns the appropriate response (if applicable, after executing the command)
   * A method that adds the current command-response combo to the list of previous commands (history) and saves / updates the list in the $_COOKIE global


### index.php structure

**Do the following at the top of the page!**

1. Check if a command has been executed or if this is first load
2. If a command has been executed:
   * Get it from $_POST
   * Execute the class method that executes the command
   * Either make sure that first class method also saves the command, or execute the second method
   * Save the returned result of the command in a variable
   * Save the full history of the terminal (taken from the class) in a variable




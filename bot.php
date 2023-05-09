<?php
include __DIR__.'/vendor/autoload.php';
$discord = new \Discord\Discord([
    'token' => 'TOKEN_NEEDS_TO_GO_HERE', //The token can't exist here publicly, looking into how to hide this variable.
]); //Initializing the bot here
$discord->on('ready', function ($discord) {
    echo "Ready to read, readers?", PHP_EOL;
 //Successful initialization and now awaiting input
    //Unsure if using PHP is ideal for this bot, potentially looking into Python
 $discord->on('message', function ($message) {
       echo "Receiving correspondence from {$message->author->username}: {$message->content}", PHP_EOL;
   }); //Input received, displaying for to show it has properly read everything,
}); //Not sure where in this to add the list generation
$discord->run(); //Not sure
?>

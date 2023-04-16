<?php
include __DIR__.'/vendor/autoload.php';
$discord = new \Discord\Discord([
    'token' => 'MTA5NzAyNjM3MzI3MDM4ODgyNg.Ga6i0X.e6KtcWWEsuxWsqOY4ZET4urwwpAJTs1VdaxZLY',
]); //Initializing the bot here
$discord->on('ready', function ($discord) {
    echo "Ready to read, readers?", PHP_EOL;
 //Successful initialization and now awaiting input
 $discord->on('message', function ($message) {
       echo "Receiving correspondence from {$message->author->username}: {$message->content}", PHP_EOL;
   }); //Input received, displaying for to show it has properly read everything,
});
$discord->run();
?>

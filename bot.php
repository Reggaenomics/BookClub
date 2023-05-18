<?php
require_once 'config.php';
include __DIR__.'/vendor/autoload.php';

echo "Discord API Key: " . $discord_api_key . "\n";

use Discord\Discord;
use Discord\Parts\Channel\Message;

$discord = new Discord([
    'token' => $discord_api_key,
]);

$discord->on('ready', function ($discord) {
    echo "Bot is ready!", PHP_EOL;
});

$discord->on('message', function (Message $message, Discord $discord) {
    if ($message->content === '!hello') {
        $channel = $message->channel;
        $author = $message->author;

        $channel->sendMessage("Hello, {$author->username}!");
    }
});

$discord->run();
?>
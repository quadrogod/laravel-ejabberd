<?php

namespace Ejabberd\Commands;

use Ejabberd\Commands\Contracts\IEjabberdCommand;

class UnsubscribeRoom implements IEjabberdCommand
{
    private $user;
    private $room;

    public function __construct($user, $room)
    {
        $this->user = $user;
        $this->room = $room;
    }

    public function getCommandName()
    {
        return 'unsubscribe_room';
    }

    public function getCommandData()
    {
        /**
         * {
         * "user": "tom@localhost/dummy",
         * "room": "room1@conference.localhost",
         * }
         */
        //
        return [
            'user' => $this->user,
            'room' => $this->room,
        ];
    }
}

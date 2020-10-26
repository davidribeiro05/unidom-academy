<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * Class RoomForUser
 * @package Source\Models
 */
class RoomForUser extends Model
{
    /**
     * RoomForUser constructor.
     */
    public function __construct()
    {
        parent::__construct("roomforuser", ["id"], ["user", "room"]);
    }

    /**
     * @param int $user
     * @param int $room
     * @return $this
     */
    public function bootstrap(int $user, int $room)
    {
        $this->user = $user;
        $this->room = $room;
        return $this;
    }

    /**
     * @return User|null
     */
    public function user(): ?User
    {
        if (!empty($this->user)) {
            return (new User())->findById($this->user);
        }
        return null;
    }

    /**
     * @return Room|null
     */
    public function room(): ?Room
    {
        if (!empty($this->room)) {
            return (new Room())->findById($this->room);
        }
        return null;
    }

    public function innerFind(array $innerQuery, string $columns = "*")
    {
        if ($innerQuery) {
            $innerQuery = implode(" ", $innerQuery);
            $this->query = "SELECT {$columns} FROM " . static::$entity . $innerQuery;
            return $this;
        }

        //$this->query = "SELECT {$columns} FROM " . static::$entity;
        //return $this;
    }
}
<?php

declare(strict_types=1);

namespace Acme\Entity;

class SingleRoomEntity extends RoomEntity
{
    /** @var int */
    private $roomNumber;

    public function __construct(int $roomNumber, int $price)
    {
        $this->roomNumber = $roomNumber;
        $this->setPrice($price);
    }

    /**
     * @return int
     */
    public function getRoomNumber(): int
    {
        return $this->roomNumber;
    }
}
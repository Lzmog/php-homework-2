<?php

declare(strict_types=1);

namespace Acme\Entity;

class SingleRoomEntity extends RoomEntity
{
    private const BED_COUNT = 1;
    private const ROOM_TYPE = 'Standart';
    private const RESTROOM = true;
    private const EXTRAS = 'TV, air-conditioner';

    /** @var RoomEntity */
    private $roomInformation;

    public function __construct(int $roomNumber, int $price)
    {
        $this->setRoomInformation($roomNumber, $price);
    }

    /**
     * @return RoomEntity
     */
    public function getRoomInformation(): RoomEntity
    {
        return $this->roomInformation;
    }

    /**
     * @param int $roomNumber
     * @param int $price
     *
     * @return void
     */
    public function setRoomInformation(int $roomNumber, int $price): void
    {
        $room = new RoomEntity();

        $room->setRoomNumber($roomNumber);
        $room->setBedCount(self::BED_COUNT);
        $room->setRoomType(self::ROOM_TYPE);
        $room->setRestroom(self::RESTROOM);
        $room->setExtras(self::EXTRAS);
        $room->setPrice($price);
    }
}
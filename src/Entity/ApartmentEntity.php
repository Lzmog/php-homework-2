<?php

declare(strict_types=1);

namespace Acme\Entity;

class ApartmentEntity extends RoomEntity
{
    private const BED_COUNT = 4;
    private const ROOM_TYPE = 'Standart';
    private const RESTROOM = true;
    private const BALCONY = true;
    private const EXTRAS = 'TV, air-conditioner, refrigerator, kitchen box, mini-bar, bathtub, free Wi-fi';

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
        $room->setBalcony(self::BALCONY);
        $room->setExtras(self::EXTRAS);
        $room->setPrice($price);
    }
}
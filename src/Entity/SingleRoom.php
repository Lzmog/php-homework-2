<?php

declare(strict_types=1);

namespace Acme\Entity;

class SingleRoom extends Room
{
    private const BED_COUNT = 1;
    private const ROOM_TYPE = 'Standart';
    private const RESTROOM = true;
    private const EXTRAS = 'TV, air-conditioner';

    /** @var Room */
    private $roomInformation;

    public function __construct(int $roomNumber, int $price)
    {
        $this->setRoomInformation($roomNumber, $price);
    }

    /**
     * @return Room
     */
    public function getRoomInformation(): Room
    {
        return $this->roomInformation;
    }

    /**
     * @param int $roomNumber
     * @param int $price
     */
    public function setRoomInformation(int $roomNumber, int $price): void
    {
        $this->setRoomNumber($roomNumber);
        $this->setBedCount(self::BED_COUNT);
        $this->setRoomType(self::ROOM_TYPE);
        $this->setRestroom(self::RESTROOM);
        $this->setExtras(self::EXTRAS);
        $this->setPrice($price);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {
        return parent::__toString() . $this->getRoomNumber();
    }
}

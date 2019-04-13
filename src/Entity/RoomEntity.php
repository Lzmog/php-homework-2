<?php

declare(strict_types=1);

namespace Acme\Entity;

use Acme\Model\ReservableInterface;

class RoomEntity implements ReservableInterface
{
    /** @var int */
    private $roomNumber;

    /** @var int */
    private $bedCount;

    /** @var string */
    private $roomType;

    /** @var boolean */
    private $restroom = false;

    /** @var boolean */
    private $balcony = false;

    /** @var string */
    private $extras;

    /** @var float */
    private $price;

    /** @var array */
    private $reservations;

    /**
     * @return int
     */
    public function getRoomNumber(): int
    {
        return $this->roomNumber;
    }

    /**
     * @param int $roomNumber
     */
    public function setRoomNumber(int $roomNumber): void
    {
        $this->roomNumber = $roomNumber;
    }

    /**
     * @return int
     */
    public function getBedCount(): int
    {
        return $this->bedCount;
    }

    /**
     * @param int $bedCount
     */
    public function setBedCount(int $bedCount): void
    {
        $this->bedCount = $bedCount;
    }

    /**
     * @return string
     */
    public function getRoomType(): string
    {
        return $this->roomType;
    }

    /**
     * @param string $roomType
     */
    public function setRoomType(string $roomType): void
    {
        $this->roomType = $roomType;
    }

    /**
     * @return bool
     */
    public function isRestroom(): bool
    {
        return $this->restroom;
    }

    /**
     * @param bool $restroom
     */
    public function setRestroom(bool $restroom): void
    {
        $this->restroom = $restroom;
    }

    /**
     * @return bool
     */
    public function isBalcony(): bool
    {
        return $this->balcony;
    }

    /**
     * @param bool $balcony
     */
    public function setBalcony(bool $balcony): void
    {
        $this->balcony = $balcony;
    }

    /**
     * @return string
     */
    public function getExtras(): string
    {
        return $this->extras;
    }

    /**
     * @param string $extras
     */
    public function setExtras(string $extras): void
    {
        $this->extras = $extras;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return array
     */
    public function getReservations(): array
    {
        return $this->reservations;
    }

    /**
     * @param array $reservations
     */
    public function setReservations(array $reservations): void
    {
        $this->reservations = $reservations;
    }
}
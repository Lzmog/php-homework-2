<?php

declare(strict_types=1);

namespace Acme\Entity;

use Acme\Exception\ReservationException;
use Acme\Model\ReservableInterface;
use DateTime;

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
    private $reservations = [];

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
     * @return string
     */
    public function __toString()
    {
        return substr(strrchr(__CLASS__, "\\"), 1) . ' <strong>';
    }

    /**
     * @param ReservationEntity $reservationEntity
     * @return void
     * @throws ReservationException
     *
     */
    public function addReservation(ReservationEntity $reservationEntity): void
    {
        /** @var ReservationEntity $reservation */
        foreach ($this->reservations as $reservation) {
            if (null === $reservation->getEndDate() || null === $reservation->getStartDate()) {
                break;
            }

            if ($this->checkIfDateValid($reservation->getStartDate(), $reservation->getEndDate(), $reservationEntity->getStartDate())) {
                throw new ReservationException('Šiuo laikotarpiu esamas kambarys jau užimtas');
            }
        }

        $this->reservations[] = $reservationEntity;
    }

    /**
     * @param ReservationEntity $reservationEntity
     * @return void
     * @throws ReservationException
     *
     */
    public function removeReservation(ReservationEntity $reservationEntity): void
    {
        $data[$reservationEntity->getGuest()] = $reservationEntity;
        if (isset($data[$reservationEntity->getGuest()])) {
            unset($data[$reservationEntity->getGuest()]);
        } else {
            throw new ReservationException('Nėra jokių rezervacijų šiam naudotojui');
        }
    }

    /**
     * @param DateTime $startDate
     * @param DateTime $endDate
     * @param DateTime $bookDate
     *
     * @return bool
     */
    private function checkIfDateValid(DateTime $startDate, DateTime $endDate, DateTime $bookDate): bool
    {
        // Check that user date is between start & end
        return (($bookDate->getTimestamp() >= $startDate->getTimestamp()) && ($bookDate->getTimestamp() <= $endDate->getTimestamp()));
    }
}
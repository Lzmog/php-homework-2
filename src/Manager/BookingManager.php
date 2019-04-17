<?php

declare(strict_types=1);

namespace Acme\Manager;

use Acme\Entity\Reservation;
use Acme\Entity\Room;
use Acme\Exception\ReservationException;

class BookingManager
{
    /**
     * @param Room $roomEntity
     * @param Reservation $reservationEntity
     * @throws ReservationException
     */
    public static function bookRoom(Room $roomEntity, Reservation $reservationEntity)
    {
        $roomEntity->addReservation($reservationEntity);
        echo $roomEntity->__toString() . '</strong> successfully booked for <strong>' . $reservationEntity->__toString();
    }
}

<?php

declare(strict_types=1);

namespace Acme\Manager;

use Acme\Entity\ReservationEntity;
use Acme\Entity\RoomEntity;
use Acme\Exception\ReservationException;

class BookingManager
{
    /**
     * @param RoomEntity $roomEntity
     * @param ReservationEntity $reservationEntity
     * @throws ReservationException
     */
    public static function bookRoom(RoomEntity $roomEntity, ReservationEntity $reservationEntity)
    {
        $roomEntity->addReservation($reservationEntity);
        echo $roomEntity->__toString() . '</strong> successfully booked for <strong>' . $reservationEntity->__toString();
    }
}
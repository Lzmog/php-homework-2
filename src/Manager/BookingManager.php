<?php

declare(strict_types=1);

namespace Acme\Manager;

use Acme\Entity\ReservationEntity;
use Acme\Entity\RoomEntity;

class BookingManager
{
    /**
     * @param RoomEntity $roomEntity
     * @param ReservationEntity $reservationEntity
     */
    public static function bookRoom(RoomEntity $roomEntity, ReservationEntity $reservationEntity): void
    {
        $roomEntity->addReservation($reservationEntity);
    }
}
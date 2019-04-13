<?php

declare(strict_types=1);

namespace Acme\Model;

use Acme\Entity\ReservationEntity;

interface ReservableInterface
{
    public function addReservation(ReservationEntity $reservationEntity):void;
    public function removeReservation(ReservationEntity $reservationEntity): void;
}
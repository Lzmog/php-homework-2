<?php

declare(strict_types=1);

namespace Acme\Model;

use Acme\Entity\ReservationEntity;

interface ReservableInterface
{
    /**
     * @param ReservationEntity $reservationEntity
     *
     * @return void
     */
    public function addReservation(ReservationEntity $reservationEntity): void;

    /**
     * @param ReservationEntity $reservationEntity
     *
     * @return void
     */
    public function removeReservation(ReservationEntity $reservationEntity): void;
}
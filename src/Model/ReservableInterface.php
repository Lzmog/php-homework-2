<?php

declare(strict_types=1);

namespace Acme\Model;

use Acme\Entity\Reservation;

interface ReservableInterface
{
    /**
     * @param Reservation $reservationEntity
     *
     * @return void
     */
    public function addReservation(Reservation $reservationEntity): void;

    /**
     * @param Reservation $reservationEntity
     *
     * @return void
     */
    public function removeReservation(Reservation $reservationEntity): void;
}

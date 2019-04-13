<?php

declare(strict_types=1);

use Acme\Entity\GuestEntity;
use Acme\Entity\SingleRoomEntity;
use Acme\Entity\ReservationEntity;
use Acme\Manager\BookingManager;

require __DIR__ . '/vendor/autoload.php';

$room = new SingleRoomEntity(1408, 99);
$guest = new GuestEntity('Vardenis', 'Pavardenis');

$startDate = new DateTime('2019-04-20');
$endDate = new DateTime('2019-04-25');

$reservation = new ReservationEntity($startDate, $endDate, $guest);
BookingManager::bookRoom($room, $reservation);
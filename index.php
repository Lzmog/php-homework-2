<?php

declare(strict_types=1);

use Acme\Entity\Apartment;
use Acme\Entity\Bedroom;
use Acme\Entity\Guest;
use Acme\Entity\SingleRoom;
use Acme\Entity\Reservation;
use Acme\Manager\BookingManager;

require __DIR__ . '/vendor/autoload.php';

$room = new SingleRoom(1408, 99);
$guest = new Guest('Vardenis', 'Pavardenis');

$startDate = new DateTime('2019-04-20');
$endDate = new DateTime('2019-04-25');

$reservation = new Reservation($startDate, $endDate, $guest);
BookingManager::bookRoom($room, $reservation);

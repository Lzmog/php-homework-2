<?php

declare(strict_types=1);

use Acme\Entity\SingleRoomEntity;

require __DIR__ . '/vendor/autoload.php';

$room = new SingleRoomEntity(1408, 99);
var_dump($room);
/*
$guest = new Guest('Vardenis', 'Pavardenis');
$startDate = new \DateTime('2019-04-20');
$endDate = new \DateTime('2019-04-25');
$reservation = new Reservation($startDate, $endDate, $guest);
BookingManager::bookRoom($room, $reservation);*/
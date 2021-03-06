<?php

declare(strict_types=1);

namespace Acme\Entity;

use DateTime;

class Reservation
{
    /** @var DateTime */
    private $startDate;

    /** @var DateTime */
    private $endDate;

    /** @var Guest */
    private $guest;

    public function __construct(DateTime $startDate, DateTime $endDate, Guest $guest)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->guest = $guest;
    }

    /**
     * @return DateTime
     */
    public function getStartDate(): DateTime
    {
        return $this->startDate;
    }

    /**
     * @return DateTime
     */
    public function getEndDate(): DateTime
    {
        return $this->endDate;
    }

    /**
     * @return Guest
     */
    public function getGuest(): Guest
    {
        return $this->guest;
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {
        $startDate = date('Y-m-d', $this->getStartDate()->getTimestamp());
        $endDate = date('Y-m-d', $this->getEndDate()->getTimestamp());

        return $this->getGuest() . '</strong> from <time>' . $startDate . '</time> to <time>' . $endDate .'</time>!';
    }
}

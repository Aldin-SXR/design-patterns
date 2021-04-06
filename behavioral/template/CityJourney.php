<?php

/**
 * Go to the city.
 */
class CityJourney extends Journey
{
    protected function enjoyVacation(): string
    {
        return "Eat, drink, sight-see and take photos";
    }

    protected function buyGift(): ?string
    {
        return "Buy a gift";
    }

}
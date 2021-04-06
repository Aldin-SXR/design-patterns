<?php

/**
 * The template class.
 */
abstract class Journey
{
    /**
     * @var string[]
     */
    private array $thingsToDo = [];

    /**
     * This is the public service provided by this class and its subclasses.
     */
    final public function takeATrip(): string
    {
        $this->thingsToDo[] = $this->buyAFlight();
        $this->thingsToDo[] = $this->takePlane();
        $this->thingsToDo[] = $this->enjoyVacation();
        $buyGift = $this->buyGift();

        if ($buyGift !== null) {
            $this->thingsToDo[] = $buyGift;
        }

        $this->thingsToDo[] = $this->takePlane();

        return join("\n", $this->thingsToDo);
    }


    /**
     * Each journey type will have a different way of "enjoying" it.
     * This must be defined inside the concrete classes.
     */
    abstract protected function enjoyVacation(): string;

    /**
     * Optional method.
     */
    protected function buyGift(): ?string
    {
        return null;
    }

    /**
     * Mandatory methods.
     */
    private function buyAFlight(): string
    {
        return 'Buy a flight ticket';
    }

    private function takePlane(): string
    {
        return 'Taking the plane';
    }

    /**
     * @return string[]
     */
    public function getThingsToDo(): array
    {
        return $this->thingsToDo;
    }
}
<?php

class Club implements Comparable
{

    private int $idClub;
    private string $nomClub;
    private int $nbPoints;
    private $lesSports = array();

    /**
     * @param int $idClub
     * @param string $nomClub
     * @param int $nbPoints
     * @param array $lesSports
     */
    public function __construct(int $idClub, string $nomClub, int $nbPoints)
    {
        $this->idClub = $idClub;
        $this->nomClub = $nomClub;
        $this->nbPoints = $nbPoints;
    }

    /**
     * @return int
     */
    public function getIdClub(): int
    {
        return $this->idClub;
    }

    /**
     * @return string
     */
    public function getNomClub(): string
    {
        return $this->nomClub;
    }

    /**
     * @return int
     */
    public function getNbPoints(): int
    {
        return $this->nbPoints;
    }

    /**
     * @return array
     */
    public function getLesSports(): array
    {
        return $this->lesSports;
    }

    public function AjouterSport(Sport $sport)
    {
        $this->lesSports = $sport;
    }

    public function compareTo()
    {
        // TODO: Implement compareTo() method.
    }
}
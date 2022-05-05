<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

class Entreprise
{
    /**
     * @ORM\Column(type="string")
     */
    private string $designation;

    /**
     * @return mixed
     */
    public function getDesignation():string
    {
        return $this->designation;
    }

    /**
     * @param mixed $designation
     */
    public function setDesignation(string $designation): void
    {
        $this->designation = $designation;
    }
    /**
     * @ORM\Column(type="string")
     */

}
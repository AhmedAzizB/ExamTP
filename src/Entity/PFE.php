<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

class PFE
{
    /**
     * @ORM\Column(type="string")
     */
    private string $titre;
    /**
     * @ORM\Column(type="string")
     */
    private string $nomEtudiant;
    /**
     * @ORM\ManyToOne(targetEntity=Entreprise::class, inversedBy="personnes")
     * @ORM\JoinColumn(name=« designation",referencedColumnName="designation")
     */
    private string $entreprise;

    /**
     * @return mixed
     */
    public function getTitre():string
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getNomEtudiant():string
    {
        return $this->nomEtudiant;
    }

    /**
     * @param mixed $nomEtudiant
     */
    public function setNomEtudiant(string $nomEtudiant): void
    {
        $this->nomEtudiant = $nomEtudiant;
    }

    /**
     * @return mixed
     */
    public function getEntreprise():string
    {
        return $this->entreprise;
    }

    /**
     * @param mixed $entreprise
     */
    public function setEntreprise($entreprise): void
    {
        $this->entreprise = $entreprise;
    }
}
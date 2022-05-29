<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 */
class Produit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $Libelle;

    /**
     * @ORM\Column(type="float")
     */
    private $Prix;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Description;

    /**
     * @ORM\Column(type="integer")
     */
    private $QteStock;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, mappedBy="idproduit")
     */
    private $iduser;



    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Image;

    /**
     * @ORM\ManyToOne(targetEntity=Categorie::class, inversedBy="produits")
     */
    private $categorie;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->Libelle;
    }

    public function setLibelle(string $Libelle): self
    {
        $this->Libelle = $Libelle;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->Prix;
    }

    public function setPrix(float $Prix): self
    {
        $this->Prix = $Prix;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getQteStock(): ?int
    {
        return $this->QteStock;
    }

    public function setQteStock(int $QteStock): self
    {
        $this->QteStock = $QteStock;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getIduser(): Collection
    {
        return $this->iduser;
    }

    public function addIduser(User $iduser): self
    {
        if (!$this->iduser->contains($iduser)) {
            $this->iduser[] = $iduser;
            $iduser->addIdproduit($this);
        }

        return $this;
    }

    public function removeIduser(User $iduser): self
    {
        if ($this->iduser->removeElement($iduser)) {
            $iduser->removeIdproduit($this);
        }

        return $this;
    }



    public function getImage(): ?string
    {
        return $this->Image;
    }

    public function setImage(string $Image): self
    {
        $this->Image = $Image;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }}

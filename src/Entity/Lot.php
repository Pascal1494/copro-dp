<?php

namespace App\Entity;

use CreatedAtService;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\LotRepository;
use App\Entity\Trait\CreatedAtTrait;

#[ORM\Entity(repositoryClass: LotRepository::class)]
class Lot
{

    use CreatedAtTrait;

    private $createdAtService;
    private $created_at;


    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 3)]
    private ?string $LotNumber = null;

    #[ORM\Column(length: 2)]
    private ?string $etage = null;

    #[ORM\Column(length: 10)]
    private ?string $batiment = null;

    #[ORM\Column(length: 255)]
    private ?string $slug = null;

    public function __construct(CreatedAtService $createdAtService)
    {
        $this->createdAtService = $createdAtService;
        $this->created_at = $this->createdAtService->createdAt();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLotNumber(): ?string
    {
        return $this->LotNumber;
    }

    public function setLotNumber(string $LotNumber): self
    {
        $this->LotNumber = $LotNumber;

        return $this;
    }

    public function getEtage(): ?string
    {
        return $this->etage;
    }

    public function setEtage(string $etage): self
    {
        $this->etage = $etage;

        return $this;
    }

    public function getBatiment(): ?string
    {
        return $this->batiment;
    }

    public function setBatiment(string $batiment): self
    {
        $this->batiment = $batiment;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }
}
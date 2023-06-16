<?php

namespace App\Entity;

use App\Repository\PositionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PositionRepository::class)]
class Position
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $position = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column(length: 255)]
    private ?string $slug = null;

    #[ORM\ManyToOne(targetEntity: self::class, inversedBy: 'positions')]
    private ?self $FloorPosition = null;

    #[ORM\OneToMany(mappedBy: 'FloorPosition', targetEntity: self::class)]
    private Collection $positions;

    public function __construct()
    {
        $this->positions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(string $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): self
    {
        $this->created_at = $created_at;

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

    public function getFloorPosition(): ?self
    {
        return $this->FloorPosition;
    }

    public function setFloorPosition(?self $FloorPosition): self
    {
        $this->FloorPosition = $FloorPosition;

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getPositions(): Collection
    {
        return $this->positions;
    }

    public function addPosition(self $position): self
    {
        if (!$this->positions->contains($position)) {
            $this->positions->add($position);
            $position->setFloorPosition($this);
        }

        return $this;
    }

    public function removePosition(self $position): self
    {
        if ($this->positions->removeElement($position)) {
            // set the owning side to null (unless already changed)
            if ($position->getFloorPosition() === $this) {
                $position->setFloorPosition(null);
            }
        }

        return $this;
    }
}

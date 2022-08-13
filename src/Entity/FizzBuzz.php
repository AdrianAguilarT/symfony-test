<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FizzBuzzRepository::class)
 */
class FizzBuzz
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $initNumber;

    /**
     * @ORM\Column(type="integer")
     */
    private $endNumber;

    /**
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="string")
     */
    private $fizzBuzz;

    public function __construct()
    {
        $this->setCreatedAt(new \DateTime());
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInitNumber(): ?int
    {
        return $this->initNumber;
    }

    public function setInitNumber(int $initNumber): self
    {
        $this->initNumber = $initNumber;

        return $this;
    }

    public function getEndNumber(): ?int
    {
        return $this->endNumber;
    }

    public function setEndNumber(int $endNumber): self
    {
        $this->endNumber = $endNumber;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getFizzBuzz(): ?string
    {
        return $this->fizzBuzz;
    }

    public function setFizzBuzz(string $fizzBuzz): self
    {
        $this->fizzBuzz = $fizzBuzz;

        return $this;
    }
}
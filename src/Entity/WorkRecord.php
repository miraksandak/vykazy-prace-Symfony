<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Validator\TimeInterval;

/**
 * @ORM\Entity(repositoryClass=WorkRecordRepository::class)
 * @TimeInterval()
 */
class WorkRecord
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $startTime;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $endTime;

    /**
     * @ORM\Column(type="integer")
     */
    private $duration;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $department;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeOfWork;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="workRecords")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStartTime(): ?\DateTimeInterface
    {
        return $this->startTime;
    }

    public function setStartTime(\DateTimeInterface $startTime): self
    {
        $this->startTime = $startTime;

        return $this;
    }

    public function getEndTime(): ?\DateTimeInterface
    {
        return $this->endTime;
    }

    public function setEndTime(\DateTimeInterface $endTime): self
    {
        $this->endTime = $endTime;

        return $this;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getDepartment(): ?string
    {
        return $this->department;
    }

    public function setDepartment(string $department): self
    {
        $this->department = $department;

        return $this;
    }

    public function getTypeOfWork(): ?string
    {
        return $this->typeOfWork;
    }

    public function setTypeOfWork(string $typeOfWork): self
    {
        $this->typeOfWork = $typeOfWork;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function isEditableBy(?User $user): bool
    {
        if ($user === null) {
            return false;
        }
        if ($user->isAdmin()) {
            return true;
        }
        if ($user->getId() !== $this->user->getId()) {
            return false;
        }
        $currentDate = new \DateTime();
        $recordDate = $this->getStartTime();
        
        $diff = $currentDate->diff($recordDate);
        $daysDiff = $diff->days;
        
        if ($daysDiff > 5 && !$user->isAdmin()) {
            return false;
        }
        
        return true;
    }
}

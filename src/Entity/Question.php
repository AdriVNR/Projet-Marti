<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuestionRepository")
 * @UniqueEntity("code") 
 */
class Question
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=191)
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=191, nullable=true)
     */
    private $layout;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $duplicable;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Response")
     */
    private $responses;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Reporting", mappedBy="question")
     */
    private $reportings;

    public function __construct()
    {
        $this->responses = new ArrayCollection();
        $this->reportings = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getLayout(): ?string
    {
        return $this->layout;
    }

    public function setLayout(?string $layout): self
    {
        $this->layout = $layout;

        return $this;
    }

    public function getDuplicable(): ?bool
    {
        return $this->duplicable;
    }

    public function setDuplicable(?bool $duplicable): self
    {
        $this->duplicable = $duplicable;

        return $this;
    }

    /**
     * @return Collection|Response[]
     */
    public function getResponses(): Collection
    {
        return $this->responses;
    }

    public function addResponse(Response $response): self
    {
        if (!$this->responses->contains($response)) {
            $this->responses[] = $response;
        }

        return $this;
    }

    public function removeResponse(Response $response): self
    {
        if ($this->responses->contains($response)) {
            $this->responses->removeElement($response);
        }

        return $this;
    }

    /**
     * @return Collection|Reporting[]
     */
    public function getReportings(): Collection
    {
        return $this->reportings;
    }

    public function addReporting(Reporting $reporting): self
    {
        if (!$this->reportings->contains($reporting)) {
            $this->reportings[] = $reporting;
            $reporting->setQuestion($this);
        }

        return $this;
    }

    public function removeReporting(Reporting $reporting): self
    {
        if ($this->reportings->contains($reporting)) {
            $this->reportings->removeElement($reporting);
            // set the owning side to null (unless already changed)
            if ($reporting->getQuestion() === $this) {
                $reporting->setQuestion(null);
            }
        }

        return $this;
    }
}

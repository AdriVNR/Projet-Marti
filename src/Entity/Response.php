<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use App\Service\TranslationService;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ResponseRepository")
 * @UniqueEntity("code") 
 */
class Response
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=191, nullable=true)
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=191, nullable=true)
     */
    private $trig;

    /**
     * @ORM\Column(type="string", length=191, nullable=true)
     */
    private $value;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Question")
     */
    private $complementary_questions;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Reporting", mappedBy="response", orphanRemoval=true)
     */
    private $reportings;

    public function __construct()
    {
        $this->complementary_questions = new ArrayCollection();
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

    public function getTrig(): ?string
    {
        return $this->trig;
    }

    public function setTrig(?string $trig): self
    {
        $this->trig = $trig;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return Collection|Question[]
     */
    public function getComplementaryQuestions(): Collection
    {
        return $this->complementary_questions;
    }

    public function addComplementaryQuestion(Question $complementaryQuestion): self
    {
        if (!$this->complementary_questions->contains($complementaryQuestion)) {
            $this->complementary_questions[] = $complementaryQuestion;
        }

        return $this;
    }

    public function removeComplementaryQuestion(Question $complementaryQuestion): self
    {
        if ($this->complementary_questions->contains($complementaryQuestion)) {
            $this->complementary_questions->removeElement($complementaryQuestion);
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
            $reporting->setResponse($this);
        }

        return $this;
    }

    public function removeReporting(Reporting $reporting): self
    {
        if ($this->reportings->contains($reporting)) {
            $this->reportings->removeElement($reporting);
            // set the owning side to null (unless already changed)
            if ($reporting->getResponse() === $this) {
                $reporting->setResponse(null);
            }
        }

        return $this;
    }
}

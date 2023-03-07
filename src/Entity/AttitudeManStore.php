<?php

namespace App\Entity;

use App\Repository\AttitudeManStoreRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AttitudeManStoreRepository::class)
 */
class AttitudeManStore
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nomBoutique;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titreArticle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $discount;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prixBefore;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photoDetail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $descriptionCourte;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionLongue;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $infoVendeur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $note;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $excellent;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $bien;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $moyen;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $mauvais;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $terrible;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $clientIdentite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titreAvis;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $taille1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $taille2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $taille3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $taille4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $taille5;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $taille6;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $taille7;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $taille8;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $taille9;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $taille10;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $avisClient;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $evaluation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $noteClient;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photoClient;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $picClient;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photoClient2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dateAvis;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomBoutique(): ?string
    {
        return $this->nomBoutique;
    }

    public function setNomBoutique(?string $nomBoutique): self
    {
        $this->nomBoutique = $nomBoutique;

        return $this;
    }

    public function getTitreArticle(): ?string
    {
        return $this->titreArticle;
    }

    public function setTitreArticle(?string $titreArticle): self
    {
        $this->titreArticle = $titreArticle;

        return $this;
    }

    public function getDiscount(): ?string
    {
        return $this->discount;
    }

    public function setDiscount(?string $discount): self
    {
        $this->discount = $discount;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(?string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getPrixBefore(): ?string
    {
        return $this->prixBefore;
    }

    public function setPrixBefore(?string $prixSale): self
    {
        $this->prixBefore = $prixSale;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getPhotoDetail(): ?string
    {
        return $this->photoDetail;
    }

    public function setPhotoDetail(?string $photoDetail): self
    {
        $this->photoDetail = $photoDetail;

        return $this;
    }

    public function getDescriptionCourte(): ?string
    {
        return $this->descriptionCourte;
    }

    public function setDescriptionCourte(?string $descriptionCourte): self
    {
        $this->descriptionCourte = $descriptionCourte;

        return $this;
    }

    public function getDescriptionLongue(): ?string
    {
        return $this->descriptionLongue;
    }

    public function setDescriptionLongue(?string $descriptionLongue): self
    {
        $this->descriptionLongue = $descriptionLongue;

        return $this;
    }

    public function getInfoVendeur(): ?string
    {
        return $this->infoVendeur;
    }

    public function setInfoVendeur(?string $infoVendeur): self
    {
        $this->infoVendeur = $infoVendeur;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getExcellent(): ?int
    {
        return $this->excellent;
    }

    public function setExcellent(?int $excellent): self
    {
        $this->excellent = $excellent;

        return $this;
    }

    public function getBien(): ?int
    {
        return $this->bien;
    }

    public function setBien(?int $bien): self
    {
        $this->bien = $bien;

        return $this;
    }

    public function getMoyen(): ?int
    {
        return $this->moyen;
    }

    public function setMoyen(?int $moyen): self
    {
        $this->moyen = $moyen;

        return $this;
    }

    public function getMauvais(): ?int
    {
        return $this->mauvais;
    }

    public function setMauvais(?int $mauvais): self
    {
        $this->mauvais = $mauvais;

        return $this;
    }

    public function getTerrible(): ?int
    {
        return $this->terrible;
    }

    public function setTerrible(?int $terrible): self
    {
        $this->terrible = $terrible;

        return $this;
    }

    public function getClientIdentite(): ?string
    {
        return $this->clientIdentite;
    }

    public function setClientIdentite(?string $clientIdentite): self
    {
        $this->clientIdentite = $clientIdentite;

        return $this;
    }

    public function getTitreAvis(): ?string
    {
        return $this->titreAvis;
    }

    public function setTitreAvis(?string $titreAvis): self
    {
        $this->titreAvis = $titreAvis;

        return $this;
    }

    public function getTaille1(): ?string
    {
        return $this->taille1;
    }

    public function setTaille1(?string $taille1): self
    {
        $this->taille1 = $taille1;

        return $this;
    }

    public function getTaille2(): ?string
    {
        return $this->taille2;
    }

    public function setTaille2(?string $taille2): self
    {
        $this->taille2 = $taille2;

        return $this;
    }

    public function getTaille3(): ?string
    {
        return $this->taille3;
    }

    public function setTaille3(?string $taille3): self
    {
        $this->taille3 = $taille3;

        return $this;
    }

    public function getTaille4(): ?string
    {
        return $this->taille4;
    }

    public function setTaille4(?string $taille4): self
    {
        $this->taille4 = $taille4;

        return $this;
    }

    public function getTaille5(): ?string
    {
        return $this->taille5;
    }

    public function setTaille5(?string $taille5): self
    {
        $this->taille5 = $taille5;

        return $this;
    }

    public function getTaille6(): ?string
    {
        return $this->taille6;
    }

    public function setTaille6(?string $taille6): self
    {
        $this->taille6 = $taille6;

        return $this;
    }

    public function getTaille7(): ?string
    {
        return $this->taille7;
    }

    public function setTaille7(?string $taille7): self
    {
        $this->taille7 = $taille7;

        return $this;
    }

    public function getTaille8(): ?string
    {
        return $this->taille8;
    }

    public function setTaille8(?string $taille8): self
    {
        $this->taille8 = $taille8;

        return $this;
    }

    public function getTaille9(): ?string
    {
        return $this->taille9;
    }

    public function setTaille9(?string $taille9): self
    {
        $this->taille9 = $taille9;

        return $this;
    }

    public function getTaille10(): ?string
    {
        return $this->taille10;
    }

    public function setTaille10(?string $taille10): self
    {
        $this->taille10 = $taille10;

        return $this;
    }

    public function getAvisClient(): ?string
    {
        return $this->avisClient;
    }

    public function setAvisClient(?string $avisClient): self
    {
        $this->avisClient = $avisClient;

        return $this;
    }

    public function getEvaluation(): ?int
    {
        return $this->evaluation;
    }

    public function setEvaluation(?int $evaluation): self
    {
        $this->evaluation = $evaluation;

        return $this;
    }

    public function getNoteClient(): ?string
    {
        return $this->noteClient;
    }

    public function setNoteClient(?string $noteClient): self
    {
        $this->noteClient = $noteClient;

        return $this;
    }

    public function getPhotoClient(): ?string
    {
        return $this->photoClient;
    }

    public function setPhotoClient(?string $photoClient): self
    {
        $this->photoClient = $photoClient;

        return $this;
    }

    public function getPicClient(): ?string
    {
        return $this->picClient;
    }

    public function setPicClient(?string $picClient): self
    {
        $this->picClient = $picClient;

        return $this;
    }

    public function getPhotoClient2(): ?string
    {
        return $this->photoClient2;
    }

    public function setPhotoClient2(?string $photoClient2): self
    {
        $this->photoClient2 = $photoClient2;

        return $this;
    }

    public function getDateAvis(): ?string
    {
        return $this->dateAvis;
    }

    public function setDateAvis(?string $dateAvis): self
    {
        $this->dateAvis = $dateAvis;

        return $this;
    }
}

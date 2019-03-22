<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticleIT
 *
 * @ORM\Table(name="article_it")
 * @ORM\Entity(repositoryClass="EntityBundle\Repository\ArticleITRepository")
 */
class ArticleIT
{    /**
 * @var int
 *
 * @ORM\Column(name="id", type="integer")
 * @ORM\Id
 * @ORM\GeneratedValue(strategy="AUTO")
 */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;



    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255)
     */
    private $photo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="CategoryIT")
     * @ORM\JoinColumn(name="Categ_id",referencedColumnName="id")
     */
    private $Categ;


    /**
     * @ORM\ManyToOne(targetEntity="SubCategArticle")
     * @ORM\JoinColumn(name="subCateg_id",referencedColumnName="id")
     */
    private $SubCateg;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param string $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getSubCateg()
    {
        return $this->SubCateg;
    }

    /**
     * @param mixed $SubCateg
     */
    public function setSubCateg($SubCateg)
    {
        $this->SubCateg = $SubCateg;
    }

    /**
     * @return mixed
     */
    public function getCateg()
    {
        return $this->Categ;
    }

    /**
     * @param mixed $Categ
     */
    public function setCateg($Categ)
    {
        $this->Categ = $Categ;
    }

}


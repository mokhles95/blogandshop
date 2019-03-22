<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Table(name="comments")
 * @ORM\Entity(repositoryClass="EntityBundle\Repository\CommentsRepository")
 */
class Comments
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id",referencedColumnName="id")
     */
    private $idUser;

    /**
     * @ORM\ManyToOne(targetEntity="AuthorizedComments")
     * @ORM\JoinColumn(name="AuthorizedComment_id",referencedColumnName="id")
     */
    private $idAuthorizedComment;

    /**
     * @ORM\ManyToOne(targetEntity="Article")
     * @ORM\JoinColumn(name="article_id",referencedColumnName="id")
     */
    private $idArticle;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return Comments
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return int
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idAuthorizedComment
     *
     * @param integer $idAuthorizedComment
     *
     * @return Comments
     */
    public function setIdAuthorizedComment($idAuthorizedComment)
    {
        $this->idAuthorizedComment = $idAuthorizedComment;

        return $this;
    }

    /**
     * Get idAuthorizedComment
     *
     * @return int
     */
    public function getIdAuthorizedComment()
    {
        return $this->idAuthorizedComment;
    }

    /**
     * Set idArticle
     *
     * @param integer $idArticle
     *
     * @return Comments
     */
    public function setIdArticle($idArticle)
    {
        $this->idArticle = $idArticle;

        return $this;
    }

    /**
     * Get idArticle
     *
     * @return int
     */
    public function getIdArticle()
    {
        return $this->idArticle;
    }
}


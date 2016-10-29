<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 28.10.16
 * Time: 12:08
 */

namespace BooksBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Book entity
 *
 * @ORM\Entity
 * @ORM\Table(name="book")
 */
class Book
{
    /**
     * @var integer
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime",nullable=true, name="updated_at")
     */
    private $updatedAt;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime",nullable=true, name="created_at")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="string",name="name", nullable=true)
     *
     * Nazvanie
     */
    private $name;

    /**
     * @ORM\Column(type="string",name="publication_year", nullable=true)
     *
     * God izdaniya
     */
    private $publicationYear;

    /**
     * @ORM\Column(type="string",name="author", nullable=true)
     *
     * Avtor (v ideale eto doljna bit eshe odna sushnost pridjoinenaya kak manyToMany(nu i togda pole doljno nazivatsya ne author, a authors)
     */
    private $author;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="books")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Book
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Book
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Book
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set publicationYear
     *
     * @param string $publicationYear
     * @return Book
     */
    public function setPublicationYear($publicationYear)
    {
        $this->publicationYear = $publicationYear;

        return $this;
    }

    /**
     * Get publicationYear
     *
     * @return string 
     */
    public function getPublicationYear()
    {
        return $this->publicationYear;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return Book
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set category
     *
     * @param \BooksBundle\Entity\Category $category
     * @return Book
     */
    public function setCategory(\BooksBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \BooksBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }
}

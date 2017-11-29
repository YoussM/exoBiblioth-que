<?php
// creat class
class Book
{
    protected $id_book;
    protected $id_user;
    protected $title;
    protected $author;
    protected $date_of_publication;
    protected $category;
    protected $availability;
    protected $abstract;



    // creat function construct
    public function __construct($data)
    {
        $this->hydrate($data);
    }
    // creat function hydrate and while
    public function hydrate(array $book)
    {
        foreach ($book as $key => $value) {
            $method= "set".ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    /**
     * Get the value of Id Book
     *
     * @return mixed
     */
    public function getIdBook()
    {
        return $this->id_book;
    }

    /**
     * Set the value of Id Book
     *
     * @param mixed id_book
     *
     * @return self
     */
    public function setIdBook($id_book)
    {
        $this->id_book = $id_book;

        return $this;
    }

    /**
     * Get the value of Id User
     *
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * Set the value of Id User
     *
     * @param mixed id_user
     *
     * @return self
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * Get the value of Title
     *
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of Title
     *
     * @param mixed title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of Author
     *
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of Author
     *
     * @param mixed author
     *
     * @return self
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of Date Of Publication
     *
     * @return mixed
     */
    public function getDateOfPublication()
    {
        return $this->date_of_publication;
    }

    /**
     * Set the value of Date Of Publication
     *
     * @param mixed date_of_publication
     *
     * @return self
     */
    public function setDateOfPublication($date_of_publication)
    {
        $this->date_of_publication = $date_of_publication;

        return $this;
    }

    /**
     * Get the value of Category
     *
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of Category
     *
     * @param mixed category
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get the value of Availability
     *
     * @return mixed
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Set the value of Availability
     *
     * @param mixed availability
     *
     * @return self
     */
    public function setAvailability($availability)
    {
        $this->availability = $availability;

        return $this;
    }

    /**
     * Get the value of Abstract
     *
     * @return mixed
     */
    public function getAbstract()
    {
        return $this->abstract;
    }

    /**
     * Set the value of Abstract
     *
     * @param mixed abstract
     *
     * @return self
     */
    public function setAbstract($abstract)
    {
        $this->abstract = $abstract;

        return $this;
    }
}

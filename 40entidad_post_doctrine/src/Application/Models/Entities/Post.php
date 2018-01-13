<?php
namespace Application\Models\Entities;

/**
 * @Entity(repositoryClass="Application\Models\Repositories\PostRepository")
 * @Table(name="posts")
 */
class Post
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     * @var int
     */
    protected $id;

    /**
     * @column(type="string")
     * @var
     */
    protected $title;

    /**
     * @column(type="string")
     * @var
     */
    protected $body;

    /**
     * @Column(type="datetime")
     */
    protected $created;

    /**
     * @ManyToOne (targetEntity="User", inversedBy="posts")
     * @var user
     */
    protected $user;

    public function __construct()
    {
        $this->created = new \DateTime("now");
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }


    /**
     * @return user
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param user $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }


}
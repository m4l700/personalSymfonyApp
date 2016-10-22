<?php

namespace Dh\BlogBundle\Entity;

/**
 * BlogPostImageUrl
 */
class BlogPostImageUrl
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $imgUrl;


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
     * Set imgUrl
     *
     * @param string $imgUrl
     *
     * @return BlogPostImageUrl
     */
    public function setImgUrl($imgUrl)
    {
        $this->imgUrl = $imgUrl;

        return $this;
    }

    /**
     * Get imgUrl
     *
     * @return string
     */
    public function getImgUrl()
    {
        return $this->imgUrl;
    }
}


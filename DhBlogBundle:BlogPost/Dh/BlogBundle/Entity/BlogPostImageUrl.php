<?php

namespace Dh\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BlogPostImageUrl
 *
 * @ORM\Table(name="blog_post_image_url")
 * @ORM\Entity(repositoryClass="Dh\BlogBundle\Repository\BlogPostImageUrlRepository")
 */
class BlogPostImageUrl
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="img_url", type="string", length=255, nullable=true)
     */
    private $imgUrl;


}


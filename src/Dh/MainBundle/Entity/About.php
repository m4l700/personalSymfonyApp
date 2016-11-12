<?php

namespace Dh\MainBundle\Entity;

/**
 * About
 */
class About
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $intro;

    /**
     * @var string
     */
    private $maintext;

    /**
     * @var string
     */
    private $pdflinkcv;


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
     * Set title
     *
     * @param string $title
     *
     * @return About
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set intro
     *
     * @param string $intro
     *
     * @return About
     */
    public function setIntro($intro)
    {
        $this->intro = $intro;

        return $this;
    }

    /**
     * Get intro
     *
     * @return string
     */
    public function getIntro()
    {
        return $this->intro;
    }

    /**
     * Set maintext
     *
     * @param string $maintext
     *
     * @return About
     */
    public function setMaintext($maintext)
    {
        $this->maintext = $maintext;

        return $this;
    }

    /**
     * Get maintext
     *
     * @return string
     */
    public function getMaintext()
    {
        return $this->maintext;
    }

    /**
     * Set pdflinkcv
     *
     * @param string $pdflinkcv
     *
     * @return About
     */
    public function setPdflinkcv($pdflinkcv)
    {
        $this->pdflinkcv = $pdflinkcv;

        return $this;
    }

    /**
     * Get pdflinkcv
     *
     * @return string
     */
    public function getPdflinkcv()
    {
        return $this->pdflinkcv;
    }
}


<?php

namespace AppBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * Usuario
 */
class Usuario extends BaseUser
{
    /**
     * @var int
     */
    protected $id;


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
     * @var string
     */
    private $pathFoto;

    /**
     * @var string
     */
    private $bio;


    /**
     * Set pathFoto
     *
     * @param string $pathFoto
     *
     * @return Usuario
     */
    public function setPathFoto($pathFoto)
    {
        $this->pathFoto = $pathFoto;

        return $this;
    }

    /**
     * Get pathFoto
     *
     * @return string
     */
    public function getPathFoto()
    {
        return $this->pathFoto;
    }

    /**
     * Get enabled
     *
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set bio
     *
     * @param string $bio
     *
     * @return Usuario
     */
    public function setBio($bio)
    {
        $this->bio = $bio;

        return $this;
    }

    /**
     * Get bio
     *
     * @return string
     */
    public function getBio()
    {
        return $this->bio;
    }
}

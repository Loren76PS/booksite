<?php

namespace AppBundle\Entity;

/**
 * Coleccion
 */
class Coleccion
{
    /**
     * @var integer
     */
    private $idColeccion;

    /**
     * @var integer
     */
    private $libroIdLibro;

    /**
     * @var integer
     */
    private $usuarioId;


    /**
     * Get idColeccion
     *
     * @return integer
     */
    public function getIdColeccion()
    {
        return $this->idColeccion;
    }

    /**
     * Set libroIdLibro
     *
     * @param integer $libroIdLibro
     *
     * @return Coleccion
     */
    public function setLibroIdLibro($libroIdLibro)
    {
        $this->libroIdLibro = $libroIdLibro;

        return $this;
    }

    /**
     * Get libroIdLibro
     *
     * @return integer
     */
    public function getLibroIdLibro()
    {
        return $this->libroIdLibro;
    }

    /**
     * Set usuarioId
     *
     * @param integer $usuarioId
     *
     * @return Coleccion
     */
    public function setUsuarioId($usuarioId)
    {
        $this->usuarioId = $usuarioId;

        return $this;
    }

    /**
     * Get usuarioId
     *
     * @return integer
     */
    public function getUsuarioId()
    {
        return $this->usuarioId;
    }
}

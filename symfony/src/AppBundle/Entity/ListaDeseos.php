<?php

namespace AppBundle\Entity;

/**
 * ListaDeseos
 */
class ListaDeseos
{
    /**
     * @var integer
     */
    private $idDeseo;

    /**
     * @var integer
     */
    private $libroIdLibro;

    /**
     * @var integer
     */
    private $usuarioId;


    /**
     * Get idDeseo
     *
     * @return integer
     */
    public function getIdDeseo()
    {
        return $this->idDeseo;
    }

    /**
     * Set libroIdLibro
     *
     * @param integer $libroIdLibro
     *
     * @return ListaDeseos
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
     * @return ListaDeseos
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

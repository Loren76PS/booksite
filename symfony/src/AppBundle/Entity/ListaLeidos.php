<?php

namespace AppBundle\Entity;

/**
 * ListaLeidos
 */
class ListaLeidos
{
    /**
     * @var integer
     */
    private $idLeido;

    /**
     * @var integer
     */
    private $libroIdLibro;

    /**
     * @var integer
     */
    private $usuarioId;


    /**
     * Get idLeido
     *
     * @return integer
     */
    public function getIdLeido()
    {
        return $this->idLeido;
    }

    /**
     * Set libroIdLibro
     *
     * @param integer $libroIdLibro
     *
     * @return ListaLeidos
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
     * @return ListaLeidos
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

<?php

namespace AppBundle\Entity;

/**
 * Recomendacion
 */
class Recomendacion
{
    /**
     * @var integer
     */
    private $idRecomendacion;

    /**
     * @var integer
     */
    private $libroIdLibro;

    /**
     * @var integer
     */
    private $usuarioRecomienda;

    /**
     * @var integer
     */
    private $usuarioEsrecomendado;


    /**
     * Get idRecomendacion
     *
     * @return integer
     */
    public function getIdRecomendacion()
    {
        return $this->idRecomendacion;
    }

    /**
     * Set libroIdLibro
     *
     * @param integer $libroIdLibro
     *
     * @return Recomendacion
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
     * Set usuarioRecomienda
     *
     * @param integer $usuarioRecomienda
     *
     * @return Recomendacion
     */
    public function setUsuarioRecomienda($usuarioRecomienda)
    {
        $this->usuarioRecomienda = $usuarioRecomienda;

        return $this;
    }

    /**
     * Get usuarioRecomienda
     *
     * @return integer
     */
    public function getUsuarioRecomienda()
    {
        return $this->usuarioRecomienda;
    }

    /**
     * Set usuarioEsrecomendado
     *
     * @param integer $usuarioEsrecomendado
     *
     * @return Recomendacion
     */
    public function setUsuarioEsrecomendado($usuarioEsrecomendado)
    {
        $this->usuarioEsrecomendado = $usuarioEsrecomendado;

        return $this;
    }

    /**
     * Get usuarioEsrecomendado
     *
     * @return integer
     */
    public function getUsuarioEsrecomendado()
    {
        return $this->usuarioEsrecomendado;
    }
}

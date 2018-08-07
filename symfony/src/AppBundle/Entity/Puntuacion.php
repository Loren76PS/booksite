<?php

namespace AppBundle\Entity;

/**
 * Puntuacion
 */
class Puntuacion
{
    /**
     * @var integer
     */
    private $idPuntuacion;

    /**
     * @var integer
     */
    private $libroIdLibro;

    /**
     * @var integer
     */
    private $valor;

    /**
     * @var integer
     */
    private $usuarioId;


    /**
     * Get idPuntuacion
     *
     * @return integer
     */
    public function getIdPuntuacion()
    {
        return $this->idPuntuacion;
    }

    /**
     * Set libroIdLibro
     *
     * @param integer $libroIdLibro
     *
     * @return Puntuacion
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
     * Set valor
     *
     * @param integer $valor
     *
     * @return Puntuacion
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return integer
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set usuarioId
     *
     * @param integer $usuarioId
     *
     * @return Puntuacion
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

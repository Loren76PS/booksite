<?php

namespace AppBundle\Entity;

/**
 * Libro
 */
class Libro
{
    /**
     * @var integer
     */
    private $idLibro;

    /**
     * @var string
     */
    private $isbn;

    /**
     * @var string
     */
    private $titulo;

    /**
     * @var string
     */
    private $autor;

    /**
     * @var string
     */
    private $editorial;

    /**
     * @var string
     */
    private $pathImagen;

    /**
     * @var integer
     */
    private $paginas;

    /**
     * @var integer
     */
    private $puntuacion;


    /**
     * Get idLibro
     *
     * @return integer
     */
    public function getIdLibro()
    {
        return $this->idLibro;
    }

    /**
     * Set isbn
     *
     * @param string $isbn
     *
     * @return Libro
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get isbn
     *
     * @return string
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Libro
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set autor
     *
     * @param string $autor
     *
     * @return Libro
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get autor
     *
     * @return string
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set editorial
     *
     * @param string $editorial
     *
     * @return Libro
     */
    public function setEditorial($editorial)
    {
        $this->editorial = $editorial;

        return $this;
    }

    /**
     * Get editorial
     *
     * @return string
     */
    public function getEditorial()
    {
        return $this->editorial;
    }

    /**
     * Set pathImagen
     *
     * @param string $pathImagen
     *
     * @return Libro
     */
    public function setPathImagen($pathImagen)
    {
        $this->pathImagen = $pathImagen;

        return $this;
    }

    /**
     * Get pathImagen
     *
     * @return string
     */
    public function getPathImagen()
    {
        return $this->pathImagen;
    }

    /**
     * Set paginas
     *
     * @param integer $paginas
     *
     * @return Libro
     */
    public function setPaginas($paginas)
    {
        $this->paginas = $paginas;

        return $this;
    }

    /**
     * Get paginas
     *
     * @return integer
     */
    public function getPaginas()
    {
        return $this->paginas;
    }

    /**
     * Set puntuacion
     *
     * @param integer $puntuacion
     *
     * @return Libro
     */
    public function setPuntuacion($puntuacion)
    {
        $this->puntuacion = $puntuacion;

        return $this;
    }

    /**
     * Get puntuacion
     *
     * @return integer
     */
    public function getPuntuacion()
    {
        return $this->puntuacion;
    }
}

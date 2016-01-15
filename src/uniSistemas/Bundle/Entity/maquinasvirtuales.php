<?php

namespace uniSistemas\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * maquinasvirtuales
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class maquinasvirtuales
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=50)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="IPVirtual", type="string", length=50)
     */
    private $iPVirtual;

    /**
     * @var string
     *
     * @ORM\Column(name="Tareas", type="text")
     */
    private $tareas;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="text")
     */
    private $descripcion;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return maquinasvirtuales
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set iPVirtual
     *
     * @param string $iPVirtual
     * @return maquinasvirtuales
     */
    public function setIPVirtual($iPVirtual)
    {
        $this->iPVirtual = $iPVirtual;

        return $this;
    }

    /**
     * Get iPVirtual
     *
     * @return string 
     */
    public function getIPVirtual()
    {
        return $this->iPVirtual;
    }

    /**
     * Set tareas
     *
     * @param string $tareas
     * @return maquinasvirtuales
     */
    public function setTareas($tareas)
    {
        $this->tareas = $tareas;

        return $this;
    }

    /**
     * Get tareas
     *
     * @return string 
     */
    public function getTareas()
    {
        return $this->tareas;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return maquinasvirtuales
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    /**
* @ORM\ManyToOne(targetEntity="hardware", inversedBy="hardmaqs")
*/

private $maqhard;

    /**
     * Set maqhard
     *
     * @param \uniSistemas\Bundle\Entity\hardware $maqhard
     * @return maquinasvirtuales
     */
    public function setMaqhard(\uniSistemas\Bundle\Entity\hardware $maqhard = null)
    {
        $this->maqhard = $maqhard;

        return $this;
    }

    /**
     * Get maqhard
     *
     * @return \uniSistemas\Bundle\Entity\hardware 
     */
    public function getMaqhard()
    {
        return $this->maqhard;
    }
    public function __toString() {
     return $this->nombre;}
     
     /**
* @ORM\ManyToMany(targetEntity="software", inversedBy="softmaq")
*/

private $maqsoft;

public function __construct() {
$this->maqsoft = new ArrayCollection();
}


    /**
     * Add maqsoft
     *
     * @param \uniSistemas\Bundle\Entity\software $maqsoft
     * @return maquinasvirtuales
     */
    public function addMaqsoft(\uniSistemas\Bundle\Entity\software $maqsoft)
    {
        $this->maqsoft[] = $maqsoft;

        return $this;
    }

    /**
     * Remove maqsoft
     *
     * @param \uniSistemas\Bundle\Entity\software $maqsoft
     */
    public function removeMaqsoft(\uniSistemas\Bundle\Entity\software $maqsoft)
    {
        $this->maqsoft->removeElement($maqsoft);
    }

    /**
     * Get maqsoft
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMaqsoft()
    {
        return $this->maqsoft;
    }
}

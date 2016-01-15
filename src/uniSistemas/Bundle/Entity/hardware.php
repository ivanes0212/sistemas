<?php

namespace uniSistemas\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * hardware
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class hardware
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
     * @ORM\Column(name="IPReal", type="string", length=50)
     */
    private $iPReal;

    /**
     * @var string
     *
     * @ORM\Column(name="Memoria", type="string", length=50)
     */
    private $memoria;

    /**
     * @var string
     *
     * @ORM\Column(name="Disco", type="string", length=50)
     */
    private $disco;

    /**
     * @var string
     *
     * @ORM\Column(name="CPU", type="text")
     */
    private $cPU;


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
     * @return hardware
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
     * Set iPReal
     *
     * @param string $iPReal
     * @return hardware
     */
    public function setIPReal($iPReal)
    {
        $this->iPReal = $iPReal;

        return $this;
    }

    /**
     * Get iPReal
     *
     * @return string 
     */
    public function getIPReal()
    {
        return $this->iPReal;
    }

    /**
     * Set memoria
     *
     * @param string $memoria
     * @return hardware
     */
    public function setMemoria($memoria)
    {
        $this->memoria = $memoria;

        return $this;
    }

    /**
     * Get memoria
     *
     * @return string 
     */
    public function getMemoria()
    {
        return $this->memoria;
    }

    /**
     * Set disco
     *
     * @param string $disco
     * @return hardware
     */
    public function setDisco($disco)
    {
        $this->disco = $disco;

        return $this;
    }

    /**
     * Get disco
     *
     * @return string 
     */
    public function getDisco()
    {
        return $this->disco;
    }

    /**
     * Set cPU
     *
     * @param string $cPU
     * @return hardware
     */
    public function setCPU($cPU)
    {
        $this->cPU = $cPU;

        return $this;
    }

    /**
     * Get cPU
     *
     * @return string 
     */
    public function getCPU()
    {
        return $this->cPU;
    }
    /**
* @ORM\OneToMany(targetEntity="maquinasvirtuales", mappedBy="maqhard")
*/
    private $hardmaqs;
    
    public function __construct() {
$this->hardmaqs = new ArrayCollection();}

    /**
     * Add hardmaqs
     *
     * @param \uniSistemas\Bundle\Entity\maquinasvirtuales $hardmaqs
     * @return hardware
     */
    public function addHardmaq(\uniSistemas\Bundle\Entity\maquinasvirtuales $hardmaqs)
    {
        $this->hardmaqs[] = $hardmaqs;

        return $this;
    }

    /**
     * Remove hardmaqs
     *
     * @param \uniSistemas\Bundle\Entity\maquinasvirtuales $hardmaqs
     */
    public function removeHardmaq(\uniSistemas\Bundle\Entity\maquinasvirtuales $hardmaqs)
    {
        $this->hardmaqs->removeElement($hardmaqs);
    }

    /**
     * Get hardmaqs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHardmaqs()
    {
        return $this->hardmaqs;
    }
    public function __toString() {
     return $this->nombre;}
}

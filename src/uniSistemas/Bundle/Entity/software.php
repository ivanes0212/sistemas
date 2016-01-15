<?php

namespace uniSistemas\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * software
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class software
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
     * @ORM\Column(name="Tamano", type="string", length=50)
     */
    private $tamano;


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
     * @return software
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
     * Set tamano
     *
     * @param string $tamano
     * @return software
     */
    public function setTamano($tamano)
    {
        $this->tamano = $tamano;

        return $this;
    }

    /**
     * Get tamano
     *
     * @return string 
     */
    public function getTamano()
    {
        return $this->tamano;
    }
    
    /**
* @ORM\ManyToMany(targetEntity="maquinasvirtuales", mappedBy="maqsoft")
*/

private $softmaq;

    public function __construct() {
$this->softmaq = new ArrayCollection();
}

    /**
     * Add softmaq
     *
     * @param \uniSistemas\Bundle\Entity\maquinasvirtuales $softmaq
     * @return software
     */
    public function addSoftmaq(\uniSistemas\Bundle\Entity\maquinasvirtuales $softmaq)
    {
        $this->softmaq[] = $softmaq;

        return $this;
    }

    /**
     * Remove softmaq
     *
     * @param \uniSistemas\Bundle\Entity\maquinasvirtuales $softmaq
     */
    public function removeSoftmaq(\uniSistemas\Bundle\Entity\maquinasvirtuales $softmaq)
    {
        $this->softmaq->removeElement($softmaq);
    }

    /**
     * Get softmaq
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSoftmaq()
    {
        return $this->softmaq;
    }
    public function __toString() {
     return $this->nombre;}
}

<?php

namespace uniSistemas\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sistemas
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class sistemas
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}

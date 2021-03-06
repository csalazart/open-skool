<?php

namespace OpenSkool\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etapa
 *
 * @ORM\Table(name="etapa_plan_estudios", uniqueConstraints={
 *   @ORM\UniqueConstraint(name="etapa_plan_estudios_uid", 
 *     columns={"planestudios_id", "etapa_id"}
 *   )
 * })
 * @ORM\Entity(repositoryClass="OpenSkool\AdminBundle\Entity\Repository\EtapaPlanEstudiosRepository")
 */
class EtapaPlanEstudios
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
     * @ORM\ManyToOne(targetEntity="OpenSkool\AdminBundle\Entity\PlanEstudios", cascade={"persist"})
     */
    private $planEstudios;
    
    /**
     * @ORM\ManyToOne(targetEntity="OpenSkool\AdminBundle\Entity\Etapa", cascade={"persist"})
     */
    private $etapa;
    
    /**
     * @ORM\Column(name="orden", type="smallint", nullable=true)
     */
    private $orden;
    
    /**
     * @ORM\Column(name="activo", type="boolean")
     */
    private $activo;

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
     * Set etapa
     *
     * @param \OpenSkool\AdminBundle\Entity\Etapa $etapa
     * @return EtapaPlanEstudios
     */
    public function setEtapa(\OpenSkool\AdminBundle\Entity\Etapa $etapa = null)
    {
        $this->etapa = $etapa;
        return $this;
    }

    /**
     * Get etapa
     *
     * @return \OpenSkool\AdminBundle\Entity\Etapa 
     */
    public function getEtapa()
    {
        return $this->etapa;
    }

    /**
     * Set planEstudios
     *
     * @param \OpenSkool\AdminBundle\Entity\PlanEstudios $planEstudios
     * @return EtapaPlanEstudios
     */
    public function setPlanEstudios(\OpenSkool\AdminBundle\Entity\PlanEstudios $planEstudios = null)
    {
        $this->planEstudios = $planEstudios;

        return $this;
    }

    /**
     * Get planEstudios
     *
     * @return \OpenSkool\AdminBundle\Entity\PlanEstudios 
     */
    public function getPlanEstudios()
    {
        return $this->planEstudios;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     * @return EtapaPlanEstudios
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return integer 
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return EtapaPlanEstudios
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean 
     */
    public function getActivo()
    {
        return $this->activo;
    }
    
    /**
     * Get activo
     *
     * @return boolean 
     */
    public function isActivo()
    {
        return $this->getActivo();
    }
}

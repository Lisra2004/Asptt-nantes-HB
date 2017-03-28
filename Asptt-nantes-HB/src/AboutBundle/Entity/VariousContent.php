<?php

namespace AboutBundle\Entity;

/**
 * VariousContent
 */
class VariousContent
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $historicContent;

    /**
     * @var string
     */
    private $valuesContent;

    /**
     * @var string
     */
    private $trainingSchedules;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set historicContent
     *
     * @param string $historicContent
     *
     * @return VariousContent
     */
    public function setHistoricContent($historicContent)
    {
        $this->historicContent = $historicContent;

        return $this;
    }

    /**
     * Get historicContent
     *
     * @return string
     */
    public function getHistoricContent()
    {
        return $this->historicContent;
    }

    /**
     * Set valuesContent
     *
     * @param string $valuesContent
     *
     * @return VariousContent
     */
    public function setValuesContent($valuesContent)
    {
        $this->valuesContent = $valuesContent;

        return $this;
    }

    /**
     * Get valuesContent
     *
     * @return string
     */
    public function getValuesContent()
    {
        return $this->valuesContent;
    }

    /**
     * Set trainingSchedules
     *
     * @param string $trainingSchedules
     *
     * @return VariousContent
     */
    public function setTrainingSchedules($trainingSchedules)
    {
        $this->trainingSchedules = $trainingSchedules;

        return $this;
    }

    /**
     * Get trainingSchedules
     *
     * @return string
     */
    public function getTrainingSchedules()
    {
        return $this->trainingSchedules;
    }
}


<?php
namespace entities;

/**
 * @Entity
 * @Table(name="Grid")
 */
class Grid
{
    /**
     * @Id
     * @Column(type="string")
     */
    private $id;

    /**
     * @Column(type="string")
     */
    private $name;

    /**
     * @Column(type="string")
     */
    private $urlSafeName;

    /**
     * Set id.
     *
     * @param string $id
     *
     * @return Grid
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Grid
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set urlSafeName.
     *
     * @param string $urlSafeName
     *
     * @return Grid
     */
    public function setUrlSafeName($urlSafeName)
    {
        $this->urlSafeName = $urlSafeName;

        return $this;
    }

    /**
     * Get urlSafeName.
     *
     * @return string
     */
    public function getUrlSafeName()
    {
        return $this->urlSafeName;
    }
}

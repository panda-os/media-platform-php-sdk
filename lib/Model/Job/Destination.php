<?php
/**
 * Created by PhpStorm.
 * User: leon
 * Date: 24/05/2017
 * Time: 17:00
 */

namespace Wix\Mediaplatform\Model\Job;


use Wix\Mediaplatform\Model\BaseModel;

class Destination extends BaseModel
{
    /**
     * @var string
     */
    protected $path;

    /**
     * @var string
     */
    protected $directory;

    /**
     * @var string
     */
    protected $acl = "protected";
    

    /**
     * @param string $path
     * @return Destination $this
     */
    public function setPath($path)
    {
        $this->path = $path;
        $this->directory = null;
        return $this;
    }

    /**
     * @param string $directory
     * @return Destination $this
     */
    public function setDirectory($directory)
    {
        $this->directory = $directory;
        $this->path = null;
        return $this;
    }

    /**
     * @param string $acl
     * @return Destination $this
     */
    public function setAcl($acl)
    {
        $this->acl = $acl;
        return $this;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @return string
     */
    public function getDirectory()
    {
        return $this->directory;
    }

    /**
     * @return string
     */
    public function getAcl()
    {
        return $this->acl;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "Destination{" .
            "path='" . $this->path . '\'' .
            ", directory='" . $this->directory . '\'' .
            ", acl='" . $this->acl . '\'' .
            '}';
    }
}
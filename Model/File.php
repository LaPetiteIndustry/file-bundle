<?php
namespace Lpi\FileBundle\Model;

use Lpi\KernelBundle\Entity\Behaviour\Timestampable;

abstract class File implements FileInterface
{
    use Timestampable;

    protected $originalName;

    protected $content;

    protected $type;

    protected $size;

    /**
     * @return mixed
     */
    public function getOriginalName()
    {
        return $this->originalName;
    }

    /**
     * @param mixed $originalName
     */
    public function setOriginalName($originalName)
    {
        $this->originalName = $originalName;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function __toString()
    {
        return 'image ' . $this->getType();
    }

    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }
}
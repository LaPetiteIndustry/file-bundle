<?php
namespace Lpi\FileBundle\Entity;

use Lpi\FileBundle\Model\File as BaseFile;

class File extends BaseFile
{
    /**
     * @var integer $id
     */
    protected $id;

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }
}
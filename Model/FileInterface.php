<?php
namespace Lpi\FileBundle\Model;

interface FileInterface
{
    public function getContent();

    public function getType();

    public function getSize();

    public function setContent($content);

    public function setType($type);

    public function setSize($size);

    public function __toString();
}

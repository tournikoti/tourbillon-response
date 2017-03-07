<?php

namespace Tourbillon\Response;

abstract class View
{
    protected $sFile;
    protected $aVar;

    public function __construct($sFile, $aVar = array())
    {
        $this->setFile($sFile);
        $this->setVars($aVar);
    }

    public function getFile()
    {
        return $this->sFile;
    }

    public function getVar()
    {
        return $this->aVar;
    }

    public function setFile($sFile)
    {
        $this->sFile = $sFile;
    }

    public function setVars(array $aVar)
    {
        $this->aVar = $aVar;
    }

    public abstract function render();

}

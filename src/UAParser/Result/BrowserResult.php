<?php

namespace UAParser\Result;

/**
 * @author Benjamin Laugueux <benjamin@yzalis.com>
 */
class BrowserResult implements BrowserResultInterface
{
    /**
     * @var string
     */
    private $family = null;
    
    /**
     * @var string
     */
    private $major = null;
    
    /**
     * @var string
     */
    private $minor = null;
    
    /**
     * @var string
     */
    private $patch = null;
    
    /**
     * @var string
     */
    private $renderingEngine = null;

    /**
     * {@inheritDoc}
     */
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * {@inheritDoc}
     */
    public function getMajor()
    {
        return $this->major;
    }

    /**
     * {@inheritDoc}
     */
    public function getMinor()
    {
        return $this->minor;
    }
    
    /**
     * {@inheritDoc}
     */
    public function getRenderingEngine()
    {
        return $this->renderingEngine;
    }
    
    /**
     * {@inheritDoc}
     */
    public function getPatch()
    {
        return $this->patch;
    }

    public function __toString()
    {
        return $this->getFamily().' '.implode('.', array(
            $this->getMajor(),
            $this->getMinor(),
            $this->getPatch(),
        ));
    }

    /**
     * {@inheritDoc}
     */
    public function fromArray(array $data = array())
    {
        if (isset($data['family'])) {
            $this->family = (string) $data['family'];
        }
        if (isset($data['major'])) {
            $this->major = (int) $data['major'];
        }
        if (isset($data['minor'])) {
            $this->minor = (int) $data['minor'];
        }
        if (isset($data['patch'])) {
            $this->patch = (int) $data['patch'];
        }
    }
}
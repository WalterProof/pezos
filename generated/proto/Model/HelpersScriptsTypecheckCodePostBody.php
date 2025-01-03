<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Model;

class HelpersScriptsTypecheckCodePostBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    protected $program;
    /**
     * Decimal representation of a big number.
     *
     * @var string
     */
    protected $gas;
    /**
     * @var bool
     */
    protected $legacy;
    /**
     * @var bool
     */
    protected $showTypes;

    public function getProgram()
    {
        return $this->program;
    }

    public function setProgram($program): self
    {
        $this->initialized['program'] = true;
        $this->program = $program;

        return $this;
    }

    /**
     * Decimal representation of a big number.
     */
    public function getGas(): string
    {
        return $this->gas;
    }

    /**
     * Decimal representation of a big number.
     */
    public function setGas(string $gas): self
    {
        $this->initialized['gas'] = true;
        $this->gas = $gas;

        return $this;
    }

    public function getLegacy(): bool
    {
        return $this->legacy;
    }

    public function setLegacy(bool $legacy): self
    {
        $this->initialized['legacy'] = true;
        $this->legacy = $legacy;

        return $this;
    }

    public function getShowTypes(): bool
    {
        return $this->showTypes;
    }

    public function setShowTypes(bool $showTypes): self
    {
        $this->initialized['showTypes'] = true;
        $this->showTypes = $showTypes;

        return $this;
    }
}

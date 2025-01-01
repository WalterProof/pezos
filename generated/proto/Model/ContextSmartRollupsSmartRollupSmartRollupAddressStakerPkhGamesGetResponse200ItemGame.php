<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Model;

class ContextSmartRollupsSmartRollupSmartRollupAddressStakerPkhGamesGetResponse200ItemGame extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    protected $turn;
    /**
     * @var ContextSmartRollupsSmartRollupSmartRollupAddressStakerPkhGamesGetResponse200ItemGameInboxSnapshot
     */
    protected $inboxSnapshot;
    protected $dalSnapshot;
    /**
     * @var int
     */
    protected $startLevel;
    /**
     * @var int
     */
    protected $inboxLevel;
    protected $gameState;

    public function getTurn()
    {
        return $this->turn;
    }

    public function setTurn($turn): self
    {
        $this->initialized['turn'] = true;
        $this->turn = $turn;

        return $this;
    }

    public function getInboxSnapshot(): ContextSmartRollupsSmartRollupSmartRollupAddressStakerPkhGamesGetResponse200ItemGameInboxSnapshot
    {
        return $this->inboxSnapshot;
    }

    public function setInboxSnapshot(ContextSmartRollupsSmartRollupSmartRollupAddressStakerPkhGamesGetResponse200ItemGameInboxSnapshot $inboxSnapshot): self
    {
        $this->initialized['inboxSnapshot'] = true;
        $this->inboxSnapshot = $inboxSnapshot;

        return $this;
    }

    public function getDalSnapshot()
    {
        return $this->dalSnapshot;
    }

    public function setDalSnapshot($dalSnapshot): self
    {
        $this->initialized['dalSnapshot'] = true;
        $this->dalSnapshot = $dalSnapshot;

        return $this;
    }

    public function getStartLevel(): int
    {
        return $this->startLevel;
    }

    public function setStartLevel(int $startLevel): self
    {
        $this->initialized['startLevel'] = true;
        $this->startLevel = $startLevel;

        return $this;
    }

    public function getInboxLevel(): int
    {
        return $this->inboxLevel;
    }

    public function setInboxLevel(int $inboxLevel): self
    {
        $this->initialized['inboxLevel'] = true;
        $this->inboxLevel = $inboxLevel;

        return $this;
    }

    public function getGameState()
    {
        return $this->gameState;
    }

    public function setGameState($gameState): self
    {
        $this->initialized['gameState'] = true;
        $this->gameState = $gameState;

        return $this;
    }
}
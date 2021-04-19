<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class _008PtEdo2ZkScriptedTraceItemStackItem
{
    /**
     * 
     *
     * @var mixed
     */
    protected $item;
    /**
     * Either a plain UTF8 string, or a sequence of bytes for strings that contain invalid byte sequences.
     *
     * @var mixed
     */
    protected $annot;
    /**
     * 
     *
     * @return mixed
     */
    public function getItem()
    {
        return $this->item;
    }
    /**
     * 
     *
     * @param mixed $item
     *
     * @return self
     */
    public function setItem($item) : self
    {
        $this->item = $item;
        return $this;
    }
    /**
     * Either a plain UTF8 string, or a sequence of bytes for strings that contain invalid byte sequences.
     *
     * @return mixed
     */
    public function getAnnot()
    {
        return $this->annot;
    }
    /**
     * Either a plain UTF8 string, or a sequence of bytes for strings that contain invalid byte sequences.
     *
     * @param mixed $annot
     *
     * @return self
     */
    public function setAnnot($annot) : self
    {
        $this->annot = $annot;
        return $this;
    }
}
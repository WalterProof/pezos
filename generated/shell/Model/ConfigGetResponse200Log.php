<?php

namespace Pezos\Generated\Shell\Model;

class ConfigGetResponse200Log
{
    /**
     * Output for the logging function. Either 'stdout', 'stderr' or the name of a log file .
     *
     * @var mixed
     */
    protected $output;
    /**
     * Verbosity level: one of 'fatal', 'error', 'warn','notice', 'info', 'debug'.
     *
     * @var string
     */
    protected $level;
    /**
     * Fine-grained logging instructions. Same format as described in `tezos-node run --help`, DEBUG section. In the example below, sections 'p2p' and all sections starting by 'client' will have their messages logged up to the debug level, whereas the rest of log sections will be logged up to the notice level.
     *
     * @var mixed
     */
    protected $rules;
    /**
     * Format for the log file, see https://github.com/ocsigen/lwt_log/blob/master/src/core/lwt_log_core.mli.
     *
     * @var mixed
     */
    protected $template;
    /**
     * Output for the logging function. Either 'stdout', 'stderr' or the name of a log file .
     *
     * @return mixed
     */
    public function getOutput()
    {
        return $this->output;
    }
    /**
     * Output for the logging function. Either 'stdout', 'stderr' or the name of a log file .
     *
     * @param mixed $output
     *
     * @return self
     */
    public function setOutput($output) : self
    {
        $this->output = $output;
        return $this;
    }
    /**
     * Verbosity level: one of 'fatal', 'error', 'warn','notice', 'info', 'debug'.
     *
     * @return string
     */
    public function getLevel() : string
    {
        return $this->level;
    }
    /**
     * Verbosity level: one of 'fatal', 'error', 'warn','notice', 'info', 'debug'.
     *
     * @param string $level
     *
     * @return self
     */
    public function setLevel(string $level) : self
    {
        $this->level = $level;
        return $this;
    }
    /**
     * Fine-grained logging instructions. Same format as described in `tezos-node run --help`, DEBUG section. In the example below, sections 'p2p' and all sections starting by 'client' will have their messages logged up to the debug level, whereas the rest of log sections will be logged up to the notice level.
     *
     * @return mixed
     */
    public function getRules()
    {
        return $this->rules;
    }
    /**
     * Fine-grained logging instructions. Same format as described in `tezos-node run --help`, DEBUG section. In the example below, sections 'p2p' and all sections starting by 'client' will have their messages logged up to the debug level, whereas the rest of log sections will be logged up to the notice level.
     *
     * @param mixed $rules
     *
     * @return self
     */
    public function setRules($rules) : self
    {
        $this->rules = $rules;
        return $this;
    }
    /**
     * Format for the log file, see https://github.com/ocsigen/lwt_log/blob/master/src/core/lwt_log_core.mli.
     *
     * @return mixed
     */
    public function getTemplate()
    {
        return $this->template;
    }
    /**
     * Format for the log file, see https://github.com/ocsigen/lwt_log/blob/master/src/core/lwt_log_core.mli.
     *
     * @param mixed $template
     *
     * @return self
     */
    public function setTemplate($template) : self
    {
        $this->template = $template;
        return $this;
    }
}
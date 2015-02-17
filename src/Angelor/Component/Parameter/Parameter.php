<?php

namespace Angelor\Component\Parameter;

class Parameter
{
    /**
     * Parameters delimitator
     * var string
     */
     protected $delimiter = ',';

    /**
     * Parameters array
     * var array
     */
     protected $params;
    
    /**
     * Parameter constructor
     * @param string $params String with $delimiter separated parameters
     */
    public function __construct($params)
    {
        $this->params = explode($this->delimiter, $params);
    }
    
    /**
     * Setter for $delimiter
     * @param string $delimiter Split string delimiter
     * @return  void
     */
    public function setDelimiter($delimiter)
    {
        $this->delimiter = $delimiter;
    }

    /**
     * Get array with normalized parameters
     * @return array
     */
    public function getParameters()
    {
        $this->params = array_map('trim', $this->params);
        sort($this->params, SORT_STRING);

        return $this->params;
    }
    
    /**
     * Magic medthod implementation
     * @return string
     */
    public function __toString()
    {
        return implode($this->delimiter, $this->getParameters());
    }
}

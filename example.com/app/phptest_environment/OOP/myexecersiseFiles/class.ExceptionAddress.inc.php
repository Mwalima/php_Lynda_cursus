<?php

class ExceptionAddress extends Exception{
    
    /**
     * Magic __toString()
     * @return String of the adjusted exception 
     */
    public function __toString() {
        return __CLASS__ .": ({$this->code}: {$this->message}\n)";
    }
}


<?php

namespace Hcode;

class Model{
    private $values = [];

    public function __call($name, $args){
        $method = substr($name, 0, 3);
        $fieldnName = substr($name, 3, strlen($name));

        switch($method){
            case "get":
                return (isset($this->values[$fieldName]))?$this->values[$fieldName]: NULL;
            break;
            case "set":
                $this->values[$filedName] = $args[0];
            break;
        }
    }

    public function setData($data = array()){
        foreach($data as $key => $values){
            $this->{"set".$key}($value);
        }
    }

    public function getValue(){
        return $this->values;
    }

}

?>
<?php

class NightsWatch implements IFighter
{
    public function recruit($name){
    	if ($name instanceof IFighter){
    		$name->fight();
    	}
    }
    public function fight(){

    }
}

?>
<?php 
/**
 *  Base Views Class
 */
namespace Ahr\Framework\libs;

class View {

    public function render(string $name, array $attributes = []){
        $this->attributes = $attributes;
        require './views/'.$name.'.php';
    }//end function
}
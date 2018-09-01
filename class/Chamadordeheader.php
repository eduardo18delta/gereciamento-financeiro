<?php

class Chamadordeheader {

	public $titulo;
	public $icon;


	function chamaHeader($titulo) {

    	switch ($titulo){

        case 'menu':
            $this->titulo = "Menu";
            $this->icon = '"img/icons/menu_system.png"';
            break;
        case 'costs':
            $this->titulo = "costs";
            $this->icon = '"img/icons/cost_system.png"';
            break;
        case 'expenses':
            $this->titulo = "expenses";
            $this->icon = '"img/icons/expenses_system.png"';
            break;
        case 'config':
            $this->titulo = "config";
            $this->icon = '"img/icons/config_system.png"';
            break;
        case 'login':
            $this->titulo = "login";
            $this->icon = '"img/icons/login_system.png"';
            break;
                
        default:
            $titulo = "Error page";
            break;
        }


	}

}





?>
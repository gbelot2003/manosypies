<?php

/**
 * Controller por defecto si no se usa el routes
 * 
 */
class IndexController extends AppController
{

    public function index()
    {	
		View::template("bootstrapFrontPage");
        $this->sidebar = "col-mid-3";
        $this->class ="col-min-10";
        $this->status['inicio'] = "active";
    }
	
	public function manicure() {
		$this->title = "Manicure";
        $this->sidebar = "col-mid-3";
        $this->class ="col-min-10";
        $this->status['manicure'] = "active";
	}
    
    public function pedicure(){
        $this->title = "Pedicure";
        $this->status['pedicure'] = "active";
		$this->sidebar = "col-mid-3";
        $this->class ="col-min-10";
        
    }

    public function extraccion(){
        $this->title = "Extraccion";
        $this->status['extraccion'] = "active";
		$this->sidebar = "col-mid-3";
        $this->class ="col-min-10";
    }

    public function faciales(){
        $this->title = "Faciales";
        $this->status['faciales'] = "active";
		$this->sidebar = "col-mid-3";
        $this->class ="col-min-10";
    }

    public function reflexologia() {
        $this->title = "Reflexologia";
        $this->status['reflexologia'] = "active";
		$this->sidebar = "col-mid-3";
        $this->class ="col-min-10";
    }

    public function cuidados() {
        $this->title = "Cuidados";
        $this->status['cuidados'] = "active";
		$this->sidebar = "col-mid-3";
        $this->class ="col-min-10";
    }
	
	public function contacto() {
		$this->title = "Contactenos";
		$this->status['contacto'] = "active";
		$this->sidebar = "col-mid-3";
        $this->class ="col-min-10";
	}
    
}

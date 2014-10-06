<?php
/**
 * @see Controller nuevo controller
 */
require_once CORE_PATH . 'kumbia/controller.php';

/**
 * Controlador principal que heredan los controladores
 *
 * Todas las controladores heredan de esta clase en un nivel superior
 * por lo tanto los metodos aqui definidos estan disponibles para
 * cualquier controlador.
 *
 * @category Kumbia
 * @package Controller
 */
class AppController extends Controller
{

    final protected function initialize()
    {
        View::template('bootstrap'); // Definimos template por defecto
        $this->status = NULL; // Definimos la variable del menu
        $this->SiteName = "Casa Manos y Pies"; // Nombre del sitio
        $this->pageName = $this->SiteName; // Nombre de la pagina por defecto
        $this->sidebar = NULL;
        $this->classes = NULL;
        
        /* Bloques */
        $this->redes = "on";
        
    }

    final protected function finalize()
    {
        if (!isset($this->sidebar)){$this->classes = "col-md-12";} else {$this->classes = "col-md-9";}   
    }

}

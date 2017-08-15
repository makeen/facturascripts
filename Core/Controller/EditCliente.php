<?php
/**
 * This file is part of FacturaScripts
 * Copyright (C) 2013-2017  Carlos Garcia Gomez  carlos@facturascripts.com
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
namespace FacturaScripts\Core\Controller;

use FacturaScripts\Core\Base\ViewController;
use FacturaScripts\Core\Model;

/**
 * Controlador para la edición de un registro del modelo Cliente
 *
 * @author Carlos García Gómez <carlos@facturascripts.com>
 * @author Artex Trading sa <jcuello@artextrading.com>
 */
class EditCliente extends ViewController\EditController
{
    public function __construct(&$cache, &$i18n, &$miniLog, $className)
    {
        parent::__construct($cache, $i18n, $miniLog, $className);
        
        // Establecemos el modelo de datos
        $this->model = new Model\Cliente();
    }
    
    public function privateCore(&$response, $user)
    {
        parent::privateCore($response, $user);
    }
    
    public function getPanelFooter()
    {
        return $this->i18n->trans('Fecha de alta: ') . $this->model->fechaalta;
    }
    
    public function getPageData()
    {
        $pagedata = parent::getPageData();
        $pagedata['title'] = 'Clientes';
        $pagedata['icon'] = 'fa-users';
        return $pagedata;
    }    
}

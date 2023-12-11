<?php

namespace App\Controllers;

class Home extends BaseController
{
    
   public function index(): string
    {
        return view('welcome_message');
    }

    public function verCliente() {
        $nombres = ['Juan', 'María', 'Carlos', 'Ana'];
        $apellidos = ['López', 'Gómez', 'Rodríguez', 'Fernández'];
        $edades = [21, 25, 30, 35];
        $bebidasFavoritas = ['Cerveza', 'Cóctel', 'Vino', 'Refresco'];
    
        $cliente = array(
            'Id' => rand(501, 600),
            'Nombre' => $nombres[array_rand($nombres)] . ' ' . $apellidos[array_rand($apellidos)],
            'Edad' => $edades[array_rand($edades)],
            'Bebida_Favorita' => $bebidasFavoritas[array_rand($bebidasFavoritas)],
            'Contacto' => array(
                'Email' => strtolower(str_replace(' ', '', $nombres[array_rand($nombres)]) . '@mail.com'),
                'Telefono' => rand(100, 999) . '-' . rand(100, 999) . '-' . rand(1000, 9999)
            )
        );
    
        return $this->response->setJson($cliente);
    }
    
    public function verBartender() {
        $nombres = ['Alejandro', 'Elena', 'Gabriel', 'Laura'];
        $apellidos = ['Martínez', 'Gómez', 'Hernández', 'Pérez'];
        $especialidades = ['Cócteles', 'Cervezas Artesanales', 'Vinos', 'Bebidas Exóticas'];
    
        $bartender = array(
            'Id' => rand(601, 700),
            'Nombre' => $nombres[array_rand($nombres)] . ' ' . $apellidos[array_rand($apellidos)],
            'Especialidad' => $especialidades[array_rand($especialidades)],
            'Contacto' => array(
                'Email' => strtolower(str_replace(' ', '', $nombres[array_rand($nombres)]) . '@bar.com'),
                'Telefono' => rand(100, 999) . '-' . rand(100, 999) . '-' . rand(1000, 9999)
            )
        );
    
        return $this->response->setJson($bartender);
    }
    
    public function verPersonalServicio() {
        $nombres = ['Roberto', 'Patricia', 'Alberto', 'Monica'];
        $apellidos = ['Fernández', 'Ruiz', 'Gutiérrez', 'Martínez'];
        $puestos = ['Mesero', 'Camarero', 'Anfitrión', 'Barista'];
    
        $personalServicio = array(
            'Id' => rand(701, 800),
            'Nombre' => $nombres[array_rand($nombres)] . ' ' . $apellidos[array_rand($apellidos)],
            'Puesto' => $puestos[array_rand($puestos)],
            'Contacto' => array(
                'Email' => strtolower(str_replace(' ', '', $nombres[array_rand($nombres)]) . '@bar.com'),
                'Telefono' => rand(100, 999) . '-' . rand(100, 999) . '-' . rand(1000, 9999)
            )
        );
    
        return $this->response->setJson($personalServicio);
    }
    
}

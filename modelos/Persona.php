<?php

class Persona {
    public $Id;
    public $Nombre;
    public $Apellido;
    public $FechaNacimiento;
    public $ObraSocial;
    public $ListaDocumentos = array();

    public function MostrarDatos() {
        echo '<hr>'.'Datos de la persona:'.'<hr>';
        echo 'Id: '.$this->Id.'<br>';
        echo 'Nombre: '.$this->Nombre.'<br>';
        echo 'Apellido: '.$this->Apellido.'<br>';
        echo 'Fecha de nacimiento : '.$this->FechaNacimiento.'<hr>';
        echo 'Razon Social y sitio web: '.'<br>';
        echo 'Razón Social: '.$this->ObraSocial->RazonSocial.'<br>';
        echo 'Sitio Web: '.$this->ObraSocial->SitioWeb.'<hr>';
        echo 'Lista de datos de documentos: '.'<hr>';

        foreach ($this->ListaDocumentos as $ld) {
            echo 'Número de Documento: '.$ld->Id.'<br>';
            echo 'Número de Documento: '.$ld->NumeroDocumento.'<br>';
            echo 'Número de Documento: '.$ld->Habilitado.'<br>';
            echo 'Tipo de documento id: '.$ld->TipoDocumento->Id.'<br>';
            echo 'Tipo de documento descripción: '.$ld->TipoDocumento->Descripcion.'<br>';
            echo 'Tipo de documento habilitado: '.$ld->TipoDocumento->Habilitado.'<hr>';
        }
    }
}
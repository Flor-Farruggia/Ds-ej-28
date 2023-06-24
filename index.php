<?php
require_once 'modelos/Documento.php';
require_once 'modelos/ObraSocial.php';
require_once 'modelos/Persona.php';
require_once 'modelos/TipoDocumento.php';
/**setear a la persona la obra social instanciada anteriormente
setear a la persona los dos documentos instanciados anteriormente.
Llamar al método mostrar Datos de la persona.
 */
 $os = new ObraSocial();
 $os->RazonSocial = "Sancor Salud";
 $os->SitioWeb = "www.sancorsalud.com";

 $td1 = new TipoDocumento();
 $td1->Id = 1 ;
 $td1->Descripcion = 'DNI';
 $td1-> Habilitado = 'true' ;

 $td2 = new TipoDocumento();
 $td2->Id = 2;
 $td2->Descripcion = 'Pasaporte';
 $td2->Habilitado = 'True';

 $d1 = new Documento();
 $d1->Id= 1;
 $d1->NumeroDocumento= 40123123 ;
 $d1->Habilitado = 'True';
 $d1->TipoDocumento = $td1;

 $d2 = new Documento();
 $d2->Id= 2;
 $d2->NumeroDocumento= 50123123;
 $d2->Habilitado = 'True';
 $d2->TipoDocumento = $td2;

 $p = new Persona ();
 $p->Id = 1;
 $p->Nombre = 'Juan';
 $p->Apellido = 'Perez';
 $p->FechaNacimiento = '21/05/2020';
 $p-> ObraSocial = $os;

 $p-> ListaDocumentos [] = $d1;
 $p-> ListaDocumentos [] = $d2;

 $p->MostrarDatos();


<?php
// @author: Pablo Guillermo Ceballos Vitale

// This line protects the file from being accessed by a URL directly.
//NO MODIFICAR ESTO, esto evita que se acceda de forma ilegal a los archivos                                                               
defined('MOODLE_INTERNAL') || die();                                                                                                
 
// This is the version of the plugin.
//Este debe ser cambiado cada vez que se modifica algo en el codigo ANTES de subirlo a Moodle
//El formato a seguir es YYYYMMDDNN: Y = year, M = Month , D = Day,
// N = version Number (va de 00 a 99, incrementado de a 1 por cada vez que se sube el plugin a Moodle)                                                                                               
$plugin->version = 2021102608;                                                                                                    
 
// Version de Moodle requerida                                                                             
$plugin->requires = 2016070700;                                                                                                   
 
// This is the component name of the plugin - it always starts with 'theme_'                                                        
// for themes and should be the same as the name of the folder.
//NO CAMBIAR ESTO                                                                     
$plugin->component = 'theme_upsodarkmode';                                                                                                 
 
// This is a list of plugins, this plugin depends on (and their versions).
//Dependencias del theme, con su número de versión correspondiente
//Nosotros dependemos del Boost para que el resto de las cosas funcionen
//si en algún momento se necesita agregar alguna dependencia, agregarla aquí                                                          
$plugin->dependencies = [                                                                          
    'theme_boost' => 2016102100                                                                                                   
];
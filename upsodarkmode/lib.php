<?php
 
// @author: Pablo Guillermo Ceballos Vitale
/*Este archivo contiene las "features" que implementa el theme, 
    debido a que el mismo solo necesita cambiar como se ve el Moodle, 
    lo que hacemos es cargar los presets del theme Boost para luego trabajar sobre ellos en CSS*/
 
// This line protects the file from being accessed by a URL directly.
//NO MODIFICAR ESTO, esto evita que se acceda de forma ilegal a los archivos                                                                 
defined('MOODLE_INTERNAL') || die();
 
// We will add callbacks here as we add features to our theme.

function theme_upsodarkmode_get_main_scss_content($theme) {                                                                                
    global $CFG;                                                                                                                    
 
    $scss = '';                                                                                                                     
    $filename = !empty($theme->settings->preset) ? $theme->settings->preset : null;                                                 
    $fs = get_file_storage();                                                                                                       
 
    $context = context_system::instance();                                                                                          
    if ($filename == 'default.scss') {                                                                                              
        // We still load the default preset files directly from the boost theme. No sense in duplicating them.                      
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost/scss/preset/default.scss');                                        
    } else if ($filename == 'plain.scss') {                                                                                         
        // We still load the default preset files directly from the boost theme. No sense in duplicating them.                      
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost/scss/preset/plain.scss');                                          
 
    } else if ($filename && ($presetfile = $fs->get_file($context->id, 'theme_upsodarkmode', 'preset', 0, '/', $filename))) {              
        // This preset file was fetched from the file area for theme_upsodarkmode and not theme_boost (see the line above).                
        $scss .= $presetfile->get_content();                                                                                        
    } else {                                                                                                                        
        // Safety fallback - maybe new installs etc.                                                                                
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost/scss/preset/default.scss');                                        
    }                                                                                                                                       
 
    return $scss;                                                                                                                   
}
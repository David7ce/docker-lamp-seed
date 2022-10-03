<?php

/**
 * Plugin Name: Tiempo de lectura
 * PLugin URI: https://nohaywebs.com/tiempo-de-lectura
 * Description: Añade el tiempo estinado de kectura
 * Version: 1.0
 * Author: David Alonso
 * Author URI: https://nohaywebs.com/
 */

 add_action('the_content', 'time_to_read');

 function time_to_read($content) 
 {
    $wpm = 300; // Cantidad media de palabras leíadas por minuto
    $word_count = str_word_count($content); // Total de palabras del contenido

    $estimated_time_to_read = floor($word_count / $wpm);

    if ($estimated_time_to_read > 0) {
        return '<div>Tiempo estimado de lectura: ' . $estimated_time_to_read . ' minutos</div>' . $content;
    }
    else {
        return '<div>Tiempo estimado de lectura: menos de un minuto</div>' . $content;
    }

    // return strtoupper($content);
 }

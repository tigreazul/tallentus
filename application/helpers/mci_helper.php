<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Helper functions for Multilingual CI
 *
 * requires url helper
 *
 * by Tanel Tammik - keevitaja@gmail.com - 2012
 *
 * version 1.0
 *
 */

// Adds language segment to anchor uri
// Use instead of anchor in multilingual projects
function lanchor($uri = '', $title = '', $attributes = '') {
    $ci =& get_instance();
    $uri = $ci->lang->mci_make_uri($ci->lang->mci_current(), $uri);
    return anchor($uri, $title, $attributes);
}

// Returns languge bar html
// Html can be configured in mci_languages.php config file
function langbar() {
    $ci =& get_instance();  
    return $ci->lang->mci_language_bar();
}


// returns uri(s) for different languages, mixed
function lchange($language = false) {
	$ci =& get_instance();
	return $ci->lang->mci_change($language);
}

function idioma() {
	$ci =& get_instance();
	return $ci->lang->mci_current();
}

function r_idioma($string, $idioma)
{
    if(is_serialized($string)):
        // $data =  preg_replace('!s:(\d+):"(.*?)";!e', "'s:'.strlen('$2').':\"$2\";'", $string);
        $dato = unserialize($string);
        // var_dump($dato);
		if(isset($dato[$idioma])):
			$dato = $dato[$idioma];
		else:
			$dato = '';
		endif;
		return $dato;
	endif;
}

function is_serialized( $data ) {
    // if it isn't a string, it isn't serialized
    if ( !is_string( $data ) )
        return false;
    $data = trim( $data );
    if ( 'N;' == $data )
        return true;
    if ( !preg_match( '/^([adObis]):/', $data, $badions ) )
        return false;
    switch ( $badions[1] ) {
        case 'a' :
        case 'O' :
        case 's' :
            if ( preg_match( "/^{$badions[1]}:[0-9]+:.*[;}]\$/s", $data ) )
                return true;
            break;
        case 'b' :
        case 'i' :
        case 'd' :
            if ( preg_match( "/^{$badions[1]}:[0-9.E-]+;\$/", $data ) )
                return true;
            break;
    }
    return false;
}


function quitar_tildes($cadena) {
    $no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹");
    $permitidas= array ("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E");
    $texto = str_replace($no_permitidas, $permitidas ,$cadena);
    return strtolower($texto);
}





function slugify($text)
{   
    $text = preg_replace('/á|Á/', 'a', $text);
    $text = preg_replace('/é|É/', 'e', $text);
    $text = preg_replace('/í|Í/', 'i', $text);
    $text = preg_replace('/ó|Ó/', 'o', $text);
    $text = preg_replace('/ú|Ú/', 'u', $text);
    $text = preg_replace('/Ñ|ñ/', 'nn', $text);
    // End of Deal  with accents 
    // replace all non letters or digits by -
    $text = preg_replace('/\W+/', '-', $text);
    // trim and lowercase
    $text = strtolower(trim($text, '-'));
    
    // replace all non letters or digits by -
    $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
    // trim
    $text = trim($text, '-');
    // transliterate
    if(function_exists('iconv')):
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    endif;
    // lowercase
    $text = strtolower($text);
    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);
    if(empty($text)):
        return 'n-a';
    endif;
    return $text;
}


function recortar_palabras($cadena, $limite, $corte=" ", $pad="...") {
    $cadena = strip_tags($cadena,'<br>');
    if(strlen($cadena) <= $limite)
        return $cadena;
    if(false !== ($breakpoint = strpos($cadena, $corte, $limite))) {
        if($breakpoint < strlen($cadena) - 1) {
            $cadena = substr($cadena, 0, $breakpoint) . $pad;
        }
    }
    return $cadena;
}


/* End of file mci_helper.php */
/* Location: ./application/helpers/mci_helper.php */ 
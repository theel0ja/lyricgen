<?php
/**
 * Plugin Name: LyricGen
 * Plugin URI: https://eliasojala.me/sovellukset/lyricgen/
 * Description: Simple lyric generator.
 * Version: 1.0
 * Author: Elias Ojala
 * Author URI: https://github.com/theel0ja
 */

function eo_lyricgenpage() {
    $lyricgenform = '<form action="'.plugins_url( 'gen.php' , __FILE__ ).'" method="post">
    
    <b>Kappaleen nimi:</b>  <br />
        <input type="text" required name="nimi" />  <br />
    <b>Sivu 1:</b>  <br />
        <textarea name="sivua" rows="10" cols="30" required></textarea>  <br />
    <b>Sivu 2:</b>  <br />
        <textarea name="sivub" rows="10" cols="30" required></textarea>  <br />
    <b>Sivu 3:</b>  <br />
        <textarea name="sivuc" rows="10" cols="30" required></textarea>  <br />

    <input type="submit" value="Generoi" />
    
    </form>';
    
    return $lyricgenform;
}



add_shortcode( 'lyricgenpage', 'eo_lyricgenpage' );
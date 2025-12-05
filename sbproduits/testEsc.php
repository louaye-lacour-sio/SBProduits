<?php
    require 'vendor/autoload.php' ;
    use Laminas\Escaper\Escaper ;
    $escaper = new Escaper( 'utf-8' ) ;
    echo $escaper -> escapeHtml( '<b>XSS</b>' )
?>
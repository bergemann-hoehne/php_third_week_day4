<?php
/*
 * Created on 01.03.2024
 * Task: Das eingabeformular soll erweitert werden um ein Input mit dem Type File um ein Profilbild hochzuladen
 *      Die Datei soll relativ abgelegt werden.
 *      Die Pfadreferenz zu der Datie soll in der CSV als zusaetzliche Spalte hinzugefuegt werden.
 *      
 * 
 * Author: Max Musterman
 */
session_start();
if( !isset( $_SESSION['START'] ) ){
    $_SESSION['START'] = date('d.m.Y H:i:s');
}
// ============================================================================================================ //
//  ||
//  ||
//  \/
// Start from here
// content belongs right here
// ============================================================================================================ //




// ============================================================================================================ //
// ============================================================================================================ //
?>

<html>
    <header>
    </header>
    <body>
        <form enctype="multipart/form-data" name="projectform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <p>Personendaten</p>
            <input type="text" name="salutation" placeholder="Anrede" value="">
            <input type="text" name="prename" placeholder="Vorname" value="">
            <input type="text" name="name" placeholder="Nachname" value="">

	        <input style='display:none' name='CHECKSUM' type='hidden' value='<?php echo date('YmdHi');?>'>
            <br><br>
            <input type="submit" value="Daten ÃŒbermitteln">
        
        </form>
    </body>
</html>

<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://simone.vannucci.ch
 * @since      1.0.0
 *
 * @package    Qr_Code_Redirect
 * @subpackage Qr_Code_Redirect/admin/partials
 */

 if(isset($_FILES['file'])){
   include 'qr-code-redirect-upload.php';
 }
?>

<div class="wrap">
  <h1 class="wp-heading-inline">QR code redirect</h1>
  <?php
  if(isset($_FILES['file'])){
    if($_FILES['file']['error'] == 0){
  ?>
    <div class="notice notice-success is-dismissible"><p>File caricato con successo</p></div>
  <?php
    } else {
  ?>
    <div class="notice notice-error is-dismissible"><p>Errore caricamento file ( Errore codice : <?php echo $_FILES['file']['error']; ?> )</p></div>
  <?php
    }
  }
  ?>
  <div class="formFile">
    <h2><span class="dashicons dashicons-welcome-write-blog" aria-hidden="true"></span>Gestisci elenco QR code redirect</h2>
    <form action="" method="POST" enctype="multipart/form-data">
      <div class="labelCsv">

      <label class="uploadCsv" for="filecvs">Carica qui il file .csv</label><br />
      </div>
      <input type="file" name="file">
      <input class="wp-core-ui button-secondary" type="submit" name="submit" value="Carica"/>
    </form>
    <p>Scarca il file list.csv attuale cliccando <a href="/wp-content/plugins/qr-code-redirect/admin/partials/upload/list.csv">qui</a></p>
  </div>
  <div class="infoQrCode">
    <h2><span class="dashicons dashicons-editor-help" aria-hidden="true"></span>Informazioni sul plugin</h2>
    <p>Questo plugin serve per reindirizzare i visitatori alla lingua del loro
      browser, se questi provengono da un URL unico, come le caso dei QR code.</p>
    <h4>Formato del file</h4>
    <p>Il file si deve chiamare list e deve avere l'estensione .csv (list.csv), i campi separati da ; e le righe da un "a capo"</p>
    <p>I campi del file sono i seguenti:</p>
    <pre>pagina di origine ; Codice ISO della lingua ; URL di destinazione</pre>
    <p>Esempio:</p>
    <pre>arte-e-cultura-ticino.php;de;https://www.montetamaro.ch/de/kunst-und-kultur/</br>arte-e-cultura-ticino.php;it;https://www.montetamaro.ch/it/arte-e-cultura/</pre>
    <h4>Formato del link in ingresso</h4>
    <p>Per attivare la funzionalità del plugin è necessario apporre il
      parametro <code>?qr-code=true</code> alla fine del URL prima di generare il QR code.<br />Questo serve per evitare che un carico inutile sul server</p>
    <p>Esempio:</p>
    <pre>www.montetamaro.ch/arte-e-cultura-ticino.php?qr-code=true<br />www.montetamaro.ch/arte-e-cultura-ticino.php?qr-code=true&guid=75ebnd3u4zjcgwiqiooucn</pre>
    <p>L'importante è non inserire il parametro nel file .csv !</p>
  </div>
</div>

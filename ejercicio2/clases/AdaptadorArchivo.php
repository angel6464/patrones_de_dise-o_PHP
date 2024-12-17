<?php

require_once 'Archivo.php';
require_once 'ArchivoWindows7.php';

class AdaptadorArchivo implements Archivo {
    private $tipoArchivo;

    public function __construct($tipoArchivo) {
        $this->tipoArchivo = $tipoArchivo;
    }

    public function abrirArchivo() {
        switch ($this->tipoArchivo) {
            case 'word':
                $archivoWord = new ArchivoWord();
                return $archivoWord->abrirArchivoDoc() . " (Convertido a .docx)";
            
            case 'excel':
                $archivoExcel = new ArchivoExcel();
                return $archivoExcel->abrirArchivoXls() . " (Convertido a .xlsx)";
            
            case 'powerpoint':
                $archivoPowerPoint = new ArchivoPowerPoint();
                return $archivoPowerPoint->abrirArchivoPpt() . " (Convertido a .pptx)";
            
            default:
                return null;
        }
    }
}

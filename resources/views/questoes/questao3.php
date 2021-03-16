<?php
class AssinaDocumentoClass
{
	public $ProprietarioDocumento;
    public $ValidadeDocumento;
    
    public function assinarDocumento() {
    	echo $this->ProprietarioDocumento." com validade do documento em:  ".$this->ValidadeDocumento.".";
    }
}

    $joao = new AssinaDocumentoClass();
    $joao->ProprietarioDocumento = "João";
    $joao->ValidadeDocumento = "30/11/2020";
    $joao->assinarDocumento();

?>
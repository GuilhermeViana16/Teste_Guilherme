<?php
class AssinaDocumento
{
	// Propriedades da classe
	public $ProprietarioDocumento;
	public $ValidadeDocumento;
	
	// Método protegido da classe
	protected function escreve () {
		echo $this->ProprietarioDocumento;
		echo ' ';
		echo $this->ValidadeDocumento;
		echo '<br />';
	}
	
	// Método público que utiliza o método protegido
	public function publico () {
		$this->escreve();
	}
}

// Primeira instância da classe
$proprietario = new AssinaDocumento;
$validade = new AssinaDocumento;

// Altera o valor das propriedades da primeira instância
$proprietario->ProprietarioDocumento = 'Joao';
$proprietario->ValidadeDocumento = '30/11/2020';

// Utiliza o método público das duas classes
$proprietario-> publico();

?>
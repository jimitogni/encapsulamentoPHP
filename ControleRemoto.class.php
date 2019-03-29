<?php

require_once 'ControleInterface.php';

class ControleRemoto implements Controle{

	//atributos
	private $volume;
	private $ligado;
	private $tocando;

	function __construct(){
		$this->ligado = false;
		$this->tocando = false;
		$this->volume = 50;
	}

	//gets e sets
	private function setVolume($valor){
		$this->volume = $valor;
	}
	private function getVolume(){
		return $this->volume;
	}

	private function setTocando($valor){
		$this->tocando = $valor;
	}
	private function getTocando(){
		return $this->tocando;
	}

	private function setLigado($valor){
		$this->ligado = $valor;
	}
	private function getLigado(){
		return $this->ligado;
	}
	//gets e sets

	//implementando os metodos da interface
	public function ligar(){
		$this->setLigado(true);
	}

	public function desligar(){
		$this->setLigado(false);
	}

public function abrirMenu(){
	echo "-------MENU--------";
	echo "<br> Esta ligada: ".($this->getLigado() ? "SIM" : "NÃO");
	echo "<br> Esta tocando: ".($this->getTocando() ? "SIM" : "NÃO");
	echo "<br> Volume: " . ($this->volume);
	for ($c = 0; $c <= $this->volume; $c +=10){
		echo " |";
	}
	echo "<br>";
}

public function fecharMenu(){
	echo "<br>Fechando Menu...";
}

public function maisVolume(){
	if($this->getLigado()){
		$this->setVolume($this->getVolume() + 5);
	}
}

public function menosVolume(){
	if($this->getLigado()){
		$this->setVolume($this->getVolume() - 5);
	}
}

public function ligarMudo(){
	if($this->getLigado() && $this->getVolume() > 0){
		$this->setVolume(false);
	}
}

public function desligarMudo(){
	if($this->getLigado() && $this->getVolume() == 0){
		$this->setVolume(50);
	}
}

public function play() {
	if($this->getLigado() && !$this->getTocando()){
		$this->setTocando(true);
	}
}

public function pause() {
	if($this->getLigado() && $this->getTocando()){
		$this->setTocando(false);
	}
}

}

?>
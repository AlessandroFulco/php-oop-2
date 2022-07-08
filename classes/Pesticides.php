<?php
class Pesticides {
    use Products;

    public $scadenza;
    public $tipologia;

    public function __construct($name, $prezzo, $scadenza, $tipologia) {
        $this->name = $name;
        $this->prezzo = $prezzo;
        $this->scadenza = $scadenza;
        $this->tipologia = $tipologia;
    }
}
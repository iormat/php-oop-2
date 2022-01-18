<?php
    /**
     *      DEFINIRE CLASSE PERSONA:
     *          - ATTRIBUTI (private):
     *              - nome
     *              - cognome
     *              - dataNascita (stringa)
     *          - METODI:
     *              - costruttore che accetta nome e cognome
     *              - setter/getter per ogni variabile
     *              - printFullPerson: che stampa "nome cognome: dataNascita"
     *              - toString: che ritorna "nome cognome: dataNascita"
     * 
     *      DEFINIRE CLASSE EMPLOYEE CHE EREDITA DA PERSONA:
     *          - ATTRIBUTI (private):
     *              - stipendio
     *              - dataAssunzione
     *          - METODI:
     *              - costruttore che accetta nome, cognome e stipendio
     *              - setter/getter per variabili 
     *              - printFullEmployee: che stampa "nome cognome: stipendio (dataAssunzione)"
     *              - toString: che ritorna "nome cognome: stipendio (dataAssunzione)"
     */

    class Persona {
        // attributes
        private $nome;
        private $cognome;
        private $dataNascita;

        // construct
        public function __construct($nome, $cognome) {
            $this -> setNome($nome);
            $this -> setCognome($cognome);
        }

        // GETTER & SETTER
        // getter
        public function getNome() {
            return $this -> nome;
        }
        public function getCognome() {
            return $this -> cognome;
        }
        public function getDataNascita() {
            return $this -> dataNascita;
        }

        // setter
        public function setNome($nome) {
            $this -> nome = $nome;
        }
        public function setCognome($cognome) {
            $this -> cognome = $cognome;
        }
        public function setDataNascita($dataNascita) {
            $this -> dataNascita = $dataNascita;
        }

        // METHODS
        // function to print data
        public function printFullName() {
            return $this -> getNome() . ' ' . $this -> getCognome() . '<br>' . $this -> getDataNascita();
        }

        // to string
        public function __toString() {
            return $this -> printFullName() . '<br><br>';
        }
    }

    class Employee extends Persona {
        // attributes
        private $stipendio;
        private $dataAssunzione;

        // construct
        public function __construct($nome, $cognome, $stipendio) {
            parent::__construct($nome, $cognome);
            $this -> setStipendio($stipendio);
        }

        // GETTER & SETTER
        // getter
        public function getStipendio() {
            return $this -> stipendio;
        }
        public function getDataAssunzione() {
            return $this -> dataAssunzione;
        }
        // setter
        public function setStipendio($stipendio) {
            $this -> stipendio = $stipendio;
        }
        public function setDataAssunzione($dataAssunzione) {
            $this -> dataAssunzione = $dataAssunzione;
        }

        // METHODS
        // function to print data
        public function printFullEmployee () {
            return 'Employee: ' . $this -> printFullName() . 'Stipendio: ' . $this -> getStipendio() . '<br>' . '(' . $this -> getDataAssunzione() . ')';
        }
        // to string
        public function __toString() {
            return $this -> printFullEmployee() . '<br><br>';
        }
    }
    
    // attributes
    $p1 = new Persona('John', 'Doe');
    $p1 -> setDataNascita('15/12/1980');
    $p2 = new Persona('Jane', 'Doe');
    $p2 -> setDataNascita('01/01/1960');
    $p3 = new Persona('Johnathan', 'Doe');
    $p3 -> setDataNascita('13/07/1990');
    
    $e1 = new Employee($p1 -> getNome(), $p1 -> getCognome(), '1000');
    $e1 -> setDataAssunzione('01/12/2021');
    $e2 = new Employee($p2 -> getNome(), $p2 -> getCognome(), '1600');
    $e2 -> setDataAssunzione('01/01/2000');
    $e3 = new Employee($p3 -> getNome(), $p3 -> getCognome(), '1400');
    $e3 -> setDataAssunzione('01/06/2016');
    
    // print values
    echo $p1;
    echo $p2;
    echo $p3;
    
    echo " ------------------------------------------------ <br><br>";

    echo $e1;
    echo $e2;
    echo $e3;
?>
<div class="titulo">Classe Abstrata</div>

<?php
abstract class Abstrata {
    abstract public function metodo1();
    abstract protected function metodo2($parametro);
}

abstract class FilhaAbstrata extends Abstrata {
    public function metodo1() { // transformando metodo abstrato em concreto
        echo "Executando método 1 <br>";
    }

    abstract public function metodo3();
}

class Concreta extends FilhaAbstrata {
    public function metodo1() {
        echo "Executando método 1 extendido <br>";
        parent::metodo1();
    }

    protected function metodo2($parametro) {
        echo "Executando método 2, com parametro $parametro <br>"; 
    }

    public function metodo3() {
        echo "Executando método 3<br>";
        $this->metodo2('interno');
    }
}

$c = new Concreta();
$c->metodo1();
// $c->metodo2('externo'); // Não é possível acessar o método 2, pois é protegido.
$c->metodo3(); // Será exibido o método 3 e o método 2 (parametro interno), pois o método 2 foi recebido como herança e por isso pode ser acesado.

echo '<br>';
var_dump($c);

echo '<br>';
echo '$c é instância da class Concreta: ';
var_dump($c instanceof Concreta);
echo '<br>';
echo '$c é instância da class FilhaAbstrata: ';
var_dump($c instanceof FilhaAbstrata);
echo '<br>';
echo '$c é instância da class Abstrata: ';
var_dump($c instanceof Abstrata);

// Uma classe concreta obrigatóriamente precisa implementar todos os métodos recebidos em toda hierarquia.
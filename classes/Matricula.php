<?php

    // __CONSTRUCT COM PARÂMETRO
    // Podemos declarar nosso método construct já enviando parâmetros, economizando assim umas boas linhas de código.

    // Estamos criando uma classe. Para isso, precisamos usar a keyword class e, em seguida, o nome da classe. Lembrando que as classes, por convenção, começam cada palavra em CaixaAlta.
    class Matricula {

        // Criando uma propriedade pública
        public $nome;

        // Criando o método construct com parâmetro (no caso estou diferenciando o nome da propriedade - $nome - do parâmetro recebido - $nomeRecebido, mas é comum que ambos recebam um mesmo nome).
        public function __construct($nomeRecebido) {

            // Aqui vamos atrelar o parâmetro recebido à propriedade do objeto a ser instanciado (com a ajuda do $this)
            $this->nome = $nomeRecebido;
            // echo $this->nome; => Mostrando que atrelamos o valor enviando como parâmetro ao instanciarmos o objeto (por causa do construct) à propriedade nome ($this->nome).

            // Método declarado dentro do construct que recebe um parâmetro ($nomeParam) e retorna um echo.
            function seMatricular($nomeParam) {
                echo "O aluno " . $nomeParam . " está matriculado!<br/>";
            }
            // Executando o método seMatricular enviando como parâmetro o valor da propriedade nome ($this->nome). Mas poderia ser qq valor (experimente trocar o parâmetro enviado para o seu nome!).
            seMatricular($this->nome);
            // seMatricular("Michael Jackson");

        }

        // O método 'mágico' destruct (começa com dois underlines) será executado assim que o ciclo de vida do objeto se encenrrar. Como nesse caso temos outros métodos que poderão ser executados, ele será executado após rodar todos os outros métodos (a não ser que a gente execute o unset() antes).
        public function __destruct() {

            // Método declarado dentro do destruct que recebe um parâmetro ($nomeParamDiferente) e retorna um echo.
            function seFormar($nomeParamDiferente) {
                echo "O aluno " . $nomeParamDiferente . " se formou! Uhuuuu! [classe Matricula > método destruct]<br/>";
            }
            // Executando o método seFormar enviando como parâmetro o valor da propriedade nome ($this->nome). Mas poderia ser qq valor (experimente trocar o parâmetro enviado para o seu nome!).
            seFormar($this->nome);

        }


    }


?>
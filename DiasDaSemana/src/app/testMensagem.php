<?php



  namespace Tests;

        use PHPUnit\Framework\TestCase;
        use php\mensagens\Semana;

        class SemanaTest extends TestCase
        {
            public function testMensagem()
            {
                $semana = new Semana();
                    $this->assertTrue($semana->mensagem->isValidMessageType('As melhores escolhas não são aquelas que farão de você um ser “quase” perfeito, mas sim aquelas que elevarão sua alma e mente a um estágio pleno de paz'));
                    $this->assertTrue($semana->mensagem->isValidMessageType('Agir sem pesar é tiro sem alvo, pensar sem agir é estratégia sem guerra. Saiba assimilar as duas ações e tenha a vitória como garantia de suas lutas.'));
                    $this->assertTrue($semana->mensagem->isValidMessageType('A vida não espera que os problemas sejam dissolvidos sozinhos para que a oportunidade de recomeçar surja. A vida vai além de sentar e admirar seus feitos, ela precisa que os defeitos sejam revisados e que, com o crescimento interior, o simples de cada dia se torne essencial.'));
                    $this->assertTrue($semana->mensagem->isValidMessageType('O segredo da vida é desconstruir a si mesmo em cada nova fase e passar a ver a mesma coisa cada vez com um novo olhar.'));
                    $this->assertTrue($semana->mensagem->isValidMessageType('A confiança é como uma balança: se é demais, pode somar muito; se é de menos, pode enfraquecer qualquer relação.'));
                    $this->assertTrue($semana->mensagem->isValidMessageType('Faça das palavras sua aliada em momentos bons e ruins, assim todas as palavras pronunciadas e emanadas ao universo voltarão a você em forma de amor.'));
                    $this->assertTrue($semana->mensagem->isValidMessageType('Escolha a direção que quer seguir, mas analise muito bem antes de dar o primeiro passo, pois cada caminhar pode ter um preço alto a se pagar.'));
            
            }
        }

   
   

   



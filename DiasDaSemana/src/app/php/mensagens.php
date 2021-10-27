<?php
  session_start();

interface Dias
{
    public function mensagem() :string;
}




class Semana implements Dias
{
    

    public function mensagem() :string
    {

	$dia = $_POST['tipo'];
        switch ($dia) {
	case '0':
		return "As melhores escolhas não são aquelas que farão de você um ser “quase” perfeito, mas sim aquelas que elevarão sua alma e mente a um estágio pleno de paz";
		break;
     case '1':
		return "Agir sem pesar é tiro sem alvo, pensar sem agir é estratégia sem guerra. Saiba assimilar as duas ações e tenha a vitória como garantia de suas lutas.";
		break;
     case '2':
		return "A vida não espera que os problemas sejam dissolvidos sozinhos para que a oportunidade de recomeçar surja. A vida vai além de sentar e admirar seus feitos, ela precisa que os defeitos sejam revisados e que, com o crescimento interior, o simples de cada dia se torne essencial.";
		break;
     case '3':
		return "O segredo da vida é desconstruir a si mesmo em cada nova fase e passar a ver a mesma coisa cada vez com um novo olhar.";
		break;
     case '4':
		return "A confiança é como uma balança: se é demais, pode somar muito; se é de menos, pode enfraquecer qualquer relação.";
		break;
     case '5':
		return "Faça das palavras sua aliada em momentos bons e ruins, assim todas as palavras pronunciadas e emanadas ao universo voltarão a você em forma de amor.";
		break;

	case '6':
		return "Escolha a direção que quer seguir, mas analise muito bem antes de dar o primeiro passo, pois cada caminhar pode ter um preço alto a se pagar.";
		break;

 
	default:
		return  "As melhores escolhas não são aquelas que farão de você um ser “quase” perfeito, mas sim aquelas que elevarão sua alma e mente a um estágio pleno de paz";
		break;
            }
     }
}


$context = new Semana();

$result = $context->mensagem();
$_SESSION['dia'] = $result;

?>
<script ">

window.location.replace("https://localhost/DiasDaSemana/src/app/index.php");

</script>






   
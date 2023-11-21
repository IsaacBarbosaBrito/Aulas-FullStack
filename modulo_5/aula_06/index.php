<?php
	//Arrays = Variáveis com diversas chaves!
	

	//Ao invés disso
	//$nome1 = 'Joao';
	//$nome2 = 'Guilherme';
	//$nome3 = 'Isaac';
	

	//Usamos isso

	$nome = array('Joao','Guilherme','Isaac');

	//E como acessar os valores?

	//Indique o nome da variável e logo depois seu local, sempre começando do 0

	echo $nome[0];

	//Também pode ser usado assim

	//$nome[] = 'Joao';

	//A variável vai ser atribuida ao proximo slot, sempre começando do 0

	//Também pode-se escolher qual slot você quer atribuir a variável no array

	//$nome[100] = 'Joao';

	//Também pode-se utilizar o array assim

	//$nome = ['Joao','Guilherme','Isaac'];

	//No array também pode-se misturar os tipos de variáveis

	//$nome = ['Joao',22,true,10.09];

	//Também podemos utilizar string para definição do slot de array

	//$informação['Nome'] = 'Isaac';
	//$informação['Idade'] = 23;
	//$informação['Cidade'] = 'SAD';



?>
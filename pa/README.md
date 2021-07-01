<h1>Programação e Algoritmos</h1>

<h3>Table of contents</h3>
<ul>
  <li><a href="#avalia%C3%A7%C3%A3o-final">Avaliação final</a></li>
  <li><a href="#atividade-final">Atividade final</a></li>
  <li><a href="#array">Array</a></li>
  <li><a href="#do-while">Do while</a></li>
  <li><a href="#for">For</a></li>
  <li><a href="#calcular-c%C3%A9dulas">Calcular cédulas</a></li>
  <li><a href="#operadores-l%C3%B3gicos">Operadores lógicos</a></li>
  <li><a href="#if-else">If Else</a></li>
  <li><a href="#operadores">Operadores</a></li>
</ul>  
<hr>
<h2>Avaliação final</h2> 
<ul>
  <li><strong>Code</strong>: <a href="https://github.com/khalilagazal/etec/tree/main/pa/avaliacao-final">avaliacao-final</a></li>
  <ul>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/avaliacao-final/KhalilaGazal.java">Avaliação</a></li>
  </ul>
  </li>
  <li><strong>Date</strong>: 12/2018</li>
</ul>
<p>
  O código de barras EAN -13 é um padrão de código de barras usado em supermercados e outros estabelecimentos de varejo para identificação de produtos básicos. O número gerado pelas barras é aquele que aparece abaixo das barras. Este código é composto de 13 dígitos sendo que os 12 primeiros identificam o produto e o último é o dígito de verificação. Os três primeiros dígitos indicam o país onde o código foi criado. Para verificarmos se um código foi digitado corretamente, tem-se que calcular o dígito de verificação e comparar com o que foi digitado. <strong>O problema: ler um vetor de inteiros com 13 elementos contendo os dígitos do código de barras verificar se foi digitado corretamente.</strong>
</p>
<p>
  Para calcular o dígito de verificação:
  <ul>
    <li>Multiplicar por 3 os elementos 1, 3, 5, 7, 9, 11</li>
    <li>Multiplicar por 1 os elementos 0, 2, 4, 6, 8</li>
    <li>Somar os 12 elementos</li>
    <li>Calcular o resto da divisão da soma, por 10</li>
    <li>Se o resto for 0 então o dígito de verificação é zero, senão subtrair 10 do resto e aí temos o dígito de verificação</li>
  </ul>
</p>
<p>
  Códigos de barras para testar:
  <ul>
    <li>7891098000149 (Brasil)</li>
    <li>7908012846346 (Brasil)</li>
    <li>0667528021117 (EUA)</li>
  </ul>
</p>
<a href="#table-of-contents">Go back</a>
<hr>

<h2>Atividade final</h2>
<ul>
  <li><strong>Code</strong>: <a href="https://github.com/khalilagazal/etec/tree/main/pa/atividade-final">atividade-final</a>
    <ul>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/atividade-final/Exercicio1.java">Exercício 01 A</a></li>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/atividade-final/Exercicio1B.java">Exercício 01 B</a></li>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/atividade-final/Exercicio2.java">Exercício 02</a></li>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/atividade-final/Exercicio3.java">Exercício 03</a></li>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/atividade-final/Exercicio4.java">Exercício 04</a></li>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/atividade-final/Exercicio5.java">Exercício 05</a></li>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/atividade-final/Exercicio6.java">Exercício 06</a></li>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/atividade-final/Exercicio7.java">Exercício 07</a></li>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/atividade-final/Exercicio8.java">Exercício 08 A</a></li>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/atividade-final/Exercicio8B.java">Exercício 08 B</a></li>
    </ul>
  </li>
  <li><strong>Date</strong>: 11/2018</li>
</ul>
<ol>
  <li>Funcionários de empresas comerciais que trabalham como caixa têm uma grande responsabilidade em suas mãos. A maior parte do tempo de seu expediente de trabalho é gasto recebendo valores de clientes e, em alguns casos, fornecendo troco. Seu desafio é fazer um programa que leia o valor total a ser pago e o valor efetivamente pago, informando o menor número de cédulas e moedas que devem ser fornecidas como troco. <br>Deve-se considerar que há: <br>-Cédulas de R$100,00, R$50,00, R$10,00, R$5,00 e R$1,00; <br>-Moedas de R$0,50, R$0,10, R$0,05 e R$0,01.</li>
  <li>Um homem chamado José é o responsável por ligar e desligar as luzes de um corredor. Cada lâmpada tem seu próprio interruptor que liga e a desliga. Inicialmente todas as lâmpadas estão desligadas. José faz uma coisa peculiar: se existem n lâmpadas no corredor, ele caminha até o fim do corredor e volta n vezes. Na iésima caminhada, ele aperta apenas os interruptores aos quais sua posição é divisível por i. Ele não aperta nenhum interruptor na volta à sua posição inicial, apenas na ida. A iésima caminhada é definida como ir ao fim do corredor e voltar.Determine qual é o estado final de cada lâmpada. Está ligada ou desligada? <br>Exemplo: <br>-Entrada: 3 <br>-Saída: [on, off, off]</li>
  <li>A partir de um agrupamento de números digitados em um vetor, deve-se somar todos os números existentes que sejam divisíveis por um determinado número digitado pelo usuário.</li>
  <li>Leia um vetor de 12 posições e em seguida ler também dois valores X e Y quaisquer correspondentes a duas posições no vetor. Ao final seu programa deverá escrever a soma dos valores encontrados nas respectivas posições X e Y.</li>
  <li>Faça um programa que leia e monte dois vetores de números inteiros com 20 números cada. Depois de montados gere um terceiro vetor formado pela diferença dos dois vetores lidos, um quarto vetor formado pela soma dos dois vetores lidos e por último um quinto vetor formado pela multiplicação dos dois vetores lidos.</li>
  <li>Ludimilla dá aula no cursinho popular da EACH e percebeu que apesar de os alunos terem facilidade em fazer médias aritméticas, têm muita dificuldade com as médias ponderadas. Preocupada com seus alunos, Ludimilla achou interessante mostrar um programa que fizesse esse cálculo e por isso pediu sua ajuda. Seu programa deve receber um conjunto de números e seus respectivos pesos para calcular a média ponderada entre eles.</li>
  <li>Uma aluna de SI chamada Débora que dá aula no cursinho popular da USP precisa de um programa que calcula o Máximo Divisor Comum para agilizar as correções dos exercícios e, devido à dedicação dela à graduação, encontra-se sem tempo para criar tal programa, então pediu ajuda a vocês para criá-lo. Para dois números inteiros diferentes de 0, X e Y, seu programa deverá calcular o Máximo Divisor Comum utilizando o algoritmo de Euclides.</li>
  <li>Durante uma das atividades do programa “EACH de Portas Abertas” os visitantes, antes de adentrarem à universidade, devem se organizar em trios, nos quais a ordem das pessoas participantes é definida segundo a idade. Visando-se tornar o processo de ordenação mais rápido, os responsáveis desejam instalar um terminal em que, dadas as idades dos três participantes do trio, define-se a ordem destes para visita a Universidade. Faça um programa que receba três idades, inerentes a cada pessoa do trio definido, e as imprima em ordem crescente. <br>Entrada <br>-O programa deve receber três números naturais, separados por espaço e contidos em uma única linha, os quais identificam as respectivas idades das pessoas participantes do trio. O programa é encerrado quando a entrada for 0. <br>Saída <br>-Para cada entrada do usuário o seu programa deverá imprimir, em ordem crescente, as idades registradas de cada uma das pessoas do trio definido.</li>
</ol>
<a href="#table-of-contents">Go back</a>
<hr>
<h2>Array</h2>
<ul>
  <li><strong>Code</strong>: <a href="https://github.com/khalilagazal/etec/tree/main/pa/array">array</a>
    <ul>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/array/Exercicio1.java">Exercício 01</a></li>
    </ul>
  </li>
  <li><strong>Date</strong>: 11/2018</li>
</ul>
<ol>
  <li>Escreva um programa que leia 2 vetores de 5 elementos inteiros. Criar um terceiro vetor que contenha os valores dos dois primeiros.</li>
</ol>
<a href="#table-of-contents">Go back</a>
<hr>

<h2>Do While</h2>
<ul>
  <li><strong>Code</strong>: <a href="https://github.com/khalilagazal/etec/tree/main/pa/do-while">do-while</a>
    <ul>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/do-while/Exercicio1.java">Exercício 01</a></li>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/do-while/Exercicio5.java">Exercício 05</a></li>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/do-while/Exercicio7.java">Exercício 07</a></li>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/do-while/Exercicio8.java">Exercício 08</a></li>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/do-while/Exercicio9.java">Exercício 09</a></li>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/do-while/Exercicio10.java">Exercício 10</a></li>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/do-while/Exercicio12.java">Exercício 12</a></li>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/do-while/Exercicio13.java">Exercício 13</a></li>
    </ul>
  </li>
  <li><strong>Date</strong>: 10/2018</li>
</ul>
<ul>
  <li>1. Escreva um algoritmo para ler 2 valores e se o segundo valor informado for ZERO, deve ser lido um novo valor, ou seja, para o segundo valor não pode ser aceito o valor zero e imprimir o resultado da divisão do primeiro valor lido pelo segundo valor lido. (utilizar a estrutura REPITA).</li>
  <li>5. Escreva um algoritmo para ler as notas da 1a. e 2a. avaliações de um aluno, calcule e imprima a média (simples) desse aluno. Só devem ser aceitos valores válidos durante a leitura (0 a 10) para cada nota. Acrescente uma mensagem 'NOVO CÁLCULO (S/N)?' ao final do exercício [5]. Se for respondido 'S' deve retornar e executar um novo cálculo, caso contrário deverá encerrar o algoritmo.</li>
  <li>7. Escreva um algoritmo para imprimir os números de 1 (inclusive) a 10 (inclusive) em ordem crescente.</li>
  <li>8. Escreva um algoritmo para imprimir os números de 1 (inclusive) a 10 (inclusive) em ordem decrescente.</li>
  <li>9. Escreva um algoritmo para imprimir os 10 primeiros números inteiros maiores que 100.</li>
  <li>10. Ler um valor N e imprimir todos os valores inteiros entre 1 (inclusive) e N (inclusive). Considere que o N será sempre maior que ZERO. Modifique o exercício anterior para aceitar somente valores maiores que 0 para N. Caso o valor informado (para N) não seja maior que 0, deverá ser lido um novo valor para N.</li>
  <li>12. Escreva um algoritmo que calcule e imprima a tabuada do 8 (1 a 10).</li>
  <li>13. Ler um valor inteiro (aceitar somente valores entre 1 e 10) e escrever a tabuada de 1 a 10 do valor lido.</li>
</ul>
<a href="#table-of-contents">Go back</a>
<hr>

<h2>For</h2>
<ul>
  <li><strong>Code</strong>: <a href="https://github.com/khalilagazal/etec/tree/main/pa/for">for</a>
    <ul>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/for/Exercicio1.java">Exercício 01</a></li>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/for/Exercicio2.java">Exercício 02</a></li>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/for/Exercicio3.java">Exercício 03</a></li>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/for/Exercicio4.java">Exercício 04</a></li>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/for/Exercicio5.java">Exercício 05</a></li>
    </ul>
  </li>
  <li><strong>Date</strong>: 10/2018</li>
</ul>
<ol>
  <li>Ler 80 números e ao final informar quantos números estão no intervalo entre 10 (inclusive) e 150 (inclusive)</li>
  <li>Faça um algoritmo que receba a idade de 75 pessoas e mostre mensagem informando "maior de idade" e "menor de idade" para cada pessoa. Considere a idade a partir de 18 anos como maior de idade</li>
  <li>Multiplicar dois números usando somas repetidas</li>
  <li>Solicitar uma quantidade pré-determinada de números e calcular a soma e média entre esses números</li>
  <li>Calcular a soma dos números ímpares entre um intervalo informado</li>
</ol>
<a href="#table-of-contents">Go back</a>
<hr>
<h2>Calcular cédulas</h2>
<ul>
  <li><strong>Code</strong>: <a href="https://github.com/khalilagazal/etec/tree/main/pa/cedula">cedula</a>
    <ul>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/cedula/CalcularCedula.java">Exercício</a></li>
    </ul> 
  </li>
  <li><strong>Date</strong>: 10/2018</li>
</ul>
<p>Desenvolva um programa que simule a entrega de notas quando um cliente efetuar um saque em um caixa eletrônico. Os requisitos básicos são os seguintes: <br>-Entregar o menor número de notas; <br>-É possível sacar o valor solicitado com as notas disponíveis; <br>-Saldo do cliente infinito; <br>-Quantidade de notas infinito (pode-se colocar um valor finito de cédulas para aumentar a dificuldade do problema); <br>-Notas disponíveis de R$ 100,00; R$ 50,00; R$ 20,00 e R$ 10,00 <br>Exemplos: <br>-Valor do Saque: R$ 30,00 – Resultado Esperado: Entregar 1 nota de R$20,00 e 1 nota de R$ 10,00. <br>-Valor do Saque: R$ 80,00 – Resultado Esperado: Entregar 1 nota de R$50,00 1 nota de R$ 20,00 e 1 nota de R$ 10,00.</p>
<a href="#table-of-contents">Go back</a>
<hr>
<h2>Operadores lógicos</h2>
<ul>
  <li><strong>Code</strong>: <a href="https://github.com/khalilagazal/etec/tree/main/pa/operadores-logicos">operadores-logicos</a>
    <ul>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/operadores-logicos/VerdadeiroFalso.java">Verdadeiro ou Falso</a></li>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/operadores-logicos/Triangulo.java">Triângulo</a></li>
    </ul> 
  </li>
  <li><strong>Date</strong>: 09/2018</li>
</ul>
<p>Determine o resultado lógico das expressões mencionadas, assinalando se são verdadeiras ou falsas. Considere para as respostas os seguintes valores: x = 1, a = 3, b= 5, c=8, d=7 <br>!(x>3) <br>(x<1) && !(b>d) <br>!(d<0) && (c>5) <br>!(x>3) || (c<7) <br>(a>b) || (c>b) <br>(x>=2)</p>
<a href="#table-of-contents">Go back</a>
<hr>

<h2>If Else</h2>
<ul>
  <li><strong>Code</strong>: <a href="https://github.com/khalilagazal/etec/tree/main/pa/if-else">if-else</a>
    <ul>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/if-else/Exercicio1.java">Exercício 01</a></li>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/if-else/Exercicio2.java">Exercício 02</a></li>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/if-else/Exercicio3.java">Exercício 03</a></li>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/if-else/Exercicio4.java">Exercício 04</a></li>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/if-else/Exercicio5.java">Exercício 05</a></li>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/if-else/Exercicio6.java">Exercício 06</a></li>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/if-else/Exercicio7.java">Exercício 07</a></li>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/if-else/Exercicio8.java">Exercício 08</a></li>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/if-else/Exercicio9.java">Exercício 09</a></li>
    </ul>
  </li>  
  <li><strong>Date</strong>: 08/2018</li>
</ul>
<ol>
  <li>Tendo como dados de entrada o nome, a altura e o sexo (M ou F) de uma pessoa, calcule e mostre seu peso ideal, utilizando as seguintes fórmulas: <br>-Para sexo masculino: peso ideal = (72.7 * altura) - 58 <br>-Para sexo feminino: peso ideal = (62.1 * altura) - 44.7</li>
  <li>Faça um algoritmo para ler: número da conta do cliente, saldo, débito e crédito. Após, calcular e escrever o saldo atual (saldo atual = saldo - débito + crédito). Também testar se saldo atual for maior ou igual a zero escrever a mensagem 'Saldo Positivo', senão escrever a mensagem 'Saldo Negativo'.</li>
  <li>Faça um algoritmo para ler: quantidade atual em estoque, quantidade máxima em estoque e quantidade mínima em estoque de um produto. Calcular e escrever a quantidade média  ((quantidade média = quantidade máxima + quantidade mínima)/2). Se a quantidade em estoque for maior ou igual a quantidade média escrever a mensagem 'Não efetuar compra', senão escrever a mensagem 'Efetuar compra'.</li>
  <li>Ler 3 valores (A, B e C) representando as medidas dos lados de um triângulo e escrever se formam ou não um triângulo. OBS: para formar um triângulo, o valor de cada lado deve ser menor que a soma dos outros 2 lados.</li>
  <li>Um posto está vendendo combustíveis com a seguinte tabela de descontos: <br>-Álcool: até 20 litros, desconto de 3% por litro. Acima de 20 litros, desconto de 5% por litro. <br>-Gasolina: até 20 litros, desconto de 4% por litro. Acima de 20 litros, desconto de 6% por litro <br>Escreva um algoritmo que leia o número de litros vendidos e o tipo de combustível (codificado da seguinte forma: A-álcool, G-gasolina), calcule e imprima o valor a ser pago pelo cliente sabendo-se que o preço do litro da gasolina é R$ 3,30 e o preço do litro do álcool é R$ 2,90</li>
  <li>Escreva um algoritmo que leia as idades de 2 homens e de 2 mulheres (considere que as idades dos homens serão sempre diferentes entre si, bem como as das mulheres). Calcule e escreva a soma das idades do homem mais velho com a mulher mais nova, e o produto das idades do homem mais novo com a mulher mais velha.</li>
  <li>Uma fruteira está vendendo frutas com a seguinte tabela de preços: Se o cliente comprar mais de 8 Kg em frutas ou o valor total da compra ultrapassar R$ 25,00, receberá ainda um desconto de 10% sobre este total. Escreva um algoritmo para ler a quantidade (em Kg) de morangos e a quantidade (em Kg) de maçãs adquiridas e escreva o valor a ser pago pelo cliente.</li>
  <li>Faça um algoritmo para ler um número que é um código de usuário. Caso este código seja diferente de um código armazenado internamente no algoritmo (igual a 1234) deve ser apresentada a mensagem ‘Usuário inválido!’. Caso o Código seja correto, deve ser lido outro valor que é a senha. Se esta senha estiver incorreta (a certa é 9999) deve ser mostrada a mensagem ‘senha incorreta’. Caso a senha esteja correta, deve ser mostrada a mensagem ‘Acesso permitido’.</li>
  <li>Faça um algoritmo para ler as 3 notas obtidas por um aluno nas 3 verificações e a média dos exercícios que fazem parte da avaliação.</li>
</ol>
<a href="#table-of-contents">Go back</a>
<hr>
<h2>Operadores</h2>
<ul>
  <li><strong>Code</strong>: <a href="https://github.com/khalilagazal/etec/tree/main/pa/operadores">operadores</a>
    <ul>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/operadores/Exercicio1.java">Exercício 01</a></li>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/operadores/Exercicio2.java">Exercício 02</a></li>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/operadores/Exercicio3.java">Exercício 03</a></li>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/operadores/Exercicio4.java">Exercício 04</a></li>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/operadores/Exercicio5.java">Exercício 05</a></li>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/operadores/Exercicio6.java">Exercício 06</a></li>
      <li><a href="https://github.com/khalilagazal/etec/blob/main/pa/operadores/Exercicio7.java">Exercício 07</a></li>
    </ul>
  </li>
  <li><strong>Date</strong>: 08/2018</li>
</ul>
<ol>
  <li>Escreva um algoritmo que armazene o valor 10 em uma variável A e o valor 20 em uma variável B. A seguir (utilizando apenas atribuições entre variáveis) troque os seus conteúdos fazendo com que o valor que está em A passe para B e vice-versa. Ao final, escrever os valores que ficaram armazenados nas variáveis.</li>
  <li>Escreva um algoritmo para ler um valor (do teclado) e escrever (na tela) o seu antecessor.</li>
  <li>Faça um algoritmo que leia a idade de uma pessoa expressa em anos, meses e dias e escreva a idade dessa pessoa expressa apenas em dias. Considerar ano com 365 dias e mês com 30 dias.</li>
  <li>Escreva um algoritmo para ler o número total de eleitores de um município, o número de votos brancos, nulos e válidos. Calcular e escrever o percentual que cada um representa em relação ao total de eleitores.</li>
  <li>Escreva um algoritmo para ler o salário mensal atual de um funcionário e o percentual de reajuste. Calcular e escrever o valor do novo salário.</li>
  <li>O custo de um carro novo ao consumidor é a soma do custo de fábrica com a porcentagem do distribuidor e dos impostos (aplicados ao custo de fábrica). Supondo que o percentual do distribuidor seja de 28% e os impostos de 45%, escrever um algoritmo para ler o custo de fábrica de um carro, calcular e escrever o custo final ao consumidor.</li>
  <li>Uma revendedora de carros usados paga a seus funcionários vendedores um salário fixo por mês, mais uma comissão também fixa para cada carro vendido e mais 5% do valor das vendas por ele efetuadas. Escrever um algoritmo que leia o número de carros por ele vendidos, o valor total de suas
vendas, o salário fixo e o valor que ele recebe por carro vendido. Calcule e escreva o salário final do vendedor.</li>
</ol>
<a href="#table-of-contents">Go back</a>

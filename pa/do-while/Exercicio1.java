/*
 * Escreva um algoritmo para ler 2 valores e se o segundo valor informado 
 * for ZERO, deve ser lido um novo valor, ou seja, para o segundo valor não 
 * pode ser aceito o valor zero e imprimir o resultado da divisão do primeiro 
 * valor lido pelo segundo valor lido. (utilizar a estrutura REPITA).
*/
package exercicio1;

import java.util.Scanner;

public class Exercicio1
{

    public static void main(String[] args)
    {
        Scanner s = new Scanner(System.in);
        
        System.out.println("Digite o 1º valor:");
        float n1 = s.nextFloat();
        
        System.out.println("Digite o 2º valor:");
        float n2 = s.nextFloat();
        
        while(n2==0)
        {
            System.out.println("Valor inválido!\nDigite o 2º valor:");
            n2 = s.nextFloat();
        }
        
        float divisao = n1/n2;
        System.out.println("Resultado = " + divisao);
    }
    
}
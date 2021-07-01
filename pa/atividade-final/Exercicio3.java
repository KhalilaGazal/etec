/*
 * A partir de um agrupamento de números digitados em um vetor, deve-se somar 
 * todos os números existentes que sejam divisíveis por um determinado número 
 * digitado pelo usuário.
 */
package exercicio3;

import java.util.Scanner;

public class Exercicio3
{

    public static void main(String[] args)
    {
        Scanner s = new Scanner(System.in);

        int qtd, divisor, soma=0, c=1;
        
        System.out.println("Digite a quantidade de números:");
        qtd = s.nextInt();

        System.out.println("Digite o valor do divisor:");
        divisor = s.nextInt();
               
        int[] vetor = new int[qtd];
        
        for(int i:vetor)
        {
            System.out.println("Digite o " + c + "º número:");
            vetor[i] = s.nextInt();
            c++;
            
            if(vetor[i]%divisor==0)
            {
                soma+=vetor[i];
            }
        }
        
        System.out.println("Soma = " + soma);          
    }
    
}
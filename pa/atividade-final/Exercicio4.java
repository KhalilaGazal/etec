/*
 * Leia um vetor de 12 posições e em seguida ler também dois valores X e Y 
 * quaisquer correspondentes a duas posições no vetor. 
 * Ao final seu programa deverá escrever a soma dos valores encontrados 
 * nas respectivas posições X e Y.
 */
package exercicio4;

import java.util.Scanner;

public class Exercicio4
{

    public static void main(String[] args)
    {
        Scanner s = new Scanner(System.in);
        
        int[] vetor = new int[12];        
        int x, y, soma;
        
        for(int i=0; i<vetor.length; i++)
        {
            System.out.println("Digite o valor da posição " + i + ":");
            vetor[i] = s.nextInt();
        }
        
        System.out.println("Digite a posição x:");
        x = s.nextInt();
        
        System.out.println("Digite a posição y:");
        y = s.nextInt();
        
        soma=vetor[x]+vetor[y];
        
        System.out.println(vetor[x] + " + " + vetor[y] + " = " + soma);        
    }
    
}
/*
 * Ler um valor inteiro (aceitar somente valores entre 1 e 10) e escrever 
 * a tabuada de 1 a 10 do valor lido.
 */
package exercicio13;

import java.util.Scanner;

public class Exercicio13
{

    public static void main(String[] args)
    {
        Scanner s = new Scanner(System.in);
        
        System.out.println("Digite um número entre 1 e 10:");
        int n = s.nextInt();
        
        while(!(n>=1 && n<=10))
        {
            System.out.println("Digite um número entre 1 e 10:");
            n = s.nextInt();
        }
        
        for(int i=1; i<=10; i++)
        {
            int mult = n*i;
            System.out.println(n + " x " + i + " = " + mult);
        }
    }
    
}
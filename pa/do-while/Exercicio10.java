/*
 * Ler um valor N e imprimir todos os valores inteiros entre 1 (inclusive) 
 * e N (inclusive). Considere que o N será sempre maior que ZERO.
 * Modifique o exercício anterior para aceitar somente valores maiores 
 * que 0 para N. Caso o valor informado (para N) não seja maior que 0, deverá 
 * ser lido um novo valor para N.
*/
package exercicio10;

import java.util.Scanner;

public class Exercicio10
{

    public static void main(String[] args)
    {
        Scanner s = new Scanner(System.in);
        
        System.out.println("Digite um número:");
        int n = s.nextInt();
        
        while(!(n>0))
        {
            System.out.println("Digite um número maior que zero:");
            n = s.nextInt();
        }
        
        for(int i=1; i<=n; i++)
        {
            System.out.println(i);
        }
    }
    
}
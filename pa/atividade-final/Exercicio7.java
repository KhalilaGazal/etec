/*
 * Uma aluna de SI chamada Débora que dá aula no cursinho popular da USP precisa
 * de um programa que calcula o Máximo DIvisor Comum para agilizar as correções 
 * dos exercícios e, devido à dedicação dela à graduação, encontra-se sem tempo 
 * para criar tal programa, então pediu ajuda a vocês para criá-lo.
 * Para dois números inteiros diferentes de 0, X e Y, seu programa deverá 
 * calcular o Máximo Divisor Comum utilizando o algoritmo de Euclides.
 */
package exercicio7;

import java.util.Scanner;

public class Exercicio7
{

    public static void main(String[] args)
    {
        Scanner s = new Scanner(System.in);
        
        int n1, n2, r;
        
        System.out.println("Digite o 1º número:");
        n1 = s.nextInt();
        
        while(n1==0)
        {
            System.out.println("Digite um número diferente de zero:");
            n1 = s.nextInt();
        }
        
        System.out.println("Digite o 2º número:");
        n2 = s.nextInt();
        
        while(n2==0)
        {
            System.out.println("Digite um número diferente de zero:");
            n2 = s.nextInt();
        }
        
        while(n2!=0)
        {
            r=n1%n2;
            n1=n2;
            n2=r;
        }
        
        System.out.println("MDC = " + n1);
    }
    
}
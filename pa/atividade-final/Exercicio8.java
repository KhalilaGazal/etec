/*
 * Durante uma das atividades do programa “EACH de Portas Abertas” os 
 * visitantes, antes de adentrarem à universidade, devem se organizar em trios, 
 * nos quais a ordem das pessoas participantes é definida segundo a idade. 
 * Visando-se tornar o processo de ordenação mais rápido, os responsáveis 
 * desejam instalar um terminal em que, dadas as idades dos três participantes 
 * do trio, define-se a ordem destes para visita a Universidade.
 * Faça um programa que receba três idades, inerentes a cada pessoa do trio 
 * definido, e as imprima em ordem crescente.
 * Entrada
 * O programa deve receber três números naturais, separados por espaço e 
 * contidos em uma única linha, os quais identificam as respectivas idades
 * das pessoas participantes do trio. O programa é encerrado quando a entrada 
 * for 0.
 * Saída
 * Para cada entrada do usuário o seu programa deverá imprimir, em ordem 
 * crescente, as idades registradas de cada uma das pessoas do trio definido.
 */
package exercicio8;

import java.util.Arrays;
import java.util.Scanner;

public class Exercicio8
{

    public static void main(String[] args)
    {
        Scanner s = new Scanner(System.in);

        int n=0;
        int[] idade = new int[3];
        
        do
        {
            for(int i=0; i<idade.length; i++)
            {
                n = s.nextInt();
                idade[i] = n;
                
                if(n==0)
                {
                    break;
                }
            }

            Arrays.sort(idade);

            for(int i=0; i<idade.length; i++)
            {
                System.out.print(idade[i] + " ");
            }        
            System.out.println();
        }
        while(n!=0);
    }
    
}
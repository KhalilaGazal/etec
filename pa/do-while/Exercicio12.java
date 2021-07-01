/*
 * Escreva um algoritmo que calcule e imprima a tabuada do 8 (1 a 10).
 */
package exercicio12;

public class Exercicio12
{

    public static void main(String[] args)
    {
        int n = 8;
        
        for(int i=1; i<=10; i++)
        {
            int mult = n*i;
            System.out.println(n + " x " + i + " = " + mult);
        }
    }
    
}

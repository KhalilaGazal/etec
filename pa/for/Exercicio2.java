/*
 * Faça um algoritmo que receba a idade de 75 pessoas e mostre 
 * mensagem informando "maior de idade" e "menor de idade" para cada pessoa. 
 * Considere a idade a partir de 18 anos como maior de idade
 */
package exercicio2;

import java.util.Scanner;

/**
 *
 * @author camargo
 */
public class Exercicio2
{

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args)
    {
        // TODO code application logic here
        Scanner s = new Scanner(System.in);
        
        for(int c=1; c<=75; c++)
        {
            System.out.println("Digite a " + c + "ª idade:");
            int idade = s.nextInt();
            
            if(idade>=18)
            {
                System.out.println("Maior de idade");
            }
            else
            {
                System.out.println("Menor de idade");
            }
        }
    }
    
}

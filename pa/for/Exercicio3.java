/*
 * Multiplicar dois números usando somas repetidas
 */
package exercicio3;

import java.util.Scanner;

/**
 *
 * @author camargo
 */
public class Exercicio3
{

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args)
    {
        // TODO code application logic here
        Scanner s = new Scanner(System.in);
        
        int soma=0;
        
        System.out.println("Digite o 1º número:");
        int numero1 = s.nextInt();
        
        System.out.println("Digite o 2º número:");
        int numero2 = s.nextInt();
        
        for(int c=1; c<=numero2; c++)
        {
            soma+=numero1;      
        }
        
        System.out.println("Soma = " + soma);        
    }
    
}

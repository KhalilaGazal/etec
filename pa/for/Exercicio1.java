/*
 * Ler 80 números e ao final informar quantos números estão no intervalo 
 * entre 10 (inclusive) e 150 (inclusive)
 */
package exercicio1;

import java.util.Scanner;

/**
 *
 * @author camargo
 */
public class Exercicio1
{

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args)
    {
        // TODO code application logic here
        Scanner s = new Scanner(System.in);
        
        int n=0;
        
        for(int c=1; c<=80; c++)
        {            
            System.out.println("Digite o " + c + "º número:");
            int numero = s.nextInt();
            
            if(numero>=10 && numero<=150)
            {
                n++;                
            }
        }       
        
        System.out.println(n + " números estão entre 10 e 150");
    }
    
}

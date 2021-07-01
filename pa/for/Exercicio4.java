/*
 * Solicitar uma quantidade pré-determinada de números e calcular 
 * a soma e média entre esses números
 */
package exercicio4;

import java.util.Scanner;

/**
 *
 * @author camargo
 */
public class Exercicio4 
{

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args)
    {
        // TODO code application logic here
        Scanner s = new Scanner(System.in);
        
        int numero=0, soma=0;
        float media=0;
        
        System.out.println("Digite a quantidade de números:");
        int qtd = s.nextInt();
        
        for(int c=1; c<=qtd; c++)
        {
            System.out.println("Digite o " + c + "º número:");
            numero = s.nextInt();
            
            soma+=numero;
            media = soma/c;            
        }
        
        System.out.println("Soma = " + soma + "\nMédia = " + media);           
    }
    
}

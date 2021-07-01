/*
 * Escreva um algoritmo para ler um valor (do teclado) e 
 * escrever (na tela) o seu antecessor.
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
        
        System.out.print("Digite um número inteiro: ");
        int numero = s.nextInt();
        
        System.out.println("Antecessor = " + --numero);        
    }
    
}

/*
 * Faça um algoritmo para ler: quantidade atual em estoque, quantidade máxima 
 * em estoque e quantidade mínima em estoque de um produto. Calcular e escrever 
 * a quantidade média  
 * ((quantidade média = quantidade máxima + quantidade mínima)/2). 
 * Se a quantidade em estoque for maior ou igual a quantidade média escrever a 
 * mensagem 'Não efetuar compra', senão escrever a mensagem 'Efetuar compra'.
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
        
        System.out.print("Digite a quantidade atual em estoque: ");
        int qtdAtual = s.nextInt();
        
        System.out.print("Digite a quantidade máxima em estoque: ");
        int qtdMax = s.nextInt();
        
        System.out.print("Digite a quantidade mínima em estoque: ");
        int qtdMin = s.nextInt();
        
        int qtdMedia = (qtdMax + qtdMin)/2;
        
        if(qtdAtual>=qtdMedia)
        {
            System.out.println("Não efetuar compra.");
        }
        else
        {
            System.out.println("Efetuar compra.");
        }        
    }
    
}

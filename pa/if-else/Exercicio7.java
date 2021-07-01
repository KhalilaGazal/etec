/*
 * Uma fruteira está vendendo frutas com a seguinte tabela de preços:
 * Se o cliente comprar mais de 8 Kg em frutas ou o valor total da compra 
 * ultrapassar R$ 25,00, receberá ainda um desconto de 10% sobre este total. 
 * Escreva um algoritmo para ler a quantidade (em Kg) de morangos e a quantidade 
 * (em Kg) de maças adquiridas e escreva o valor a ser pago pelo cliente.
 */
package exercicio7;

import java.util.Scanner;

/**
 *
 * @author camargo
 */
public class Exercicio7 
{

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) 
    {
        // TODO code application logic here
        Scanner s = new Scanner(System.in);
        
        float valorMorango, valorMaca;
        
        System.out.println("Digite a quantidade (em Kg) de morangos: ");
        float pesoMorango = s.nextFloat();
        
        System.out.println("Digite a quantidade (em Kg) de maçãs: ");
        float pesoMaca = s.nextFloat();        
       
        if(pesoMorango<5)
        {
            valorMorango = pesoMorango * 2.50F;
        }
        else
        {
            valorMorango = pesoMorango * 2.20F;
        }
        
        if(pesoMaca<5)
        {
            valorMaca = pesoMaca * 1.80F;
        }
        else
        {
            valorMaca = pesoMaca * 1.50F;
        }
        
        float valorTotal = valorMorango + valorMaca;
                
        if(pesoMorango+pesoMaca>8 || valorMorango+valorMaca>25)
        {
            valorTotal = valorTotal - (valorTotal * 0.10F);
        }
        
        System.out.printf("Valor: R$%.2f", valorTotal);
        System.out.println();
    }
    
}

/*
 * Faça um algoritmo para ler: número da conta do cliente, saldo, débito e 
 * crédito. Após, calcular e escrever o saldo atual 
 * (saldo atual = saldo - débito + crédito). 
 * Também testar se saldo atual for maior ou igual a zero escrever a 
 * mensagem 'Saldo Positivo', senão escrever a mensagem 'Saldo Negativo'.
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
        
        System.out.println("Digite o número da sua conta: ");
        int numeroConta = s.nextInt();
        
        System.out.println("Digite o seu saldo: ");
        float saldo = s.nextFloat();
        
        System.out.println("Digite o débito: ");
        float debito = s.nextFloat();
        
        System.out.println("Digite o crédito: ");
        float credito = s.nextFloat();
        
        float saldoAtual = saldo - (debito+credito);
        
        if(saldoAtual>0)
        {
            System.out.println("Saldo positivo");
        }
        else
        {
            System.out.println("Saldo negativo");
        }
        
        System.out.printf("Saldo: R$%.2f", saldoAtual);
        System.out.println();  
    }
    
}

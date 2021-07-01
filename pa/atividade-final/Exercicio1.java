/*
 * Funcionários de empresas comerciais que trabalham como caixa 
 * tem uma grande responsabilidade em suas mãos. A maior parte do tempo 
 * de seu expediente de trabalho é gasto recebendo valores de clientes e, 
 * em alguns casos, fornecendo troco.
 * Seu desafio é fazer um programa que leia o valor total a ser pago e o 
 * valor efetivamente pago, informando o menor número de cédulas e moedas 
 * que devem ser fornecidas como troco.
 * Deve-se considerar que há:
 * Cédulas de R$100,00, R$50,00, R$10,00, R$5,00 e R$1,00;
 * Moedas de R$0,50, R$0,10, R$0,05 e R$0,01.
 */
package exercicio1;

import java.text.DecimalFormat;
import java.util.Scanner;

public class Exercicio1
{

    public static void main(String[] args)
    {
        Scanner s = new Scanner(System.in);
        DecimalFormat df = new DecimalFormat("0.00");

        int i;
        double valorTotal, valorPago, valorTroco;
        double[] valores = {100,50,10,5,1,0.5,0.1,0.05,0.01};
        double[] n = new double[valores.length];

        System.out.println("Digite o valor total:");
        valorTotal = s.nextDouble();
        
        System.out.println("Digite o valor pago:");
        valorPago = s.nextDouble();
        
        while(valorPago<valorTotal)
        {
            System.out.println("Valor pago menor que o valor total!");
            System.out.println("Digite o valor pago novamente:");
            valorPago = s.nextDouble();
        }
        
        valorTroco = valorPago-valorTotal;   
        System.out.println("TROCO = R$" + df.format(valorTroco));

        for(i=0; i<valores.length; i++)
        {
            n[i] = valorTroco/valores[i];
            valorTroco%=valores[i]; 
        }   

        for(i=0; i<=5; i++)
        {
            if((int)n[i]>0)
            {
                System.out.println((int)n[i] + " cédula(s) de R$" + 
                        df.format(valores[i]));  
            }            
        }
        for(i=6; i<=8; i++)
        {
            if((int)n[i]>0)
            {
                System.out.println((int)n[i] + " moeda(s) de R$" + 
                        df.format(valores[i]));
            }            
        }
    }
    
}
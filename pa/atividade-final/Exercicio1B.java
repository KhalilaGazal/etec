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
package exercicio1b;

import java.text.DecimalFormat;
import java.util.Scanner;

public class Exercicio1B
{

    public static void main(String[] args)
    {
        Scanner s = new Scanner(System.in);
        DecimalFormat df = new DecimalFormat("0.00");
        
        double valorTotal, valorPago, valorTroco, centavos;
        double cedula100, cedula50, cedula10, cedula5, cedula1;
        double moeda50, moeda10, moeda5, moeda1;        
        
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
        
        valorTroco = valorPago - valorTotal;        
        System.out.println("TROCO = " + df.format(valorTroco));

        cedula100 = valorTroco/100.0;
        valorTroco%=100.0;
        
        cedula50 = valorTroco/50.0;
        valorTroco%=50.0;
        
        cedula10 = valorTroco/10.0;
        valorTroco%=10.0;
        
        cedula5 = valorTroco/5.0;
        valorTroco%=5.0;
        
        cedula1 = valorTroco;
        
        centavos=valorTroco*100;
        
        moeda50 = centavos/50.0;
        centavos%=50.0;
        
        moeda10 = centavos/10.0;
        centavos%=10.0;
        
        moeda5 = centavos/5.0;
        centavos%=5.0;
        
        moeda1 = centavos;
        
        System.out.println("CÉDULAS");
        System.out.println((int)cedula100 + " cédula(s) de R$100,00");
        System.out.println((int)cedula50 + " cédula(s) de R$50,00");
        System.out.println((int)cedula10 + " cédula(s) de R$10,00");
        System.out.println((int)cedula5 + " cédula(s) de R$5,00");
        System.out.println((int)cedula1 + " cédula(s) de R$1,00");
        
        System.out.println("MOEDAS");
        System.out.println((int)moeda50 + " moeda(s) de R$0,50");
        System.out.println((int)moeda10 + " moeda(s) de R$0,10");
        System.out.println((int)moeda5 + " moeda(s) de R$0,05");
        System.out.println((int)moeda1 + " moeda(s) de R$0,01");
    }
    
}
/*
 * 6 - O custo de um carro novo ao consumidor é a soma do custo 
 * de fábrica com a porcentagem do distribuidor e dos impostos 
 * (aplicados ao custo de fábrica). Supondo que o percentual do 
 * distribuidor seja de 28% e os impostos de 45%, escrever um algoritmo 
 * para ler o custo de fábrica de um carro, calcular e escrever o 
 * custo final ao consumidor
 */
package exercicio6;

import java.util.Scanner;

/**
 *
 * @author camargo
 */
public class Exercicio6
{

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args)
    {
        // TODO code application logic here        
        Scanner s = new Scanner(System.in);
        
        System.out.print("Digite o valor do custo de fábrica: ");
        double custoFabrica = s.nextDouble();
        
        double percentual = custoFabrica * 28/100;
        
        double impostos = custoFabrica * 45/100;
        
        double custoFinal = custoFabrica + percentual + impostos;
        
        System.out.println("Custo final = R$ = " + custoFinal);  
    }
    
}

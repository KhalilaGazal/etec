/*
 * Ludimilla dá aula no cursinho popular da EACH e percebeu que apesar de os 
 * alunos terem facilidade em fazer médias aritméticas, têm muita dificuldade 
 * com as médias ponderadas. Preocupada com seus alunos, Ludimilla achou 
 * interessante mostrar um programa que fizesse esse cálculo e por isso pediu 
 * sua ajuda.
 * Seu programa deve receber um conjunto de números e seus respectivos pesos 
 * para calcular a média ponderada entre eles.
 */
package exercicio6;

import java.text.DecimalFormat;
import java.util.Scanner;

public class Exercicio6
{

    public static void main(String[] args)
    {
        Scanner s = new Scanner(System.in);
        DecimalFormat df = new DecimalFormat("0.00");
        
        double soma=0, somaPeso=0, media=0;
        
        System.out.println("Digite a quantidade de números:");
        int qtd = s.nextInt();
        
        double[] n = new double[qtd];
        double[] peso = new double[qtd];
        double[] mult = new double[qtd];
        
        for(int i=0; i<n.length; i++)
        {
            System.out.println("Digite o " + (i+1) + "º número:");
            n[i] = s.nextDouble();
        }        
      
        for(int i=0; i<peso.length; i++)
        {
            System.out.println("Digite o peso do " + (i+1) + "º número:");
            peso[i] = s.nextDouble();
            somaPeso+=peso[i];
        }      
        
        for(int i=0; i<mult.length; i++)
        {
            mult[i] = n[i]*peso[i];
            soma+=mult[i];
        }
        
        media=soma/somaPeso;
        
        System.out.println("Média = " + df.format(media));
    }
    
}
/*
 * 7 - Uma revendedora de carros usados paga a seus funcionários 
 * vendedores um salário fixo por mês, mais uma comissão também fixa 
 * para cada carro vendido e mais 5% do valor das vendas por ele efetuadas. 
 * Escrever um algoritmo que leia o número de carros por ele vendidos, 
 * o valor total de suas vendas, o salário fixo e o valor que ele recebe 
 * por carro vendido. Calcule e escreva o salário final do vendedor.
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
              
        System.out.print("Digite a quantidade de carros vendidos: ");
        int qtdCarros = s.nextInt();       
        
        System.out.print("Digite o valor total das vendas: ");
        double valorTotal = s.nextDouble();
        
        System.out.print("Digite o valor do salário fixo: ");
        double salarioFixo = s.nextDouble();
        
        System.out.print("Digite o valor recebido por carro vendido: ");
        double comissaoCarro = s.nextDouble();
        
        double comissao = (comissaoCarro * qtdCarros) + 
                          (valorTotal * 5/100);
        
        double salarioFinal = salarioFixo + comissao;
        
        System.out.printf("Salário final = R$%.2f", salarioFinal);
        System.out.println();        
    }
    
}

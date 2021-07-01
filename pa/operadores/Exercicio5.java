/*
 * Escreva um algoritmo para ler o salário mensal atual de um funcionário 
 * e o percentual de reajuste. Calcular e escrever o valor do novo salário.
 */
package exercicio5;

import java.util.Scanner;

/**
 *
 * @author camargo
 */
public class Exercicio5 
{

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) 
    {
        // TODO code application logic here        
        Scanner s = new Scanner(System.in);
        
        System.out.print("Digite o salário atual: ");
        double salario = s.nextDouble();
        
        System.out.print("Digite o percentual de reajuste: ");
        double reajuste = s.nextDouble();

        double novoSalario = salario + (salario*reajuste/100);

        System.out.printf("Novo salário = R$%.2f", novoSalario);
        System.out.println();
    }
    
}

/*
 * Um posto está vendendo combustíveis com a seguinte tabela de descontos:
 * Álcool:
 * - até 20 litros, desconto de 3% por litro
 * - acima de 20 litros, desconto de 5% por litro
 * Gasolina:
 * - até 20 litros, desconto de 4% por litro
 * - acima de 20 litros, desconto de 6% por litro
 * Escreva um algoritmo que leia o número de litros vendidos e o tipo de 
 * combustível (codificado da seguinte forma: A-álcool, G-gasolina), calcule e 
 * imprima o valor a ser pago pelo cliente sabendo-se que o preço do litro da 
 * gasolina é R$ 3,30 e o preço do litro do álcool é R$ 2,90
 */
package exercicio5;

import java.text.DecimalFormat;
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
        DecimalFormat df = new DecimalFormat("0.00");
        
        float valor=0, desconto=0, valorFinal=0;
        
        float valorAlcool = 2.90F;
        float valorGasolina = 3.30F;
        
        System.out.println("Digite a quantidade de litros vendidos:");
        int litros = s.nextInt();
        
        System.out.println("Digite o tipo de combustível: (a para álcool e g para gasolina:");
        String combustivel = s.next();
        
        if(combustivel.equals("a") || combustivel.equals("A"))
        {
            valor = valorAlcool*litros;
            if(litros<=20)
            {
                desconto = 0.03F*valor;
            }
            else
            {
                desconto = 0.05F*valor;
            }
            
        }
        
        else if(combustivel.equals("g") || combustivel.equals("G"))
        {
            valor = valorGasolina*litros;
            if(litros<=20)
            {
                desconto = 0.04F*valor;
            }
            else
            {
                desconto = 0.06F*valor;
            }
            
        }
        
        else
        {
            System.out.println("Erro");
        }
        
        valorFinal=valor-desconto;
        System.out.println("Valor: R$" + df.format(valorFinal));
    }
    
}

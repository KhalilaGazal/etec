/*
 * Tendo como dados de entrada o nome, a altura e o sexo (M ou F) de uma pessoa, 
 * calcule e mostre seu peso ideal, utilizando as seguintes fórmulas:
 * - para sexo masculino: peso ideal = (72.7 * altura) - 58
 * - para sexo feminino: peso ideal = (62.1 * altura) - 44.7
 */
package exercicio1;

import java.text.DecimalFormat;
import java.util.Scanner;

/**
 *
 * @author camargo
 */
public class Exercicio1 
{

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) 
    {
        // TODO code application logic here
        Scanner s = new Scanner(System.in);
        DecimalFormat df = new DecimalFormat("0.0");
        
        float pesoIdeal=0;
        
        System.out.println("Digite o seu nome:");
        String nome = s.nextLine();
        
        System.out.println("Digite a sua altura (em metros):");
        float altura = s.nextFloat();
        
        System.out.println("Digite o sexo (m para masculino e f para feminino):");
        String sexo = s.next();
        
        if(sexo.equals("m"))
        {
            pesoIdeal = (72.7F * altura) - 58F;
        }
        else if(sexo.equals("f"))
        {
              pesoIdeal = (62.1F * altura) - 44.7F;
        }
        else
        {
            System.out.println("Erro!");
        }        
        
        System.out.println("Peso ideal: " + df.format(pesoIdeal) + " kg");      
    }
    
}

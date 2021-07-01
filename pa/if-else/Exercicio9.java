/*
 * Faça um algoritmo para ler as 3 notas obtidas por um aluno nas 3 verificações
 * e a média dos exercícios que fazem parte da avaliação. Calcular a média de 
 * aproveitamento, usando a fórmula abaixo e escrever o conceito do aluno de 
 * acordo com a tabela de conceitos mais abaixo:
 */
package exercicio9;

import java.util.Scanner;

/**
 *
 * @author camargo
 */
public class Exercicio9 
{

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) 
    {
        // TODO code application logic here
        Scanner s = new Scanner(System.in);
        
        System.out.println("Digite a 1ª nota: ");
        float nota1 = s.nextFloat();
        
        System.out.println("Digite a 2ª nota: ");
        float nota2 = s.nextFloat();
        
        System.out.println("Digite a 3ª nota: ");
        float nota3 = s.nextFloat();
        
        System.out.println("Digite a média dos exercícios: ");
        float mediaExercicios = s.nextFloat();
        
        float media = (nota1 + (nota2*2) + (nota3*3) + mediaExercicios)/7;
        
        if(media>=9)
        {
            System.out.println("Aproveitamento: A");
        }
        else if(media>=7.5 && media<9)
        {
            System.out.println("Aproveitamento: B");
        }
        else if(media>=6 && media<7.5)
        {
            System.out.println("Aproveitamento: C");
        }
        else
        {
            System.out.println("Aproveitamento: D");
        }
        
        System.out.printf("Média: %.2f", media);
        System.out.println();
        
//        if(media>=9)
//        {
//            System.out.println("Aproveitamento: A");
//        }
//        else
//        {
//            if(media>=7.5 && media<9)
//            {
//                System.out.println("Aproveitamento: B");
//            }
//            else
//            {
//                if(media>=6 && media<7.5)
//                {
//                    System.out.println("Aproveitamento: C");
//                }
//                else
//                {
//                    System.out.println("Aproveitamento: D");
//                }
//            }
//        }      
    }
    
}

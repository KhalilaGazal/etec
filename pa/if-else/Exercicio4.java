/*
 * Ler 3 valores (A, B e C) representando as medidas dos lados de um triângulo 
 * e escrever se formam ou não um triângulo. OBS: para formar um triângulo, 
 * o valor de cada lado deve ser menor que a soma dos outros 2 lados 
 */
package exercicio4;

import java.util.Scanner;

/**
 *
 * @author camargo
 */
public class Exercicio4 
{

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args)
    {
        // TODO code application logic here
        Scanner s = new Scanner(System.in);
        
        System.out.println("Digite a medida do lado A: ");
        float a = s.nextFloat();
        
        System.out.println("Digite a medida do lado B: ");
        float b = s.nextFloat();
        
        System.out.println("Digite a medida do lado C: ");
        float c = s.nextFloat();
        
        if(a<(b+c) && b<(a+c) && c<(a+b))
        {
            System.out.println("É formado um triângulo.");
        }
        else
        {
            System.out.println("Não é formado um triângulo.");
        }
    }
    
}

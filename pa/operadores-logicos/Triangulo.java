/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package triangulo;

import java.util.Scanner;

/**
 *
 * @author Camargo
 */
public class Triangulo
{

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args)
    {
        // TODO code application logic here
        Scanner s = new Scanner(System.in);
        
        System.out.println("Digite o valor do lado A: ");
        int a = s.nextInt();
        
        System.out.println("Digite o valor do lado B: ");
        int b = s.nextInt();
        
        System.out.println("Digite o valor do lado C: ");
        int c = s.nextInt();
        
        if((a<b+c) && (b<a+c) && (c<a+b))
        {
            if((a==b) && (b==c))
            {
                System.out.println("Triângulo equilátero");
            }
            else if((a==b) || (a==c) || (b==c))
            {
                System.out.println("Triângulo isóceles");
            }
            else
            {
                System.out.println("Triângulo escanelo");
            }
        }
        else
        {
            System.out.println("Estas medidas não formam um triângulo");     
        }          
   
    }
    
}

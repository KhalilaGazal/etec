/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package calculadora;

import java.util.Scanner;

/**
 *
 * @author Camargo
 */
public class Calculo
{
    Scanner s = new Scanner(System.in);
    
    float n1, n2, resultado;
    int op;
    
    public void escolherOperacao()
    {
        System.out.println("1 = soma" +
                        "\n2 = subtração" +
                        "\n3 = multiplicação" +
                        "\n4 = divisão");
        
        System.out.println("Escolha uma operação: ");
        op = s.nextInt();
        
        switch(op)
        {
            case 1:
                somar();
                break;
            case 2:
                subtrair();
                break;
            case 3:
                multiplicar();
                break;
            case 4:
                dividir();
                break;
            default:
                break;
        }
    }
    
    public void somar()
    {
        System.out.println("Digite o 1º número:");
        n1 = s.nextInt();
        
        System.out.println("Digite o 2º número:");
        n2 = s.nextInt();
        
        resultado = n1+n2;
        System.out.println("Total da soma: " + (int) resultado);
    }
    
    public void subtrair()
    {
        System.out.println("Digite o 1º número:");
        n1 = s.nextInt();
        
        System.out.println("Digite o 2º número:");
        n2 = s.nextInt();
        
        resultado = n1-n2;
        System.out.println("Total da subtração: " + (int) resultado);
    }
    
    public void multiplicar()
    {
        System.out.println("Digite o 1º número:");
        n1 = s.nextInt();
        
        System.out.println("Digite o 2º número:");
        n2 = s.nextInt();
        
        resultado = n1*n2;
        System.out.println("Total da multiplicação: " + (int) resultado);
    }
    
    public void dividir()
    {
        System.out.println("Digite o 1º número:");
        n1 = s.nextInt();
        
        System.out.println("Digite o 2º número:");
        n2 = s.nextInt();
        
        resultado = n1/n2;
        System.out.println("Total da divisão: " + resultado);
    }
    
}

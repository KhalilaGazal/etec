/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package tabuada;

import java.util.Scanner;

/**
 *
 * @author Camargo
 */
public class Tabuada
{
    Scanner s = new Scanner(System.in);
    
    public void escolherTabuada1() //sem parâmetros e sem retorno
    {
        System.out.println("Digite um número:");
        int n = s.nextInt();
        
        for(int i=1; i<=10; i++)
        {
            int mult = n*i;
            System.out.println(n + " x " + i + " = " + mult);
        }
    }
    
    public void escolherTabuada2(int op) //com parâmetros e sem retorno
    {
        for(int i=1; i<=10;i++)
        {
            int mult = i*op;
            System.out.println(op + " x " + i + " = " + mult);
        }
    }
}

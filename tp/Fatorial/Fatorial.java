/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package fatorial;

import java.util.Scanner;

/**
 *
 * @author Camargo
 */
public class Fatorial
{

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args)
    {
        // TODO code application logic here
        Scanner s = new Scanner(System.in);
        
        int fatorial=1;
        
        System.out.println("Digite um número:");
        int n = s.nextInt();
        
        for(int i=1; i<=n; i++)
        {
            fatorial*=i;
        }
        System.out.println(n + "! = " + fatorial);
    }
    
}

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
public class Main
{

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args)
    {
        // TODO code application logic here
        Scanner s = new Scanner(System.in);
        
        Tabuada t = new Tabuada();
        
        //t.escolherTabuada1();
        
        System.out.println("Digite um número:");
        t.escolherTabuada2(s.nextInt());
    }
    
}

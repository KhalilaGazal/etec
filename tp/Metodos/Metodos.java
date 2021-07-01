/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package metodos;

import java.util.Scanner;

/**
 *
 * @author Camargo
 */
public class Metodos
{
    Scanner s = new Scanner(System.in);
    
    public void escolherOpcao1() //sem parâmetros e sem retorno
    {
        System.out.println("Escolha:\n1 = Masculino \n2 = Feminino"
                        + "\n0 = Sair");
        int op = s.nextInt();
        
        while(op!=0)
        {
            switch(op)
            {
                case 1:
                    System.out.println("Masculino");
                    break;
                case 2:
                    System.out.println("Feminino");
                    break;
                default:
                    System.out.println("Opção inválida! Digite novamente:");
                    break;
            }
            op = s.nextInt();            
        }        
    }
    
    public void escolherOpcao2(int op) //com parâmetros e sem retorno 
    {
        while(op!=0)
        {
            switch(op)
            {
                case 1:
                    System.out.println("Masculino");
                    break;
                case 2:
                    System.out.println("Feminino");
                    break;
                default:
                    System.out.println("Opção inválida! Digite novamente:");
                    break;
            }
            op = s.nextInt();            
        } 
    }
    
}

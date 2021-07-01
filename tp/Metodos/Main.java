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
public class Main
{

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        Scanner s = new Scanner(System.in);
        
        Metodos m = new Metodos();
        
        //m.escolherOpcao1();
        
        System.out.println("Escolha:\n1 = Masculino \n2 = Feminino"
                        + "\n0 = Sair");        
        m.escolherOpcao2(s.nextInt());
    }
    
}

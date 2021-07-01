/*
 * Faça um algoritmo que leia a idade de uma pessoa expressa em anos, 
 * meses e dias e escreva a idade dessa pessoa expressa apenas em dias. 
 * Considerar ano com 365 dias e mês com 30 dias
 */
package exercicio3;

import java.util.Scanner;

/**
 *
 * @author camargo
 */
public class Exercicio3 
{

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) 
    {
        // TODO code application logic here        
        Scanner s = new Scanner(System.in);
        
        System.out.print("Digite a idade em anos: ");
        int anos = s.nextInt();
        
        System.out.print("Digite a idade em meses: ");
        int meses = s.nextInt();
        
        System.out.print("Digite a idade em dias: ");
        int dias = s.nextInt();
        
        int conversao = (anos*365) + (meses*30) + dias;
        
        System.out.println("Idade em dias: " + conversao);        
    }
    
}

/*
 * Escreva um programa que leia 2 vetores de 5 elementos inteiros.
 * Criar um terceiro vetor que contenha os valores dos dois primeiros.
 */
package exercicio1;

import java.util.Scanner;

public class Exercicio1
{

    public static void main(String[] args)
    {
        Scanner s = new Scanner(System.in);
        
        int c=1;
        
        int[] vet1 = new int[5];
        int[] vet2 = new int[5];
        int[] vet3 = new int[vet1.length + vet2.length];
        
        System.out.println("VETOR 1");
        for(int i=0; i<vet1.length; i++)
        {
            System.out.println("Digite o  " + c + "º valor:");
            vet1[i] = s.nextInt();
            c++;
            vet3[i] = vet1[i];
        }
        
        c=1;
        
        
        System.out.println("VETOR 2");
        for(int i=0; i<vet2.length; i++)
        {            
            System.out.println("Digite o  " + c + "º valor:");
            vet2[i] = s.nextInt();
            c++;
            vet3[i+vet1.length] = vet2[i];
        }
        
        for(int i=0; i<vet3.length; i++)
        {
            System.out.println("vet3[" + i + "] = " + vet3[i]);
        }

    }
    
}

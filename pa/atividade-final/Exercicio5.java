/*
 * Faça um programa que leia e monte dois vetores de números inteiros com 
 * 20 números cada. Depois de montados gere um terceiro vetor formado pela 
 * diferença dos dois vetores lidos, um quarto vetor formado pela soma dos 
 * dois vetores lidos e por último um quinto vetor formado pela multiplicação 
 * dos dois vetores lidos.
 */
package exercicio5;

import java.util.Scanner;

public class Exercicio5
{

    public static void main(String[] args)
    {
        Scanner s = new Scanner(System.in);
        
        int[] vet1 = new int[20], vet2 = new int[20];
        int[] vet3 = new int[20], vet4 = new int[20], vet5 = new int[20];
        
        System.out.println("VETOR 1");
        for(int i=0; i<vet1.length; i++)
        {
            System.out.println("Digite o " + (i+1) + "º número:");
            vet1[i] = s.nextInt();
        }
        
        System.out.println();
        System.out.println("VETOR 2");
        for(int i=0; i<vet2.length; i++)
        {
            System.out.println("Digite o " + (i+1) + "º número:");
            vet2[i] = s.nextInt();    
        }
        
        System.out.println();
        System.out.println("VETOR 3:");
        for(int i=0; i<vet3.length; i++)
        {
            vet3[i] = vet2[i]-vet1[i];            
            System.out.println("vet3[" + i + "] = " + vet3[i]);            
        }
        
        System.out.println();
        System.out.println("VETOR 4:");
        for(int i=0; i<vet4.length; i++)
        {
            vet4[i] = vet1[i] + vet2[i];
            System.out.println("vet4[" + i + "] = " + vet4[i]);            
        }
        
        System.out.println();
        System.out.println("VETOR 5:");
        for(int i=0; i<vet5.length; i++)
        {
            vet5[i] = vet1[i] * vet2[i];
            System.out.println("vet5[" + i + "] = " + vet5[i]);            
        }
    }
    
}
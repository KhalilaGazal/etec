/*
 * Escreva um algoritmo que leia as idades de 2 homens e de 2 mulheres 
 * (considere que as idades dos homens serão sempre diferentes entre si, 
 * bem como as das mulheres). Calcule e escreva a soma das idades do homem 
 * mais velho com a mulher mais nova, e o produto das idades do homem mais
 * novo com a mulher mais velha.
 */
package exercicio6;

import java.util.Scanner;

/**
 *
 * @author camargo
 */
public class Exercicio6 
{

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) 
    {
        // TODO code application logic here
        Scanner s = new Scanner(System.in);
        
        int homemNovo, homemVelho, mulherNova, mulherVelha;
        
        System.out.println("Digite a idade do 1º homem: ");
        int homem1 = s.nextInt();
        
        System.out.println("Digite a idade do 2º homem: ");
        int homem2 = s.nextInt();
        
        System.out.println("Digite a idade da 1ª mulher: ");
        int mulher1 = s.nextInt();
        
        System.out.println("Digite a idade da 2ª mulher: ");
        int mulher2 = s.nextInt();
        
        if(homem1>homem2)
        {
            homemVelho = homem1;
            homemNovo = homem2;
        }
        else if(homem2>homem1)
        {
            homemVelho = homem2;
            homemNovo = homem1;
        }
        else
        {
            homemVelho = homem1;
            homemNovo = homem1;
            
        }
        
        if(mulher1>mulher2)
        {
            mulherVelha = mulher1;
            mulherNova = mulher2;
        }
        else if(mulher2>mulher1)
        {            
            mulherVelha = mulher2;
            mulherNova = mulher1;
        }
        else
        {
            mulherNova = mulher1;
            mulherVelha = mulher1;
        }
        
        int soma = homemVelho + mulherNova;
        int produto = homemNovo * mulherVelha;
        
//        System.out.println("Homem mais novo: " +homemNovo + 
//                "\nHomem mais velho: "+ homemVelho);        
//        System.out.println("Mulher mais nova: " + mulherNova +
//                "\nMulher mais velha: " + mulherVelha);    

        System.out.println("Soma: " + soma + "\nProduto: " + produto);       
    }
    
}

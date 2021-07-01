/*
 * Calcular a soma dos números ímpares entre um intervalo informado
 */
package exercicio5;

import java.util.Scanner;

/**
 *
 * @author camargo
 */
public class Exercicio5 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        Scanner s = new Scanner(System.in);
        
        int soma=0;
        
        System.out.println("Digite o primeiro número:");
        int numero1 = s.nextInt();
        
        System.out.println("Digite o último número:");
        int numero2 = s.nextInt();
        
        int min = Math.min(numero1, numero2);
        int max = Math.max(numero1, numero2);
        
        for(int c=min; c<=max; c++)
        {
            if(c%2!=0)
            {
                soma+=c;
            }
        }    
        
        System.out.println("Soma = " + soma);
    }
    
}

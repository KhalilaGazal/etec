/*
 * Escreva um algoritmo para ler o número total de eleitores de um município, 
 * o número de votos brancos, nulos e válidos. Calcular e escrever o percentual 
 * que cada um representa em relação ao total de eleitores.
 */
package exercicio4;

import java.util.Scanner;

/**
 *
 * @author camargo
 */
public class Exercicio4 
{

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) 
    {
        // TODO code application logic here        
        Scanner s = new Scanner(System.in);
        
        System.out.print("Digite o número total de eleitores: ");
        int totalEleitores = s.nextInt();
        
        System.out.print("Digite o número de votos brancos: ");
        int votosBrancos = s.nextInt();
        
        System.out.print("Digite o número de votos nulos: ");
        int votosNulos = s.nextInt(); 
        
        int votosValidos = totalEleitores - (votosNulos + votosBrancos);
        int pBrancos = (100 * votosBrancos) / totalEleitores;
        int pNulos = (100 * votosNulos) / totalEleitores;
        int pValidos = (100 * votosValidos) / totalEleitores;
        
        System.out.println("Votos válidos = " + pValidos + "%");
        System.out.println("Votos brancos = " + pBrancos + "%");
        System.out.println("Votos nulos = " + pNulos + "%");        
    }
    
}

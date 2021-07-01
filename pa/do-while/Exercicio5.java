/*
 * Escreva um algoritmo para ler as notas da 1a. e 2a. avaliações de um aluno, 
 * calcule e imprima a média (simples) desse aluno. Só devem ser aceitos valores 
 * válidos durante a leitura (0 a 10) para cada nota.
 * Acrescente uma mensagem 'NOVO CÁLCULO (S/N)?' ao final do exercício [5]. 
 * Se for respondido 'S' deve retornar e executar um novo cálculo, 
 * caso contrário deverá encerrar o algoritmo.
 */
package exercicio5;

import java.util.Scanner;

public class Exercicio5
{

    public static void main(String[] args)
    {
        Scanner s = new Scanner(System.in);

        String calculo = "S";
        
        while(calculo.equals("S") || calculo.equals("s"))
        {
            System.out.println("Digite a 1ª nota:");
            float n1 = s.nextFloat();

            while(!(n1>=0 && n1<=10))
            {
                System.out.println("Digite um valor entre 0 e 10:");
                n1 = s.nextFloat();
            }

            System.out.println("Digite a 2ª nota:");
            float n2 = s.nextFloat();

            while(!(n2>=0 && n2<=10))
            {
                System.out.println("Digite um valor entre 0 e 10:");
                n2 = s.nextFloat();
            }

            float media = (n1+n2)/2F;
            System.out.println("Média = " + media); 

            System.out.println("Novo cálculo? [S/N]");
            calculo = s.next();        
        }
    }
    
}
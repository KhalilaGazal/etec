/*
 * Desenvolva um programa que simule a entrega de notas quando um cliente 
 * efetuar um saque em um caixa eletrônico. Os requisitos básicos são os seguintes:
 * Entregar o menor número de notas;
 * É possível sacar o valor solicitado com as notas disponíveis;
 * Saldo do cliente infinito;
 * Quantidade de notas infinito (pode-se colocar um valor finito de cédulas para
 * aumentar a dificuldade do problema);
 * Notas disponíveis de R$ 100,00; R$ 50,00; R$ 20,00 e R$ 10,00
 * Exemplos:
 * Valor do Saque: R$ 30,00 – Resultado Esperado: Entregar 1 nota de R$20,00 e 
 * 1 nota de R$ 10,00.
 * Valor do Saque: R$ 80,00 – Resultado Esperado: Entregar 1 nota de R$50,00 
 * 1 nota de R$ 20,00 e 1 nota de R$ 10,00.
 */
package calcularcedula;

import java.util.Scanner;

public class CalcularCedula
{

    public static void main(String[] args)
    {
        Scanner s = new Scanner(System.in);
        
        System.out.println("Digite o valor:");
        float valor = s.nextInt();
        
        while(valor!=0)
        {            
            float cedula100 = valor/100;
            valor%=100;

            float cedula50 = valor/50;
            valor%=50;

            float cedula20 = valor/20;
            valor%=20;

            float cedula10 = valor/10;
            valor%=10;

            if(valor==0)
            {
                System.out.println("CÉDULAS:");
                System.out.println((int)cedula100 + " nota(s) de R$100,00");
                System.out.println((int)cedula50 + " nota(s) de R$50,00");
                System.out.println((int)cedula20 + " nota(s) de R$20,00");
                System.out.println((int)cedula10 + " nota(s) de R$10,00");
            }
            else
            {
                System.out.println("VALOR INVÁLIDO!\nNotas disponíveis\nR$ 100,00"
                                + "\nR$ 50,00\nR$ 20,00\nR$ 10,00"
                                + "\nDigite novamente:");
                valor = s.nextInt();
            }    
        }    
    }
    
}
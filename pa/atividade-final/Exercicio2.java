/*
 * Um homem chamado José é o responsável por ligar e desligar as luzes de um 
 * corredor. Cada lâmpada tem seu próprio interruptor que liga e a desliga. 
 * Inicialmente todas as lâmpadas estão desligadas.
 * José faz uma coisa peculiar: se existem n lâmpadas no corredor, ele caminha 
 * até o fim do corredor e volta n vezes. Na iésima caminhada, ele aperta apenas 
 * os interruptores aos quais sua posição é divisível por i. Ele não aperta 
 * nenhum interruptor na volta à sua posição inicial, apenas na ida. 
 * A iésima caminhada é definida como ir ao fim do corredor e voltar.
 * Determine qual é o estado final de cada lâmpada. Está ligada ou desligada?
 * Exemplo:
 * Entrada: 3          
 * Saída: [on, off, off]
 */
package exercicio2;

import java.util.Scanner;

public class Exercicio2
{

    public static void main(String[] args)
    {
        Scanner s = new Scanner(System.in);
        
        int qtd, i;
        String resultado;
        
        System.out.println("Digite a quantidade de lâmpadas:");
        qtd = s.nextInt();
        
        boolean[] estado = new boolean[qtd];
        
        for(i=0; i<estado.length; i++)
        {
            estado[i] = false;
        }
        
        for(i=1; i<=qtd; i++)
        {
            for(int j=0; j<estado.length; j++)
            {
                if((j+1)%i==0)
                {
                    estado[j]=!estado[j];       
                }
            }
        }
        
        resultado="[";
        for(i=0; i<estado.length; i++)
        {
            if(i!=qtd-1)
            {
                if(estado[i])
                {
                    resultado+="on, ";
                }
                else
                {
                    resultado+="off, ";
                }
            }
            else
            {
                if(estado[i])
                {
                    resultado+="on";
                }
                else
                {
                    resultado+="off";
                }   
            }            
        }
        resultado+="]";
        
        System.out.println(resultado);
    }
    
}
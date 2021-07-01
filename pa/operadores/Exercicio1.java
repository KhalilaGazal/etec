/*
 * 1 - Escreva um algoritmo que armazene o valor 10 em uma variável A e o 
 * valor 20 em uma variável B. A seguir (utilizando apenas atribuições 
 * entre variáveis) troque os seus conteúdos fazendo com que o valor 
 * que está em A passe para B e vice-versa. Ao final, escrever os valores 
 * que ficaram armazenados nas variáveis.
 */
package exercicio1;

/**
 *
 * @author camargo
 */
public class Exercicio1
{
    
    /**
     * @param args the command line arguments
     */
    public static void main(String[] args)
    {
        // TODO code application logic here
        
        int a = 10, b = 20, aux; //variável auxiliar
        
        aux = a;
        a = b;
        b = aux;       
        
        System.out.println("A = " + a);
        System.out.println("B = " + b);        
    }
    
}

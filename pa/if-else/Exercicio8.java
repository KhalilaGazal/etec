/*
 * Faça um algoritmo para ler um número que é um código de usuário. 
 * Caso este código seja diferente de um código armazenado internamente 
 * no algoritmo (igual a 1234) deve ser apresentada a mensagem 
 * ‘Usuário inválido!’. Caso o Código seja correto, deve ser lido outro 
 * valor que é a senha. Se esta senha estiver incorreta (a certa é 9999) 
 * deve ser mostrada a mensagem ‘senha incorreta’. Caso a senha esteja correta, 
 * deve ser mostrada a mensagem ‘Acesso permitido’.
 */
package exercicio8;

import java.util.Scanner;

/**
 *
 * @author camargo
 */
public class Exercicio8 
{

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) 
    {
        // TODO code application logic here
        Scanner s = new Scanner(System.in);
        
        System.out.println("Digite o código de usuário: ");
        int codigo = s.nextInt();
        
        if(codigo==1234)
        {
            System.out.println("Digite a senha: ");
            int senha = s.nextInt();
            
            if(senha==9999)
            {
                System.out.println("Acesso permitido!");
            }
            else
            {
                System.out.println("Senha incorreta!");
            }
        }
        else
        {
            System.out.println("Usuário inválido!");
        }
    }
    
}

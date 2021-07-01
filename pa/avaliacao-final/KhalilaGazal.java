package khalilagazal;

import java.util.Scanner;

public class KhalilaGazal
{
    
    public static void main(String[] args)
    {
        Scanner s = new Scanner(System.in);
        
        int[] n = new int[13];
        int soma=0, digito, resto;
        
        for(int i=0; i<n.length; i++)
        {
            System.out.println("Digite o " + (i+1) + "º número:");
            n[i] = s.nextInt();
        }
             
        soma+=((n[1]+n[3]+n[5]+n[7]+n[9]+n[11])*3) + 
                (n[0]+n[2]+n[4]+n[6]+n[8]+n[10]);
        
        System.out.println(soma);

        resto=soma%10;
        
        if(resto==0)
        {
            digito=0;
        }
        else
        {
            digito=10-resto;
        }
        
        if(n[12]==digito)
        {
            System.out.println("Dígito correto");
        }
        else
        {
            System.out.println("Dígito incorreto");
        }        
    }    
    
}
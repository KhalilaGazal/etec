package calcularimc;

import java.text.DecimalFormat;
import java.util.Scanner;

public class CalcularImc
{
    Scanner s = new Scanner(System.in);
    DecimalFormat df = new DecimalFormat("0.0");
    
    public void calcularImc()
    {
        System.out.println("Digite a altura (em metros):");
        float altura = s.nextFloat();
        
        System.out.println("Digite o peso:");
        float peso = s.nextFloat();
        
        float imc = peso / (altura*altura);
        
        if(imc<18.5)
        {
            System.out.println("Abaixo do peso");
        }
        else if(imc<=24.9)
        {
            System.out.println("Peso normal");
        }
        else if(imc<=29.9)
        {
            System.out.println("Sobrepeso");
        }
        else if(imc<=34.9)
        {
            System.out.println("Obesidade grau 1");
        }
        else if(imc<=39.9)
        {
            System.out.println("Obesidade grau 2");
        }
        else
        {
            System.out.println("Obesidade grau 3");
        }
        
        System.out.println("IMC = " + df.format(imc));
    }
    
}
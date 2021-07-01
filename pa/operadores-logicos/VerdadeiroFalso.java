/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package verdadeirofalso;

/**
 *
 * @author Camargo
 */
public class VerdadeiroFalso
{

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args)
    {
        // TODO code application logic here
        
        int x = 1, a = 3, b= 5, c=8, d=7;
        boolean r;
        
        r = !(x>3);
        System.out.println(r);
        
        r = (x<1) && !(b>d);
        System.out.println(r);
        
        r = !(d<0) && (c>5);
        System.out.println(r);
        
        r = !(x>3) || (c<7);
        System.out.println(r);
        
        r = (a>b) || (c>b);
        System.out.println(r);
        
        r = (x>=2);
        System.out.println(r);
    }
    
}

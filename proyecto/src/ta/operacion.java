
package ta;
import java.util.Scanner;
import java.math.*;

public class operacion 

{
    double numero1;
    double numero2;
    double numero3;
    double operacion;
    double operacion2;


    void establecernumero1(double num1)
    {
        numero1 = num1;
    }
    double obtenernumero1()
    {
        return numero1;
    }

    void establecernumero2(double num2)
    {
          numero2 = num2;
    }

    double obtenernumero2()
    {
         return numero2;
    }
    void establecernumero3(double num3)
    {
           numero3 = num3;
    }
    double obtenernumero3()
    {
       return numero3;
    }


    double operacion1() 
    {
    double operacion1;
            operacion1 = numero1 - numero2;
            return operacion1;
 
    }

   
double operacion2()
{
double operacion2;

operacion2 = (-numero2 + Math.sqrt((numero2*numero2)-(4*numero1*numero3)))/(2*numero1);

return operacion2;

}
double operacion3()
{
double operacion3;

operacion3 = (-numero2 - Math.sqrt((numero2*numero2)-(4*numero1*numero3)))/(2*numero1);

return operacion3;
}
      
}
    


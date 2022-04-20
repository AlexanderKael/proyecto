package ta;


public class Main {

    public static void main(String[] args)
    {
    operacion Operacion = new operacion();

    Operacion.establecernumero1(2);
    Operacion.establecernumero2(10);
    Operacion.establecernumero3(9);

System.out.println("Coeficiente Cuadratico: "+Operacion.obtenernumero1());
System.out.println("Coeficiente Lineal: "+Operacion.obtenernumero2());
System.out.println("Constante: : "+Operacion.obtenernumero3());
System.out.println(" x1 :"+Operacion.operacion2());
System.out.println(" x2 :"+Operacion.operacion3());
     
    }
    
}


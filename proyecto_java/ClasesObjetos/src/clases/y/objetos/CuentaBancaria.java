package clases.y.objetos;

public class CuentaBancaria {
    long numeroCuenta;
    String propietarioCuenta;
    Double saldoCuenta;
    
    public void abonar (Double cantidad){
      saldoCuenta += cantidad;
    }
    public void retirar (Double cantidad){
        if(cantidad > saldoCuenta){
            System.out.println("¡Saldo insuficiente!");
        }
        saldoCuenta -= cantidad;
    }
    
    
}

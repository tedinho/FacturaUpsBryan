export class Persona {

    id: number;
    estado: string;
    nombre: string;
    apellido: string;
    celular: string;
    mail: string;
    numero_identificacion: string;
    tipo_persona: string;
    tipo_identificacion: string;


    getNombreApellido(): string {
        return this.nombre + " " + this.apellido;
    }
}
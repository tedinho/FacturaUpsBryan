import { Usuario } from './Usuario';
import { Cliente } from './Cliente';
export class Factura {
    id: number;
    cli_direccion: string;
    cli_email: string;
    cli_identificacion: string;
    cli_razon_social: string;
    cli_telefono: string;
    fecha: Date;
    id_cliente: number;
    importe_total: number;
    total_iva_cobrado: number;
    total_sin_impuesto: number;
    id_usuario: number;
    usuario: Usuario;
    cliente: Cliente;

}
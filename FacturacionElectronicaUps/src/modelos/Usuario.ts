import { Persona } from './Persona';

export class Usuario {
    id: number;
    nombre: string;
    estado: string;
    id_persona: number;
    persona: Persona;
    claveTransient: string;
}
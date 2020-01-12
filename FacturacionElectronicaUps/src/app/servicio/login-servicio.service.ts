import { Injectable } from '@angular/core';
import { Http } from '@angular/http';
import { map } from "rxjs/operators";
import { Observable } from 'rxjs';
import { UsuarioClave } from 'src/modelos/UsuarioClave';
const API_URL: string = 'http://localhost:8000/api/';

@Injectable({
  providedIn: 'root'
})
export class LoginServicioService {

  constructor(private http: Http) { }

  autentificar(nombre, pass) {
    return this.http.get(API_URL + 'usuarioClave/validar/' + nombre + '/' + pass).pipe(map(res => res.json()));
  }


}

import { Component } from '@angular/core';
import { LoginServicioService } from './servicio/login-servicio.service'
import { Usuario } from 'src/modelos/Usuario';
import { Router, ActivatedRoute } from '@angular/router';
import { from } from 'rxjs';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'FacturacionElectronicaUps';
  nombre: string = '';
  usuario: Usuario;
  mensajeError: string;


  constructor(private loginServicio: LoginServicioService, private router: Router) { }

  ngOnInit() {
    this.usuario = new Usuario();
  }

  validar() {
    console.log("entro");
    this.loginServicio
      .autentificar(this.usuario.nombre, this.usuario.claveTransient)
      .subscribe(respuesta => {
        if (respuesta != null && respuesta.length > 0) {
          this.router.navigate(['/home']);
        } else {
          this.mensajeError = "Usuario o Contraseña Inconrrectos";
        }
      });

  }


}

import { Component } from '@angular/core';
import { FormsModule } from '@angular/forms';
@Component({
  selector: 'app-login',
  standalone: true, // <- necessário
  imports: [FormsModule],
  templateUrl: './login.html',
  styleUrls: ['./login.css']
})
export class Login {
  email: string = '';
  senha: string = '';

  fazerLogin() {
    console.log('Email:', this.email);
    console.log('Senha:', this.senha);
  }
}

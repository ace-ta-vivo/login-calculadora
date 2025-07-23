import { Routes } from '@angular/router';
import { Login } from './login/login.component'; // Garanta que o caminho para o seu Login componente está correto

export const routes: Routes = [
  { path: 'login', component: Login }, // Define a rota '/login' para o seu componente Login
  { path: '', redirectTo: '/login', pathMatch: 'full' }, // Redireciona a rota raiz ('/') para '/login'
  // Futuramente, você adicionará a rota para o componente da calculadora aqui
];
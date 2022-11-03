import { Injectable } from '@angular/core';
import { environment } from 'src/environments/environment';
import { HttpClient } from '@angular/common/http';
import { Employe } from '../models/employe';
@Injectable({
  providedIn: 'root'
})
export class EmployeServiceService {

  constructor(private http: HttpClient) { }

  getAll(){
    return this.http.get<Employe[]>(environment.api + 'employes');
  }
}

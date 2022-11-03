import { Component, OnInit } from '@angular/core';
import { Employe } from '../models/employe';
import { EmployeServiceService } from '../services/employe-service.service';

@Component({
  selector: 'app-profile',
  templateUrl: './profile.component.html',
  styleUrls: ['./profile.component.css']
})
export class ProfileComponent implements OnInit {
  currentEmp!:Employe;
  allEmp!: Employe[];
  constructor(
    private employeService: EmployeServiceService
  ) { }

  ngOnInit(): void {
    this.employeService.getAll().toPromise().then(res=>{
      this.allEmp = res;
      this.currentEmp = res[0]
    })
  }
}

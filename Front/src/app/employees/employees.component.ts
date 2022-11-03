import { Component, OnInit } from '@angular/core';
import { EmployeServiceService } from '../services/employe-service.service';

@Component({
  selector: 'app-employees',
  templateUrl: './employees.component.html',
  styleUrls: ['./employees.component.css']
})
export class EmployeesComponent implements OnInit {

  constructor(private employeService :EmployeServiceService) { }

  ngOnInit(): void {
    this.employeService.getAll().toPromise().then(
      (res) => {console.log(res);
      }
  );

}
}

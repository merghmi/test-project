import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { EmployeesComponent } from './employees/employees.component';
import { ProfileComponent } from './profile/profile.component';

const routes: Routes = [
  {
    path:"profile",
    component:ProfileComponent,
  },
  {
    path:"employee",
    component:EmployeesComponent,
  },
  {
    path:"",
    pathMatch:"full",
    redirectTo:"profile"
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }

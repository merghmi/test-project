export interface Employe {

  EMPNO:number;
  ENAME:string;
  JOB:string;
  MGR :Employe;
  HIREDATE:Date;
  SAL:string;
  COMM:any;
  DEPTNO:any;
  child_emp:Employe[];
  employes:Employe[];
  dept:DEPT;
}
 export interface DEPT{
  DEPTNO:number;
  DNAME:string;
  LOC:string;
 }

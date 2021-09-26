
#create database
create database placement;
#select database
 use placement;
# Create Admin table
 create table Admin(aid int primary key,auname varchar(10),apass varchar(10));

# insert values in Admin
 insert into Admin values(1,'Arjun','Arjun@123');

#create addcompany table
 create table addcompany(cno int auto_increment primary key,Company_Name varchar(30),Criteria varchar(30),Last_date date,Discription varchar(5000));

#create Student_Reg table
 create table Student_Reg(sid int auto_increment primary key,StudentName varchar(60),Address varchar(100),City varchar(20),Email varchar(40),Mobile bigint(20),Qualification varchar(20),Gender varchar(20),BirthDate date,UserName varchar(15) unique,PRN_NO int unique,Pass varchar(20),Status enum('Selected','Not Selected'));  

#create application table
 create table application(apply_id int auto_increment primary key,sid int,foreign key(sid)references Student_Reg(sid),cno int ,foreign key(cno)references addcompany(cno),location varchar(70),exprience varchar(20),SSCPer varchar(20),HSCPer varchar(20),FYBSCPer_grade varchar(20),SYBSCPer_grade varchar(20),TYBSCPer_grade varchar(20),MSC_grade varchar(20),AnyGap enum('yes','no'),Gap_resaon varchar(30),ProjectDetails varchar(500),Resume blob); 

#create placement head table
 create table Placement_head(Head_id int primary key,Uname varchar(20) unique,pass varchar(20));

# inserting values int Placement_head
insert into Placement_head values(1,'Tushar','Tushar@123');
#create Feedback
 create table Feedback(Fid int  auto_increment primary key,sid int,foreign key(sid)references Student_Reg(sid),Feeback varchar(200),Feedbackdate date);

#create Reply table
 create table Reply(rid int auto_increment primary key,sid int,foreign key(sid)references Student_Reg(sid),Reply_message varchar(200),Reply_date date);

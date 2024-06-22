create database school;
create table `student` (
    `id`int unsigned Not null primary key auto_increment,
    `name` varchar(100) not null,
    `email`varchar(100) not null ,
    `gender`char(6) not null,
    `dob`date not null,
    `age`tinyint unsigned Default 0);

    -- CRUD
    -- create
    insert into `student`(`name`,`email`,`gender`,`dob`,`age`)
    values ('Ei','eiphue@gmail.com','femal','2002-2-23',23),
    ('yamone','yamone@gmail.com','femal','2002-4-23',33),
    ('EiPHue','ei@gmail.com','femal','2002-2-13',23);
    -- read
    select `name`,`email`,`gender`,`dob`,`age` from `student`;

    -- edit
    select * from student where name='Ei'

    -- update
    update `student` set `name`='Ei' where id='2';
     update `student` set `email`='mya@gmail.com' where id='2';

-- delete
delete from `student` where id='3';

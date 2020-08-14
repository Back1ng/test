create database testovoe;

create table branches (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

create table jobs (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

create table workers (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    surname VARCHAR(255) NOT NULL,
    branch_id BIGINT,
    FOREIGN KEY (branch_id)
    REFERENCES branches (id)
    );

ALTER TABLE workers
    ADD job_id BIGINT;

ALTER TABLE workers
    ADD
    FOREIGN KEY (job_id)
    REFERENCES jobs (id);
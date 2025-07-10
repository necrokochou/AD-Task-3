-- Active: 1752155566470@@127.0.0.1@5111@pgdb@public
CREATE TABLE IF NOT EXISTS public."users" (
    id uuid NOT NULL PRIMARY KEY DEFAULT gen_random_uuid(),
    username varchar(255) NOT NULL,
    first_name varchar(255) NOT NULL,
    middle_name varchar(255),
    last_name varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    role varchar(255) NOT NULL
);
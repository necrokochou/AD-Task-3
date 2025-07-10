-- Active: 1752155566470@@127.0.0.1@5111@pgdb@public
CREATE TABLE IF NOT EXISTS public."projects" (
    id uuid NOT NULL PRIMARY KEY DEFAULT gen_random_uuid(),
    name varchar(255) NOT NULL,
    start_date date,
    end_date date,
    status varchar(50)
);
-- Active: 1752155566470@@127.0.0.1@5111@pgdb@public
CREATE TABLE IF NOT EXISTS public."project_users" (
    project_id uuid NOT NULL REFERENCES projects (id),
    user_id uuid NOT NULL REFERENCES users (id),
    PRIMARY KEY (project_id, user_id)
);
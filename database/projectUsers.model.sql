CREATE TABLE IF NOT EXISTS project_users (
    project_id INT NOT NULL REFERENCES projects (id),
    user_id INT NOT NULL REFERENCES users (id),
    role VARCHAR(50) NOT NULL,
    PRIMARY KEY (project_id, user_id)
);
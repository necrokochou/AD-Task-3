CREATE TABLE IF NOT EXISTS task (
    id INT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    created_at TIMESTAMP,
    due_date TIMESTAMP,
    status VARCHAR(50)
);
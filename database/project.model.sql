CREATE TABLE IF NOT EXISTS project (
    id INT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    start_date DATE,
    end_date DATE,
    status VARCHAR(50)
);
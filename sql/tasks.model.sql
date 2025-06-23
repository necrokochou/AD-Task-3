CREATE TABLE IF NOT EXISTS tasks (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    project_id INTEGER NOT NULL REFERENCES projects (id),
    assigned_user_id INTEGER REFERENCES users (id),
    title VARCHAR(255) NOT NULL,
    description TEXT,
    status VARCHAR(255) DEFAULT 'pending',
    due_date DATE
);
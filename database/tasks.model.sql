CREATE TABLE IF NOT EXISTS public."tasks" (
    id UUID NOT NULL PRIMARY KEY DEFAULT gen_random_uuid(),
    name VARCHAR(255) NOT NULL,
    description TEXT,
    created_at TIMESTAMP,
    due_date TIMESTAMP,
    status VARCHAR(50)
);
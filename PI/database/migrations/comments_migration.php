    <?php
    $conn = connection();

    $conn->exec(
    "CREATE TABLE IF NOT EXISTS comments (
        id INTEGER PRIMARY KEY NOT NULL,
        comment VARCHAR(256), 
        user_id INTEGER,
        created_at TEXT DEFAULT CURRENT_DATE
        )"
    );

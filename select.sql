-- posts.sql
use c9;

-- 1
SELECT id FROM posts;

-- 2
SELECT created_at FROM posts LIMIT 1;

-- 3
SELECT created_at FROM posts ORDER BY created_at ASC LIMIT 1;

-- 4
SELECT DISTINCT author FROM posts;

--5
SELECT * FROM posts ORDER BY

-- weather_data.sql
CREATE DATABASE blogdb;
USE blogdb;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100)
);

CREATE TABLE posts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(200),
  content TEXT,
  author_id INT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users (name) VALUES
('Aarav'), ('Diya'), ('Karan');

INSERT INTO posts (title, content, author_id) VALUES
('First Post', 'This is the first sample blog post.', 1),
('Tech Update', 'Latest updates in technology world.', 2),
('Web Tips', 'Simple tricks to improve your website.', 3);

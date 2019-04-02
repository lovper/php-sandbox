CREATE TABLE posts
(
  id         int primary key auto_increment,
  title      varchar(255),
  body       varchar(255),
  created_at timestamp default current_timestamp,
  updated_at timestamp,
  user_id    int
);

CREATE TABLE comments
(
  id         int primary key auto_increment,
  post_id    int,
  body       varchar(255),
  created_at timestamp default current_timestamp,
  updated_at timestamp,
  user_id    int
);

CREATE TABLE users
(
  id         INT AUTO_INCREMENT PRIMARY KEY,
  email      VARCHAR(255) NOT NULL,
  password   VARCHAR(255) NOT NULL,
  nick       VARCHAR(255),
  name       VARCHAR(255),
  surname    VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

create table tags
(
  id          int auto_increment primary key,
  name        varchar(255),
  description varchar(255)
);

CREATE TABLE posts_tags
(
  post_id INT,
  tag_id  INT,
  PRIMARY KEY (tag_id, post_id)
);

ALTER TABLE posts
  ADD FOREIGN KEY fk_user (user_id) REFERENCES users (id);
ALTER TABLE comments
  ADD FOREIGN KEY fk_post (post_id) REFERENCES posts (id),
  ADD FOREIGN KEY fk_user (user_id) REFERENCES users (id);
ALTER TABLE posts_tags
  ADD FOREIGN KEY fk_post (post_id) REFERENCES posts (id),
  ADD FOREIGN KEY fk_tag (tag_id) REFERENCES tags (id);


show tables;
USE DATABASE math; 

CREATE TABLE user (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NULL,
  level INT NULL,
  PRIMARY KEY (id));

SELECT id,name,level FROM user WHERE (name = 'alice');
INSERT INTO user (name,level) VALUES ('diane',3);
DELETE FROM user WHERE (id = 5);
UPDATE user SET level = 2 WHERE id = 2;
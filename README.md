mysql 접속시

mysql -uexample -p
examplepass

use exampledb

CREATE TABLE userinfo(
    username varchar(20) not null PRIMARY KEY,
    password varchar(20) not null,
    sex char(5) not null,
    is_admin boolean not null default 0,
    is_banned boolean not null default 0,
    warning int not null default 0
);

CREATE TABLE article (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(20) NOT NULL,
  description TEXT NOT NULL,
  user_name VARCHAR(20) NOT NULL,
  is_clame boolean DEFAULT 0,
  FOREIGN KEY (user_name) REFERENCES userinfo(username)
);

foreign key를 설정해놓아서 회원탈퇴 처리 php에서 게시글 다 삭제후 회원탈퇴진행되게만듦


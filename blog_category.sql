create table category
(
  id          int auto_increment
    primary key,
  name        varchar(255) null,
  description text         null,
  slug        varchar(255) null
);

INSERT INTO blog.category (id, name, description, slug) VALUES (1, 'Политика', null, 'politika');
INSERT INTO blog.category (id, name, description, slug) VALUES (2, 'Бизнес', null, 'biznes');
INSERT INTO blog.category (id, name, description, slug) VALUES (3, 'Мысли', null, 'mysli');
INSERT INTO blog.category (id, name, description, slug) VALUES (4, 'Заметки', null, 'zametki');
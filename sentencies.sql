create table books
(
    id         int auto_increment
        primary key,
    title      varchar(255) not null,
    author     varchar(255) not null,
    created_at int          null,
    num_pag    int          not null
);

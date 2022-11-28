CREATE TABLE users (
    id_user SERIAL PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    email VARCHAR(150),
    password VARCHAR,
    phone VARCHAR(50),
    address VARCHAR(200),
    isadmin BOOLEAN
);

INSERT INTO users (first_name, last_name, email, password, phone, address, isadmin) VALUES ('Super', 'Admin', 'superadmin@admin.com', '$2y$10$b30KCoe2t0NZ7NXyIl04..hkTF2n1B2pGAeOzopuUmU1nMad7Atia', NULL, 'RUA', true);

CREATE TABLE category_cakes(
    id_category_cake SERIAL PRIMARY KEY,
    name_category VARCHAR(150)
);

INSERT INTO category_cakes (id_category_cake, name_category) VALUES (1, 'Casamento');
INSERT INTO category_cakes (id_category_cake, name_category) VALUES (2, 'Aniversário');
INSERT INTO category_cakes (id_category_cake, name_category) VALUES (3, 'Chá');
INSERT INTO category_cakes (id_category_cake, name_category) VALUES (4, 'Diversos');


CREATE TABLE cakes(
    id_cake SERIAL PRIMARY KEY,
    name_cake VARCHAR,
    category_cake_id INTEGER,
    user_id INTEGER,
    size_cake INTEGER,
    type_pasta VARCHAR,
    receipt_date BIGINT,
    filling VARCHAR,
    roof VARCHAR,
    note VARCHAR,
    price DOUBLE PRECISION,
    theme_cake VARCHAR,
    url_image VARCHAR,
    isshipping BOOLEAN
);

ALTER TABLE cakes ADD FOREIGN KEY (category_cake_id) REFERENCES category_cakes(id_category_cake);
ALTER TABLE cakes ADD FOREIGN KEY (user_id) REFERENCES users(id_user);

CREATE TABLE assesstments(
    id_assesstment SERIAL PRIMARY KEY,
    user_id INTEGER,
    comment TEXT,
    created TIMESTAMP
);

ALTER TABLE assesstments ADD FOREIGN KEY (user_id) REFERENCES users(id_user);
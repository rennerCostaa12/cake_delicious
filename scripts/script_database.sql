CREATE TABLE users (
    id_user SERIAL PRIMARY KEY,
    username VARCHAR(50),
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    email VARCHAR(150),
    password VARCHAR(50),
    phone VARCHAR(50),
    address VARCHAR(200),
    isadmin BOOLEAN,
);

COMMENT ON TABLE users IS 'Tabela que irá conter os registros de todos os usuários da plataforma';

COMMENT ON COLUMN users.username IS 'o nickname do usuário ou apelido';
COMMENT ON COLUMN users.first_name IS 'primeiro nome do usuário';
COMMENT ON COLUMN users.last_name IS 'último nome do usuário';
COMMENT ON COLUMN users.email IS 'email do usuário';
COMMENT ON COLUMN users.password IS 'senha do usuário';
COMMENT ON COLUMN users.isadmin IS 'campo que irá verificar se ele é admin ou não';
COMMENT ON COLUMN users.created IS 'data de criação do registro';
COMMENT ON COLUMN users.modified IS 'data de modificação do registro';

CREATE TABLE category_cakes(
    id_category_cake SERIAL PRIMARY KEY,
    name_category VARCHAR(150),
    url_image VARCHAR,
    created TIMESTAMP,
);

COMMENT ON TABLE category_cakes IS 'Tabela que irá conter os registros das categorias dos bolos';

COMMENT ON COLUMN category_cakes.name_category IS 'nome da categoria do bolo';
COMMENT ON COLUMN category_cakes.url_image IS 'url da imagem da categoria do bolo';
COMMENT ON COLUMN category_cakes.created IS 'data de criação do registro';
COMMENT ON COLUMN category_cakes.modified IS 'data de modificação do registro';

CREATE TABLE cakes(
    id_cake SERIAL PRIMARY KEY,
    category_cake_id INTEGER,
    user_id INTEGER,
    size_cake INTEGER,
    ingredients TEXT,
    receipt_date TIMESTAMP,
    created TIMESTAMP,
    modified TIMESTAMP
);

ALTER TABLE cakes ADD FOREIGN KEY (category_cake_id) REFERENCES category_cakes(id_category_cake);
ALTER TABLE cakes ADD FOREIGN KEY (user_id) REFERENCES users(id_user);

COMMENT ON TABLE cakes IS 'Tabela que irá conter todos os tipos de bolos que o cliente cadastrar e pedir';

COMMENT ON COLUMN cakes.category_cake_id IS 'categoria do bolo';
COMMENT ON COLUMN cakes.user_id IS 'usuário que fez o pedido do bolo';
COMMENT ON COLUMN cakes.size_cake IS 'quantidade de andares do bolo';
COMMENT ON COLUMN cakes.ingredients IS 'igrendientes que o bolo terá';
COMMENT ON COLUMN cakes.receipt_date IS 'data de quando o pedido será finalizado';
COMMENT ON COLUMN cakes.created IS 'data da criação do registro';
COMMENT ON COLUMN cakes.modified IS 'data da modificação do registro';

CREATE TABLE assesstments(
    id_assesstment SERIAL PRIMARY KEY,
    user_id INTEGER,
    comment TEXT,
    created TIMESTAMP,
    modified TIMESTAMP
);

ALTER TABLE assesstments ADD FOREIGN KEY (user_id) REFERENCES users(id_user);

COMMENT ON TABLE assesstments IS 'Tabela que irá conter os comentários de feedbacks do usuários';

COMMENT ON COLUMN assesstments.user_id IS 'usuário que escreveu o feedback';
COMMENT ON COLUMN assesstments.comment IS 'o comentário que o usuário escreveu';
COMMENT ON COLUMN assesstments.created IS 'data da criação do registro';
COMMENT ON COLUMN assesstments.modified IS 'data da modificação do registro';
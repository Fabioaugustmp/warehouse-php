## CRIA O BANCO DE DADOS CHAMADOS WAREHOUSE

CREATE IF NOT EXISTS DATABASE `warehouse`

## CRIA A NOSSA PRIMEIRA TABELA DE PRODUTOS
  
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    sku VARCHAR(255) NOT NULL,
    nome VARCHAR(255) NOT NULL,
    description TEXT,
    estilo VARCHAR(255),
    valor DECIMAL(10, 2) NOT NULL,
    estoque INT NOT NULL
);

## INSERE NOSSOS PRIMEIROS REGISTROS NA TABELA DE PRODUTOS

INSERT INTO products (sku, nome, description, estilo, valor, estoque) VALUES
('SKU101', 'Product 4', 'Description of Product 4', 'Style D', 39.99, 60),
('SKU102', 'Product 5', 'Description of Product 5', 'Style E', 69.99, 90),
('SKU103', 'Product 6', 'Description of Product 6', 'Style F', 24.99, 120),
('SKU104', 'Product 7', 'Description of Product 7', 'Style G', 19.99, 80),
('SKU105', 'Product 8', 'Description of Product 8', 'Style H', 54.99, 70),
('SKU106', 'Product 9', 'Description of Product 9', 'Style I', 44.99, 110),
('SKU107', 'Product 10', 'Description of Product 10', 'Style J', 34.99, 95),
('SKU108', 'Product 11', 'Description of Product 11', 'Style K', 29.99, 55),
('SKU109', 'Product 12', 'Description of Product 12', 'Style L', 49.99, 65),
('SKU110', 'Product 13', 'Description of Product 13', 'Style M', 64.99, 105);

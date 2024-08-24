CREATE TABLE propiedades (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tipo ENUM('CASA', 'DEPARTAMENTO', 'TERRENO') NOT NULL,
    ubicacion VARCHAR(255) NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    ambientes INT NOT NULL
);

INSERT INTO propiedades (tipo, ubicacion, precio, ambientes) VALUES
('CASA', 'Palermo', 500000, 3),
('DEPARTAMENTO', 'Recoleta', 300000, 2),
('TERRENO', 'San Telmo', 200000, 0);

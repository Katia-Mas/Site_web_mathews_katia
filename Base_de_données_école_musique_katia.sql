CREATE TABLE inscriptions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    instrument VARCHAR(100) NOT NULL,
    commentaire TEXT,
    date_inscription TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

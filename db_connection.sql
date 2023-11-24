CREATE TABLE books (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255),
    author VARCHAR(255),
    price DECIMAL(10, 2),
    description TEXT
);

INSERT into books VALUES ('Гаррі Поттер та філософський камінь', "Джоан Роулінг", 155,"Книга перша")
INSERT into books VALUES ('Гаррі Поттер та Таємна кімната', "Джоан Роулінг", 155,"Книга друга")
INSERT into books  VALUES ("Гаррі Поттер та в'язень Азкабану", "Джоан Роулінг", 155,"Книга третя")
INSERT into books VALUES ('Гаррі Поттер та Келих вогню', "Джоан Роулінг", 155,"Книга четвера")
INSERT into books  VALUES ('Гаррі Поттер та Орден фенікса', "Джоан Роулінг", 155,"Книга п'ята")
INSERT into books VALUES ('Гаррі Поттер та Напівкровний Принц', "Джоан Роулінг", 155,"Книга шост ")
INSERT into books  VALUES ('Гаррі Поттер і смертельні реліквії', "Джоан Роулінг", 155,"Книга сьома")
INSERT into books VALUES ('Братство Персня', "Дж. Р. Р. Толкін", 300, "Книга перша") 
INSERT into books VALUES ('Дві вежі', "Дж. Р. Р. Толкін", 300, "Книга друга")  
INSERT into books VALUES ('Повернення короля', "Дж. Р. Р. Толкін", 300, "Книга третя")  


CREATE DATABASE DB_BONGXUSTORE CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE DB_BONGXUSTORE;

CREATE TABLE PRODUCTS (
	ID varchar(10) NOT NULL,
	NAME varchar(50) NOT NULL UNIQUE,
	CATEGORY varchar(10) NOT NULL,
	PRICE int NOT NULL,
	SALE FLOAT NOT NULL,
	IMAGE_LINK varchar(50) NOT NULL,
	TAGS varchar(30),
	RATING float NOT NULL,
	PRIMARY KEY (ID)
);

CREATE TABLE PRODUCT_CATEGORIES (
	ID varchar(10) NOT NULL,
	NAME varchar(50) NOT NULL UNIQUE,
	PRIMARY KEY (ID)
);

CREATE TABLE STORAGE (
	PRODUCT_ID varchar(10) NOT NULL,
	AMOUNT int NOT NULL,
	PRIMARY KEY (PRODUCT_ID)
);

CREATE TABLE REVIEWS (
	USER_ID varchar(15) NOT NULL,
	PRODUCT_ID varchar(10) NOT NULL,
	CONTENT TEXT NOT NULL,
	POSTED_TIME DATETIME NOT NULL,
	PRIMARY KEY (USER_ID,PRODUCT_ID)
);

CREATE TABLE ORDERS (
	ID bigint NOT NULL,
	USER_ID varchar(15) NOT NULL,
	DIFFSHIPADDR bit NOT NULL,
	TOTAL_PRICE int NOT NULL,
	PRIMARY KEY (ID)
);

CREATE TABLE ORDER_CONTENT (
	ORDER_ID bigint NOT NULL,
	PRODUCT_ID varchar(10) NOT NULL,
	AMOUNT int NOT NULL,
	PRIMARY KEY (ORDER_ID,PRODUCT_ID)
);

CREATE TABLE USERS (
	ID varchar(15) NOT NULL UNIQUE,
	PW varchar(30) NOT NULL,
	EMAIL varchar(30) NOT NULL UNIQUE,
	FIRSTNAME varchar(30) NOT NULL,
	LASTNAME varchar(30) NOT NULL,
	COUNTRY varchar(30) NOT NULL,
	COUNTY varchar(30) NOT NULL,
	PROVINCE varchar(30) NOT NULL,
	STREET_ADDRESS varchar(100) NOT NULL,
	POSTCODE varchar(15) NOT NULL,
	TEL varchar(20) NOT NULL,
	FACEBOOK varchar(100),
	TWITTER varchar(100),
	GOOGLE varchar(100),
	PRIMARY KEY (ID)
);

CREATE TABLE SHIPPING_INFO (
	ORDER_ID bigint NOT NULL,
	FIRSTNAME varchar(30) NOT NULL,
	LASTNAME varchar(30) NOT NULL,
	COUNTRY varchar(30) NOT NULL,
	COUNTY varchar(30) NOT NULL,
	PROVINCE varchar(30) NOT NULL,
	STREET_ADDRESS varchar(100) NOT NULL,
	POSTCODE varchar(15) NOT NULL,
	TEL varchar(20) NOT NULL,
	NOTES TEXT,
	PRIMARY KEY (ORDER_ID)
);

ALTER TABLE PRODUCTS ADD CONSTRAINT PRODUCTS_fk0 FOREIGN KEY (CATEGORY) REFERENCES PRODUCT_CATEGORIES(ID);

ALTER TABLE STORAGE ADD CONSTRAINT STORAGE_fk0 FOREIGN KEY (PRODUCT_ID) REFERENCES PRODUCTS(ID);

ALTER TABLE REVIEWS ADD CONSTRAINT REVIEWS_fk0 FOREIGN KEY (USER_ID) REFERENCES USERS(ID);

ALTER TABLE REVIEWS ADD CONSTRAINT REVIEWS_fk1 FOREIGN KEY (PRODUCT_ID) REFERENCES PRODUCTS(ID);

ALTER TABLE ORDERS ADD CONSTRAINT ORDERS_fk0 FOREIGN KEY (USER_ID) REFERENCES USERS(ID);

ALTER TABLE ORDER_CONTENT ADD CONSTRAINT ORDER_CONTENT_fk0 FOREIGN KEY (ORDER_ID) REFERENCES ORDERS(ID);

ALTER TABLE ORDER_CONTENT ADD CONSTRAINT ORDER_CONTENT_fk1 FOREIGN KEY (PRODUCT_ID) REFERENCES PRODUCTS(ID);

ALTER TABLE SHIPPING_INFO ADD CONSTRAINT SHIPPING_INFO_fk0 FOREIGN KEY (ORDER_ID) REFERENCES ORDERS(ID);

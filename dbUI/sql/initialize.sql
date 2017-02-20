CREATE TABLE Supplier(
  Name		VARCHAR(20)		PRIMARY KEY,
  PhoneNo		CHAR(11),
  Address		VARCHAR(50)
);

CREATE TABLE Merchandise(
  UPC			VARCHAR(12)		PRIMARY KEY,
  Stock		INT,
  Name		VARCHAR(20),
  Price		NUMERIC(10,2),
  Supplier	VARCHAR(20)		REFERENCES Supplier(Name),
  BuyCost		NUMERIC(10,2)
);

CREATE TABLE Employee(
  SSN			CHAR(9)			PRIMARY KEY,
  Address		VARCHAR(50),
  ContactNo	CHAR(11),
  Name		VARCHAR(30),
  Salary		NUMERIC(10,2)
);

CREATE TABLE Manager(
  SSN			CHAR(9)			PRIMARY KEY,
  Username	VARCHAR(20),
  Password	VARCHAR(20)
);

alter table Manager add constraint foreign key(SSN) references Employee(SSN);

CREATE TABLE Sales(
  SaleNo		VARCHAR(12)		PRIMARY KEY,
  SaleCost	NUMERIC(10,2)
);

CREATE TABLE ItemsSold(
  SaleNo			VARCHAR(12)		REFERENCES Sales(SaleNo),
  QuantitySold	INT,
  UPC				VARCHAR(12)		REFERENCES Merchandise(UPC),
  PRIMARY KEY(SaleNo, UPC)
);

CREATE TABLE Account(
  AccountNo	CHAR(10),
  Balance		NUMERIC(10,2)
);

CREATE TABLE Shipments(
  ShipmentNo		CHAR(10)		PRIMARY KEY,
  Supplier		VARCHAR(20)		REFERENCES Supplier(Name),
  DeliveryDate	DATE,
  TotalCost		NUMERIC(8,2),
  Received BOOLEAN
);

CREATE TABLE ItemsShipped(
  ShipmentNo		CHAR(10)		REFERENCES Shipments(Shipment),
  ItemsShipped	VARCHAR(12)		REFERENCES Merchandise(UPC),
  Quantity		INT,
  PRIMARY KEY(ShipmentNo, ItemsShipped)
);

CREATE TABLE Numbers(
  Name varchar(20) primary key,
  Num int
);
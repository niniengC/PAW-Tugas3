CREATE DATABASE ninieng;

USE ninieng;

CREATE TABLE tbl_094 (
	id INT NOT NULL AUTO_INCREMENT,
	ISBN CHAR(13) NOT NULL,
	judul_buku VARCHAR(50) NOT NULL,
	pengarang VARCHAR(50) NOT NULL,
	penerbit VARCHAR(50) NOT NULL,
	tanggal_terbit DATE NOT NULL,
	tebal_halaman INT(5) NOT NULL,
	panjang_buku CHAR(5),
	lebar_buku CHAR(5),
	berat_buku CHAR(5),
	harga_buku INT(10) NOT NULL,
	PRIMARY KEY (id)
);
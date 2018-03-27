CREATE TABLE wbd_cc (
	id INT(25) NOT NULL AUTO_INCREMENT,
	uid INT(25) NOT NULL,
	lid INT(25) NOT NULL,
	clk INT(25) NOT NULL,
	cnv INT(25) NOT NULL,
	dt INT NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY(uid) REFERENCES wbd_usr(id),
	FOREIGN KEY(lid) REFERENCES wbd_pdct(id)
) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci COMMENT = 'Click and Conversion Table';
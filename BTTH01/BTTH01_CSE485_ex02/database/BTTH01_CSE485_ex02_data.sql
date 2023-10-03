create table tacgia(
ma_tgia int UNSIGNED AUTO_INCREMENT primary key,
ten_tgia varchar(100) not null,
hinh_tgia varchar(100) 
);
CREATE TABLE theloai(
	ma_tloai INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	ten_tloai VARCHAR(50) UNIQUE
);
CREATE TABLE baiviet(
	ma_bviet INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	tieude VARCHAR(200) NOT NULL,
	ten_bhat VARCHAR(100) NOT NULL,
	ma_tloai INT UNSIGNED NOT NULL,
	tomtat TEXT,
	noidung TEXT NOT NULL,
	ma_tgia INT UNSIGNED NOT NULL,
	ngayviet DATETIME DEFAULT CURRENT_TIMESTAMP,
	hinhanh VARCHAR(200),
	FOREIGN KEY (ma_tloai) REFERENCES theloai(ma_tloai),
    FOREIGN KEY (ma_tgia) REFERENCES tacgia(ma_tgia)
);
INSERT INTO tacgia (`ten_tgia`,`hinh_tgia`)
VALUES
	('Ross Giles', '946CC1AB-D79B-4D02-1732-89A22C96AE51'),
	('Fay Rosales', '946CC1AB-D79B-4D02-1732-89A22C96AE51'),
	('Shad Frazier', '946CC1AB-D79B-4D02-1732-89A22C96AE51'),
	('Jeremy Boyer', '946CC1AB-D79B-4D02-1732-89A22C96AE51'),
  ("Nhacvietplus","946CC1AB-D79B-4D02-1732-89A22C96AE51");  
INSERT INTO theloai (ten_tloai)
VALUES
  ('Thể loại A'),
  ('Thể loại B'),
  ('Thể loại C'),
  ('Nhạc trữ tình'),`btth01_cse485_ex02.sql`
  ('Thể loại D');
  
INSERT INTO baiviet (tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, hinhanh)
VALUES
  ('Tiêu đề bài viết 1', 'Mong Chờ', 1, 'Tóm tắt bài viết 1', 'Nội dung bài viết 1', 1, '946CC1AB-D79B-4D02-1732-89A22C96AE51'),
  ('Em của ngày hôm qua', 'Em của ngày hôm qua', 1, 'Tóm tắt bài viết 2', 'Nội dung bài viết 2', 2, '946CC1AB-D79B-4D02-1732-89A22C96AE51'),
  ('Tình', 'Tình Yêu', 4, 'Tóm tắt bài viết 3', 'Nội dung bài viết 3', 3, '946CC1AB-D79B-4D02-1732-89A22C96AE51'),
  ('Tình Yêu là gì', 'Tình yêu là gì', 2, 'Tóm tắt bài viết 4', 'Nội dung bài viết 4', 4, '946CC1AB-D79B-4D02-1732-89A22C96AE51'),
  (' Yêu', 'Anh là ai 1', 4, 'Tóm tắt bài viết 1', 'Nội dung bài viết 1', 1, '946CC1AB-D79B-4D02-1732-89A22C96AE51'),
  ('Người Tình Mùa Đông', 'Người Tình Mùa Đông', 4, 'Tóm tắt bài viết 5', 'Nội dung bài viết 5', 5, '946CC1AB-D79B-4D02-1732-89A22C96AE51');
INSERT INTO baiviet (tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, hinhanh)
VALUES
	('Giấc mơ khác', 'Nguoi Tinh Mua Dong', 4, '', 'Nội dung bài viết 5', 5, '946CC1AB-D79B-4D02-1732-89A22C96AE51');
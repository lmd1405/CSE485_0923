-- a. Liệt kê các bài viết về các bài hát thuộc thể loại Nhạc trữ tình
SELECT baiviet.ma_bviet, baiviet.tieude, baiviet.ten_bhat, theloai.ten_tloai
FROM baiviet
JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
WHERE theloai.ten_tloai = 'Nhạc trữ tình';

-- b. Liệt kê các bài viết của tác giả "Nhacvietplus"
SELECT baiviet.ma_bviet, baiviet.tieude, baiviet.ten_bhat, tacgia.ten_tgia
FROM baiviet
JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
WHERE tacgia.ten_tgia = 'Nhacvietplus';

-- c. Liệt kê các thể loại nhạc chưa có bài viết cảm nhận nào
SELECT theloai.ma_tloai, theloai.ten_tloai
FROM theloai
LEFT JOIN baiviet ON theloai.ma_tloai = baiviet.ma_tloai
WHERE baiviet.ma_bviet IS NULL;

-- d. Liệt kê các bài viết với các thông tin sau: mã bài viết, tên bài viết, tên bài hát, tên tác giả, tên thể loại, ngày viết
SELECT baiviet.ma_bviet, baiviet.tieude, baiviet.ten_bhat, tacgia.ten_tgia, theloai.ten_tloai, baiviet.ngayviet
FROM baiviet
JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai;
-- e. Tìm thể loại có số bài viết nhiều nhất:
SELECT theloai.ten_tloai, COUNT(baiviet.ma_bviet) AS so_baiviet
FROM theloai
LEFT JOIN baiviet ON theloai.ma_tloai = baiviet.ma_tloai
GROUP BY theloai.ten_tloai
ORDER BY so_baiviet DESC
LIMIT 1;
-- f. Liệt kê 2 tác giả có số bài viết nhiều nhất:
SELECT tacgia.ten_tgia, COUNT(baiviet.ma_bviet) AS so_baiviet
FROM tacgia
LEFT JOIN baiviet ON tacgia.ma_tgia = baiviet.ma_tgia
GROUP BY tacgia.ten_tgia
ORDER BY so_baiviet DESC
LIMIT 2;
-- g. Liệt kê các bài viết về các bài hát có tựa bài hát chứa 1 trong các từ "yêu", "thương", "anh", "em":
SELECT baiviet.ma_bviet, baiviet.tieude, baiviet.ten_bhat
FROM baiviet
WHERE baiviet.ten_bhat LIKE '%yêu%' OR baiviet.ten_bhat LIKE '%thương%' OR baiviet.ten_bhat LIKE '%anh%' OR baiviet.ten_bhat LIKE '%em%';
-- h. Liệt kê các bài viết về các bài hát có tiêu đề bài viết hoặc tựa bài hát chứa 1 trong các từ "yêu", "thương", "anh", "em":
SELECT baiviet.ma_bviet, baiviet.tieude, baiviet.ten_bhat
FROM baiviet
WHERE baiviet.tieude LIKE '%yêu%' OR baiviet.tieude LIKE '%thương%' OR baiviet.tieude LIKE '%anh%' OR baiviet.tieude LIKE '%em%'
OR baiviet.ten_bhat LIKE '%yêu%' OR baiviet.ten_bhat LIKE '%thương%' OR baiviet.ten_bhat LIKE '%anh%' OR baiviet.ten_bhat LIKE '%em%';
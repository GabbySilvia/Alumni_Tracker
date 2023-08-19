CREATE TABLE users (
    id INT PRIMARY KEY,
    nama_user VARCHAR(50),
    username VARCHAR(50),
    password  VARCHAR(255),
    level int
);


INSERT INTO users(id, nama_user, username, password, level) 
VALUES 
(1, 'Admin','admin','admin',1), 
(2, 'Admin 2','admin2','admin',2);

CREATE TABLE tracker_study (
    id INT PRIMARY KEY,
    nib VARCHAR(50),
    wave VARCHAR(50),
    nama_lengkap VARCHAR(255),
    kelas VARCHAR(50),
    graduate_on VARCHAR(20),
    tanggal_lahir VARCHAR(20),
    asal_alamat VARCHAR(255),
    domisili_alamat VARCHAR(255),
    model_kerja VARCHAR(255)
);

INSERT INTO tracker_study (id, nib, wave, nama_lengkap, kelas, graduate_on, tanggal_lahir, asal_alamat, domisili_alamat, model_kerja)
VALUES
     (1, 'FER220900001', 'Wave 004', 'Ade Sugiantoro', 'Front End Engineer', 'January 2023', '8/27/1999', 'Kota Tegal / Jawa Tengah', 'Kota Tegal / Jawa Tengah', 'Belum Bekerja'),
    (2, 'FER220900007', 'Wave 004', 'Eko Wahyu Riyadi', 'Front End Engineer', 'January 2023', '3/30/1993', 'Kabupaten Magelang', 'Kabupaten Magelang', 'Sudah Bekerja'),
    (3, 'FER220900015', 'Wave 004', 'Humfrey Prasetyo Rapri', 'Front End Engineer', 'January 2023', '11/6/2000', 'Jakarta Barat', 'Kota Tangerang', 'Sudah Bekerja'),
    (4, 'FER220900012', 'Wave 004', 'Muhammad Iqbal Rizan', 'Front End Engineer', 'January 2023', '9/24/1996', 'padang', 'jakarta barat', 'Sudah Bekerja'),
    (5, 'FER220900013', 'Wave 004', 'Rayhan Fachreza', 'Front End Engineer', 'January 2023', '7/11/1996', 'Kota Padang', 'Kota Depok', 'Belum Bekerja'),
    (6, 'FER220900002', 'Wave 004', 'Andika Dwi Abizar', 'Front End Engineer', 'January 2023', '8/6/2004', 'Kota Pontianak / Kalimantan Barat', 'Kota Pontianak / Kalimantan Barat', 'Belum Bekerja'),
    (7, 'FER220900005', 'Wave 004', 'Muhammad Farhan Ismadi', 'Front End Engineer', 'January 2023', '10/11/2002', 'DKI Jakarta / Jakarta Selatan', 'DKI Jakarta / Jakarta Selatan', 'Sudah Bekerja'),
    (8, 'FER220900019', 'Wave 004', 'Muhammad Irwan Zamroni', 'Front End Engineer', 'January 2023', '8/17/1999', 'Lombok Barat', 'Lombok Barat', 'Belum belum'),
    (9, 'FER220700021', 'Wave 002', 'Muhammad Irzan', 'Front End Engineer', 'January 2023', '5/25/1999', 'Jakarta Barat', 'Jakarta Barat', 'Sudah Bekerja'),
    (10, 'FER220700009', 'Wave 002', 'Nugraha Banuajie', 'Front End Engineer', 'January 2023', '5/3/1988', 'Kota Bandung', 'Kota Bandung', 'Sudah Bekerja'),
    (11, 'FER220900016', 'Wave 004', 'Virna Oktarina Rakhman', 'Front End Engineer', 'January 2023', '10/2/1994', 'Tasikmalaya', 'Bandung', 'Sudah Bekerja'),
    (12, 'DSC220800065', 'Wave 002', 'Cindy Mayland Nilamsari Soeka Wiyono', 'Data Science', 'January 2023', '5/20/1990', 'Waingapu / Sumba Timur', 'Jakarta Timur', 'Belum Bekerja'),
    (13, 'DSC220900073', 'Wave 002', 'Dhitya Ovim Barkley Perdana', 'Data Science', 'January 2023', '11/24/1996', 'Magetan', 'Karanganyar', 'Belum Bekerja'),
    (14, 'DSC220900022', 'Wave 002', 'Fauzan Fadlurrohman S.Kom', 'Data Science', 'January 2023', '1/21/1995', 'Tasikmalaya', 'Tasikmalaya', 'Sudah Bekerja'),
    (15, 'DSC220900050', 'Wave 002', 'Fikri Adams', 'Data Science', 'January 2023', '1/19/1999', 'Jakarta Timur', 'Jakarta Timur', 'Belum Bekerja'),
    (16, 'DSC220900053', 'Wave 002', 'I Gede Dhani Pradipta Putra', 'Data Science', 'January 2023', '4/18/1995', 'DENPASAR', 'DENPASAR', 'Sudah Bekerja'),
    (17, 'DSC220900015', 'Wave 002', 'Junio Faathir Anand Ansyori', 'Data Science', 'January 2023', '6/23/1998', 'Kota Surabaya', 'Kabupaten Sidoarjo', 'Belum Bekerja'),
    (18, 'DSC220900056', 'Wave 002', 'Muhammad Ardi Maulana', 'Data Science', 'January 2023', '7/14/1999', 'Jakarta Timur', 'Jakarta Timur', 'Sudah Bekerja'),
    (19, 'DSC220900029', 'Wave 002', 'Mochamad Andhika Wilby', 'Data Science', 'January 2023', '1/5/2002', 'Kota Jayapura', 'Kota Jayapura', 'Belum Bekerja'),
    (20, 'DSC220900057', 'Wave 002', 'Mohammad Raditya Syahmaulana', 'Data Science', 'January 2023', '11/27/1997', 'Surakarta/ Solo', 'Surakarta/ Solo', 'Sudah Bekerja'),
    (21, 'DSC220900007', 'Wave 002', 'Adam Azano Satrio', 'Data Science', 'January 2023', '5/17/1990', 'DKI JAKARTA / JAKARTA TIMUR', 'DKI JAKARTA / JAKARTA TIMUR', 'Belum Bekerja'),
    (22, 'DSC220900071', 'Wave 002', 'Algaza Geofari Susanto', 'Data Science', 'January 2023', '3/1/2000', 'Kabupaten Sleman', 'Kabupaten Sleman', 'Sudah Bekerja'),
    (23, 'DSC220900034', 'Wave 002', 'Aris Seno Aji Muzaqi', 'Data Science', 'January 2023', '11/10/1996', 'Bojonegoro / Jawa Timur', 'Bojonegoro / Jawa Timur', 'Belum Bekerja'),
    (24, 'DSC220900004', 'Wave 002', 'Damar Pradiptojati', 'Data Science', 'January 2023', '7/23/1992', 'Sidoarjo', 'Surabaya', 'Sudah Bekerja'),
    (25, 'DSC220900006', 'Wave 002', 'Fadhli Azhar', 'Data Science', 'January 2023', '11/2/1999', 'Kab. Musi Banyuasin', 'Kota Surabaya', 'Belum Bekerja'),
    (26, 'DSC220900031', 'Wave 002', 'Keitaro Mirakel Wongso', 'Data Science', 'January 2023', '8/1/2000', 'Jakarta Barat', 'Jakarta Barat', 'Sudah Bekerja'),
    (27, 'DSC220900027', 'Wave 002', 'Leonard Philips Sabbathani Pasaribu', 'Data Science', 'January 2023', '10/28/2000', 'Kota Tangerang Selatan', 'Kota Tangerang Selatan', 'Belum Bekerja'),
    (28, 'DSC220900020', 'Wave 002', 'Muhammad Ilham Ramadhan', 'Data Science', 'January 2023', '6/27/1999', 'Bandung', 'Bandung', 'Sudah Bekerja'),
    (29, 'DSC220900021', 'Wave 002', 'Muhammad Rafi Adrian Nugraha', 'Data Science', 'January 2023', '4/20/1999', 'Banyuwangi', 'Banyuwangi', 'Belum Bekerja'),
    (30, 'DSC220900023', 'Wave 002', 'Nadhif Mahardhika Putra Wicaksono', 'Data Science', 'January 2023', '11/13/2001', 'Depok', 'Depok', 'Sudah Bekerja');

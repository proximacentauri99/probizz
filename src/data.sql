INSERT INTO stakeholder(`jabatan_stakeholder`)
VALUES 
    ('CFO'), 
    ('Business Executive'), 
    ('CIO'), 
    ('Head IT Administration');

INSERT INTO `business_goals`(`business_goals`)
VALUES 
    ('Provide a good return on investment of IT-enabled business investments'); 

INSERT INTO `it_goals`(`id`,`it_goals`)
VALUES 
    (24,"Improve IT's cost-efficiency and its contribution to business profitability"); 

INSERT INTO `business_it_goals`(`id_business_goals`, `id_it_goal`)
VALUES
    (1,24)

INSERT INTO `it_process`(`kode`,`it_process`)
VALUES 
    ('PO5', 'Manage the IT Investment'); 

INSERT INTO `it_process`(`kode`,`it_process`)
VALUES 
    ('DS6', 'Identify and Allocate Costs'); 

INSERT INTO `stakeholder_it_process`(`id_stakeholder`, `id_it_process`)
VALUES
    (1,1),
    (2,1),
    (3,1),
    (4,1);




INSERT INTO `pertanyaan`(`id_it_process`, `pertanyaan`, `level`)
VALUES 
    (1, 'Perusahaan tidak memiliki kesadaran akan pentingnya pemilihan investasi TI dan perencanaan penganggaran pada TI', 0),
    (1, 'Perusahaan tidak melakukan pengawasan atau pemantauan pada investasi dan pengeluaran TI', 0),
    (1, 'Perusahaan menyadari akan perlunya pengelolaan pada investasi TI, namun kebutuhan tersebut tidak dikomunikasikan secara konsisten', 1),
    (1, 'Tanggung jawab untuk pemilihan investasi TI dan penganggaran TI pada Perusahaan dilakukan secara ad hoc (tidak terorganisir/tanpa perencanaan)', 1),
    (1, 'Perusahaan memiliki implementasi pemilihan investasi TI dan penganggaran TI yang terisolasi dengan dokumen yang informal', 1),
    (1, 'Investasi TI pada Perusahaan dilakukan secara ad hoc (tidak terorganisir/tanpa perencanaan)', 1),
    (1, 'Perusahaan bertindak reaktif dalam investasi TI atau bersifat operasional yang berfokus pada keputusan penganggara', 1),
    (1, 'Perusahaan memiliki koordinasi pengertian secara implisit akan kebutuhan pemilihan investasi TI dan penganggaran TI', 2),
    (1, 'Perusahaan melakukan komunikasi yang baik terkait kebutuhan akan proses pemilihan dan penganggaran investasi TI', 2),
    (1, 'Pemenuhan kebutuhan pemilihan investasi TI dan penganggaran TI pada Perusahaan masih tergantung pada inisiatif individu', 2),
    (1, 'Perusahaan memiliki teknik umum dan standar untuk pengembangan komponen penganggaran TI (infrastruktur, aplikasi dan layanan, sumber daya manusia, dll)
', 2),
    (1, 'Perusahaan bertindak reaktif dan taktis dalam penyetujuan anggaran TI', 2),
    (1, 'Perusahaan memiliki kebijakan dan proses investasi serta penganggaran investasi TI yang terdefinisi, terdokumentasi, dikomunikasikan dengan baik, dan mencakup isu utama bisnis dan teknologi
', 3),
    (1, 'Anggaran TI yang dimiliki oleh Perusahaan telah selaras dengan rencana strategis TI dan rencana bisnis yang dimiliki', 3),
    (1, 'Proses pemilihan dan penganggaran investasi TI pada Perusahaan telah diatur secara formal, terdokumentasi, dan dikomunikasikan dengan baik
', 3),
    (1, 'Pelatihan formal telah diadakan di Perusahaan namun masih berdasarkan pada inisiatif individu', 3),
    (1, 'Perusahaan telah memiliki persetujuan formal dari pemilihan investasi TI dan penganggaran TI', 3),
    (1, 'Anggota staf TI pada Perusahaan memiliki pengalaman dan keterampilan yang dibutuhkan untuk mengembangkan proses penganggaran TI dan merekomendasikan investasi TI yang tepat', 3),
    (1, 'Tanggung jawab dan akuntabilitas terhadap pemilihan dan penganggaran investasi TI pada Perusahaan ditugaskan kepada individu tertentu secara khusus', 4),
    (1, 'Adanya duplikasi anggaran TI pada Perusahaan telah diidentifikasi dan diselesaikan', 4),
    (1, 'Perusahaan memiliki analisa biaya TI secara formal, meliputi biaya langsung maupun tidak langsung serta investasi yang diusulkan, dengan adanya pertimbangan dari semua total biaya selama ini yang sudah dikeluarkan
', 4),
    (1, 'Perusahaan memiliki proses penganggaran TI yang proaktif dan terstandarisasi', 4),
    (1, 'Dampak dari pergeseran biaya dalam pengembangan dan operasional dari hardware dan software untuk proses integrasi sistem dan SDM TI telah ditetapkan dalam perencanaan investasi TI', 4),
    (1, 'Perusahaan telah melakukan perhitungan investasi TI berupa manfaat dan keuntungan secara finansial dan non finansial', 4),
    (1, 'Praktek pelayanan Perusahaan yang baik telah digunakan untuk menghitung biaya dan mengidentifikasi pendekatan untuk meningkatkan efektifitas investasi TI', 5),
    (1, 'Analisa pengembangan teknologi telah dilakukan oleh Perusahaan guna pemilihan investasi TI dan proses penganggaran TI', 5),
    (1, 'Perusahaan secara terus-menerus meningkatkan proses manajemen investasi TI berdasarkan pengalaman dan analisa kinerja investasi TI', 5),
    (1, 'Keputusan investasi TI pada Perusahaan memasukkan harga/sesuai dengan tren peningkatan kinerja', 5),
    (1, 'Pendanaan alternatif pada investasi TI dinilai dan dievaluasi secara formal dalam konteks struktur modal yang ada pada Perusahaan dengan menggunakan metode evaluasi formal', 5),
    (1, 'Perusahaan bertindak proaktif dalam hal identifikasi perbedaan dan variasi', 5),
    (1, 'Analisa biaya dan manfaat yang selama ini telah dikeluarkan oleh Perusahaan masuk ke dalam keputusan investasi', 5);









 













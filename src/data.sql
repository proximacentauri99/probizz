INSERT INTO stakeholder(`jabatan_stakeholder`)
VALUES 
  ('CFO'), 
  ('Business Executive'), 
  ('CIO'), 
  ('Head IT Administration'),
  ('Head Operations'),
  ('Chief Architect'),
  ('Head Development'),
  ('PMO'),
  ('CEO'),
  ('Business Process Owner'),
  ('Deployment Team'),
  ('Training Department');

INSERT INTO `business_goals`(`id`,`business_goals`)
VALUES 
    (1,'Provide a good return on investment of IT-enabled business investments'),
    (17,'Acquire and maintain skilled and motivated people'),
    (4,'Improve customer orientation and service');

INSERT INTO `it_goals`(`id`,`it_goals`)
VALUES 
    (24,"Improve IT's cost-efficiency and its contribution to business profitability"),
    (9,"Acquire and maintain IT skills that respond to the IT strategy"),
    (3, "Ensure satisfaction of end users with service offerings and service levels"),
    (23, "Make sure that IT services are available as required");

INSERT INTO `it_process`(`kode`,`it_process`)
VALUES 
  ('PO5', 'Manage the IT Investment'),
  ('DS6', 'Identify and Allocate Costs'),
  ('PO7', 'Manage IT Human Resources'),
  ('AI5', 'Procure IT Resources'),
  ('PO8', 'Manage Quality'),
  ('AI4', 'Enable Operation and Use'),
  ('DS1', 'Define and Manage Service Levels'),
  ('DS2', 'Manage Third-Party Services'),
  ('DS7', 'Educate and Train Users'),
  ('DS8', 'Manage Service Desk and Incidents'),
   ('DS10', 'Manage Problems'),
   ('DS13', 'Manage Operations'),
   ('DS3', 'Manage Performance and Capacity'),
   ('DS4', 'Ensure Continous Service');
    

INSERT INTO `business_it_goals`(`id_business_goals`, `id_it_goal`)
VALUES
    (1,24),
    (17,9),
    (4,3),
    (4,23);

INSERT INTO `it_goal_process`(`id_it_goal`, `id_it_process`)
VALUES
    (24,1),
    (24,2),
    (9,3),
    (9,4),
    (3,5),
    (3,6),
    (3,7),
    (3,8),
    (3,9),
    (3,10),
    (3,11),
    (3,12),
    (23,13),
    (23,14),
    (23,10),
    (23,12);



INSERT INTO `stakeholder_it_process`(`id_stakeholder`, `id_it_process`)
VALUES
    (1,1),
    (2,1),
    (3,1),
    (4,1),
    (4,2),
    (5,3),
    (6,3),
    (7,3),
    (4,3),
    (8,3),
    (9,4),
    (5,4),
    (7,4),
    (4,4),
    (8,4),
    (3,5),
    (10,6),
    (5,6),
    (7,6),
    (11,6),
    (12,6);






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
    (1, 'Analisa biaya dan manfaat yang selama ini telah dikeluarkan oleh Perusahaan masuk ke dalam keputusan investasi', 5),
    (2, 'Perusahaan memiliki kelebihan dalam mengidentifikasi dan mengalokasikan biaya sehubungan dengan layanan informasi disediakan', 0),
    (2, 'Perusahaan menyadari bahwa ada masalah yang harus ditangani sehubungan dengan akuntansi biaya, dan memang tidak ada komunikasi tentang masalah tersebut', 0),
    (2, 'Ada pemahaman umum tentang keseluruhan biaya untuk layanan informasi seperti adanya perincian biaya per pengguna, pelanggan, departemen , kelompok pengguna, fungsi layanan, proyek atau kiriman', 1),
    (2, 'Perusahaan selalu melakukan pemantauan biaya , tidak hanya ada  agregat pelaporan biaya kepada management ', 1),
    (2, 'Apakah biaya TI dialokasikan sebagai pengeluaran operasional ?', 1),
    (2, "Apakah bisnis ada memberikan informasi tentang biaya atau manfaat dari penyediaan layanan ?", 1),
    (2, " Apakah Perusahaan memiliki kesadaran keseluruhan akan kebutuhan untuk mengidentifikasi dan mengalokasikan biaya ? ?", 2),
    (2, "Apakah alokasi biaya didasarkan pada biaya informal atau dasar asumsi, misalnya, biaya perangkat keras, dan selalu ada tautan ke driver nilai ?", 2),
    (2, "Apakah ada pelatihan atau komunikasi formal yang dilakukan oleh Perusahaan tentang identifikasi biaya standar dan prosedur alokasi ?", 2),
    (2, "Apakah Perusahaan memberikan tanggung jawab untuk pengumpulan biaya dan alokasi biaya ?", 2),
    (2, "Apakah Perusahaan melakukan proses alokasi biaya yang berulang  ?", 2),
    (2, "Apakah Perusahaan menggunakan model biaya layanan informasi yang terdefinisi dan terdokumentasi ?", 3),
    (2, "Apakah proses untuk menghubungkan biaya TI dengan layanan yang diberikan kepada pengguna didefinisikan oleh manajemen Perusahaan ?", 3),
    (2, "Apakah Perusahaan memiliki tingkat kesadaran yang tepat mengenai biaya yang dapat distribusikan ke layanan informasi ?", 3),
    (2, "Apakah Perusahaan memberikan informasi dasar mengenai biaya terkait bisnis ?", 3),
    (2, "Apakah di Perusahaan , tanggung jawab dan akuntabilitas biaya layanan informasi didefinisikan dan dipahami sepenuhnya di semua tingkatan dan sedang didukung dengan pelatihan formal ?", 4),
    (2, "Apakah di Perusahaan , biaya langsung dan tidak langsung diidentifikasi dan dilaporkan secara tepat waktu dan otomatis ke pemilik proses bisnis dan pengguna ?", 4),
    (2, "Jika biaya penyimpangan terdeteksi , apakah Perusahaan melakukan pemantauan dan evaluasi biaya ?", 4),
    (2, "Apakah pelaporan biaya layanan informasi terkait dengan tujuan bisnis dan SLA dipantau oleh pemilik proses bisnis ?", 4),
    (2, "Apakah Perusahaan menerapkan fungsi keuangan untuk meninjau kewajaran proses alokasi biaya ?", 4),
    (2, "Perusahaan menerapkan Sistem akuntansi biaya otomatis , tetapi difokuskan pada fungsi layanan informasi daripada pada proses bisnis ?", 4),
    (2, "Apakah tujuan dan metrik disepakati untuk pengukuran biaya tetapi diukur secara tidak konsisten ?", 4),
    (2, "Apakah biaya layanan yang diberikan oleh Perusahaan diidentifikasi, ditangkap, diringkas, dan dilaporkan kepada pemilik proses bisnis  dan pengguna ?", 5),
    (2, "Apakah biaya yang diidentifikasi sebagai item dikenakan biaya dan dapat mendukung sistem tagihan secara tepat untuk menagih pengguna pada layanan yang diberikan berdasarkan pemanfaatan ?", 5),
    (2, "Apakah detail biaya sudah mendukung SLA ?", 5),
    (2, "Apakah pemantauan dan evaluasi biaya layanan digunakan untuk mengoptimalkan biaya sumber daya TI ?", 5),
    (2, "Apakah angka biaya yang diperoleh digunakan untuk memverifikasi realisasi manfaat dalam proses penganggaran organisasi ?", 5),
    (2, "Apakah di Perusahaan , pelaporan biaya layanan informasi memberikan peringatan dini tentang perubahan persyaratan bisnis melalui sistem pelaporan cerdas ?", 5),
    (2, "Apakah variabel model biaya yang digunakan oleh Perusahaan berasal dari volume yang diproses untuk setiap layanan yang disediakan ?", 5),
    (2, "Apakah manajemen biaya disempurnakan ke tingkat praktik industri, berdasarkan hasil perbaikan berkelanjutan dan pembandingan dengan organisasi lain ?", 5),
    (3, "Apakah ada kesadaran tentang pentingnya menyelaraskan manajemen SDM TI dengan proses perencanaan teknologi untuk organisasi?", 0),
    (3, "Apakah ada bagian yang bertanggung jawab mengenai TI pada bagian human resource?", 0),
    (3, "Apakah menurut anda TI dibutuhkan pada bagian human resource?", 1),
    (3, "Apakah manajemen SDM dilakukan secara informal dan reaktif?", 1),
    (3, "Apakah menurut anda proses manjemen SDM TI difokuskan pada perekrutan dan pengelolaan personel?", 1),
    (3, "Apakah menurut anda dengan perkembangan teknologi sekarang ini dibutuhkan kemampuan dan kompetensi baru?", 1),
    (3, "Apakah ada niatan dalam mempekerjakan dan mengelola personel TI karena kebutuhan proyek, dibanding oleh karena keseimbangan antara ketersediaan staf internal dan eksternal? ", 2),
    (3, "Apakah perusahaan mengadakan pelatihan untuk staf baru?", 2),
    (3, "Apakah manajemen menyadari kebutuhan akan manajemen SDM TI?", 3),
    (3, "Apakah ada rencana dalam melakukan manajemen SDM TI?", 3),
    (3, "Apakah ada pendekatan strategis untuk mempekerjakan dan mengelola personel TI?", 3),
    (3, "Apakah ada rencana pelatihan formal untuk memenuhi kebutuhan SDM TI?", 3),
    (3, "Apakah ada program rotasi yang dirancang untuk memperluas keterampilan manajemen teknis dan bisnis yang ditetapkan?", 3),
    (3, "Apakah tanggung jawab untuk pengembangan dan pemeliharaan rencana manajemen SDM TI diberikan kepada individu/kelompok tertentu dengan keahlian dan keterampilan yang diperlukan untuk mengembangkan rencana?", 4),
    (3, "Apakah proses pengembangan dan pengelolaan rencana manajemen SDM TI responsif terhadap perubahan?", 4),
    (3, "Apakah ada standarisasi dalam organisasi untuk memungkinkannya mengidentifikasi penyimpangan dari rencana manajemen SDM TI, khususnya pada pengelolaan pertumbuhan dan pergantian personel TI?", 4),
    (3, "Apakah kompensasi dan tinjauan kinerja dibuat dan dibandingkan dengan organisasi TI lainnya?", 4),
    (3, "Apakah manajemen SDM TI bersifat proaktif dengan mempertimbangkan pengembangan jalur karier?", 4),
    (3, "Apakah rencana Manajemen SDM selalu diperbaharui sesuai dengan kebutuhan?", 5),
    (3, "Apakah perencanaan manajemen SDM terintegrasi dengan teknologi IT?", 5),
    (3, "Apakah manajemen SDM sejalan dengan arah strategis organisasi?", 5),
    (3, "Apakah komponen manajemen SDM TI konsisten dengan praktik industri yang baik, seperti kompensasi, tinjauan kinerja, transfer pengetahuan, pelatihan dan pendampingan?", 5),
    (3, "Apakah program pelatihan dikembangkan berdasarkan semua standar dan produk teknologi baru sebelum diterapkan di organisasi?", 5),
    (4, "Apakah ada proses pengadaan sumber daya IT yang ditetapkan?", 0),
    (4, "Apakah Perusahaan menyadari perlunya kebijakan dan prosedur pengadaan yang jelas untuk memastikan bahwa semua sumber daya IT tersedia secara tepat waktu dan hemat biaya?", 0),
    (4, "Perusahaan menyadari bahwa mereka harus memiliki kebutuhan untuk mendokumentasikan kebijakan dan prosedur yang menghubungkan akuisisi IT dengan proses pengadaan organisasi bisnis secara keseluruhan.", 1),
    (4, "Kontrak untuk perolehan sumber daya IT dikembangkan dan dikelola oleh manajer proyek dan individu lain yang melaksanakan penilaian profesional mereka daripada sebagai hasil dari prosedur dan kebijakan formal", 1),
    (4, "Kontrak untuk akuisisi dikelola pada akhir proyek daripada secara berkelanjutan", 1),
    (4, "Hanya ada hubungan ad hoc antara akuisisi perusahaan dan proses manajemen kontrak dan IT.", 1),
    (4, "Ada kesadaran organisasi tentang perlunya memiliki kebijakan dan prosedur dasar untuk akuisisi IT", 2),
    (4, "Kebijakan-kebijakan dan prosedur sudah sebagian terintegrasi dengan proses pengadaan organisasi bisnis secara keseluruhan", 2),
    (4, "Proses pengadaan sumber daya IT sebagian besar digunakan untuk proyek besar dan terlihat.", 2),
    (4, "Apakah tanggung jawab dan akuntabilitas untuk pengadaan IT dan manajemen kontrak ditentukan oleh pengalaman masing-masing manajer kontrak?", 2),
    (4, "Pentingnya manajemen pemasok dan manajemen hubungan diakui tapi ditangani berdasarkan inisiatif individu", 2),
    (4, "Proses kontrak sebagian besar digunakan oleh proyek-proyek besar atau yang sangat terlihat", 2),
    (4, "Apakah manajemen telah menerapkan kebijakan dan prosedur untuk akuisisi IT?", 3),
    (4, "Kebijakan dan prosedur dipandu oleh keseluruhan proses pengadaan organisasi bisnis.", 3),
    (4, "Apakah ada standar IT untuk perolehan sumber daya IT?", 3),
    (4, "Pemasok sumber daya IT diintegrasikan ke dalam mekanisme manajemen proyek organisasi dari perspektif manajemen kontrak.", 3),
    (4, "Apakah sebagian besar sistem pengadaan bisnis terintegrasi dengan akuisisi TI secara keseluruhan?", 3),
    (4, "Manajemen TI mengkomunikasikan kebutuhan akuisisi yang sesuai serta manajemen kontrak pada seluruh fungsi IT.", 3),
    (4, "Apakah sistem pengadaan bisnis terintegrasi dengan akuisisi TI secara keseluruhan?", 4),
    (4, "Standar IT untuk akuisisi sumber daya IT digunakan untuk semua pengadaan.", 4),
    (4, "Pengukuran pada kontrak dan manajemen pengadaan diambil secara relevan dengan kasus bisnis untuk akuisisi IT.", 4),
    (4, "Apakah pelaporan aktivitas akuisisi TI yang mendukung tujuan bisnis telah tersedia?", 4),
    (4, "Apakah manajemen mengetahui pengecualian terhadap kebijakan serta prosedur akuisisi IT?", 4),
    (4, "Manajemen strategis hubungan sedang berkembang.", 4),
    (4, "Apakah Perusahaan melakukan manajemen TI dengan menggunakan manajemen kontrak dan proses akuisisi untuk semua akuisisi dengan memonitor pengukuran kinerja?", 4),
    (4, "Manajemen menjadikan lembaga dengan menyusun sumber daya dengan melakukan dengan cara menyeluruh untuk akuisisi TI.", 5),
    (4, "Manajemen telah menetapkan kesesuaian terhadap kebijakan dan metode akuisisi TI yang harus dipatuhi.", 5),
    (4, "Evaluasi pada kontrak dan manajemen penyusunan diambil yang berguna dengan kasus bisnis untuk akuisisi TI.", 5),
    (4, "Koneksi yang sehat akan menjadikan waktu dengan kebanyakan penyalur dan mitra, dan koneksi yang baik dengan cara diukur dan dipantau", 5),
    (4, "Koneksi yang dikelola atau direncanakan secara strategis?", 5),
    (4, "Taraf kebijakan dan prosedur IT untuk akuisisi dilakukan dengan cara strategis dan melakukan pengukuran proses.", 5),
    (4, "Apakah manajemen IT menghubungkan kepentingan dengan cara strategis dari akuisisi yang sesuai dan manajemen kontrak yang ada di seluruh fungsi IT?", 5),
    (5, "Perusahaan belum memiliki perencanaan Quality Management System (QMS) dan metodologi System Development Life Cycle (SDLC)", 0),
    (5, "Manajemen Perusahaan tidak menyadari bahwa kualitas dari layanan Perusahaan sangat penting", 0),
    (5, "Manajemen membuat penilaian terkait layanan di Perusahaan secara informal untuk mengukur kualitas ", 1),
    (5, "Apakah aktivitas Quality Management System (QMS) pada Perusahaan berfokus pada IT-project dan process oriented?", 2),
    (5, "Adanya program atau aplikasi yang digunakan untuk memonitor aktivitas Quality Management System (QMS) pada manajemen Perusahaan", 2),
    (5, "Apakah proses Quality Management System (QMS) dikomunikasikan kepada perusahaan oleh manajemen dengan mengikutsertakan manajemen IT dan manajemen end-user?", 3),
    (5, "Adanya kegiatan edukasi dan pelatihan untuk staff dan karyawan Perusahaan terkait kualitas layanan yang diberikan", 3),
    (5, "Apakah ada ekspetasi kualitas dasar yang didefinisikan dan digunakan di berbagai proyek pada organisasi IT?", 3),
    (5, "Apakah ada perencanaan dan pelaksanaan survey terkait kepuasan kualitas layanan di Perusahaan?", 3),
    (5, "Alat maupun pelatihan yang menunjang sistem manajemen kualitas sudah dimunculkan (diputuskan)", 3),
    (5, "Suvery mengenai kepuasan terhadap kualitas layanan Perusahaan sudah direncanakan", 3),
    (5, "Perusahaan memiliki standar mengenai kualitas layanan", 4),
    (5, "Apakah survey kualitas kepuasan dijalankan secara konsisten?", 4),
    (5, "apakah proses benchmarking dengan kompetitor sudah mulai dilakukan?", 4),
    (5, "Apakah IT management menjadi dasar pengetahuan dari metriks kualitas?", 4),
    (5, "Apakah proses analisis akar permasalahan (root cause analysis) diaplikasikan secara berkala?", 4),
    (5, "Sistem manajemen kualitas (QMS) sudah diterapkan pada setiap aktivitas maupun proses bisnis di Perusahaan", 5),
    (5, "Sistem manajemen kualitas (QMS) yang diterapkan sudah fleksibel dan mudah beradaptasi dengan perubahan lingkungan di Perusahaan", 5),
    (5, "Perusahaan telah rutin mengadakan proses brenchmarking dengan program pendidikan diluar (kompetitor Perusahaan)", 5),
    (5, "Proses manajemen mutu Perusahaan sudah sesuai standar dan spesifikasi", 5),
    (6, "Manajemen proses terhadap perubahan tidak terdefinisi sama sekali serta segala perubahan dapat dilakukan tanpa kontrol.", 0),
    (6, "Tidak ada kesadaran terhadap bagaimana sebuah perubahan dapat berdampak negatif bagi perusahaan terutama terhadap operasi bisnis dan teknologi informasi.", 0),
    (6, "Tidak ada kesadaran terhadap bagaimana sebuah manajemen perubahan yang baik dapat berdampak positif juga untuk perusahaan.", 0),
    (6, "Perusahaan mengetahui bahwa setiap perubahan yang ada harus dikelola dan diawasi", 1),
    (6, "Terdapat keberagaman bidang urusan pada Perusahaan yang memungkinkan terjadinya perubahan yang tidak terkelola atau tidak sah. ", 1),
    (6, "Dokumentasi dari perubahan yang pernah terjadi di Perusahaan relatif sedikit atau tidak ada dan konfigurasi cenderung tidak lengkap dan tidak dapat dipercaya. ", 1),
    (6, "Kesalahan sering terjadi karena buruknya manajemen perubahan yang ada.", 1),
    (6, "Terdapat proses manajemen perubahan secara informal namun belum tersrtruktur, mendasar dan cenderung terjadi kesalahan.", 2),
    (6, "Konfigurasi dari akurasi dokumentasi masih inkonsisten dan perencanaan serta perhitungan dampak terhadap perubahan masih terbatas.", 2),
    (6, "Terdapat proses manajemen perubahan formal yang baik yang mencakup kategorisasi, prioritasisasi, prosedur-prosedur darurat, autorisasi perubahan dan manajemen pelepasan yang sesuai dengan perkembangan Perusahaan.", 3),
    (6, "Kesalahan dan perubahan-perubahan tak terkelola masih terjadi.", 3),
    (6, "Analisis dampak perubahan IT pada operasi bisnis mulai dibentuk untuk mendukung perencanaan teknologi dan aplikasi baru.", 3),
    (6, "Proses manajemen perubahan dikembangkan dengan baik dan secara konsisten diikuti untuk segala perubahan yang ada. ", 4),
    (6, "Proses berjalan dengan efisien dan efektif tetapi tetap bersandar pada prosedur manual dan kontrol untuk memastikan bahwa mutu tercapai.", 4),
    (6, "Proses persetujuan untuk perubahan sudah sesuai aturan.", 4),
    (6, "Dokumentasi manajemen perubahan dibuat dengan tepat dan umumnya akurat.", 4),
    (6, "Perencanaan menejemen perubahan IT  menjadi terintegrasi dengan perubahan dalam proses bisnis untuk menjamin training, perubahan organisasi dan persoalan kelancaran bisnis terkelola.", 4),
    (6, "Terdapat peningkatan koordinasi antara manajemen perubahan IT dan perancangan proses bisnis baru.", 4),
    (6, "Terdapat proses yang konsisten untuk mengawasi mutu dan kinerja proses manajemen perubahan Perusahaan.", 4),
    (6, "Proses manajemen perubahan dilakukan secara teratur, ditinjau dan diperbaharui untuk tertap sejalan dengan visi dan misi Perusahaan.", 5),
    (6, "Informasi konfigurasi sudah berbasis komputer dan menyediakan version control.", 5),
    (6, "Manajemen perubahan IT terintegrasi dengan manajemen perubahan bisnis untuk memastikan bahwa IT adalah aspek penting dalam peningkatan produktivitas dan penciptaan kesempatan bisnis baru bagi Perusahaan.", 5),
    (6, "Terdapat Dokumentasi konfigurasi yang akurat.", 5);
  








 




























 













 











































    

 











 













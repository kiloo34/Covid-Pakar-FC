@extends('layouts.landing')

@section('content')
<section style="margin-bottom: 144px;">
    <h2 class="section-title">{{ __('Vaksin') }}</h2>
    <p class="section-lead">{{ __('Jenis-Jenis Vaksin COVID-19') }}</p>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab">
                            {{ __('Vaksin mRNA (Pfizer-BioNTech, Moderna)') }}
                        </a>
                        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab">
                            {{ __('Vaksin Vektor Virus (AstraZeneca, Johnson & Johnson)') }}
                        </a>
                        <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab">
                            {{ __('Vaksin Inaktivasi Virus (Sinovac, Sinopharm)') }}
                        </a>
                        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab">
                            {{ __('Vaksin Subunit Protein (Novavax)') }}
                        </a>
                    </div>
                </div>
                <div class="col-8">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                            <b>Cara Kerja:</b> Menggunakan messenger RNA (mRNA) untuk memberi instruksi kepada sel tubuh kita agar memproduksi protein spike dari virus SARS-CoV-2. Protein ini kemudian memicu respons imun.<br><br>
                            <b>Keefektifan:</b> Sangat efektif dalam mencegah penyakit simptomatik dan terutama gejala parah serta kematian akibat COVID-19.
                        </div>
                        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                            <b>Cara Kerja:</b> Menggunakan virus yang sudah dilemahkan (bukan SARS-CoV-2) yang membawa materi genetik dari protein spike untuk memicu respons imun.<br><br>
                            <b>Keefektifan:</b> Efektif dalam mencegah penyakit COVID-19, terutama gejala parah dan kematian.
                        </div>
                        <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                            <b>Cara Kerja:</b> Menggunakan virus SARS-CoV-2 yang telah dimatikan (inaktivasi) untuk memicu respons imun tanpa menyebabkan penyakit.<br><br>
                            <b>Keefektifan:</b> Efektif dalam mencegah penyakit simptomatik dan parah.
                        </div>
                        <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                            <b>Cara Kerja:</b> Menggunakan potongan kecil dari protein spike SARS-CoV-2 (subunit protein) untuk memicu respons imun.<br><br>
                            <b>Keefektifan:</b> Efektif dalam mencegah penyakit simptomatik dan parah.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="margin-bottom: 144px;">
    <h2 class="section-title">{{ __('Rumah Sakit Rujukan Covid') }}</h2>
    <p class="section-lead">{{ __('Rumah sakit rujukan COVID-19 adalah fasilitas kesehatan yang ditunjuk oleh pemerintah untuk menangani kasus COVID-19. Mereka memiliki sumber daya medis, peralatan, dan tenaga kesehatan yang siap untuk diagnosis, perawatan, dan isolasi pasien COVID-19.') }}</p>

    <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
            <article class="article article-style-b">
                <div class="article-header">
                    <div class="article-image" data-background="../assets/img/news/img13.jpg"></div>
                </div>
                <div class="article-details">
                    <div class="article-title">
                        
                        <h2><a href="#">RSUD Tongas</a></h2>
                    </div>
                    <p>RSUD Tongas di Kabupaten Probolinggo, dengan fasilitas lengkap untuk penanganan pasien COVID-19 (tirto.id).</p>
                </div>
            </article>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
            <article class="article article-style-b">
                <div class="article-header">
                    <div class="article-image" data-background="../assets/img/news/img13.jpg"></div>
                </div>
                <div class="article-details">
                    <div class="article-title">
                        <h2><a href="#">RSUD dr. Mohamad Saleh</a></h2>
                    </div>
                    <p>RSUD dr. Mohamad Saleh di Kota Probolinggo, yang juga melayani pasien COVID-19 dan memiliki peralatan serta tim medis yang siap menangani kasus tersebut (tirto.id).</p>
                </div>
            </article>
        </div>
    </div>
</section>

<section style="margin-bottom: 144px;">
    <h2 class="section-title">{{ __('Pengobatan Infeksi Covid') }}</h2>
    <p class="section-lead">{{ __('Pengobatan infeksi COVID-19 dapat melibatkan berbagai pendekatan tergantung pada tingkat keparahan gejala. Berikut adalah beberapa metode pengobatan yang umum: ') }}</p>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-1" role="tab">
                            {{ __('Pengobatan di Rumah') }}
                        </a>
                        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-2" role="tab">
                            {{ __('Pengobatan Medis') }}
                        </a>
                        <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-3" role="tab">
                            {{ __('Pencegahan') }}
                        </a>
                        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-4" role="tab">
                            {{ __('Perawatan Khusus') }}
                        </a>
                    </div>
                </div>
                <div class="col-8">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="list-1" role="tabpanel" aria-labelledby="list-home-list">
                            <ul>
                                <li><b>Istirahat:</b> Pasien disarankan untuk banyak istirahat.</li>
                                <li><b>Hidrasi:</b> Minum banyak cairan untuk tetap terhidrasi.</li>
                                <li><b>Obat-obatan:</b> Menggunakan obat bebas untuk meredakan gejala seperti demam dan batuk (misalnya, parasetamol).</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="list-2" role="tabpanel" aria-labelledby="list-profile-list">
                            <ul>
                                <li><b>Antivirus:</b> Obat seperti Remdesivir dapat digunakan pada pasien dengan gejala berat.</li>
                                <li><b>Steroid:</b> Deksametason digunakan untuk mengurangi peradangan pada pasien dengan gejala berat.</li>
                                <li><b>Oksigen:</b> Terapi oksigen diberikan kepada pasien yang mengalami kesulitan bernapas.</li>
                                <li><b>Perawatan Intensif:</b> Ventilator mungkin diperlukan untuk pasien yang mengalami kegagalan pernapasan.</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="list-3" role="tabpanel" aria-labelledby="list-messages-list">
                            <ul>
                                <li><b>Vaksinasi:</b> Vaksin COVID-19 sangat penting untuk mencegah infeksi dan mengurangi keparahan penyakit.</li>
                                <li><b>Protokol Kesehatan:</b> Memakai masker, menjaga jarak fisik, mencuci tangan, dan menghindari kerumunan tetap penting.</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="list-4" role="tabpanel" aria-labelledby="list-settings-list">
                            <ul>
                                <li><b>Monoklonal Antibodies:</b> Digunakan untuk pasien tertentu untuk mengurangi risiko gejala berat.</li>
                                <li><b>Antikoagulan:</b> Mencegah pembekuan darah yang bisa terjadi pada beberapa pasien COVID-19.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="margin-bottom: 144px;">
    <h2 class="section-title">{{ __('Call Center') }}</h2>
    <p class="section-lead">{{ __('Di Kabupaten Probolinggo, ada beberapa call center yang dapat dihubungi terkait informasi dan penanganan COVID-19:') }}</p>
    <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
            <article class="article article-style-b">
                <div class="article-header">
                    <div class="article-image" data-background="../assets/img/news/img13.jpg"></div>
                </div>
                <div class="article-details">
                    <div class="article-title">
                        <h2><a href="#">Layanan Darurat 112</a></h2>
                    </div>
                    <p>Masyarakat dapat menghubungi nomor 112 untuk berbagai keadaan darurat, termasuk kasus COVID-19 (BPBD Probolinggo Kabupaten).</p>
                </div>
            </article>
        </div>    
        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
            <article class="article article-style-b">
                <div class="article-header">
                    <div class="article-image" data-background="../assets/img/news/img13.jpg"></div>
                </div>
                <div class="article-details">
                    <div class="article-title">
                        <h2><a href="#">BPBD Kabupaten Probolinggo</a></h2>
                    </div>
                    <p>Bisa dihubungi di nomor +62 811 3514 477 untuk melaporkan situasi terkait COVID-19 atau bencana lainnya (BPBD Probolinggo Kabupaten).</p>
                </div>
            </article>
        </div>    
    </div>
</section>

<section style="margin-bottom: 144px;">
    <h2 class="section-title">{{ __('Protokol Kesehatan') }}</h2>
    <p class="section-lead">{{ __('Protokol kesehatan COVID-19 dirancang untuk mencegah penyebaran virus SARS-CoV-2 dan melindungi masyarakat dari infeksi. Berikut adalah beberapa protokol kesehatan yang penting untuk diikuti:') }}</p>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div id="accordion">
                    <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-1" aria-expanded="true">
                            <h4>Memakai Masker</h4>
                        </div>
                        <div class="accordion-body collapse show" id="panel-body-1" data-parent="#accordion">
                            <ul>
                                <li><b>Jenis Masker:</b> Gunakan masker medis atau masker kain berlapis yang menutupi hidung dan mulut dengan baik.</li>
                                <li><b>Situasi:</b> Pakai masker di tempat umum, terutama di dalam ruangan atau ketika jarak fisik sulit dijaga.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-2">
                            <h4>Mencuci Tangan</h4>
                        </div>
                        <div class="accordion-body collapse" id="panel-body-2" data-parent="#accordion">
                            <li><b>Metode:</b> Cuci tangan dengan sabun dan air selama minimal 20 detik. Jika sabun dan air tidak tersedia, gunakan hand sanitizer berbasis alkohol (setidaknya 60% alkohol).</li>
                            <li><b>Frekuensi:</b> Cuci tangan secara rutin, terutama setelah menyentuh permukaan yang sering disentuh, sebelum makan, dan setelah batuk atau bersin.</li>
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-3">
                            <h4>Menjaga Jarak Fisik</h4>
                        </div>
                        <div class="accordion-body collapse" id="panel-body-3" data-parent="#accordion">
                            <li><b>Jarak:</b> Tetap jaga jarak setidaknya 1-2 meter dari orang lain, terutama mereka yang tidak tinggal serumah.</li>
                            <li><b>Tempat:</b> Hindari kerumunan dan tempat-tempat ramai jika memungkinkan.</li>
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-4">
                            <h4>Menghindari Kontak Fisik</h4>
                        </div>
                        <div class="accordion-body collapse" id="panel-body-4" data-parent="#accordion">
                            <li><b>Salam:</b> Hindari berjabat tangan atau pelukan. Gunakan alternatif seperti melambaikan tangan atau membungkuk.</li>
                            <li><b>Berbagi Barang:</b> Hindari berbagi barang pribadi seperti piring, gelas, dan peralatan makan.</li>
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-5">
                            <h4>Kebersihan dan Disinfeksi</h4>
                        </div>
                        <div class="accordion-body collapse" id="panel-body-5" data-parent="#accordion">
                            <li><b>Jarak:</b> Bersihkan dan disinfeksi permukaan yang sering disentuh seperti gagang pintu, saklar lampu, dan meja secara rutin.</li>
                            <li><b>Tempat:</b> Pastikan ruang-ruang dalam rumah atau kantor memiliki ventilasi yang baik. Buka jendela dan pintu jika memungkinkan.</li>
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-6">
                            <h4>Menghindari Perjalanan yang Tidak Penting</h4>
                        </div>
                        <div class="accordion-body collapse" id="panel-body-6" data-parent="#accordion">
                            <li><b>Perjalanan:</b> Kurangi perjalanan yang tidak penting, terutama ke daerah dengan tingkat penularan tinggi.</li>
                            <li><b>Transportasi Umum:</b> Jika harus menggunakan transportasi umum, pakai masker dan jaga jarak sebisa mungkin.</li>
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-7">
                            <h4>Memantau Kesehatan</h4>
                        </div>
                        <div class="accordion-body collapse" id="panel-body-7" data-parent="#accordion">
                            <li><b>Gejala:</b> Waspadai gejala COVID-19 seperti demam, batuk, dan sesak napas. Jika Anda merasa tidak sehat, segera lakukan isolasi mandiri dan hubungi tenaga medis.</li>
                            <li><b>Tes COVID-19:</b> Jika terpapar atau memiliki gejala, lakukan tes COVID-19 sesuai dengan panduan kesehatan setempat.</li>
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-8">
                            <h4>Vaksinasi</h4>
                        </div>
                        <div class="accordion-body collapse" id="panel-body-8" data-parent="#accordion">
                            <li><b>Vaksin:</b> Dapatkan vaksin COVID-19 sesuai jadwal yang direkomendasikan. Ikuti panduan pemerintah setempat mengenai program vaksinasi.</li>
                            <li><b>Booster:</b> Pastikan mendapatkan dosis booster jika direkomendasikan, untuk menjaga tingkat perlindungan yang optimal.</li>
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-9">
                            <h4>Mengikuti Pedoman Pemerintah dan Otoritas Kesehatan</h4>
                        </div>
                        <div class="accordion-body collapse" id="panel-body-9" data-parent="#accordion">
                            <li><b>Update:</b> Tetap update dengan informasi dan pedoman terbaru dari pemerintah dan otoritas kesehatan seperti WHO dan CDC.</li>
                            <li><b>Kepatuhan:</b> Patuhi semua aturan dan regulasi yang diterapkan, termasuk pembatasan sosial dan karantina jika diperlukan.</li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="margin-bottom: 144px;">
    <h2 class="section-title">{{ __('Nomor Ambulan') }}</h2>
    <p class="section-lead">{{ __('Protokol kesehatan COVID-19 dirancang untuk mencegah penyebaran virus SARS-CoV-2 dan melindungi masyarakat dari infeksi. Berikut adalah beberapa protokol kesehatan yang penting untuk diikuti: Nomor Ambulan') }}</p>
    <div class="row">

    </div>
</section>
@endsection
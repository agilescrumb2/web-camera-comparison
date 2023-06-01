@extends('frontend.master')
@section('title')
    About Cameris
@endsection
@section('content')
    <div class="section page-banner-section" style="background-image: url({{ asset('images/ab.jpg') }})">
        <div class="container">
            <div class="page-banner-content">
                <h2 class="title">About</h2>
                <ul class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="active">About Cameris</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section section-padding-02">
        <div class="container">
            <div class="history-content text-center">
                <div class="section-title-03">
                    <h6 class="sub-title">Solusi terbaik untuk membandingkan kamera sesuai dengan kebutuhan
                        dan anggaran Anda</h6>
                    <h2 class="title">Website Cameris</h2>
                </div>
                <p> Camera Comparison adalah platform yang didedikasikan untuk memberikan perbandingan spesifikasi dan fitur
                    dari berbagai jenis kamera. Kami memahami betapa pentingnya memilih kamera yang sesuai dengan kebutuhan
                    Anda, dan kami ingin membuat proses tersebut menjadi lebih mudah dan efisien bagi Anda.</p>
                <p> Memilih kamera yang tepat dapat menjadi tugas yang membingungkan dan memakan waktu. Dalam industri
                    fotografi yang terus berkembang dengan cepat, ada begitu banyak merek, model, dan fitur yang
                    berbeda-beda. Dalam situasi seperti ini, informasi yang akurat dan bermanfaat adalah kunci untuk membuat
                    keputusan yang tepat.</p>
                <p> Dengan Camera Comparison, Anda akan memiliki akses ke berbagai informasi penting tentang kamera-kamera
                    terkini. Kami mengumpulkan data dari berbagai sumber terpercaya dan melakukan penelitian mendalam untuk
                    menyajikan informasi yang paling relevan dan terkini tentang kamera-kamera tersebut.
                    Kami menyediakan perbandingan spesifikasi teknis seperti resolusi sensor, rentang ISO, kecepatan rana,
                    dan kemampuan merekam video. Selain itu, kami juga menyajikan informasi tentang fitur-fitur khusus
                    seperti stabilisasi gambar, autofocus, konektivitas, dan banyak lagi. Dengan demikian, Anda dapat dengan
                    mudah membandingkan kelebihan dan kekurangan masing-masing kamera. </p>
                <p> Kelebihan kami terletak pada antarmuka pengguna yang sederhana dan mudah digunakan. Anda dapat dengan
                    cepat memfilter kamera berdasarkan merek, harga, tipe, atau fitur tertentu yang Anda cari. Kami juga
                    menyediakan gambar dan deskripsi yang jelas untuk membantu Anda memvisualisasikan kamera-kamera
                    tersebut.
                    Kami percaya bahwa pengalaman pengguna yang baik adalah kunci untuk membantu Anda menemukan kamera yang
                    tepat. Oleh karena itu, kami berusaha keras untuk menyediakan informasi yang akurat, lengkap, dan
                    terkini. Tim kami terus memperbarui database kami agar Anda selalu mendapatkan informasi terbaru tentang
                    kamera-kamera terbaru yang dirilis. </p>
                <p> Jadi, jika Anda sedang mencari kamera yang sesuai dengan kebutuhan fotografi Anda, Camera Comparison
                    siap membantu. Dapatkan informasi yang Anda butuhkan dengan cepat dan mudah, dan temukan kamera yang
                    akan mengabadikan momen berharga dalam hidup Anda.
                </p>
            </div>
            <div class="history-icon text-center">
                <img src="" alt="">
            </div>
        </div>
    </div>
    <div class="section section-padding-02">
        <div class="container">
            <div class="history-content text-center">
                <div class="section-title-03">
                    <h6 class="sub-title">Cameris</h6>
                    <h2 class="title">Fitur Yang Tersedia</h2>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="cs-iconbox cs-style1">
                            <div class="cs-iconbox_icon cs-center">
                                <img src="{{ asset('assets2/images/icon/icon_box_1.svg') }}" alt="Icon">
                            </div>
                            <div class="cs-iconbox_in">
                                <div class="cs-iconbox_number cs-primary_font">01</div>
                                <h3 class="cs-iconbox_title">Pilih Menu yang sudah disedikan</h3>
                                <div class="cs-iconbox_subtitle">Berisi terdapat
                                    menu pada navbar website Cameris antara lain
                                    halaman kamera, lensa, fullset dan compare camera. Pilihlah salah satu diantaranya
                                    dan nikmati layanan didalamnya terdapat informasi akurat dan tepat untuk kebutuhan
                                    Anda.
                                </div>
                            </div>
                        </div>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="cs-iconbox cs-style1">
                            <div class="cs-iconbox_icon cs-center">
                                <img src="{{ asset('assets2/images/icon/icon_box_2.svg') }}" alt="Icon">
                            </div>
                            <div class="cs-iconbox_in">
                                <div class="cs-iconbox_number cs-primary_font">02</div>
                                <h3 class="cs-iconbox_title">Pada bagian menu halaman kamera, lensa, dan fullset</h3>
                                <div class="cs-iconbox_subtitle">
                                    Berisi list daftar kamera, lensa, dan fullset dan fitur pencarian/fitur filter untuk
                                    mempermudah pencarian dan mempersingkat waktu, terdapat spesifikasi dan fitur
                                    dari
                                    berbagai jenis kamera, lensa maupun fullset.
                                </div>
                            </div>
                        </div>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="cs-height_25 cs-height_lg_0"></div>
                        <div class="cs-iconbox cs-style1">
                            <div class="cs-iconbox_icon cs-center">
                                <img src="{{ asset('assets2/images/icon/icon_box_3.svg') }}" alt="Icon">
                            </div>
                            <div class="cs-iconbox_in">
                                <div class="cs-iconbox_number cs-primary_font">03</div>
                                <h3 class="cs-iconbox_title">Pada bagian menu halaman Compare</h3>
                                <div class="cs-iconbox_subtitle">Berisi perbandingan hasil dari beberapa
                                    kamera. Pastikan untuk memilih kamera dengan spesifikasi yang
                                    sesuai dengan kebutuhan Anda.
                                    Perhatikan perbedaan dan kelebihan
                                    masing-masing kamera pada spesifikasi yang telah dipilih. </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="cs-iconbox cs-style1">
                            <div class="cs-iconbox_icon cs-center">
                                <img src="{{ asset('assets2/images/icon/icon_box_4.svg') }}" alt="Icon">
                            </div>
                            <div class="cs-iconbox_in">
                                <div class="cs-iconbox_number cs-primary_font">04</div>
                                <h3 class="cs-iconbox_title">Pada bagian menu halaman About</h3>
                                <div class="cs-iconbox_subtitle">Berisi deskripsi mengenai Website Camera
                                    Comparison dan tutorial penggunaan fitur-fitur yang tersedia pada website ini. Dan juga
                                    berisi informasi apa
                                    saja
                                    mengenai kelebihan dan fitur pada website ini.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-padding-02">
        <div class="container">
            <div class="row align-items-center flex-column-reverse-lg">
                <div class="col-xl-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="cs-left_full_width cs-space110">
                        <div class="cs-left_sided_img">
                            <img src="{{ asset('images/camcam.png') }}" alt="About">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="cs-height_0 cs-height_lg_40"></div>
                    <div class="section-title-03">
                        <h6 class="sub-title">Cameris</h6>
                        <h2 class="title">Tentang Cameris</h2>
                    </div>
                    <br>
                    <p>
                        Temukan kamera impian Anda dengan mudah dan cepat di Cameris! Kami adalah platform perbandingan
                        kamera yang lengkap, dirancang khusus untuk membantu Anda dalam memilih kamera yang sesuai dengan
                        kebutuhan Anda. Dengan fitur-fitur user-friendly, visualisasi yang jelas, dan informasi spesifikasi
                        yang akurat, kami memberikan pengalaman yang tak tertandingi dalam membandingkan berbagai merek,
                        model, dan fitur kamera. Temukan kamera yang tepat untuk mengabadikan momen berharga dalam hidup
                        Anda. Kunjungi Cameris sekarang dan temukan dunia fotografi yang tak terbatas dalam genggaman Anda!
                    </p>
                </div>
            </div>
        </div>
        <br><br><br> <br><br>
    </div>
    <section class="cs-bg" data-src="{{ asset('assets/img/feature_bg.svg') }}">
        <div id="feature">
            <div class="container">
                <div class="cs-seciton_heading cs-style1 text-center">
                    <div class="section-title-03">
                        <h6 class="sub-title">Cameris</h6>
                        <h2 class="title">Fitur dan Kelebihan Cameris</h2>
                    </div>
                    <h3 class="cs-section_title"></h3>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="cs-iconbox cs-style1 cs-type1">
                            <div class="cs-iconbox_icon cs-center">
                                <img src="{{ asset('assets2/images/icon/icon_box_5.svg') }}" alt="Icon">
                            </div>
                            <div class="cs-iconbox_in">
                                <h3 class="cs-iconbox_title">Perbandingan Kamera yang Lengkap</h3>
                                <div class="cs-iconbox_subtitle"> Website Kamera Comparison menyediakan
                                    perbandingan
                                    kamera yang lengkap dengan fitur-fitur, spesifikasi, dan harga dari berbagai
                                    merek dan tipe kamera.</div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="cs-iconbox cs-style1 cs-type1">
                            <div class="cs-iconbox_icon cs-center">
                                <img src="{{ asset('assets2/images/icon/icon_box_6.svg') }}" alt="Icon">
                            </div>
                            <div class="cs-iconbox_in">
                                <h3 class="cs-iconbox_title">Visualisasi yang Jelas</h3>
                                <div class="cs-iconbox_subtitle">Tampilan yang user-friendly dan mudah dipahami
                                    memudahkan pengguna untuk membandingkan fitur dan spesifikasi kamera secara
                                    langsung.</div>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="cs-iconbox cs-style1 cs-type1">
                            <div class="cs-iconbox_icon cs-center">
                                <img src="{{ asset('assets2/images/icon/icon_box_7.svg') }}" alt="Icon">
                            </div>
                            <div class="cs-iconbox_in">
                                <h3 class="cs-iconbox_title">Filter dan Search</h3>
                                <div class="cs-iconbox_subtitle">Pengguna dapat menggunakan filter dan search
                                    untuk memudahkan pengguna dalam menemukan kamera yang sesuai dengan kebutuhan dan
                                    anggaran pengguna.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="cs-iconbox cs-style1 cs-type1">
                            <div class="cs-iconbox_icon cs-center">
                                <img src="{{ asset('assets2/images/icon/icon_box_8.svg') }}" alt="Icon">
                            </div>
                            <div class="cs-iconbox_in">
                                <h3 class="cs-iconbox_title">Rekomendasi Kamera</h3>
                                <div class="cs-iconbox_subtitle">Website ini menyajikan rekomendasi kamera
                                    berdasarkan budget yang diinginkan.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="cs-iconbox cs-style1 cs-type1">
                            <div class="cs-iconbox_icon cs-center">
                                <img src="{{ asset('assets2/images/icon/icon_box_9.svg') }}" alt="Icon">
                            </div>
                            <div class="cs-iconbox_in">
                                <h3 class="cs-iconbox_title">Akses Mudah</h3>
                                <div class="cs-iconbox_subtitle">Website ini dapat diakses dari berbagai perangkat
                                    seperti desktop, laptop, tablet, dan smartphone sehingga pengguna dapat
                                    membandingkan kamera kapan saja dan di mana saja.</div>
                            </div>
                        </div>
                        <br><br><br>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="cs-iconbox cs-style1 cs-type1">
                            <div class="cs-iconbox_icon cs-center">
                                <img src="{{ asset('assets2/images/icon/icon_box_10.svg') }}" alt="Icon">
                            </div>
                            <div class="cs-iconbox_in">
                                <h3 class="cs-iconbox_title">Informasi yang Akurat </h3>
                                <div class="cs-iconbox_subtitle">Website ini menyajikan informasi spesifikasi
                                    kamera yang akurat dan terupdate untuk membantu pengguna menemukan kamera yang
                                    tepat.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

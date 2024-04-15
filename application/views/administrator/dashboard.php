<div class="container">
    <!-- Page Heading -->
    <h5 class="h4 mb-4 text-gray-800"><i class="fas fa-fw fa-tachometer-alt"></i> <?= $title; ?></h5>

    <div class="row">
        <div class="col-xl-10 col-md-4 mb-5">
            <div class="card border-left-warning h-100 py-2 bg-info">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-white text-uppercase mb-1">Selamat Datang!</div>
                            <div class="text-md font-weight text-white mb-1">Selamat Datang <strong><?php echo $username; ?></strong> di Digital Learning Management System (Di-Lemas), Anda login sebagai <strong><?php echo $level; ?></strong>.</div>
                            <hr style="border-top: 1px solid white;">
                            <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#exampleModal">
                                <i class="fas fa-cogs"></i> Control Panel
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-cogs"></i> Control Panel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url('administrator/siswa') ?>">
                                <p class="nav-link small text-info">Siswa</p>
                            </a>
                            <i class="fas fa-3x fa-user-graduate"></i>
                        </div>
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url('administrator/tahun_akademik') ?>">
                                <p class="nav-link small text-info">Tahun Akademik</p>
                            </a>
                            <i class="fas fa-3x fa-calendar-alt"></i>
                        </div>
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url('administrator/krs') ?>">
                                <p class="nav-link small text-info">KRS</p>
                            </a>
                            <i class="fas fa-3x fa-edit"></i>
                        </div>
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url('administrator/khs') ?>">
                                <p class="nav-link small text-info">KHS</p>
                            </a>
                            <i class="fas fa-3x fa-file-alt"></i>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url('administrator/khs/input_nilai') ?>">
                                <p class="nav-link small text-info">Input Nilai</p>
                            </a>
                            <i class="fas fa-3x fa-sort-numeric-down"></i>
                        </div>
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url('administrator/transkrip_nilai') ?>">
                                <p class="nav-link small text-info">Cetak Transkrip</p>
                            </a>
                            <i class="fas fa-3x fa-print"></i>
                        </div>
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url('administrator/hubungi_kami') ?>">
                                <p class="nav-link small text-info">Pesan User</p>
                            </a>
                            <i class="fas fa-3x fa-comment-dots"></i>
                        </div>
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url('administrator/informasi') ?>">
                                <p class="nav-link small text-info">Info Kampus</p>
                            </a>
                            <i class="fas fa-3x fa-bullhorn"></i>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url('administrator/identitas') ?>">
                                <p class="nav-link small text-info">Identitas</p>
                            </a>
                            <i class="fas fa-3x fa-id-card-alt"></i>
                        </div>
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url('administrator/tentang_kampus') ?>">
                                <p class="nav-link small text-info">Tentang Kampus</p>
                            </a>
                            <i class="fas fa-3x fa-info-circle"></i>
                        </div>
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url('administrator/mahasiswa') ?>">
                                <p class="nav-link small text-info">Mahasiswa</p>
                            </a>
                            <i class="fas fa-3x fa-user-graduate"></i>
                        </div>
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url('administrator/user') ?>">
                                <p class="nav-link small text-info">User</p>
                            </a>
                            <i class="fas fa-3x fa-user"></i>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-10 col-md-4 mb-5">
            <div class="card border-left-warning h-100 py-2 bg-success">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-white text-uppercase mb-1">Visi SMK Pancakarya</div>
                            <div class="text-md font-weight text-white mb-1">
                                SMK Pancakarya Kota Tangerang sebagai sekolah Pembangun generasi muda mandiri, kompeten, berkarakter dan berakhlak mulia, menuju sekolah standar nasional, berpotensi sekolah berstandar internasional tahun 2026.
                            </div>
                            <hr style="border-top: 1px solid yellow;">
                            <div class="text-md font-weight-bold text-white text-uppercase mb-1">Misi SMK Pancakarya</div>
                            <div class="text-md font-weight text-white mb-1">
                                <ul>
                                    <li>Menyempurnakan kurikulum SMK Pancakarya Kota Tangerang yang flexible, dinamis dan antisipatif serta progresif sesuai dengan perkembangan Dunia Kerja</li>
                                    <li>Memenuhi kebutuhan sarana dan prasarana baik secara kuantitatif maupun kualitatif</li>
                                    <li>Meningkatkan kualitas Kegiatan Belajar Mengajar (KBM) dan disiplin</li>
                                </ul>
                            </div>
                            <hr style="border-top: 1px solid yellow;">
                            <div class="text-md font-weight-bold text-white text-uppercase mb-1">Tujuan SMK Pancakarya</div>
                            <div class="text-md font-weight text-white mb-1">
                                <ol>
                                    <li>Mempersiapkan tenaga kerja tingkat menengah yang memiliki pengetahuan sikap dan keterampilan sesuai program keahliannya untuk bekal bekerja, atau melanjutkan pendidikan ke tingkat lebih tinggi.</li>
                                    <li>Mendidik, membimbing, mengajar para peserta didik untuk menjadi insan mandiri, cepat beradaptasi, dan mampu menghadapi tantangan dan perubahan di masyarakat.</li>
                                    <li>Membekali sikap professional untuk mengembangkan diri agar mampu berkompetensi ditingkat regional, nasional, maupun internasional.</li>
                                    <li>Menjaga dan memberikan kepuasan kepada para stakeholder.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
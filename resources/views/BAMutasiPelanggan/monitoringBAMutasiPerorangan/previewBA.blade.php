@extends('layout.app')

@push('css')
    <link href="http://fonts.cdnfonts.com/css/dot-matrix" rel="stylesheet">
    <style>
        .priview {
            font-family: 'Dot Matrix', sans-serif;
        }

        table thead tr {
            border-bottom: 3px ridge rgb(102, 102, 102);
            border-top: 3px ridge rgb(102, 102, 102);
        }

        .awalan {
            border: 2px solid rgb(102, 102, 102);
        }

        .container {
            border: 2px solid rgb(102, 102, 102);
        }
    </style>
@endpush

@section('title', 'Cetak BA')

@section('namaHal', 'BA Mutasi Pelanggan')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">BA Mutasi Pelanggan</a></li>
        <li class="breadcrumb-item active">Cetak BA</li>

    </ol>
    <br>
    <br>
    <a href="" class="btn btn-sm btn-success float-right"><i class="fas fa-download"></i>Download</a>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Print preview cetak BA</h3>
                        </div>
                        <div class="card-body priview">
                            <div class="row">
                                <div class="col">
                                    <div style="font-size:15px">PEMERINTAH KOTAMADYA DAERAH TK.II SURABAYA</div>
                                    <div style="font-size:15px">PERUSAHAAN DAERAH AIR MINUM</div>
                                    <div style="font-size:15px">Jl.Mayjen Prof.Moestopo No.2 Surabaya</div>
                                    <div style="font-size:15px">Telp.(031)509</div>
                                </div>
                                <div class="col"></div>
                                <div class="col">
                                    <div class="border pl-2 w-80">
                                        <div class="row">
                                            <div class="col">
                                                <div class="row">
                                                    <div class="col justify-content-between">
                                                        BAGIAN LANGGANAN WILAYAH
                                                    </div>
                                                    <div class="col">
                                                        TTMTTR
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kopsurat">
                                            <div class="row">
                                                NOMOR :
                                            </div>
                                            <div class="row">
                                                TANGGAL :
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <h3 align="center">BERITA ACARA PERUBAHAN</h3>
                            <div class="awalan">
                                <div class="col-ml-10">
                                    <div>
                                        <table>
                                            <tr>
                                                <td>No Pelanggan</td>
                                                <td>:</td>
                                            </tr>
                                            <tr>
                                                <td>Nama</td>
                                                <td>:</td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td>:</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <p>Kami yang bertanda tangan dibawah ini menyatakan bahwa pelanggan
                                air minum PDAM - KMS Atas nama tersebut di atas perlu diadakan perubahan data
                                pelanggan
                                sebagai berikut :
                            </p>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Data Pelanggan</th>
                                        <th>Lama</th>
                                        <th>Baru</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Nama </td>
                                        <td>test </td>
                                        <td>halo </td>
                                    </tr>
                                    <tr>
                                        <td>Alamat </td>
                                        <td>test </td>
                                        <td>halo </td>
                                    </tr>
                                    <tr>
                                        <td>No Pelanggan </td>
                                        <td>test </td>
                                        <td>halo </td>
                                    </tr>
                                    <tr>
                                        <td>Ukuran Meter</td>
                                        <td>test </td>
                                        <td>halo </td>
                                    </tr>
                                    <tr>
                                        <td>Kode Tarif Air</td>
                                        <td>test </td>
                                        <td>halo </td>
                                    </tr>
                                    <tr>
                                        <td>Kode Tarif Retribusi</td>
                                        <td>test </td>
                                        <td>halo </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="awalan">
                                <div class="col-ml-10">
                                    <div>
                                        <table>
                                            <tr>
                                                <td>Dasar</td>
                                                <td>:</td>
                                            </tr>
                                            <tr>
                                                <td>Terhitung Mulai</td>
                                                <td>:</td>
                                            </tr>
                                            <tr>
                                                <td>Rekening Bulan</td>
                                                <td>:</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <p>Demikian berita acara ini dibuat dengan sesungguhnya untuk dapat digunakan sebagaimana
                                mestinya
                            </p>
                            <div class="ttd">
                                <div class="row text-center">
                                    <div class="col justify-content-between">
                                        <p>Mengetahui</p>
                                        <p class="mb-5">Kabag Langganan</p>
                                        <p class="mb-n3"></p>
                                        <hr style="width: 50%">
                                        <p class="mt-n3"></p>
                                    </div>
                                    <div class="col">
                                        <p>Telah diteliti oleh</p>
                                        <p class="mb-5">Kasie Admin Langganan</p>
                                        <p class="mb-n3"></p>
                                        <hr style="width: 50%">
                                        <p class="mt-n3"></p>
                                    </div>
                                    <div class="col">
                                        <p>Dibuat Oleh</p>
                                        <p class="mb-5"></p>
                                        <p class="mb-n3"></p>
                                        <br>
                                        <hr style="width: 50%">
                                        <p class="mt-n3"></p>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="notes">
                                <div class="col-ml-10">
                                    <div>
                                        <table>
                                            <tr>
                                                <td><u>Dibuat Rangkap 3:</u></td>
                                            </tr>
                                            <tr>
                                                <td>Lembar 1</td>
                                                <td>:</td>
                                                <td> Bag. Rekening</td>
                                            </tr>
                                            <tr>
                                                <td>Lembar 2</td>
                                                <td>:</td>
                                                <td> Bag. Penagihan Rekening</td>
                                            </tr>
                                            <tr>
                                                <td>Lembar 3</td>
                                                <td>:</td>
                                                <td> Bag. Langganan</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

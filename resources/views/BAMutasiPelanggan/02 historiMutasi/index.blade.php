@extends('layout.app')
@section('title', 'BA Mutasi Pelanggan')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Master')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">BA Mutasi Pelanggan</a></li>
        <li class="breadcrumb-item active">Histori Mutasi</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Histori Mutasi</h3>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-8">
                                    <form class="form-horizontal" action="" method="post">
                                        @csrf
                                        <div class="form-group row mt-2 ">
                                            <label for="no_pelanggan" class="col-md-3 col-form-label">No Pelanggan</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="no_pelanggan" id="no_pelanggan" onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2 ">
                                            <label for="nama" class="col-md-3 col-form-label">Nama</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="nama" id="nama" onkeyup="valueing()">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row mt-2 ">
                                            <label for="alamat" class="col-md-3 col-form-label">Alamat </label>
                                            <div class="col-md-6">
                                                <textarea class="form-control" id="alamat" onkeyup="valueing()" name="alamat"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2 ">
                                            <label for="tarif" class="col-md-3 col-form-label">Tarif</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" name="tarif" id="tarif" onkeyup="valueing()">
                                            </div>
                                            <label for="jns_pelanggan" class="col-form-label">Jenis Pelanggan</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" name="jns_pelanggan" id="jns_pelanggan" onkeyup="valueing()">
                                            </div>
                                            <label for="subzona" class="col-form-label">Subzona</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" name="subzona" id="subzona" onkeyup="valueing()">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <table id="table" class="table table-bordered table-responsive-md table-condensed">
                                <thead>
                                    <tr>
                                    <th>No Bamutasi</th>
                                    <th>Tgl Bamutasi</th>
                                    <th>Jns Mutasi</th>
                                    <th>No BonC</th>
                                    <th>No_Plg</th>
                                    <th>Guna Persil</th>
                                    <th>Zona</th>
                                    <th>Ukuran Meter</th>
                                    <th>Retribusi</th>
                                    <th>Nama</th>
                                    <th>Gang</th>
                                    <th>Nomor</th>
                                    <th>No Tmbhn</th>
                                    <th>DA</th>
                                    <th>No PA</th>
                                    <th>Jns Plg</th>
                                    <th>KD Retribusi</th>
                                    <th>No Bundel</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    </section>

    {{-- Edit Form --}}
    @include('master.panggilanDinas.form')
@endsection

@push('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script>
        $(function() {
            $('#table').DataTable({

                //  "lengthChange": false,
                //   "autoWidth": false,
                //   "responsive": true,
                "scrollX":true,
                "oLanguage": {
                    "sSearch": "No Pelanggan : "
                },
                "pageLength": 5
            }).buttons().container().appendTo('#table_wrapper .col-md-6:eq(0)');
            $('#table1').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "pageLength": 5

            });
        });

        function deletePanggilanDinas(id) {
            console.log(id)
            swal.fire({
                title: "Hapus Data?",
                icon: 'question',
                text: "Apakah Anda Yakin Ingin Menghapus",
                type: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#e74c3c",
                confirmButtonText: "Iya",
                cancelButtonText: "Tidak",
                reverseButtons: !0
            }).then(function(e) {
                if (e.value === true) {
                    let token = "{{ csrf_token() }}"
                    let _url = `/master/deletePanggilanDinas/${id}`
                    console.log(_url)

                    $.ajax({
                        type: 'DELETE',
                        url: _url,
                        data: {
                            _token: token
                        },
                        success: function(resp) {
                            if (resp.success) {
                                swal.fire("Selesai!", resp.message, "success");
                                location.reload();
                            } else {
                                swal.fire("Gagal!", "Terjadi Anjayy.", "error");
                            }
                        },
                        error: function(resp) {
                            swal.fire("Gagal!", "Terjadi Kesalahan.", "error")
                        }
                    })
                } else {
                    e.dismiss;
                }
            }, function(dismiss) {
                return false;
            });
        }
    </script>
@endpush

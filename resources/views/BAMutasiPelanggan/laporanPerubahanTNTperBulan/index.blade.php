@extends('layout.app')
@section('title', 'BA Mutasi Pelanggan')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'BA Mutasi Pelanggan')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">BA Mutasi Pelanggan</a></li>
        <li class="breadcrumb-item active">Laporan Mutasi Tarif Naik/Turun</li>
    </ol>
@endsection


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"> Laporan Mutasi Tarif Naik/Turun</h3>
                        </div>
                        <div class="card-body">
                          
                                <div class="col-md-12">
                                    <form class="form-horizontal" action="" method="post">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="" class="col-md-1 col-form-label"></label>
                                            <div class="col-md-8">
                                                <div class="form-group row">
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" id="naik" name="level" value="naik">
                                                        <label class="form-check-label">Tarif Naik</label>
                                                    </div>
                                                    &nbsp;
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" id="turun" name="level" value="turun">
                                                        <label class="form-check-label">Tarif Turun</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        <div class="col-md-1">
                                            <label class="col-form-label col-form-label-sm"></label>
                                        </div>
                                        <div class="card col-md-4">
                                            <div class="card-body">
                                                <div class="col-md-2">
                                                <label class="" for="nama">Dasar</label>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" id="sah" name="dasar" value="sah">
                                                        <label class="form-check-label">Sah</label>
                                                    </div>
                                                    &nbsp;
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" id="terbit" name="dasar" value="terbit">
                                                        <label class="form-check-label">Terbit</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="periode" class="col-md-1 col-form-label">Periode</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="periode" id="periode" value="{{ $date }}">
                                            </div>
                                        </div>

                                        <button type="submit" class=" btn-info btn-sm float-right">Preview</button>
                                        <button class="btn-danger btn-sm float-right">Batal</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
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

                "oLanguage": {
                    "sSearch": "Keterangan : "
                },
                "pageLength": 5
            }).buttons().container().appendTo('#table_wrapper .col-md-6:eq(0)');
            $('#table1').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "scrollX": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "pageLength": 5

            });
        });

        function deletepanggilanDinas(id) {
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
                    let _url = `/pDinas/${id}`
                    console.log(_url)

                    $.ajax({
                        type: 'DELETE',
                        url: _url,
                        data: {
                            _token: token
                        },
                        success: function(resp) {
                            if (resp.success) {
                                swal.fire("Selesai!", resp.message, "Berhasil");
                                location.reload();
                            } else {
                                swal.fire("Gagal!", "Terjadi Kesalahan.", "error");
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

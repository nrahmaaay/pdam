<div class="modal fade" id="filter" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Filter Penetapan Tera Meter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <form class="form-horizontal" action="{{ route('printpenetapanTeraMeter') }}" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="nopenetapan" class="col-form-label">Nomor Penetapan :</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="nomor" onkeyup="valueing()">
                        </div>
                    </div>
                    <div class="row">
                    <label for="wilayah" class="col-form-label">Petugas Tera</label>
                        <div class="col-md-10">
                            <select class="form-control" id="wilayah" onkeyup="valueing()">
                                <!-- <option value="wilayah T"> Wilayah T </option>
                                <option value="wilayah B"> Wilayah B </option> -->
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info btn-sm">Preview</button>
                    <button class="btn btn-danger btn-sm">Batal</button>
                </form>
            </div>
        </div>
    </div>
</div>


@push('js')
    <script type="text/javascript">
    $(document).ready(function(){
        $('input[type="radio"]').on('click', function(){
            if($(this).attr("value") == "semua") {
                $('#start').prop('disabled', true)
                $('#end').prop('disabled', true)
                console.log("hidup");
            }
            if($(this).attr("value") == "kode"){
                console.log("mati");
                $('#start').prop('disabled',false)
                $('#end').prop('disabled',false)
            }
        })
        $('input[type="radio"]').trigger('click');
        })
    </script>
@endpush

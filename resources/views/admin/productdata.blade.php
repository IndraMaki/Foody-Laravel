@extends('layouts.admin')

@section('section')

    @if(session()->has('success_edit'))
    <div class="alert alert-success d-flex align-items-center" role="alert" style="position: fixed; top: 110px; right: 10px; height: 58px; min-width: 320px">
        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:" width="24" height="24" ><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
        <div>
            <strong>Berhasil</strong> edit product!!!!
        </div>
    </div>
    @endif

    <section class="overflow-y-scroll" style="width: calc(100% - 300px)">
        <div class="row mt-3 mx-3 text-biru">
            Hello Admin Orion
        </div>
        <div class="row m-3 mt-5">
            <div class="col-6 d-flex justify-content-between align-items-center">
                <h3 class="fw-bold p-0 m-0">PRODUK</h3>
                <a href="/adminpanel/productdata/add" id="add-product" class="btn bg-biru p-2 px-3 text-biru-muda add-product" data-bs-toggle="modal" data-bs-target="#edit"><i class="fa-solid fa-plus"></i></a>
            </div>
            <div class="col-6">
                <form action="" class="w-100 h-100 bg-biru-muda d-flex align-items-center justify-content-between ps-3 pe-2 rounded-2">
                    <input type="text" class="bg-biru-muda w-100" name="search" value="{{ request('search') }}" style="outline: none" placeholder="Cari produk...">
                    <button type="submit" class="bg-biru-muda p-2"><i class="fa-solid fa-magnifying-glass text-biru"></i></button>
                </form>
            </div>
        </div>
        <div class="row mx-3">
            <table class="table table-borderless border table-hover">
                <thead>
                    <tr class="text-center">
                        <td class="px-3 text-center" style="background-color: #D9F4FF">No</td>
                        <td style="background-color: #D9F4FF">Action</td>
                        <td style="background-color: #D9F4FF">Nama Produk</td>
                        <td style="background-color: #D9F4FF">Gambar</td>
                        <td style="background-color: #D9F4FF">Deskripsi</td>
                        <td style="background-color: #D9F4FF">Harga</td>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1
                    @endphp
                    @foreach ($products as $product)
                    <tr class="align-middle">
                        <td class="text-center">{{ $i }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="/adminpanel/productdata/edit/{{ $product->id }}" class="btn p-1 px-2 bg-biru-muda edit me-1" data-bs-toggle="modal" data-bs-target="#edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                        <path d="M6.25921 9.61283L3.90882 7.26243C4.32878 6.52305 4.94132 5.79063 5.74567 5.06749C6.78281 4.13321 8.61348 2.55391 11.2369 0.32958C11.5027 0.104127 11.8435 -0.0131065 12.1918 0.00116541C12.54 0.0154373 12.8701 0.160171 13.1166 0.406617C13.363 0.653063 13.5078 0.98319 13.522 1.33142C13.5363 1.67966 13.4191 2.02052 13.1936 2.28631C10.9662 4.91436 9.38766 6.74502 8.45647 7.77753C7.73333 8.57955 7.00091 9.19132 6.25921 9.61283ZM2.84383 8.3862L5.13699 10.6786L4.08051 12.1527L0 13.541L1.36971 9.44191L2.84383 8.3862Z" fill="#1270EE"/>
                                    </svg>
                                </a>
                                <a href="/adminpanel/productdata/delete/{{ $product->id }}" class="btn p-1 px-2 bg-pink delete-makanan">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                        <path d="M12.0324 2.031C12.212 2.031 12.3842 2.10233 12.5111 2.22929C12.6381 2.35625 12.7094 2.52845 12.7094 2.708C12.7094 2.88755 12.6381 3.05975 12.5111 3.18671C12.3842 3.31367 12.212 3.385 12.0324 3.385H11.3554L11.3534 3.43307L10.7218 12.2821C10.6974 12.6237 10.5446 12.9434 10.294 13.1768C10.0434 13.4102 9.71362 13.54 9.37115 13.54H3.86105C3.51858 13.54 3.18883 13.4102 2.93822 13.1768C2.68761 12.9434 2.53475 12.6237 2.51043 12.2821L1.87879 3.43374C1.87776 3.41752 1.87731 3.40126 1.87744 3.385H1.20044C1.02089 3.385 0.848688 3.31367 0.721726 3.18671C0.594764 3.05975 0.523438 2.88755 0.523438 2.708C0.523438 2.52845 0.594764 2.35625 0.721726 2.22929C0.848688 2.10233 1.02089 2.031 1.20044 2.031H12.0324ZM9.99941 3.385H3.23347L3.86172 12.186H9.37115L9.99941 3.385ZM7.97044 0C8.14999 0 8.32219 0.0713266 8.44915 0.198289C8.57611 0.325251 8.64744 0.497448 8.64744 0.677C8.64744 0.856552 8.57611 1.02875 8.44915 1.15571C8.32219 1.28267 8.14999 1.354 7.97044 1.354H5.26244C5.08289 1.354 4.91069 1.28267 4.78373 1.15571C4.65676 1.02875 4.58544 0.856552 4.58544 0.677C4.58544 0.497448 4.65676 0.325251 4.78373 0.198289C4.91069 0.0713266 5.08289 0 5.26244 0H7.97044Z" fill="#CD224C"/>
                                    </svg>
                                </a>
                            </div>
                        </td>
                        <td><img src="{{ str_contains($product->gambar, "upload/") ? asset('storage/' . $product->gambar) : $product->gambar }}" class="rounded-1" alt="" style="height: 100px; width: 150px; object-fit: cover;"></td>
                        <td><a href="/produk#{{ $product->id }}">{{ $product->nama }}</a></td>
                        <td>{{ $product->deskripsi }}</td>
                        <td>Rp{{ number_format($product->harga, 0, ',', '.') }}</td>
                    </tr>
                    @php
                        $i++
                    @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Produk</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" id="form" enctype="multipart/form-data">
                        <input type="hidden" name="" id="id-produk">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" name="harga" class="form-control" id="harga">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="6"></textarea>
                        </div>
                        <div class="mb-3 d-flex flex-column">
                            <label for="gambar" class="form-label">Gambar</label>
                            <img src="" class="img-fluid my-3 col-sm-6 d-none" id="img-prev" alt="">
                            <input type="file" name="gambar" class="form-control" id="gambar" onchange="privewImage()">
                            <input type="hidden" name="old_gambar" id="old_gambar">
                        </div>
                        <div class="mb-3">
                            <label for="link" class="form-label">Link</label>
                            <input type="text" name="link" class="form-control" id="link">
                        </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-biru-muda text-biru" data-bs-dismiss="modal" id="reset">Batal</button>
                        <button type="submit" id="edit-produk" form="form" class="btn bg-biru text-biru-muda" id="simpan">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $('.delete-makanan').click(function(e){
            e.preventDefault();

            var deleteUrl = $(this).attr('href');
            var itemToDelete = $(this).closest('tr');

            Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Anda tidak bisa mengembalikan data setelah dihapus",
            showCancelButton: true,
            confirmButtonColor: '#131049',
            cancelButtonColor: '#fdced0',
            cancelButtonText: 'Batal',
            confirmButtonText: 'Hapus'
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'DELETE',
                    url: deleteUrl,
                    data: {
                        _token : '{{ csrf_token() }}'
                    },
                    success: function(data){
                        Swal.fire('Produk berhasil dihapus', data.message, 'success');

                        itemToDelete.remove();
                    },
                    error: function (error) {
                        Swal.fire('Error!', 'Something went wrong!', 'error');
                        console.error(error);
                    }
                });
            }
            })
        })


        $(document).ready(function() {
            $('.edit').click(function(e) {
                $('.modal-title').html("Edit Produk");
                e.preventDefault();
                var url = $(this).attr('href')

                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function(resp){
                        $('#id-produk').val(resp.id);
                        $('#nama').val(resp.nama);
                        $('#harga').val(resp.harga);
                        $('#img-prev').attr('src', ()=>{
                            if (resp.gambar.slice(0, 6) == "upload"){
                                return "/storage/" + resp.gambar;
                            }
                            else {
                                return resp.gambar;
                            }
                        })
                        $('#img-prev').removeClass('d-none');
                        $('#old_gambar').val(resp.gambar);
                        $('#link').val(resp.link);
                        $('#deskripsi').val(resp.deskripsi);
                    },
                    error: function (xhr, status, error) {
                        console.error('Terjadi kesalahan:', error);
                    }
                })
            })

            $('.add-product').click(function(e){
                e.preventDefault();
                $('.modal-title').html("Tambah Produk");
                $('#id-produk').val("");
                $('#nama').val("");
                $('#img-prev').attr('src', '');
                $('#old-gambar').val('');
                $('#harga').val("");
                $('#gambar').val("");
                $('#link').val("");
                $('#deskripsi').html("");
            });

            $('#form').submit(function(e){
                e.preventDefault();

                var url = "";
                var type = "";

                fd = null;
                var fd = new FormData(this);
                fd.append('_token', '{{ csrf_token() }}');

                if($('#id-produk').val() == ""){
                    url = "/adminpanel/productdata";
                }
                else {
                    url = "/adminpanel/productdata/edit/" + $('#id-produk').val();
                }

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: fd,
                    processData: false,
                    contentType: false,
                    success: function(){
                        $('.modal').hide();
                        Swal.fire(($('#id-produk').val() == "") ? "Produk berhasil ditambahkan" : "Produk berhasil diedit", "", 'success').then(() => {
                            location.reload();
                        });
                    },
                    error: function (error) {
                        Swal.fire('Error!', 'Something went wrong!', 'error');
                        console.error(error);
                    }
                })
            })
        })



        function privewImage(){
            const gambar = document.querySelector('#gambar');
            const imgPreview = document.querySelector('#img-prev');

            const oFReader = new FileReader();
            oFReader.readAsDataURL(gambar.files[0])

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
                imgPreview.classList.remove('d-none')
            }
        }
    </script>
@endsection
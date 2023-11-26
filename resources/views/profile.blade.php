@extends('layouts.main')

@section('container')
    <main class="py-4" style="margin-top: 100px">
        <div class="container-lg min-vh-100 mt-3 p-3">
            <div class="row">
                <div class="col-lg-12 p-3">
                    <div class="p-3 row border rounded-3 position-relative">
                        <div class="photo col-sm-3 d-flex flex-column align-items-center">
                            <div class="photo-profile w-100 mb-3 text-center">
                                <img src="/img/profileimg.webp" class="w-75 rounded-end-circle rounded-start-circle"
                                    alt="">
                            </div>
                            <a href="" class="btn bg-biru text-white" data-bs-toggle="modal" data-bs-target="#edit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                                    fill="none">
                                    <path
                                        d="M6.63217 9.35637C5.89991 10.0105 4.81087 9.85306 4.11659 9.15878C3.42244 8.46464 3.2651 7.37585 3.91991 6.64448C4.17648 6.35791 4.46266 6.07263 4.77838 5.78878C5.81553 4.8545 7.64619 3.2752 10.2696 1.05087C10.5354 0.825418 10.8762 0.708184 11.2245 0.722456C11.5727 0.736728 11.9028 0.881461 12.1493 1.12791C12.3957 1.37435 12.5405 1.70448 12.5547 2.05272C12.569 2.40095 12.4518 2.74181 12.2263 3.0076C9.99891 5.63565 8.42037 7.46631 7.48919 8.49882C7.20495 8.81406 6.91928 9.09991 6.63217 9.35637ZM0.810014 9.8713C1.4253 9.43065 2.26907 9.49989 2.80431 10.0349L3.239 10.4695C3.77585 11.0061 3.84529 11.8525 3.4031 12.4695C3.21459 12.7326 2.9485 12.93 2.64213 13.0343L2.55325 13.0645C1.10967 13.5557 -0.271993 12.1815 0.211269 10.7353L0.243541 10.6387C0.346819 10.3296 0.545072 10.061 0.810014 9.8713Z"
                                        fill="#D9F4FF" />
                                </svg>
                                Edit Profile
                            </a>
                        </div>
                        <div class="data col-sm-9 d-flex flex-column justify-content-center mt-3">
                            <h5 class="text-biru fs-3">{{ auth()->user()->name }}</h5>
                            <p class="m-0">{{ auth()->user()->jenis_kelamin }}, {{ auth()->user()->usia }} Tahun</p>
                            <table class="mt-3">
                                <tr>
                                    <td class="fw-light">Email</td>
                                    <td class="text-biru">{{ auth()->user()->email }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-light">Username</td>
                                    <td class="text-biru">{{ auth()->user()->username }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-light">Tinggi</td>
                                    <td class="text-biru">{{ auth()->user()->tinggi_badan }} cm</td>
                                </tr>
                                <tr>
                                    <td class="fw-light">Berat</td>
                                    <td class="text-biru">{{ auth()->user()->berat_badan }} kg</td>
                                </tr>
                                <tr>
                                    <td class="fw-light">Tanggal lahir</td>
                                    <td class="text-biru">{{ auth()->user()->tanggal_lahir }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="dropdown position-absolute w-auto pe-1" style="top: 10px; right: 10px;">
                            <button class="bg-transparent p-0" type="button" data-bs-toggle="dropdown"aria-expanded="false">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#report-form">Report Catatan makanan</button></li>
                                {{-- <li><a class="dropdown-item" href="#"></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 p-2">
                    <div class="border rounded-3 p-3 d-flex">
                        <img src="/img/pinkup.svg" class="me-3" alt="">
                        <div class="">
                            <p class="m-0">Average BMI</p>
                            <p class="fs-5 fw-bold text-biru m-0">{{ number_format(auth()->user()->rata_rata_bmi, 2) }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 p-2">
                    <div class="border rounded-3 p-3 d-flex">
                        <img src="/img/blueup.svg" class="me-3" alt="">
                        <div class="">
                            <p class="m-0">Activity Level</p>
                            <p class="fs-5 fw-bold text-biru m-0">{{ auth()->user()->aktivitas }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 p-2">
                    <div class="border rounded-3 p-3 d-flex">
                        <img src="/img/pinkup.svg" class="me-3" alt="">
                        <div class="">
                            <p class="m-0">Karbohidrat</p>
                            <p class="fs-5 fw-bold text-biru m-0">{{ auth()->user()->totalKarbo }} g</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 p-2">
                    <div class="border rounded-3 p-3 d-flex">
                        <img src="/img/blueup.svg" class="me-3" alt="">
                        <div class="">
                            <p class="m-0">Protein</p>
                            <p class="fs-5 fw-bold text-biru m-0">{{ auth()->user()->totalProtein }} g</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 p-2">
                    <div class="border rounded-3 p-3 d-flex">
                        <img src="/img/pinkup.svg" class="me-3" alt="">
                        <div class="">
                            <p class="m-0">Garam</p>
                            <p class="fs-5 fw-bold text-biru m-0">{{ auth()->user()->totalGaram }} g</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 p-2">
                    <div class="border rounded-3 p-3 d-flex">
                        <img src="/img/blueup.svg" class="me-3" alt="">
                        <div class="">
                            <p class="m-0">Gula</p>
                            <p class="fs-5 fw-bold text-biru m-0">{{ auth()->user()->totalGula }} g</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 p-2">
                    <div class="border rounded-3 p-3 d-flex">
                        <img src="/img/pinkup.svg" class="me-3" alt="">
                        <div class="">
                            <p class="m-0">Lemak</p>
                            <p class="fs-5 fw-bold text-biru m-0">{{ auth()->user()->totalLemak }} g</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 p-2">
                    <div class="border rounded-3 p-3 d-flex">
                        <img src="/img/blueup.svg" class="me-3" alt="">
                        <div class="">
                            <p class="m-0">Batas Karbo</p>
                            <p class="fs-5 fw-bold text-biru m-0">{{ auth()->user()->batasKarbo }} g/hari</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 p-2">
                    <div class="border rounded-3 p-3 d-flex">
                        <img src="/img/pinkup.svg" class="me-3" alt="">
                        <div class="">
                            <p class="m-0">Batas Protein</p>
                            <p class="fs-5 fw-bold text-biru m-0">{{ auth()->user()->batasProtein }} g/hari</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 p-2">
                    <div class="border rounded-3 p-3 d-flex">
                        <img src="/img/blueup.svg" class="me-3" alt="">
                        <div class="">
                            <p class="m-0">Batas Lemak</p>
                            <p class="fs-5 fw-bold text-biru m-0">{{ auth()->user()->batasLemak }} g/hari</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 p-2">
                    <div class="border rounded-3 p-3 d-flex">
                        <img src="/img/pinkup.svg" class="me-3" alt="">
                        <div class="">
                            <p class="m-0">Kebutuhan Kalori</p>
                            <p class="fs-5 fw-bold text-biru m-0">{{ auth()->user()->kebutuhanKalori }} kkal/hari</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 p-3">
                    <div class="p-3 row border rounded-3">
                        <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center">
                            <h5 class="text-center">Total Konsumsi Kandungan Makanan</h5>
                            <div>
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="progres-catatan mb-1">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-1">Karbohidrat</p>
                                    <p class="mb-1">
                                        {{ round((auth()->user()->dailyKarbo / auth()->user()->batasKarbo) * 100) }}%</p>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Example with label"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progres-karbohidrat"
                                        style="width: {{ (auth()->user()->dailyKarbo / auth()->user()->batasKarbo) * 100 }}%">
                                    </div>
                                </div>
                                <p class="m-0 text-biru">
                                    {{ auth()->user()->dailyKarbo }}/{{ auth()->user()->batasKarbo }} g
                                </p>
                            </div>
                            <div class="progres-catatan mb-1">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-1">Protein</p>
                                    <p class="mb-1">
                                        {{ round((auth()->user()->dailyProtein / auth()->user()->batasProtein) * 100) }}%
                                    </p>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Example with label"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progres-protein"
                                        style="width: {{ (auth()->user()->dailyProtein / auth()->user()->batasProtein) * 100 }}%">
                                    </div>
                                </div>
                                <p class="m-0 text-biru">
                                    {{ auth()->user()->dailyProtein }}/{{ auth()->user()->batasProtein }} g</p>
                            </div>
                            <div class="progres-catatan mb-1">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-1">Garam</p>
                                    <p class="mb-1">
                                        {{ round((auth()->user()->dailyGaram / auth()->user()->batasGaram) * 100) }}%</p>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Example with label"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progres-garam"
                                        style="width: {{ (auth()->user()->dailyGaram / auth()->user()->batasGaram) * 100 }}%">
                                    </div>
                                </div>
                                <p class="m-0 text-biru">
                                    {{ auth()->user()->dailyGaram }}/{{ auth()->user()->batasGaram }}
                                    g</p>
                            </div>
                            <div class="progres-catatan mb-1">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-1">Gula</p>
                                    <p class="mb-1">
                                        {{ round((auth()->user()->dailyGula / auth()->user()->batasGula) * 100) }}%</p>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Example with label"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progres-gula"
                                        style="width: {{ (auth()->user()->dailyGula / auth()->user()->batasGula) * 100 }}%">
                                    </div>
                                </div>
                                <p class="m-0 text-biru">{{ auth()->user()->dailyGula }}/{{ auth()->user()->batasGula }}
                                    g
                                </p>
                            </div>
                            <div class="progres-catatan mb-1">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-1">Lemak</p>
                                    <p class="mb-1">
                                        {{ round((auth()->user()->dailyLemak / auth()->user()->batasLemak) * 100) }}%</p>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Example with label"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progres-lemak"
                                        style="width: {{ (auth()->user()->dailyLemak / auth()->user()->batasLemak) * 100 }}%">
                                    </div>
                                </div>
                                <p class="m-0 text-biru">
                                    {{ auth()->user()->dailyLemak }}/{{ auth()->user()->batasLemak }} g</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Profile</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- <form action="" method="post" id="edit-produk"> --}}
                    <input type="hidden" name="" id="id-produk">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" value="{{ auth()->user()->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select name="" id="jenis_kelamin" class="form-control">
                            <option>{{ auth()->user()->jenis_kelamin }}</option>
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir"
                            value="{{ auth()->user()->tanggal_lahir }}">
                    </div>
                    <div class="mb-3">
                        <label for="aktivitas" class="form-label">Level Aktivitas</label>
                        <select name="" id="aktivitas" class="form-control">
                            <option value="{{ auth()->user()->aktivitas }}" selected>
                                {{ auth()->user()->keteranganAktivitas }}</option>
                            <option value="1.2">Tidak aktif (tidak berolahraga sama sekali)</option>
                            <option value="1.375">Cukup aktif (berolahraga 1-3x seminggu)</option>
                            <option value="1.55">Aktif (berolahraga 3-5x seminggu)</option>
                            <option value="1.725">Sangat aktif (berolahraga atau 6-7x seminggu)</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username"
                            value="{{ auth()->user()->username }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" value="{{ auth()->user()->email }}">
                    </div>
                    {{-- </form> --}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-biru-muda" data-bs-dismiss="modal"
                        id="reset">Batal</button>
                    <button type="button" form="edit-produk" class="btn bg-biru text-biru-muda"
                        id="simpan">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="report-form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Generate Report</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" id="form-report" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="" id="id-produk">
                        <div class="row d-flex">
                            <div class="col-12">
                                <input type="date" name="from" class="form-control col-5" id="dari" placeholder="tanggal">
                            </div>
                            {{-- <div class="col-12 text-center"> --}}
                                <label for="to" class="form-label col-12 m-0 my-1 text-center"><i class="fa-solid fa-arrow-right-arrow-left"></i></label>
                            {{-- </div> --}}
                            <div class="col-12">
                                <input type="date" name="to" class="form-control" id="to" placeholder="tanggal">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-biru-muda text-biru" data-bs-dismiss="modal" id="reset">Batal</button>
                    <button type="submit" id="edit-produk" form="form-report" class="btn bg-biru text-biru-muda" id="simpan">Kirim</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        $(document).ready(function() {
            $('#simpan').click(function() {
                var data = {
                    _token: '{{ csrf_token() }}',
                    name: $('#name').val(),
                    jenis_kelamin: $('#jenis_kelamin').val(),
                    tanggal_lahir: $('#tanggal_lahir').val(),
                    email: $('#email').val(),
                    aktivitas: $('#aktivitas').val(),
                    username: $('#username').val(),
                };
                if (data['username'] == '{{ auth()->user()->username }}') {
                    delete data['username'];
                }
                if (data['email'] == '{{ auth()->user()->email }}') {
                    delete data['email'];
                }
                $.ajax({
                    url: '/profile/edit',
                    type: 'PUT',
                    data: data,
                    success: function() {
                        $('.modal').hide();
                        Swal.fire("Data profile berhasil diubah", "", 'success').then(() => {
                            location.reload();
                        });
                    },
                    error: function(error) {
                        var message = (error.responseJSON.message.username[0] ?? "") + " " + (
                            error.responseJSON.message.email[0] ?? "");

                        Swal.fire('Error!', message, 'error');
                        console.log(error.responseJSON.message);
                    }
                })
            });

            $('#form-report').submit(function(e){
                e.preventDefault();
                var data = new FormData(this);
                $('#report-form').modal('hide');

                $.ajax({
                    url: '/profile/report',
                    type: 'POST',
                    data: data,
                    processData: false,
                    contentType: false,
                    success: function(resp){
                        Swal.fire("Berhasil!", resp.responseJSON.message, 'success')
                    },
                    error: function (error) {
                        Swal.fire('Error!', 'Something went wrong!', 'error');
                        console.error(error);
                    }
                })
            });

            // $('#form-report').submit(function(e){
            //     e.preventDefault();
            //     var data = new FormData(this);
            //     var form = $(this).closest('.modal');
            //     form.modal('hide');
            //     Swal.fire({
            //         title: 'Tunggu sebentar...',
            //         html: "Sistem sedang menyiapkan data",
            //         allowOutsideClick: false,
            //         allowEscapeKey: false,
            //         showConfirmButton: false,
            //         timerProgressBar: true,
            //         didOpen: () => {
            //             Swal.showLoading();

            //             $.ajax({
            //                 url: '/profile/report',
            //                 type: 'POST',
            //                 data: data,
            //                 processData: false,
            //                 contentType: false,
            //                 success: function(response){
            //                     Swal.fire(response.message, "", 'success').then(() => {
            //                         location.reload();
            //                     });
            //                 },
            //                 error: function (error) {
            //                     Swal.fire('Error!', "Terjadi Kesalahan", 'error').then(() => {
            //                         Swal.close();
            //                         form.modal('show');
            //                     });
            //                     console.error(error);
            //                 }
            //                 complete: function(){
            //                     Swal.hideLoading();
            //                 }
            //             })

            //         },
                    
            //     });
                
            // });


        })
    </script>

    <script>
        const ctx = document.getElementById('myChart');

        const data = {
            labels: ['Karbohidrat', 'Protein', 'Garam', 'Gula', 'Lemak'],
            datasets: [{
                label: 'Dataset 1',
                data: [{{ auth()->user()->dailyKarbo }},
                    {{ auth()->user()->dailyProtein }},
                    {{ auth()->user()->dailyGaram }},
                    {{ auth()->user()->dailyGula }},
                    {{ auth()->user()->dailyLemak }}
                ],
                backgroundColor: ['#17184f', '#dbf3fb', '#fdced0', '#111', '#6C6A85'],
            }]
        };

        const config = {
            type: 'doughnut',
            data: data,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                    },
                    title: {
                        display: true,
                    }
                },
            },
        };

        new Chart(ctx, config);
    </script>
@endsection

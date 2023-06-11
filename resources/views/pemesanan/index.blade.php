@include('layouts.header')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

@include('layouts.sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            @include('layouts.topbar')

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Pemesanan</h1>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-info">Riwayat Pemesanan</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        @role('teknisi')
                                        <th>ID User</th>
                                        @endrole
                                        <th>Nama Layanan</th>
                                        <th>Jumlah Unit</th>
                                        <th>Tipe AC</th>
                                        <th>Deskripsi</th>
                                        <th>Status</th>
                                        <th>Waktu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @role('teknisi')
                                        @foreach($pemesanans as $pemesanan)
                                            <tr>
                                                <td>{{ $pemesanan->user_id }}</td>
                                                <td>{{ $pemesanan->name }}</td>
                                                <td>{{ $pemesanan->jumlah }}</td>
                                                <td>{{ $pemesanan->tipe }}</td>
                                                <td>{{ $pemesanan->description }}</td>
                                                <td>
                                                    @if($pemesanan->status == 'Belum Dikonfirmasi')
                                                        <a href="{{ route('teknisi.pemesanan.konfirmasi', $pemesanan->id) }}" class="button text-warning">Konfirmasi</a>
                                                        <a href="{{ route('teknisi.pemesanan.batalkan', $pemesanan->id) }}" class="button text-danger">Batalkan</a>
                                                    @elseif($pemesanan->status == 'Dikonfirmasi')
                                                        Pesanan Dikonfirmasi
                                                    @elseif($pemesanan->status == 'Dibatalkan')
                                                        Pesanan Dibatalkan
                                                    @endif
                                                </td>
                                                <td>{{ $pemesanan->created_at }}</td>
                                            </tr>
                                        @endforeach
                                        @endrole

                                        @role('customer')
                                        @foreach($pemesanans as $pemesanan)
                                            @if($pemesanan->user_id == Auth::user()->id)
                                                <tr>
                                                    <td>{{ Auth::user()->id }}</td>
                                                    <td>{{ $pemesanan->name }}</td>
                                                    <td>{{ $pemesanan->jumlah }}</td>
                                                    <td>{{ $pemesanan->tipe }}</td>
                                                    <td>{{ $pemesanan->description }}</td>
                                                    <td>
                                                        @if($pemesanan->status == 'Belum Dikonfirmasi')
                                                            Belum Dikonfirmasi
                                                        @elseif($pemesanan->status == 'Dikonfirmasi')
                                                            Pesanan Dikonfirmasi
                                                        @elseif($pemesanan->status == 'Dibatalkan')
                                                            Pesanan Dibatalkan
                                                        @endif
                                                    </td>
                                                    <td>{{ $pemesanan->created_at }}</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                        @endrole

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

            @include('layouts.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

</body>

</html>
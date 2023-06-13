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
                                        <th>No.</th>
                                        <th>Nama Customer</th>
                                        <th>Detail</th>
                                        @endrole
                                        @role('superAdmin')
                                        <th>No.</th>
                                        <th>Nama Customer</th>
                                        @endrole
                                        <th>Nama Layanan</th>
                                        <th>Jumlah Unit</th>
                                        <th>Tipe AC</th>
                                        <th>Total</th>
                                        <th>Deskripsi</th>
                                        <th>Status</th>
                                        <th>Waktu</th>
                                        @role('customer')
                                        <th>Aksi</th>
                                        @endrole
                                    </tr>
                                </thead>
                                <tbody>
                                    @role('superAdmin')
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach($pemesanans as $pemesanan)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $pemesanan->user->name }}</td>
                                                <td>{{ $pemesanan->name }}</td>
                                                <td>{{ $pemesanan->jumlah }}</td>
                                                <td>{{ $pemesanan->tipe }}</td>
                                                <td>{{ $pemesanan->total }}</td>
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
                                        @endforeach
                                    @endrole
                                    @role('teknisi')
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach($pemesanans as $pemesanan)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $pemesanan->user->name }}</td>
                                                <td><a href="{{ route('profile.index', ['user_id' => $pemesanan->user->id]) }}">Detail</a></td>
                                                <td>{{ $pemesanan->name }}</td>
                                                <td>{{ $pemesanan->jumlah }}</td>
                                                <td>{{ $pemesanan->tipe }}</td>
                                                <td>{{ $pemesanan->total }}</td>
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
                                                {{-- @php
                                                    $no = 1;
                                                @endphp --}}
                                                <tr>
                                                    {{-- <td>{{ $no++ }}</td> --}}
                                                    <td>{{ $pemesanan->name }}</td>
                                                    <td>{{ $pemesanan->jumlah }}</td>
                                                    <td>{{ $pemesanan->tipe }}</td>
                                                    <td>{{ $pemesanan->total }}</td>
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
                                                    <td>
                                                        <a href="/pemesanan/{{ $pemesanan->id }}/destroy" class="btn btn-danger btn-split btn-sm">
                                                            <h6>Batalkan</h6>
                                                        </a>
                                                    </td>
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
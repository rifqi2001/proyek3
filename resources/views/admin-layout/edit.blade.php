@include('layouts.header')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

@include('layouts.sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('layouts.topbar')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Layanan</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Layanan</h6>
                        </div>

                        <div class="card-body">
                            <form action="/layanan/{{ $layanan->id }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Nama Layanan" value="{{ $layanan->name }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="description" class="form-control" placeholder="Deskripsi" value="{{ $layanan->description }}">
                                </div>
                                <div class="form-group">
                                    <input type="number" name="price" class="form-control" placeholder="Harga" value="{{ $layanan->price }}">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            @include('layouts.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

</body>

</html>
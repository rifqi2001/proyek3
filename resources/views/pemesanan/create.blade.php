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
                    <h1 class="h3 mb-2 text-gray-800">Pemesanan</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Buat Pesanan Baru</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('pemesanan.index') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <select name="layanan_id" id="layanan_id" class="form-control" required>
                                        <option value="">Pilih Layanan</option>
                                        @foreach ($layanans as $id => $layanan)
                                            <option value="{{ $id }}" data-price="{{ $prices[$id] }}" data-cost="{{ $costs[$id] }}">{{ $layanan }}</option>
                                        @endforeach
                                    </select>
                                    
                                </div>
                                <div class="form-group">
                                    <input type="number" id="jumlah" name="jumlah" class="form-control" placeholder="Jumlah Unit" required>
                                </div>
                                <div class="form-group">
                                    <select name="tipe" class="form-control" required>
                                        <option value="">Pilih Tipe AC</option>
                                        <option value="standing-floor">Standing Floor</option>
                                        <option value="inverter">Inverter</option>
                                        <option value="non-inverter">Non-Inverter</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="description" class="form-control" placeholder="Deskripsi detail rumah (ex: pager putih sebelah masjid)" required>
                                </div>
                                {{-- <div class="form-group">
                                    <h4>Cost:</h4>
                                    <input type="text" name="cost" id="cost" class="form-control" placeholder="" required readonly>
                                </div> --}}
                                <div class="form-group">
                                    <h4>Total Harga:</h4>
                                    <input type="text" name="total" id="total" class="form-control" placeholder="0" required readonly>
                                    <h6 style="color: red">*terdapat pajak ongkir sebesar 20000</h6>
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

<script>


    window.onload = function() {
        var layananSelect = document.getElementById('layanan_id');
        var totalInput = document.getElementById('jumlah');
        var costInput = document.getElementById('cost');
        var priceInput = document.getElementById('total');

        function hitungTotal() {
        var selectedOption = layananSelect.options[layananSelect.selectedIndex];
        var cost = parseFloat(selectedOption.getAttribute('data-cost'));
        var price = parseFloat(selectedOption.getAttribute('data-price'));
        var jumlah = parseInt(totalInput.value);

        
        if (!isNaN(cost) && !isNaN(price) && !isNaN(jumlah)) {
            var total = (price * jumlah) + cost;
            priceInput.value = total;
        } else {
            if (selectedOption.value === '') {
                costInput.value = 'Pilih Jenis Layanan';
            } else {
                costInput.value = cost;
            }
            priceInput.value = 'Berapa Unit';
        }
        }

        layananSelect.addEventListener('change', function() {
        hitungTotal();
        });

        totalInput.addEventListener('input', function() {
            hitungTotal();
        });
    };
</script>

</html>
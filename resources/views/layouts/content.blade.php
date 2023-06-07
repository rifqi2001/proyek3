            <!-- Main Content -->
            <div id="content">

                @include('layouts.topbar')
                <!-- Begin Page Content -->
                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xl-4">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mt-2">
                                    <h6 class="">Jumlah Layanan</h6>
                                    <a href="#"><h2 class="mb-0 number-font">{{  $total_layanan[0]->jumlah_layanan  }}</h2></a>
                                </div>
                                <div class="ms-auto">
                                    <div class="chart-wrapper mt-1">
                                        <canvas id="saleschart"
                                        class="h-8 w-9 chart-dropshadow"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-6 col-xl-4">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mt-2">
                                    <h6 class="">Total Teknisi</h6>
                                    <a href="#"><h2 class="mb-0 number-font">{{  $total_teknisi[0]->menghitung_teknisi  }}</h2></a>
                                </div>
                                <div class="ms-auto">
                                    <div class="chart-wrapper mt-1">
                                        <canvas id="saleschart"
                                        class="h-8 w-9 chart-dropshadow"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-6 col-xl-4">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mt-2">
                                    <h6 class="">Total Customer</h6>
                                    {{-- @foreach($hasil as $info) --}}
                                        <a href="#"><h2 class="mb-0 number-font">{{  $total_customers[0]->menghitung_customers  }}</h2></a>
                                    {{-- @endforeach --}}
                                </div>
                                <div class="ms-auto">
                                    <div class="chart-wrapper mt-1">
                                        <canvas id="saleschart"
                                        class="h-8 w-9 chart-dropshadow"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

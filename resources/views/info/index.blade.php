@include('layouts.header')

<style>
    .image-container {
        display: flex;
        justify-content: space-between;
    }

    .image-container img {
        margin: 10px;
        width: 400px;
        height: 400px;
    }
</style>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

@include('layouts.sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                @include('layouts.topbar')

                <div class="image-container">
                    <img src="{{ asset('myAdmin') }}/img/info_a.png" alt="Gambar 1">
                    <img src="{{ asset('myAdmin') }}/img/info_b.png" alt="Gambar 2">
                    <img src="{{ asset('myAdmin') }}/img/info_c.png" alt="Gambar 3">
                  </div>

            </div>

            @include('layouts.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

</body>

</html>
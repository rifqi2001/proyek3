            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

                <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/login">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('myAdmin') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('myAdmin') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('myAdmin') }}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('myAdmin') }}/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('myAdmin') }}/vendor/chart.js/Chart.min.js"></script>
    <script src="{{ asset('myAdmin') }}vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('myAdmin') }}vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('myAdmin') }}/js/demo/chart-area-demo.js"></script>
    <script src="{{ asset('myAdmin') }}/js/demo/chart-pie-demo.js"></script>
    <script src="{{ asset('myAdmin') }}js/demo/datatables-demo.js"></script>
    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{ $snap_token }}', {
            onSuccess: function(result){
                /* You may add your own implementation here */
                alert("payment success!"); console.log(result);
                send_response_to_form(result);
            },
            onPending: function(result){
                /* You may add your own implementation here */
                alert("wating your payment!"); console.log(result);
                send_response_to_form(result);
            },
            onError: function(result){
                /* You may add your own implementation here */
                alert("payment failed!"); console.log(result);
                send_response_to_form(result);
            },
            onClose: function(){
                /* You may add your own implementation here */
                alert('you closed the popup without finishing the payment');
            }
            })
        });

        function send_response_to_form(result){
            document.getElementById('json_callback').value = JSON.stringify(result);
            $('#submit_form').submit();
        }
        </script>

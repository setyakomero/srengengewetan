    <!-- JQUERY -->
    <script type="text/javascript" src="{{ asset('public/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>

    <!-- POPPER -->
    <script type="text/javascript"  src="{{ asset('public/js/popper.min.js') }}"></script>

    <!-- BOOTSTRAP -->
    <script type="text/javascript"  src="{{ asset('public/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('public/js/bootstrap-select.min.js') }}"></script>

    <!-- FONTAWESOME -->
    <script type="text/javascript"  src="{{ asset('public/js/solid.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('public/js/fontawesome.js') }}"></script>

    <!-- DATATABLES -->
    <script type="text/javascript"  src="{{ asset('public/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('public/js/dataTables.bootstrap4.min.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('public/js/dataTables.buttons.min.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('public/js/buttons.bootstrap4.min.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('public/js/jszip.min.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('public/js/pdfmake.min.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('public/js/vfs_fonts.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('public/js/buttons.html5.min.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('public/js/buttons.print.min.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('public/js/buttons.colVis.min.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('public/js/fnPagingInfo.js') }}"></script>
    <!-- <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script> -->

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
</body>

</html>
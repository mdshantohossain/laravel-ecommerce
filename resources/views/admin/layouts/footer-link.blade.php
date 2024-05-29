<!-- JAVASCRIPT -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/jquery/jquery.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/node-waves/waves.min.js"></script>
<!-- apexcharts -->
<script src="{{asset('/')}}admin/assets/libs/apexcharts/apexcharts.min.js"></script>
<!-- dashboard init -->
<script src="{{asset('/')}}admin/assets/js/pages/dashboard.init.js"></script>
<!-- App js -->

<script src="{{asset('/')}}admin/assets/js/app.js"></script>
{{--toastr cdn--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@if(Session::has('success'))
    <script>
        toastr.success('{{ session('success') }}')
    </script>
@endif
@if(Session::has('error'))
    <script>
        toastr.error('{{ session('error') }}')
    </script>
@endif
@if(Session::has('warning'))
    <script>
        toastr.warning('{{ session('warning') }}')
    </script>
@endif

@stack('script')

<!-- jQuery -->
<script src="{{asset("assets/")}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{asset("assets/")}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset("assets/")}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset("assets/")}}/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset("assets/")}}/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="{{asset("assets/")}}/plugins/raphael/raphael.min.js"></script>
<script src="{{asset("assets/")}}/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="{{asset("assets/")}}/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="{{asset("assets/")}}/plugins/chart.js/Chart.min.js"></script>
<!-- Toastr -->
<script src="{{asset("assets/")}}/plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset("assets/")}}/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset("assets/")}}/dist/js/pages/dashboard2.js"></script>

<script>
  @if(Session::has('message'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.warning("{{ session('warning') }}");
  @endif
 
</script>



@yield('script')

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2018 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

 <!-- Scripts -->

 @auth
  <script>
  window.user = @json(auth()->user())
  </script>
 @endauth

 <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>

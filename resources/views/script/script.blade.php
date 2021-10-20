<script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="../assets/node_modules/popper/popper.min.js"></script>
<script src="../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

<!--Custom JavaScript -->
<script type="text/javascript">
  $(function() {
      $(".preloader").fadeOut();
  });
  $(function() {
      $('[data-toggle="tooltip"]').tooltip()
  });
  $('#to-recover').on("click", function() {
      $("#loginform").slideUp();
      $("#recoverform").fadeIn();
  });
</script>
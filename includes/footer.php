<?php
if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    header('location: ../views/pages-404.php');
    exit();
};
?>
<!-- bundle -->
<script src="../assets/js/vendor.min.js"></script>
<script src="../assets/js/app.min.js"></script>


<!-- third party js -->
<script src="../assets/js/vendor/apexcharts.min.js"></script>
<script src="../assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
<!-- plugin js -->
<script src="../assets/js/vendor/dropzone.min.js"></script>
<!-- init js -->
<script src="../assets/js/ui/component.fileupload.js"></script>
<!-- third party js ends -->

<!-- demo app -->
<script src="../assets/js/pages/demo.dashboard.js"></script>
<script src="../assets/js/vendor/Chart.bundle.min.js"></script>
<script src="../assets/js/pages/demo.project-detail.js"></script>
<!-- end demo js-->
</body>

</html>
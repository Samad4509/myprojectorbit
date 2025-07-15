 <footer class="py-4 bg-light mt-auto">
     <div class="container-fluid px-4">
         <div class="d-flex align-items-center justify-content-between small">
             <div class="text-muted">Copyright &copy; Your Website 2023</div>
             <div>
                 <a href="#">Privacy Policy</a>
                 &middot;
                 <a href="#">Terms &amp; Conditions</a>
             </div>
         </div>
     </div>
 </footer>
 </div>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
 </script>
 <script src="js/scripts.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
 <script src="assets/demo/chart-area-demo.js"></script>
 <script src="assets/demo/chart-bar-demo.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
     crossorigin="anonymous"></script>
 <script src="js/datatables-simple-demo.js"></script>
 <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
     integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
 </script>
 <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css">
<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
 <script>
     $(document).ready(function() {
         $('#summernote').summernote({
             placeholder: 'Write your email content here',
             tabsize: 2,
             height: 300,
             toolbar: [
                 ['style', ['style']],
                 ['font', ['bold', 'italic', 'underline', 'clear']],
                 ['fontname', ['fontname']],
                 ['color', ['color']],
                 ['para', ['ul', 'ol', 'paragraph']],
                 ['height', ['height']],
                 ['table', ['table']],
                 ['insert', ['link', 'picture', 'video']],
                 ['view', ['fullscreen', 'codeview', 'help']]
             ]
         });
     });
 </script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    var input = document.querySelector('#metaKeywords');
    if (input) {
      new Tagify(input, {
        delimiters: " ", // triggers new tag on space
        dropdown: {
          enabled: 0
        }
      });
    }
  });
</script>
 </body>

 </html>

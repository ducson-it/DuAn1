 <!-- Footer -->
 <footer class="sticky-footer bg-white">
     <div class="container my-auto">
         <div class="copyright text-center my-auto">
             <span>Copyright &copy; Your Website 2021</span>
         </div>
     </div>
 </footer>
 <!-- End of Footer -->
 </div>
 <!-- End of Content Wrapper -->
 </div>
 <!-- End of Page Wrapper -->

 <!-- Scroll to Top Button-->
 <a class="scroll-to-top rounded" href="#page-top">
     <i class="fas fa-angle-up"></i>
 </a>

 <!-- Logout Modal-->
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <div class="modal-body">
                 Select "Logout" below if you are ready to end your current session.
             </div>
             <div class="modal-footer">
                 <button class="btn btn-secondary" type="button" data-dismiss="modal">
                     Cancel
                 </button>
                 <a class="btn btn-primary" href="login.html">Logout</a>
             </div>
         </div>
     </div>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
 <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
 <script src="../javascript.js"></script>
 <script>
     $(document).on('click', '.edit-data', function(){
       var edit_id = $(this).attr('id');
       $.ajax({
        url: 'controllers/ajax_update_data.php',
        type: 'post',
        data:{edit_id:edit_id},
        success: function(data){ 
          $('.modal-body').html(data);
        }
       })
     });
 </script>
 </body>

 </html>
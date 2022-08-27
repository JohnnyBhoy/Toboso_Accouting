    <!-- Confirmation before sign out-->
   <script>
       function signOut(){
         if(confirm("Are you sure you want to Log out?") ? location="../index" :  location="index");
       }
   </script>
   
   <!-- return to index page-->
    <script>
    function returnIndex(){
      return location.href="index.php";
    }
    </script>

    
   <!-- Confirmation before employee deletion-->
   <script>
       function delEmp(id){
         if(confirm("Remove This Employee?") ? location="RemoveEmployee.php?empid=" + id   :  location="index");
       }
   </script>

    <?php 
    /**Input Text */
    function inputTextData($label,$type,$value,$name,$id){
       echo '<div class="col-sm-3">
       <div class="form-group">
         <label for="exampleInputText">'.$label.'</label>
         <input autocomplete=off  type="'.$type.'" value="'.$value.'" name="'.$name.'" class="form-control" id="'.$id.'" required>
       </div>
     </div>';
    };

    function addModal($id,$title,$name,$submitname){
        echo '<div class="modal fade" id="'.$id.'">
           <div class="modal-dialog modal-sm">
             <div class="modal-content" style="margin-top:50%">
               <div class="modal-header">
                 <h4 class="modal-title">'.$title.'</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>
               <form action="" method="post">
               <div class="modal-body">
               <div class="row">
                   <div class="col-sm-12">
                     <div class="form-group">
                       <label for="exampleInputText">PLease input below</label>
                       <input autocomplete=off  type="text" name="'.$name.'" class="form-control" id="jobs" required>
                     </div>
                   </div>
               </div>
               <div class="modal-footer justify-content-between">
                 <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                 <button type="submit" name="'.$submitname.'" class="btn btn-primary">Save Record</button>
               </div>
             </div>
           </form>         
           </div>
         </div>
         </div>';
      };

      function viewModal($id,$title,$name,$submitname){
        echo '<div class="modal fade" id="'.$id.'">
           <div class="modal-dialog modal-sm">
             <div class="modal-content" style="margin-top:50%">
               <div class="modal-header">
                 <h4 class="modal-title">'.$title.'</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>
               <form action="" method="post">
               <div class="modal-body">
               <div class="row">
                   <div class="col-sm-12">
                     <div class="form-group">
                       <label for="exampleInputText">PLease input below</label>
                       <input autocomplete=off  type="text" name="'.$name.'" class="form-control" id="jobs" required>
                     </div>
                   </div>
               </div>
               <div class="modal-footer justify-content-between">
                 <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                 <button type="submit" name="'.$submitname.'" class="btn btn-primary">Save Record</button>
               </div>
             </div>
           </form>         
           </div>
         </div>
         </div>';
      };

      function delModal($id,$title,$name,$submitname){
        echo '<div class="modal fade" id="'.$id.'">
           <div class="modal-dialog modal-sm">
             <div class="modal-content" style="margin-top:50%">
               <div class="modal-header">
                 <h4 class="modal-title">'.$title.'</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>
               <form action="" method="post">
               <div class="modal-body">
               <div class="row">
                   <div class="col-sm-12">
                     <div class="form-group">
                       <label for="exampleInputText">PLease input below</label>
                       <input autocomplete=off  type="text" name="'.$name.'" class="form-control" id="jobs" required>
                       <h6 id="modal_body"></h6>
                     </div>
                   </div>
               </div>
               <div class="modal-footer justify-content-between">
                 <button type="button" class="btn btn-warning" data-dismiss="modal">No</button>
                 <button type="submit" id="submit" name="'.$submitname.'" class="btn btn-primary">Yes</button>
               </div>
             </div>
           </form>         
           </div>
         </div>
         </div>';
      };
    ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font-awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/brands.min.css"/>
    <title> Ajax CRude</title>
  </head>
  <body>
   
    <div class="container">
     <div class="row mt-5">
      <div class="col col-md-4"> 
        <div class="alert-status">

        </div>
      <div class="card">
       <div class="card-header bg-info"> Manage User Table Show </div>
       <div class="card-body">
          <div class="form-group mt-2">
          <label for="fName"> First Name</label>
          <input type="text" class="fName form-control" placeholder="Write Your First Name">
         </div>
         <div class="form-group mt-2">
          <label for="lName"> Last Name</label>
          <input type="text" class="lName form-control" placeholder="Write Your Last Name">
         </div>
         <div class="form-group mt-2">
          <label for="nid"> Nid Number </label>
          <input type="text" class="nid form-control" placeholder="Write Your Nid Number">
         </div>
         <div class="form-group mt-2">
          <label for="phone"> Phone </label>
          <input type="number" class="phone form-control" placeholder="Write Your Phone Number ">
         </div>
         <div class="form-group mt-2">
          <label for="email"> Email </label>
          <input type="email" class="email form-control" placeholder="Write Your Verified Email">
         </div>
         <div class="form-group mt-2">
          <label for="status"> status </label>
          <select class="status form-control">
           <option value="0"> ----- Select Status ----- </option>
           <option value="1"> Active </option>
           <option value="2"> InActive </option>
          </select>
         </div>
         <div class="form-group mt-2">
          <label for="address"> Address  </label>
           <textarea class="address form-control" rows="4"></textarea>
         </div>
         <div class="form-group mt-2">
          <label for="file"> File </label>
           <input type="file" class="file form-control" placeholder="Uploade Your File">
         </div>
         <div class="form-group mt-2">
          <label for="multifile"> Multiple File  </label>
           <input type="file" class="multifile form-control" placeholder="Uploade Your Multiple File">
         </div>
         <button type="submit" class="btn btn-success addUser mt-4"> Add User Delalis  </button>
       </div>
      </div>
      </div>
      </div>
      <div class="row mt-5"> 
      <div class="col col-md-12">
        <div class="card">
           <div class="card-header">
            <div class="card-body bg-info text-center"> User Table Show </div>
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th> Frist Name </th>
                    <th> Last Name </th>
                    <th> Nid NO </th>
                    <th> Phone  </th>
                    <th> Email </th>
                    <th> Status </th>
                    <th> Address </th>
                    <th> File  </th>
                    <th> Multifile </th>
                    <th> Action </th>
                  
                  </tr>
                </thead>
                <tbody class="alldata">

                </tbody>
              </table>
              </div>
            </div>
           </div>
        </div>
      </div>
      
    </div>


<!-- Delete Modal -->
<!-- Modal -->
<div class="modal fade" id="userModal"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are You Sure Detete Data 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btnDelete btn  btn-primary"> Delete </button>
      </div>
    </div>
  </div>
</div>

<!-- Delete Modal -->
<!-- Modal -->
<div class="modal fade" id="userupdate"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body"> 
      <div class="form-group mt-2">
          <label for="fName"> First Name</label>
          <input type="text" id="ufName" class="fName form-control" placeholder="Write Your First Name">
         </div>
         <div class="form-group mt-2">
          <label for="lName"> Last Name</label>
          <input type="text" id="ulName" class="lName form-control" placeholder="Write Your Last Name">
         </div>
         <div class="form-group mt-2">
          <label for="nid"> Nid Number </label>
          <input type="text" id="unid" class="nid form-control" placeholder="Write Your Nid Number">
         </div>
         <div class="form-group mt-2">
          <label for="phone"> Phone </label>
          <input type="number" id="uphone" class="phone form-control" placeholder="Write Your Phone Number ">
         </div>
         <div class="form-group mt-2">
          <label for="email"> Email </label>
          <input type="email" id="uemail" class="email form-control" placeholder="Write Your Verified Email">
         </div>
         <div class="form-group mt-2">
          <label for="status"> status </label>
          <select class="status form-control" id="ustatus">
           <option value="0"> ----- Select Status ----- </option>
           <option value="1"> Active </option>
           <option value="2"> InActive </option>
          </select>
         </div>
         <div class="form-group mt-2">
          <label for="address"> Address  </label>
           <textarea  id="uaddress" class="address form-control" rows="4"></textarea>
         </div>
         <div class="form-group mt-2">
          <label for="file"> File </label>
           <input type="file" id="ufile" class="file form-control" placeholder="Uploade Your File">
         </div>
         <div class="form-group mt-2">
          <label for="multifile"> Multiple File  </label>
           <input type="file" id="umultifile" class="multifile form-control" placeholder="Uploade Your Multiple File">
         </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="update btn  btn-primary"> Update Data </button>
      </div>
    </div>
  </div>
</div>


    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script> 
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <!-- font-awesome Cdn -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"> </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script>
     jQuery(document).ready(function(){
      show();

      jQuery(document).on("click",".update", function(){
        $.ajaxSetup({
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
         });
        var id=jQuery(this).val();
        var fName =jQuery('#ufName').val();
         var lName =jQuery('#ulName').val();
         var nid =jQuery('#unid').val();
         var phone =jQuery('#uphone').val();
         var email =jQuery('#uemail').val();
         var status =jQuery('#ustatus').val();
         var address =jQuery('#uaddress').val();
         var file =jQuery('#ufile').val();         
         var multifile =jQuery('#umultifile').val();
        $.ajax({
          url:'userupdate/'+id,
          type:'POST',
          dataType:'JSON',
          data:{
            fName:fName,
            lName:lName,
            nid:nid,
            phone:phone,
            email:email,
            status:status,
            address:address,
            file:file,
            multifile:multifile,
          },
          success:function(result){
             if(result.msg == '404'){
              jQuery('.alert-status').html('<div class="alert alert-danger">  Data Not Submitted </div>');
              jQuery('.alert-status').fadeOut(1000);
              show();
             }
             else{
              show();
              jQuery('.alert-status').html('<div class="alert alert-info">  Data Submitted </div>');
              jQuery('.alert-status').fadeOut(1000);
            }
          }
        });
      });
      jQuery(document).on("click",".updateId", function(){
        var id=jQuery(this).val();
        jQuery(".update").val(id);
        $.ajax({
          url:'usereidt/'+id,
          type:'GET',
          dataType:'JSON',
          success:function(result){
            jQuery("#ufName").val(result.alldata.fName);
            jQuery("#ulName").val(result.alldata.lName);
            jQuery("#unid").val(result.alldata.nid);
            jQuery("#uphone").val(result.alldata.phone);
            jQuery("#uemail").val(result.alldata.email);
            jQuery("#ustatus").val(result.alldata.status);
            jQuery("#uaddress").val(result.alldata.address);
            jQuery("#ufile").val(result.alldata.file);
            jQuery("#umultifile").val(result.alldata.umultifile);
            
          }
        })
      });
      

      jQuery(document).on("click",".deleteId", function(){
        var id=jQuery(this).val();
        jQuery(".btnDelete").val(id);
      });
      jQuery(document).on("click",".btnDelete", function(){
        var id=jQuery(this).val();
        $.ajax({
          url:'userdelete/'+id,
          type:'GET',
          dataType:'JSON',
          success:function(result){
            if(result.status == "404"){
              alert("data Not Show");
            }
            else{
              show();
              jQuery("").modal('hide');
            }
          }
        })
      })
       function show(){
        $.ajax({
          url:'usershow',
          type:'GET',
          dataType:'JSON',
          success:function(response){
             if(response.status == 'success'){
              var allData ="";
                $.each(response.alldata, function(key, item){
                  allData += '<tr>\
                  <td> '+item.fName+' </td>\
                  <td> '+item.lName+' </td>\
                  <td> '+item.nid+' </td>\
                  <td> '+item.phone+' </td>\
                  <td> '+item.email+' </td>\
                  <td> '+item.status+' </td>\
                  <td> '+item.address+' </td>\
                  <td> '+item.file+' </td>\
                  <td> '+item.multifile+' </td>\
                  <td> <div class="btn-group">  <button type="button"  value="'+item.id+'"  class="deleteId btn btn-danger" data-bs-toggle="modal" data-bs-target="#userModal"> <i class="fa fa-trash"> </i> </button>\
                  <button value="'+item.id+'" class="updateId btn  btn-info" data-bs-toggle="modal" data-bs-target="#userupdate"> <i class="fa fa-edit"> </i> </button> </div>\
                  </td>\
                  </tr>';
                })
                jQuery(".alldata").html(allData);
             }
             else{
              alert("Error : --- Data Not found");
             }
          }
      })
       }

      jQuery(".addUser").click(function(){
         $.ajaxSetup({
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
         });
         var fName =jQuery('.fName').val();
         var lName =jQuery('.lName').val();
         var nid =jQuery('.nid').val();
         var phone =jQuery('.phone').val();
         var email =jQuery('.email').val();
         var status =jQuery('.status').val();
         var address =jQuery('.address').val();
         var file =jQuery('.file').val();         
         var multifile =jQuery('.multifile').val();
         $.ajax({
          url:'userpost',
          type:'POST',
          dataType:'JSON',
          data:{
           fName:fName,
           lName:lName,
           nid:nid,
           phone:phone,
           email:email,
           status:status,
           address:address,
           file:file,
           multifile:multifile,
          },
          success:function(response){
             if(response.status == '404'){
              jQuery('.alert-status').html('<div class="alert alert-danger">  Data Not Submitted </div>');
              jQuery('.alert-status').fadeOut(1000);
             }
             else{
              show();
              jQuery('.alert-status').html('<div class="alert alert-info">  Data Submitted </div>');
              jQuery('.alert-status').fadeOut(1000);
            }
          }
      });
     });
     });
    </script>
   
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GPless</title>
    <link  rel="shortcut icon" href="{{asset("assets/images/logo.ico")}}" />
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset("assets/vendors/mdi/css/materialdesignicons.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/vendors/css/vendor.bundle.base.css")}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/014e2f671f.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="{{asset("js/bootstrap-multiselect.js")}}"></script>
    <link rel="stylesheet" href="{{asset("css/bootstrap-multiselect.css")}}" type="text/css"/>
    <link href="{{asset("fm.selectator.jquery.css")}}" rel="stylesheet">
    <script src="{{asset("fm.selectator.jquery.js")}}"></script> 
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">
    <!-- End layout styles -->
    <link rel="stylesheet" href="{{asset("assets/css/CrudStyle.css")}}">
<style>
  .btn-group{
    margin-top: -11px
  }
  .multiselect-native-select{
    display: block;
  }
  #MainTable_wrapper{
    overflow: auto;
  }
  .container, .container-sm, .container-md, .container-lg, .container-xl {
    max-width: 1244px;
}


</style>
  </head>

    <script>
    $(document).ready(function(){
      // Activate tooltip
      $('[data-toggle="tooltip"]').tooltip();
      
      // Select/Deselect checkboxes
      var checkbox = $('table tbody input[type="checkbox"]');
      $("#selectAll").click(function(){
        if(this.checked){
          checkbox.each(function(){
            this.checked = true;                        
          });
        } else{
          checkbox.each(function(){
            this.checked = false;                        
          });
        } 
      });
      checkbox.click(function(){
        if(!this.checked){
          $("#selectAll").prop("checked", false);
        }
      });
    });
    </script>
  <body>
     @if($errors->any())
     <input id="error-box" value="{{$errors->first()}}" class="d-none">         
     @endif
    <i class="fa fa-angle-double-up temppromote promote" aria-hidden="true"></i>
    <i class="fa fa-angle-double-down tempunpromote unpromote" aria-hidden="true"></i>
    <i class="fa fa-check-square-o approve-icon approve" aria-hidden="true"></i>
    <i class="fa fa-times disapprove-icon approve" aria-hidden="true"></i>

      <div class="form-row d-none AddNewSubgroup">
                                     
        <div class="col-sm-6">
           <label>Size</label>
           <span class="astric">&#42;</span>
           <input required type="text" name="size[]" class="form-control">
        </div>

        <div class="col-sm-6">
         <label>Color</label>
         <span class="astric">&#42;</span>
         <input required type="text" name="color[]" class="form-control" style="display: inline; width:96%;">
         <i class="fa fa-times DeleteSubCategory"  aria-hidden="true" style="color: red" title="Delete Sub Category"></i>
        </div>

    </div>
    <input value="{{route("clients.update","X")}}" id="clientsupdate" class="d-none">

    <input value="0" id="DataTableIntialized" class="d-none">

	<!---delete Form to fill it and submit --->
	<div class="d-none">
		<form id="DeleteForm" action="" method="post" data-link="{{route("clients.destroy","")}}">
			@method("delete")
			@csrf
			<button type="submit" id="SubmitDelete"> </button>
		</form>
	</div>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
       @include("includes.navbar")
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include("includes.sidebar")
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row d-none">
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Total Items<i class="mdi mdi-bookmark-check mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5"></h2>
                    <h6 class="card-text">Increased by 60%</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Highest Item sales <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5"></h2>
                    <h6 class="card-text">Selled  Times</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Monthly Revenue <i class="mdi mdi-diamond mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">L.E</h2>
                    <h6 class="card-text">Increased by 5%</h6>
                  </div>
                </div>
              </div>
            </div>
           
          
            <div class="row">
                <div class="container-xl">
                    <div class="table-responsive">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-4">
                                    <a href="{{route("clients.index")}}" style="color: white">	<h2>Manage <b>Clients</b></h2> </a>
                                    </div>
                                    <div class="col-sm-4" style="visibility: hidden">
                                        <form method="GET" >
                                         
                                            <div class="input-group mb-3">
                                             <input type="text" @if(isset($value)) value="{{$value}}" @endif name="value" class="form-control" placeholder="Enter Item Info"  aria-describedby="basic-addon2">
                                             <div class="input-group-append">
                                               <button type="submit" class="input-group-text" id="basic-addon2"><i class="fa fa-search" aria-hidden="true"></i>
                                               </button>
                                             </div>
                                          </div>
                                        </form>
                                    </div>
                                    <div class="col-sm-4">
                                        <a href="#AddClientModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Client</span></a>
                                    </div>
                                </div>
                            </div>
                         @if($errors->any())
                          <input id="error-box" value="{{$errors->first()}}" class="d-none">         
                         @endif
                
                            <table class="table table-striped table-hover" style="text-align: center"  id="MainTable"> 
                                <thead>
                                    <tr>
                                        <th>arabic name</th>
                                        <th>english name</th>
                                        <th>photo</th>
                                        <th>edit</th>
                                        <th>delete</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                        
                                    @foreach($clients as $client)				
                                    <tr  data-id="{{$client->id}}">
                                        <td class="arabic_name">{{$client->arabic_name}}</td>
                                        <td class="english_name">{{$client->english_name}}</td>
                                        <td class="image"><img class="clients_image" src="{{asset("clients-photos/".$client->photo_link)}}" style="max-width:70px"></td>
                                        <td><i class="fa fa-pencil-square-o edit_row" href="#EditClientModal"  data-toggle="modal" aria-hidden="true"></i></td>
                                        <td><i class="fa fa-trash-o delete_row" data-toggle="modal" href="#DeleteClientModal" aria-hidden="true"></i></td>
                                    
                                    </tr> 
                                    
                                    @endforeach
                                </tbody>
                            </table>
                            
                        </div>
                    </div>        
                </div>
              
            </div>
          </div>
          <!-- content-wrapper ends -->

            <!-- Add Modal HTML -->
            <div id="AddClientModal" class="modal fade">
                <div class="modal-dialog" style="width: 85%">
                    <div class="modal-content">
                        <form  method="post" action="{{route("clients.store")}}" enctype='multipart/form-data'>
                            @csrf
                            <div class="modal-header">						
                                <h4 class="modal-title">Add Client</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">					
                                    <div class="form-row">
                                     
                                         <div class="col-sm-12">
                                            <label>Arabic Name</label>
                                            <span class="astric">&#42;</span>

                                            <input required type="text" name="arabic_name" class="form-control">
                                         </div>
                           
                         
                                    </div>
            
                                    <div class="form-row">
                                      
                                      <div class="col-sm-12">
                                        <label>English Name</label>
                                        <span class="astric">&#42;</span>

                                        <input required type="text" name="english_name" class="form-control">
                                       </div>
                                    </div>
                                   

                                    <div class="form-row">
                                    

                                      <div class="col-sm-12">
                                        <label>Image</label>
                                        <input type="file" name="photo_link" class="form-control">
                                       </div>
                                    </div>
                                    
            
            
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-success" value="Add">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Edit Modal HTML -->
            <div id="EditClientModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form id="EditForm" method="post" data-link="{{route("clients.update","")}}" action="" enctype="multipart/form-data">
                            @csrf
                            @method("put")
                            <div class="modal-header">						
                                <h4 class="modal-title">Edit Client</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            
                            <div class="modal-body">					
                              <div class="form-row">
                               
                                   <div class="col-sm-12">
                                      <label>Arabic Name</label>
                                      <span class="astric">&#42;</span>

                                      <input required type="text" name="arabic_name" class="form-control">
                                   </div>
                     
                   
                              </div>
      
                              <div class="form-row">
                                
                                <div class="col-sm-12">
                                  <label>English Name</label>
                                  <span class="astric">&#42;</span>

                                  <input required type="text" name="english_name" class="form-control">
                                 </div>
                              </div>
                             

                              <div class="form-row">
                              

                                <div class="col-sm-12">
                                  <label>Image</label>
                                  <input type="file" name="photo_link" class="form-control">
                                 </div>
                              </div>
                              
      
      
                      </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-success" value="Save">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            @include("includes.imgmodal")
            <div id="respond-Modal" class="modal fade">
              <div class="modal-dialog" >
                  <div class="modal-content">
                      <form id="updateform" method="post" action="" enctype="multipart/form-data">
                          @csrf
                          @method("put")
                          <div class="modal-header">						
                              <h4 class="modal-title">Replicate Offer</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          </div>
                          <div class="modal-body" >	     
                              <div class="form-row">
                                  <div class="col-sm-6">
                                    <label>Duration</label>
                                    <input type="text" name="duration"  class="form-control"  placeholder=""  >
                                  </div>
                                  <div class="col-sm-6">
                                    <label>From</label>
                                    <input type="date"  name="created_at" class="form-control"  placeholder=""  >
                                  </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                              <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                              <input type="submit" class="btn btn-success" value="Send">
                          </div>
                      </form>
                  </div>
              </div>
          </div>

            <!-- Delete Modal HTML -->
            <div id="DeleteClientModal" class="modal fade DeleteModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">						
                                <h4 class="modal-title">Delete Client</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">					
                                <p>Are you sure you want to delete these Records?</p>
                                <p class="text-warning"><small>This action cannot be undone.</small></p>
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="button" class="btn btn-danger ConfirmDelete" value="Delete">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
          <!-- partial:partials/_footer.html -->
          @include("includes.footer")
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <!-- endinject -->
    <!-- Plugin js for this page -->
	@include("includes.dashboardscripts")

    <!-- End custom js for this page -->
    <script>
        //$('.selectator').selectator();
    
        var result1;
    
        function ajaxFunction(object, url, method) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            if($.ajax({
                url: url,
                type: method,
                //request data
                async:false,
                data: object,
                success: function (result)  {
                   result1=result;
                },
                error: function (data) {
                    alert('Error on updating, please try again later!');
                    return false;
                }
            }))
                return result1;
            else
                return false;
        };
        function Fill_NewSubgroup(){
            var temp=$(".AddNewSubgroup").clone();
            temp.removeClass("d-none");
            temp.addClass("extra_subcategory");
            temp.removeClass("AddNewSubgroup");
            temp.insertBefore(".to_insert_before_or_after_class");
           
        }
        
    
        
        $(document ).ready(function() {

           $("#example-getting-started").multiselect()
           if($("#error-box").length){
             alert($("#error-box").val());
           };
    
          $("#MainTable").DataTable({
            "paging":   false,
    
            aaSorting: [],
            "language": {
                "lengthMenu":  "",
                "zeroRecords": "there is no records matching this word",
                "info":  "",
                "infoEmpty": "",
                "infoFiltered": "",
                 
    
            }
    
    
    
        });
        
        
    
    
    
      $(".AddNewSubgroupButton").click(function(){
        Fill_NewSubgroup();
      });
    
      $(document).on("click",".DeleteSubCategory",function(){
          alert("New Color Deleted");
          $(this).parent().parent().remove();
      });
    
      $('.modal').on('hidden.bs.modal', function () {
        $(this).find('form').trigger('reset');
        $(this).find("textarea[name=branches_name]").text("");
    
      })
    
      $(".multiselect-native-select").addClass("form-control");

    $(document).on("click",".edit_row",function(){
      var targeted_row=$(this).parent().parent();
      var id=targeted_row.attr("data-id");

      var arabic_name=targeted_row.find(".arabic_name").text();
      var english_name=targeted_row.find(".english_name").text();

      $("#EditClientModal").find("input[name=arabic_name]").val(arabic_name);
      $("#EditClientModal").find("input[name=english_name]").val(english_name);
    
      $("#EditForm").attr("action",$("#EditForm").attr("data-link")+"/"+id);
    
      
    });
    
    $(document).on("click",".delete_row",function(){
        var targeted_row=$(this).parent().parent();
        var id=targeted_row.attr("data-id");
        $("#DeleteForm").attr("action",$("#DeleteForm").attr("data-link")+"/"+id);
    
    
    
    });
    
    function ChangeEditModal(account_type){
    
        
            $("#EditUserModal").find(".col-sm-6").addClass("d-none");
            $("#EditUserModal").find(".col-sm-6").find("input").prop("disabled","true");
        
            $("#EditUserModal").find("."+account_type).removeClass("d-none");
            $("#EditUserModal").find("."+account_type).find("input").removeAttr("disabled");
        
       
    
    
    }
    $(".ConfirmDelete").click(function(){
       
        $("#DeleteForm").find("#SubmitDelete").click();
    });
    $(document).on("change",".SelectType",function(){
        if($(this).val()!=0){
        $("#AddUserModal").find(".col-sm-6").addClass("d-none");
        $("#AddUserModal").find(".col-sm-6").find("input").prop("disabled","true");
    
        $("#AddUserModal").find("."+$(this).val()).removeClass("d-none");
        $("#AddUserModal").find("."+$(this).val()).find("input").removeAttr("disabled");
    
        }
    });
    
    
    
    
    });
    
    $(".price_change").change(function(){
        
      var targeted_model=$(this).parent().parent().parent();	
      var price_before_discount=parseFloat(targeted_model.find("input[name=price_before_discount]").val());
      var discount=parseFloat(targeted_model.find("input[name=discount]").val())/100;
      targeted_model.find("input[name=price_after_discount]").val(price_before_discount-(price_before_discount*discount));
    
    
    })
    
    var t=null;
    $(".fa-users").click(function() {
    
        var id=$(this).parent().parent().attr("data-id");
    
        var url=$("#GetOfferUsers").val();
        var res = url.replace("X", id);
    
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        if($.ajax({
            url: res,
            type: "GET",
            //request data
            success: function (result) {
                console.log(result);
                if($("#DataTableIntialized").val()==0){
                t= $('#OfferUsersTable').DataTable({
                    "paging":   true,
            
                    aaSorting: [],
                    "language": {
                        "lengthMenu":  "",
                        "info":  "",
                        "infoEmpty": "",
                        "infoFiltered": "",
                        
            
                    }
                });
                $("#DataTableIntialized").val(1);
            }
                for (var i = 0; i < result.length; i++) {
                    
    
    
    
                    var tr = $(".tr").clone();
    
                    tr.detach();
                    tr.attr("data-id",result[i].id);
                    tr.css("display","");
    
                    tr.attr("id","");
    
                    //  var href=tr.find(".name a").attr("href").replace("X",result[i].id);
                    tr.find(".id").text(result[i].id);
    
                    tr.find(".full_name").text(result[i].full_name);
                    tr.find(".account_name").text(result[i].account_name);
                    tr.find(".phone").text(result[i].phone);
                    tr.find(".email").text(result[i].email);
                    tr.find(".usage").text(result[i].usage);
                    tr.find(".points").text(result[i].points);

                    t.row.add(tr).draw( false );
    
    
    
                    // table.append(tr);
    
    
                    //     temp.parent().find("table").append("<tr><td>"+result[i].id+"</td><td>"+result[i].username+"</td><td>dsadasd</td><td>"+result[i].no_of_items+"</td><td>"+result[i].hour+"</td><td>"+result[i].delivery+"</td><td>"+result[i].customer_name+"</td><td>dsadasd</td></tr>");
                }
                
            
            
            
                
            
            },
            error: function (data) {
                alert('Error on updating, please try again later!');
                return false;
            }
        }));
    });
    
    $(".close").click(function(){
      $("#myModal").css("display","none");

     t.clear().draw();

    });
    
    $(document).on("click",".promote",function(){
        var id=$(this).parent().parent().attr("data-id");
        var url=$("#itemsupdate").val();
        var res = url.replace("X", id);
        var result=ajaxFunction({"promote":1},res,"put");
        console.log(result);
        if(result.promoted==1){
            alert("Offer has Promoted");
            var parenttag=$(this).parent();
            $(this).remove();
            parenttag.append($(".tempunpromote").clone().removeClass("tempunpromote"));
        }
        else{
            alert("Operation failed kindly contact support");
        }
    });
    

    $(document).on("click",".approve",function(){
      var id=$(this).parent().parent().attr("data-id");
      var url=$("#itemsupdate").val();
      var res = url.replace("X", id);
      if($(this).hasClass("fa-times")){
        var result=ajaxFunction({"approved":0},res,"put");
      }
      else{
        var result=ajaxFunction({"approved":1},res,"put");
      }
      console.log(result);
      if(result.approved==1){
          alert("Offer has Approved");
          var parenttag=$(this).parent();
          $(this).remove();
          parenttag.append($(".disapprove-icon").clone().removeClass("disapprove-icon"));
      }
      else if(result.approved==0){
        alert("Offer has Disapproved");
        var parenttag=$(this).parent();
        $(this).remove();
        parenttag.append($(".approve-icon").clone().removeClass("approve-icon"));
      }
    
      else{
          alert("Operation failed kindly contact support");
      }
  });
  

    $(document).on("click",".unpromote",function(){
        var id=$(this).parent().parent().attr("data-id");
        var url=$("#itemsupdate").val();
        var res = url.replace("X", id);
        var result=ajaxFunction({"promote":0},res,"put");
        console.log(result);
    
        if(result.promoted==0){
            alert("Offer has UnPromoted");
            var parenttag=$(this).parent();
            $(this).remove();
            parenttag.append($(".temppromote").clone().removeClass("temppromote"));
        }
        else{
            alert("Operation failed kindly contact support");
    
        }
    });

    $(document).on("change",".vendor_id",function(){
      $(".selectator_option").addClass("d-none");

      var vendor_id=$(this).val();
      $(".selectator_option").filter("."+vendor_id).removeClass("d-none")
    });


    
    $(document).on("click",".respond_row",function(){

      var targeted_row=$(this).parent().parent();
      var id=targeted_row.attr("data-id");
 
      var url=$("#itemsupdate").val();
      var res = url.replace("X", id);
      $("#updateform").attr("action",res);





    });
    
var modal = $("#myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = $("#clients_image");
var modalImg = $("#img01");
var captionText = $("#caption");
$(".clients_image").click(function(){
  $("#myModal").css("display","block");
  $("#img01").attr("src",$(this).attr("src"));
});



    </script>
  </body>
</html>
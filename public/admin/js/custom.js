$(document).ready(function(){

    // Call data Tables function
    $('#locations').DataTable();
    $('#categories').DataTable();
    $('#movies').DataTable();

    // Removing the Active class on Nav-item in sidebar
    $(".nav-item").removeClass("active");
    $(".nav-link").removeClass("active");

    //Check if Admin password is correct before updating a new one
    $("#current_password").keyup(function(){
        var current_password = $("#current_password").val();
        // alert(current_password);

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "post",
            url: "/admin/check-admin-password",
            data: {current_password:current_password},
            success: function(resp){
                // alert(resp);
                if(resp=="false"){
                    $("#check_password").html("<font color='red'>Current Password is Incorrect!</font>");
                }
                else if(resp=="true"){
                    $("#check_password").html("<font color='green'>Current Password is Correct!</font>");
                }
            },
            error: function() {
                alert("Error");
            }
        });
    });


    //Update Admin Status
    $(document).on("click", ".updateAdminStatus", function(){
        // alert("test");
        var status = $(this).children("i").attr("status");
        // alert(status);
        var admin_id = $(this).attr("admin_id");
        // alert(admin_id);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "post",
            url: "/admin/update-admin-status",
            data: {status:status, admin_id:admin_id},
            success:function(resp) {
                // alert(resp);
                if(resp['status']==0) {
                    $("#admin-"+admin_id).html("<i style='font-size:25px' class='mdi mdi-bookmark-outline' status='Inactive'></i>");
                }
                else if(resp['status']==1) {
                    $("#admin-"+admin_id).html("<i style='font-size:25px' class='mdi mdi-bookmark-check' status='Active'></i>");
                }
            }, 
            error:function() {
                // alert(error);
            }
        });
    });


    //Update Location Status
    $(document).on("click", ".updateLocationStatus", function(){
        // alert("test");
        var status = $(this).children("i").attr("status");
        // alert(status);
        var location_id = $(this).attr("location_id");
        // alert(location_id);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "post",
            url: "/admin/update-location-status",
            data: {status:status, location_id:location_id},
            success:function(resp) {
                // alert(resp);
                if(resp['status']==0) {
                    $("#location-"+location_id).html("<i style='font-size:25px' class='mdi mdi-bookmark-outline' status='Inactive'></i>");
                }
                else if(resp['status']==1) {
                    $("#location-"+location_id).html("<i style='font-size:25px' class='mdi mdi-bookmark-check' status='Active'></i>");
                }
            }, 
            error:function() {
                // alert(error);
            }
        });
    });


    //Update Category Status
    $(document).on("click", ".updateCategoryStatus", function(){
        // alert("test");
        var status = $(this).children("i").attr("status");
        // alert(status);
        var category_id = $(this).attr("category_id");
        // alert(category_id);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "post",
            url: "/admin/update-category-status",
            data: {status:status, category_id:category_id},
            success:function(resp) {
                // alert(resp);
                if(resp['status']==0) {
                    $("#category-"+category_id).html("<i style='font-size:25px' class='mdi mdi-bookmark-outline' status='Inactive'></i>");
                }
                else if(resp['status']==1) {
                    $("#category-"+category_id).html("<i style='font-size:25px' class='mdi mdi-bookmark-check' status='Active'></i>");
                }
            }, 
            error:function() {
                // alert(error);
            }
        });
    });


    //Update Movie Status
    $(document).on("click", ".updateMovieStatus", function(){
        // alert("test");
        var status = $(this).children("i").attr("status");
        // alert(status);
        var movie_id = $(this).attr("movie_id");
        // alert(movie_id);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "post",
            url: "/admin/update-movie-status",
            data: {status:status, movie_id:movie_id},
            success:function(resp) {
                // alert(resp);
                if(resp['status']==0) {
                    $("#movie-"+movie_id).html("<i style='font-size:25px' class='mdi mdi-bookmark-outline' status='Inactive'></i>");
                }
                else if(resp['status']==1) {
                    $("#movie-"+movie_id).html("<i style='font-size:25px' class='mdi mdi-bookmark-check' status='Active'></i>");
                }
            }, 
            error:function() {
                // alert(error);
            }
        });
    });


    // Confirm Deletion of any title (using simple javascript) 
    // $(".confirmDelete").click(function(){
    //     var title = $(this).attr("title");
    //     if(confirm("Are you sure you want to delete this "+title+"?")) {
    //         return true;
    //     }
    //     else{
    //         return false;
    //     }
    // });


    // Confirm Deletion of any title (using sweetalert) 
    $(".confirmDelete").click(function(){
        var module = $(this).attr("module");
        var moduleid = $(this).attr("moduleid");
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.isConfirmed) {
              Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              )
              window.location = "/admin/delete-"+module+"/"+moduleid;
            }
          })
    });


});
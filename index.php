<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="app.css">

</head>
<body>
    <div class="container mt-5">
        <h1 class="alert alert-info text-center mb-5 p-3">
            Ajax crud operation
        </h1>
        <div class="row">
            <form action="" class="col-sm-5" id="myform" >
                <h3 class="alert alert-warning text-center p-2">Add Update Students</h3>
                <div>
                    <label for="nameid" class="form-label">Name</label>
                    <input type="text" name="name"  class="form-control" id="nameid">
                </div>
                <div>
                    <label for="emailid" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="emailid">
                </div>
                <div>
                    <label for="passwordid" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="passid">
                </div>
                <div class="mt-5">
                <button type="submit" class="btn btn-primary" name='saveBtn' id="btnadd">Save</button>
                </div>
                <div id="msg"></div>
            </form>  
            <div class="col-sm-7 text-center">
                <h3 class="alert alert-danger p-2">Show student information</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="tbody"></tbody>
<!--                     
                    <div class="modal fade" id="exampleModal"                tabindex="-1"                                                         aria-labelledby="exampleModalLabel" 
                                      aria-hidden="true">
                         <div class="modal-dialog table" >
                             <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Your Student Data</h5>
                                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                         <div class="form-group">
                                                <div class="form-group">
                                                    <label for="">Enter Name</label>
                                                    <input type="text" name="fname" id="names" class="form-control" placeholder="First Name">
                                                </div>
                                                <div class="form-group">
                                                <label for="">Enter Email</label>
                                                    <input type="text" name="emails" id="emails" class="form-control" placeholder="Email id">
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="">Password</label>
                                                    <input type="number" name="password" id="passwords" class="form-control" placeholder="Enter Password">
                                                </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary save">Save changes</button>
                                    </div>
                            </div>
                        </div>
                    </div> -->
                    </table>
            </div> 
        </div>
    </div>
    <script src="./jqjsax.js"></script>

    }
    <!-- show data in user -->
    <script>
       
         function showdata(){

             var xmlhttp = new XMLHttpRequest();
             xmlhttp.onload = function() {
                 document.getElementById("tbody").innerHTML = this.responseText;
             };
             xmlhttp.open("GET", "retrievedata.php", true);
             xmlhttp.send();
             
         }

         showdata(); 

    </script>
                    <!-- edit -->
            <script>
            $(document).on("click",".edit",function(e){ 
                e.preventDefault();
        $("#modal").show();
        var student=$(this).data("eid");
        // alert(student);
    $.ajax({
        type: "POST",
        url: "update.php",
        data: {id:student},
        success: function (data) {
            console.log(data)
            // $('table').append(data);
            // $("modal-form table").html(data);
            $("modal-body").append(data);
            $('table').html(data);

        }
    });
    })


    //         $("#close-btn").on("click",function()   
    //     $("#modal").hide();
    // })

                    // delete

    $(document).on("click", ".delete", function(e) {
            e.preventDefault();
            var studentId = $(this).attr("data-id");
            // alert(studentId);
            $.ajax({
                type: "POST",
                url: "delete.php",
                data: {
                    studentId: studentId
                },
                success: function(data) {
                    showdata();
                }
            });
        })

    </script>     



</body>
</html>





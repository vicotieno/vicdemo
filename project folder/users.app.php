<?php
   // Start the session
   session_start();
   if(!isset($_SESSION['user'])) header('location: login.php');
   $_SESSION['table'] ='users';
   $user = $_SESSION['user'];
   $users = include('database/show-users.php');
?>








<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Bakery shop Management system</title>
    <link rel="stylesheet" type="text/css" href="users.app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.35.4/css/bootstrap-dialog.min.css" integrity="sha512-PvZCtvQ6xGBLWHcXnyHD67NTP+a+bNrToMsIdX/NUqhw+npjLDhlMZ/PhSHZN4s9NdmuumcxKHQqbHlGVqc8ow==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://use.fontawesome.com/0c7a3095b5.js"></script>
</head>
<body>
    <div id="dashboardMainContainer">
      <?php include 'partials/app.sidebar.php'; ?>


         
        </div>
    
        <div class="dashboard_content_container" id="dashboard_content_container">
            <div class="dashboard-topNav">
                <div class="menu_icon"><i class="fa fa-bars" id="toggleBtn"></i></div>
                <a href="database/logout.php" id=logoutBtn><i class="fa fa-power-off"></i>Log-out</a>
            </div>
            <div class="dashboard_content">
                

                <div class="dashboard_content_main">
                <div class="row">
                    <div class=" column column-5">
                        <h1 class="section-header"><i class="fa fa-plus"></i>Create User</h1>
                <div id="userAddFormContainer">
                    
                <form action="database/app.php" method="POST" class="appForm" id="userAddForm">
                        <div class="appFormInputContainer">
                            <label for="First_name">First Name</label>
                            <input type="text" class="appFormInput" id="First_name" name="First_name"  />
                        </div>
                        <div class="appFormInputContainer">
                            <label for="Last_name">Last Name</label>
                            <input type="text" class="appFormInput" id="Last_name" name="Last_name"  />
                        </div>

                        <div class="appFormInputContainer">
                            <label for="Email">Email</label>
                            <input type="text" class="appFormInput" id="Email" name="Email"  />
                        </div>
                         <div class="appFormInputContainer">
                            <label for="Password">Password</label>
                            <input type="password" class="appFormInput" id="Password" name="Password"  />
                        </div>
                        
                        <button type="submit" class="appBtn"><i class="fa fa-plus"></i>Add User</button>
                </form>
               <?php
                            if (isset($_SESSION['response'])) {
                                $response_message = $_SESSION['response']['message'];
                                $is_success = $_SESSION['response']['success'];
                                echo '<div class="responseMessage">';
                                echo '<p class="responseMessage ' . ($is_success ? 'responseMessage__success' : 'responseMessage__error') . '">';
                                echo $response_message;
                                echo '</p>';
                                echo '</div>';
                            }
                            ?>
                
                </div>
                </div>
                

                
              

                    <div class="column column-7">
                     
                    <h1 class="section-header"><i class="fa fa-list"></i>List of Users</h1> 

                    <div class="section_content">
                       <div class="users">
                       
                           <table>
                               <thead>
                                   <tr>
                                       <th>#</th>
                                       <th>First_name </th>
                                       <th>Last_name </th>
                                       <th>Email </th>
                                       <th>Created_at</th>
                                       <th>Updated_at </th>
                                       <th>Action</th>
                                   </tr>


                               </thead>
                               <tbody>

                                <?php foreach($users as $index => $user){ ?>
                                <tr>
                                <td><?= $index + 1 ?></td>
                                <td class="Firstname"><?= $user['First_name'] ?></td>
                                <td class="Lastname"><?= $user['Last_name'] ?></td>
                                <td class="Email"><?= $user['Email'] ?></td>
                                <td><?= date('M d, Y @ h:i:s A', strtotime($user['Created_at'])) ?></td>
                                <td><?= date('M d, Y @ h:i:s A', strtotime($user['Updated_at'])) ?></td>
                                <td>   
                                    <a href=" " class="updateUser" data-userid="<?=$user['id']?>"> <i class="fa fa-pencil"></i>Edit</a>
                                    <a href="" class="deleteUser"  data-userid="<?= $user['id'] ?>" data-fname="<?= $user['First_name'] ?>" data-lname="<?= $user['Last_name'] ?>"><i class="fa fa-trash"></i>Delete</a>




                                </td>




                                </tr>
    


                                <?php } ?>

                                


                               <tbody>



                           </table>

                           <p class="userCount"><?= count($users)?> Users </p>

                       </div> 




                    </div> 
                       

                    </div>



                </div>
             
                




                </div>

                </div>
                    
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
    <script src="js/jquery/jquery-3.5.1.min.js"></script>
  
    <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

   <!-- Optional theme -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

   <!-- Latest compiled and minified JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.35.4/js/bootstrap-dialog.js" integrity="sha512-AZ+KX5NScHcQKWBfRXlCtb+ckjKYLO1i10faHLPXtGacz34rhXU8KM4t77XXG/Oy9961AeLqB/5o0KTJfy2WiA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 

 <script>
    function Script() {
        this.initialize = function() {
            this.registerEvents();
        };

        this.registerEvents = function() {
            document.addEventListener('click', function(e) {
                var targetElement = e.target;
                var classList = targetElement.classList;

                if (classList.contains('deleteUser')) {
                    e.preventDefault();
                    var userid = targetElement.dataset.userid;
                    var fname = targetElement.dataset.fname;
                    var lname = targetElement.dataset.lname;
                    var fullName = fname + ' ' + lname;

                    BootstrapDialog.confirm({
                        type: BootstrapDialog.TYPE_DANGER,
                        message:'Are you sure to delete ' + fullName + '?',
                        callback: function(isDelete){
                            $.ajax({
                                type: 'POST',
                                data: {
                                    userid: userid,
                                    f_name: fname,
                                    l_name: lname
                                },
                                url: 'database/delete-user.php',
                                dataType: 'json',
                                success: function(data) {
                                    if (data.success) {
                                        BootstrapDialog.alert({
                                            type: BootstrapDialog.TYPE_SUCCESS,
                                            message: data.message,
                                            callback: function(){
                                                location.reload();  
                                            }
                                        });
                                    } else 
                                        BootstrapDialog.alert({
                                            type: BootstrapDialog.TYPE_DANGER,
                                            message: data.message,
                                        });
                                    
                                }
                            });
                        }
                    });
                }

                if (classList.contains('updateUser')) {
                    e.preventDefault(); //prevent from loading

                    // Get data
                    var First_name = targetElement.closest('tr').querySelector('td.Firstname').innerHTML;
                    var Last_name = targetElement.closest('tr').querySelector('td.Lastname').innerHTML;
                    var Email = targetElement.closest('tr').querySelector('td.Email').innerHTML;
                    var userid = targetElement.dataset.userid;

                    BootstrapDialog.confirm({
                        title: 'Update ' + First_name + ' ' + Last_name,
                        message: '<form>\
                            <div class="form-group">\
                                <label for="First_name">First_name:</label>\
                                <input type="text" class="form-control" id="First_nameUpdate" value="'+ First_name +'">\
                            </div>\
                            <div class="form-group">\
                                <label for="Last_name">Last_name:</label>\
                                <input type="text" class="form-control" id="Last_nameUpdate" value="'+ Last_name +'">\
                            </div>\
                            <div class="form-group">\
                                <label for="Email">Email:</label>\
                                <input type="email" class="form-control" id="EmailUpdate" value="'+ Email +'">\
                            </div>\
                        </form>',
                        callback: function(isUpdate) {
                            if (isUpdate) { 
                                $.ajax({
                                    type: 'POST',
                                    data: {
                                        userid: userid,
                                        f_name: document.getElementById('First_nameUpdate').value,
                                        l_name: document.getElementById('Last_nameUpdate').value,
                                        Email: document.getElementById('EmailUpdate').value,
                                    },
                                    url: 'database/update-user.php',
                                    dataType: 'json',
                                    success: function(data) {
                                        if (data.success) {
                                            BootstrapDialog.alert({
                                                type: BootstrapDialog.TYPE_SUCCESS,
                                                message: data.message,
                                                callback: function() {
                                                    location.reload();  
                                                }
                                            });
                                        } else {
                                            BootstrapDialog.alert({
                                                type: BootstrapDialog.TYPE_DANGER,
                                                message: data.message,
                                            });
                                        }
                                    }
                                });
                            }
                        }
                    });
                }
            });
        };
    }

    var script = new Script();
    script.initialize();
</script>










</body>
</html>
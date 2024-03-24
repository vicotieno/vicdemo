<div class="dashboard_sidebar" id="dashboard_sidebar">
            <h3 class="dashboard_logo" id="dashboard_logo">BMS</h3>
            <div class="dashboard_sidebar-user">
            <img src="admin-logo.jpg" alt="User image." />
            <span><?= isset($user['First_name']) ? $user['First_name'] . ' ' . $user['Last_name'] : 'Guest' ?></span>
            </div>


        <div class="dashboard_sidebar_menus">
                <ul class="dashboard_menus_lists">
                    <!-- class= "menuActive" -->
                    <li>
                        <a href="./dashboard.php"><i class="fa fa-dashboard"></i><span class="menuText">Dashboard</span></a>
                    </li>
                        
                    <li>
                        <a href="./users.app.php"><i class="fa fa-user-plus"></i><span class="menuText">Add User</span></a>
                    </li>          
                </ul>
        </div>

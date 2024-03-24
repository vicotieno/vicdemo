<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Bakery shop Management system</title>
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <script src="https://use.fontawesome.com/0c7a3095b5.js"></script>
</head>
<body>
    <div id="dashboardMainContainer">
        <div class="dashboard_sidebar" id="dashboard_sidebar">
            <h3 class="dashboard_logo" id="dashboard_logo">BMS</h3>
            <div class="dashboard_sidebar-user">
                <img src="admin-logo.jpg" alt="User image." />
                <span>Admin</span>
            </div>
            <div class="dashboard_sidebar_menus">
                <ul class="dashboard_menus_lists">
                    <li class="MenuActive">
                        <a href="#"><i class="fa fa-dashboard"></i><span class="menuText">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-area-chart"></i><span class="menuText">Report</span></a>
                    </li>   
                    <li>
                        <a href="#"><i class="fa fa-shopping-basket"></i><span class="menuText">Product</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-truck"></i><span class="menuText">Supplier</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-file-text-o"></i><span class="menuText">Customer order</span></a>
                    </li>     
                    <li>
                        <a href="#"><i class="fa fa-user"></i><span class="menuText">User</span></a>
                    </li>          
                </ul>
            </div>
        </div>
    
        <div class="dashboard_content_container" id="dashboard_content_container">
            <div class="dashboard-topNav">
                <div class="menu_icon"><i class="fa fa-bars" id="toggleBtn"></i></div>
                <a href="#" id="logoutBtn"><i class="fa fa-power-off"></i>Log-out</a>
            </div>
            <div class="dashboard_content">
                <div class="dashboard_content_main"></div>
            </div>
        </div>
    </div>

    <script>
        var toggleBtn = document.getElementById('toggleBtn');
        var dashboard_sidebar = document.getElementById('dashboard_sidebar');
        var dashboard_content_container = document.getElementById('dashboard_content_container');
        var dashboard_logo = document.getElementById('dashboard_logo');

        var sideBarIsOpen = true;

        toggleBtn.addEventListener('click', (event) => {
            event.preventDefault();
            if (sideBarIsOpen) {
                dashboard_sidebar.style.width = '10%';
                dashboard_content_container.style.width = '90%';
                dashboard_logo.style.fontSize = '60px';
                sideBarIsOpen = false;

                var menuIcons = document.querySelectorAll('.menuText');
                menuIcons.forEach(icon => {
                    icon.style.display = 'none';
                });

                document.querySelector('.dashboard_menus_lists').style.textAlign = 'center';
            } else {
                dashboard_sidebar.style.width = '20%';
                dashboard_content_container.style.width = '80%';
                dashboard_logo.style.fontSize = '80px';
                sideBarIsOpen = true;

                var menuIcons = document.querySelectorAll('.menuText');
                menuIcons.forEach(icon => {
                    icon.style.display = 'inline-block';
                });

                document.querySelector('.dashboard_menus_lists').style.textAlign = 'initial';
            }
        });
    </script>
</body>
</html>

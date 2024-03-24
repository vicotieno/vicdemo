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
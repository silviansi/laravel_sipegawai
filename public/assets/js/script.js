document.addEventListener('DOMContentLoaded', function() {
    // Function to handle click on sidebar menu items
    var sidebarItems = document.querySelectorAll('.sidebar-item');
      
    // Set active menu item based on localStorage
    var activeItem = localStorage.getItem('activeItem');
    if (activeItem) {
        document.querySelector(`.sidebar-item a[href="${activeItem}"]`).parentElement.classList.add('active');
    }

    sidebarItems.forEach(function(item) {
        item.addEventListener('click', function() {
        // Remove active class from all items
        sidebarItems.forEach(function(item) {
            item.classList.remove('active');
        });
        // Add active class to the clicked item
        this.classList.add('active');
        // Store active item in localStorage
        localStorage.setItem('activeItem', this.querySelector('a').getAttribute('href'));
    });
    });
    // Function to open sidebar
    var openBtn = document.querySelector('.open-btn');
    openBtn.addEventListener('click', function() {
        var sidebar = document.querySelector('.sidebar');
        sidebar.classList.add('active');
    });

    // Function to close sidebar
    var closeBtn = document.querySelector('.close-btn');
    closeBtn.addEventListener('click', function() {
        var sidebar = document.querySelector('.sidebar');
        sidebar.classList.remove('active');
    });

    // Optional: Close sidebar when clicking outside sidebar area (overlay)
    document.addEventListener('click', function(event) {
        var sidebar = document.querySelector('.sidebar');
        var openBtn = document.querySelector('.open-btn');
        if (!sidebar.contains(event.target) && event.target !== openBtn) {
            sidebar.classList.remove('active');
        }
    });
});

<script>
     function isIndexPage() {
          const path = window.location.pathname.split('/').filter(Boolean);

          const adminIndexStructure = path.length === 2 && path[0] === 'admin';

          return adminIndexStructure;
     }

     function applySidebarState() {
          const sidebar = document.getElementById('sidebar');
          const content = document.querySelector('.content-area');
          const navbar = document.querySelector('.navbar');
          const footer = document.querySelector('.admin-footer');
          const toggleBtn = document.getElementById('navbarToggleBtn');

          const shouldExpand = isIndexPage();

          if (shouldExpand) {
               sidebar.classList.remove('collapsed');
               content.classList.remove('expanded');
               navbar.classList.remove('expanded');

               if (footer) {
                    footer.classList.remove('expanded');
               }

               if (toggleBtn) {
                    toggleBtn.classList.add('d-none');
               }
          } else {
               sidebar.classList.add('collapsed');
               content.classList.add('expanded');
               navbar.classList.add('expanded');

               if (footer) {
                    footer.classList.add('expanded');
               }

               if (toggleBtn) {
                    toggleBtn.classList.remove('d-none');
               }
          }
     }

     function toggleSidebar() {
          const sidebar =
               document.getElementById('sidebar');

          const content =
               document.querySelector('.content-area');

          const navbar =
               document.querySelector('.navbar');

          const footer =
               document.querySelector('.admin-footer');

          const toggleBtn =
               document.getElementById('navbarToggleBtn');

          sidebar.classList.toggle('collapsed');
          content.classList.toggle('expanded');
          navbar.classList.toggle('expanded');

          if (footer) {
               footer.classList.toggle('expanded');
          }

          if (sidebar.classList.contains('collapsed')) {
               toggleBtn.classList.remove('d-none');
          } else {
               toggleBtn.classList.add('d-none');
          }
     }

     document.addEventListener('DOMContentLoaded', applySidebarState);
</script>
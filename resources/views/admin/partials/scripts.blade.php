<script>
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
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
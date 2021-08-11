    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="https://kit.fontawesome.com/6acea4e9f8.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
          return new bootstrap.Tooltip(tooltipTriggerEl)
        })    
    </script>
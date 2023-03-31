
<script type="text/javascript" src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js') }}"></script>

<script>
    const navbar = document.querySelector('.col-navbar')
    const cover = document.querySelector('.screen-cover')

    const sidebar_items = document.querySelectorAll('.sidebar-item')

    function toggleNavbar() {
        navbar.classList.toggle('d-none')
        cover.classList.toggle('d-none')
    }

    function toggleActive(e) {
        sidebar_items.forEach(function(v, k) {
            v.classList.remove('active')
        })
        e.closest('.sidebar-item').classList.add('active')

    }
</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="{{ asset('https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/datatables-buttons-excel-styles@1.2.0/js/buttons.html5.styles.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/datatables-buttons-excel-styles@1.2.0/js/buttons.html5.styles.templates.min.js"></script>
<script src="{{ asset('https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js') }}"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js') }}"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js') }}"></script>
<script src="{{ asset('https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js') }}"></script>



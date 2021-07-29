  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <script>
    import counterUp from 'counterup2'

    const el = document.querySelector( '.counter' )

    // Start counting, do this on DOM ready or with Waypoints.
    counterUp( el, {
        duration: 1000,
        delay: 16,
    } )
  </script>
    {{-- counter1 --}}
    {{-- <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="Counter-Up-master/jquery.counterup.min.js"></script> --}}

  <script src="paginationjs/src/pagination.js">
        $('#pagination-container').pagination({
        dataSource: [1, 2, 3, 4, 5, 6, 7, ... , 195],
        callback: function(data, pagination) {
            // template method of yourself
            var html = template(data);
            $('#data-container').html(html);
        }
    })

  </script>
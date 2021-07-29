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

  <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script src="paginationjs"></script>
<script>
$(function() {
  (function(name) {
    var container = $('#pagination-' + name);
    var sources = function () {
      var result = [];

      for (var i = 1; i < 196; i++) {
        result.push(i);
      }

      return result;
    }();

    var options = {
      dataSource: sources,
      callback: function (response, pagination) {
        window.console && console.log(response, pagination);

        var dataHtml = '<ul>';

        $.each(response, function (index, item) {
          dataHtml += '<li>' + item + '</li>';
        });

        dataHtml += '</ul>';

        container.prev().html(dataHtml);
      }
    };

    //$.pagination(container, options);

    container.addHook('beforeInit', function () {
      window.console && console.log('beforeInit...');
    });
    container.pagination(options);

    container.addHook('beforePageOnClick', function () {
      window.console && console.log('beforePageOnClick...');
      //return false
    });
  })('demo1');

  (function(name) {
    var container = $('#pagination-' + name);
    container.pagination({
      dataSource: 'https://api.flickr.com/services/feeds/photos_public.gne?tags=cat&tagmode=any&format=json&jsoncallback=?',
      locator: 'items',
      totalNumber: 120,
      pageSize: 20,
      ajax: {
        beforeSend: function() {
          container.prev().html('Loading data from flickr.com ...');
        }
      },
      callback: function(response, pagination) {
        window.console && console.log(22, response, pagination);
        var dataHtml = '<ul>';

        $.each(response, function (index, item) {
          dataHtml += '<li>' + item.title + '</li>';
        });

        dataHtml += '</ul>';

        container.prev().html(dataHtml);
      }
    })
  })('demo2');
})
</script>
jQuery(document).ready(function ($) {
  // Inicializar Bootstrap Select en los selects
  $('#brand1').selectpicker({
    liveSearch: false,
    noneSelectedText: 'Selecciona una marca',
  });
  $('#brand2').selectpicker({
    liveSearch: false,
    noneSelectedText: 'Selecciona una marca',
  });
  $('#firewall1').selectpicker({
    liveSearch: true,
    noneSelectedText: 'Selecciona un firewall',
    liveSearchPlaceholder: 'Filtrar modelos',
    liveSearchNormalize: true
  });
  $('#firewall2').selectpicker({
    liveSearch: true,
    noneSelectedText: 'Selecciona un firewall',
    liveSearchPlaceholder: 'Filtrar modelos',
    liveSearchNormalize: true
  });

  // Ocultar los selectores de firewalls al cargar la página
  $('#firewall1').parent().hide();
  $('#firewall2').parent().hide();

  async function fetchFirewallsByBrand(brandId) {
    const url = `/wp-json/wp/v2/firewall?per_page=100`;
    let allFirewalls = [];
    let page = 1;
    let totalPages = 1;

    try {
      while (page <= totalPages) {
        const response = await fetch(`${url}&page=${page}`);
        if (!response.ok) {
          throw new Error('Network response was not ok');
        }
        const data = await response.json();
        const headers = response.headers;
        totalPages = headers.get('X-WP-TotalPages');

        allFirewalls = allFirewalls.concat(data);
        page++;
      }

      const filteredFirewalls = allFirewalls.filter(firewall => {
        return firewall.marca && firewall.marca.some(term => term.id == brandId);
      });

      return filteredFirewalls;
    } catch (error) {
      console.error('Error fetching firewalls:', error);
      return [];
    }
  }

  async function loadFirewalls(selectElement, brandId) {
    try {
      $('#loading-spinner').show();

      const firewalls = await fetchFirewallsByBrand(brandId);

      if (!selectElement) {
        console.error('El elemento select no existe.');
        return;
      }

      if (firewalls.length === 0) {
        selectElement.innerHTML = '<option value="">No hay firewalls disponibles para esta marca</option>';
      } else {
        selectElement.innerHTML = '<option value="">Selecciona un firewall</option>';

        firewalls.forEach(firewall => {
          const option = document.createElement('option');
          option.value = firewall.id;
          option.text = firewall.title.rendered;
          selectElement.appendChild(option);
        });
      }

      // Mostrar el contenedor del selector
      $(selectElement).parent().show();
      jQuery(selectElement).selectpicker('refresh');

    } catch (error) {
      console.error('Error loading firewalls:', error);
      selectElement.innerHTML = '<option value="">Error al cargar los firewalls</option>';
    } finally {
      $('#loading-spinner').hide();
    }
  }

  async function fetchFirewallDetails(firewallId) {
    const response = await fetch(`/wp-json/wp/v2/firewall/${firewallId}`);
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    const firewallData = await response.json();
    return firewallData;
  }

  async function compareFirewalls() {
    const firewall1Id = $('#firewall1').val();
    const firewall2Id = $('#firewall2').val();
    const brand1Id = $('#brand1').val();
    const brand2Id = $('#brand2').val();

    if (!brand1Id && !firewall1Id && !brand2Id && !firewall2Id) {
      $('#comparison-table').html('<p>Por favor selecciona los datos para mostrar la comparación</p>');
      return;
    }

    if (firewall1Id && firewall2Id) {
      try {
        const [firewall1, firewall2] = await Promise.all([
          fetchFirewallDetails(firewall1Id),
          fetchFirewallDetails(firewall2Id)
        ]);

        $('#comparison-table').html(`
        <div class="table-responsive">
          <table class="table">
            <thead class="border-light">
              <tr>
                <th scope="col" width="30%"></th>
                <th scope="col" width="35%">${firewall1.title.rendered}</th>
                <th scope="col" width="35%">${firewall2.title.rendered}</th>
              </tr>
            </thead>
            <tbody>
              <tr class="tr-separator">
                <th colspan="3" class="th-separator">Performance</th>
              </tr>
              <tr>
                <th scope="row">Firewall throughput</th>
                <td>${firewall1.acf.firewall_throughput || 'N/A'}</td>
                <td>${firewall2.acf.firewall_throughput || 'N/A'}</td>
              </tr>
              <tr>
                <th scope="row">Firewall IMIX</th>
                <td>${firewall1.acf.firewall_imix || 'N/A'}</td>
                <td>${firewall2.acf.firewall_imix || 'N/A'}</td>
              </tr>
              <tr>
                <th scope="row">Firewall Latency</th>
                <td>${firewall1.acf.firewall_latency || 'N/A'}</td>
                <td>${firewall2.acf.firewall_latency || 'N/A'}</td>
              </tr>
              <tr>
                <th scope="row">IPS throughput</th>
                <td>${firewall1.acf.ips_throughput || 'N/A'}</td>
                <td>${firewall2.acf.ips_throughput || 'N/A'}</td>
              </tr>
              <tr>
                <th scope="row">Threat protection throughput</th>
                <td>${firewall1.acf.threat_protection_throughput || 'N/A'}</td>
                <td>${firewall2.acf.threat_protection_throughput || 'N/A'}</td>
              </tr>
              <tr>
                <th scope="row">NGFW Throughput</th>
                <td>${firewall1.acf.ngfw || 'N/A'}</td>
                <td>${firewall2.acf.ngfw || 'N/A'}</td>
              </tr>
              <tr>
                <th scope="row">Concurrent connections</th>
                <td>${firewall1.acf.concurrent_connections || 'N/A'}</td>
                <td>${firewall2.acf.concurrent_connections || 'N/A'}</td>
              </tr>
              <tr>
                <th scope="row">New connections/sec</th>
                <td>${firewall1.acf.new_connectionssec || 'N/A'}</td>
                <td>${firewall2.acf.new_connectionssec || 'N/A'}</td>
              </tr>
              <tr>
                <th scope="row">IPsec VPN throughput</th>
                <td>${firewall1.acf.ipsec_vpn_throughput || 'N/A'}</td>
                <td>${firewall2.acf.ipsec_vpn_throughput || 'N/A'}</td>
              </tr>
              <tr>
                <th scope="row">IPsec VPN concurrent tunnels</th>
                <td>${firewall1.acf.ipsec_vpn_concurrent || 'N/A'}</td>
                <td>${firewall2.acf.ipsec_vpn_concurrent || 'N/A'}</td>
              </tr>
              <tr>
                <th scope="row">SSL VPN concurrent tunnels</th>
                <td>${firewall1.acf.ssl_vpn_concurrent_tunnels || 'N/A'}</td>
                <td>${firewall2.acf.ssl_vpn_concurrent_tunnels || 'N/A'}</td>
              </tr>
              <tr>
                <th scope="row">Xstream SSL/TLS Inspection</th>
                <td>${firewall1.acf.xstream_ssltls_inspection || 'N/A'}</td>
                <td>${firewall2.acf.xstream_ssltls_inspection || 'N/A'}</td>
              </tr>
              <tr>
                <th scope="row">Xstream SSL/TLS concurrent connections</th>
                <td>${firewall1.acf.xstream_ssltls || 'N/A'}</td>
                <td>${firewall2.acf.xstream_ssltls || 'N/A'}</td>
              </tr>
            </tbody>
          </table>
        </div>
      `);

      } catch (error) {
        console.error('Error fetching firewall details:', error);
        $('#comparison-table').html('<p class="message">Error al cargar los firewalls. Por favor, inténtalo de nuevo.</p>');
      }
    } else {
      $('#comparison-table').html('<p class="message">Por favor selecciona los datos para mostrar la comparación</p>');
    }
  }

  $('#brand1').on('change', function () {
    if ($(this).val()) {
      loadFirewalls($('#firewall1')[0], $(this).val());
      $('#comparison-table').html('<p class="message">Por favor selecciona los datos para mostrar la comparación</p>');
    } else {
      $('#firewall1').parent().hide();
      $('#firewall1').empty(); // Limpia las opciones del select
      jQuery('#firewall1').selectpicker('refresh');
      compareFirewalls();
    }
  });

  $('#brand2').on('change', function () {
    if ($(this).val()) {
      loadFirewalls($('#firewall2')[0], $(this).val());
      $('#comparison-table').html('<p class="message">Por favor selecciona los datos para mostrar la comparación</p>');
    } else {
      $('#firewall2').parent().hide();
      $('#firewall2').empty(); // Limpia las opciones del select
      jQuery('#firewall2').selectpicker('refresh');
      compareFirewalls();
    }
  });

  $('#firewall1').on('change', function() {
    if (!$(this).val()) {
      $('#comparison-table').html('<p class="message">Por favor selecciona los datos para mostrar la comparación</p>');
    } else {
      compareFirewalls();
    }
  });

  $('#firewall2').on('change', function() {
    if (!$(this).val()) {
      $('#comparison-table').html('<p class="message">Por favor selecciona los datos para mostrar la comparación</p>');
    } else {
      compareFirewalls();
    }
  });
});

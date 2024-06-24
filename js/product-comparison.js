jQuery(document).ready(function ($) {
  // Inicializar Bootstrap Select en los selects
  $('#brand1').selectpicker({
    liveSearch: true,
    noneSelectedText: 'Selecciona una marca'
  });
  $('#brand2').selectpicker({
    liveSearch: true,
    noneSelectedText: 'Selecciona una marca'
  });
  $('#firewall1').selectpicker({
    liveSearch: true,
    noneSelectedText: 'Selecciona un firewall'
  });
  $('#firewall2').selectpicker({
    liveSearch: true,
    noneSelectedText: 'Selecciona un firewall'
  });

  async function fetchFirewallsByBrand(brandId) {
    const url = `/wp-json/wp/v2/firewall`;

    const response = await fetch(url);
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    const data = await response.json();
    const filteredFirewalls = data.filter(firewall => {
      return firewall.marca && firewall.marca.some(term => term.id == brandId);
    });
    return filteredFirewalls;
  }

  async function loadFirewalls(selectElement, brandId) {
    try {
      // Fetch firewalls filtered by brand
      const firewalls = await fetchFirewallsByBrand(brandId);

      // Verifica si el selectElement existe
      if (!selectElement) {
        console.error('El elemento select no existe.');
        return;
      }

      // Clear previous options
      selectElement.innerHTML = '<option value="">Selecciona un firewall</option>';

      // Populate the select with new options
      firewalls.forEach(firewall => {
        const option = document.createElement('option');
        option.value = firewall.id;
        option.text = firewall.title.rendered;
        selectElement.appendChild(option);
      });

      // Show the select element and its previous sibling (label or placeholder)
      selectElement.style.display = 'block';
      if (selectElement.previousElementSibling) {
        selectElement.previousElementSibling.style.display = 'block';
      }

      // Refresh the Bootstrap Select picker to show new options
      jQuery(selectElement).selectpicker('refresh');

    } catch (error) {
      console.error('Error loading firewalls:', error);
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

    if (firewall1Id && firewall2Id) {
      try {
        const [firewall1, firewall2] = await Promise.all([
          fetchFirewallDetails(firewall1Id),
          fetchFirewallDetails(firewall2Id)
        ]);

        $('#comparison-table').html(`
          <div class="table-responsive">
            <table class="table table-striped">
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
                <tr class="tr-separator">
                  <th colspan="3" class="th-separator">Wireless Specification</th>
                </tr>
                <tr>
                  <th scope="row">Number of Antennas</th>
                  <td>${firewall1.acf.no_of_antennas || 'N/A'}</td>
                  <td>${firewall2.acf.no_of_antennas || 'N/A'}</td>
                </tr>
                <tr>
                  <th scope="row">MIMO capabilities</th>
                  <td>${firewall1.acf.mimo_capabilities || 'N/A'}</td>
                  <td>${firewall2.acf.mimo_capabilities || 'N/A'}</td>
                </tr>
                <tr>
                  <th scope="row">Wireless interface</th>
                  <td>${firewall1.acf.wireless_interface || 'N/A'}</td>
                  <td>${firewall2.acf.wireless_interface || 'N/A'}</td>
                </tr>
                <tr class="tr-separator">
                  <th colspan="3" class="th-separator">Physical Interfaces</th>
                </tr>
                <tr>
                  <th scope="row">Storage</th>
                  <td>${firewall1.acf.storage || 'N/A'}</td>
                  <td>${firewall2.acf.storage || 'N/A'}</td>
                </tr>
                <tr>
                  <th scope="row">Ethernet interfaces (fixed)</th>
                  <td>${firewall1.acf.ethernet_interfaces_fixed || 'N/A'}</td>
                  <td>${firewall2.acf.ethernet_interfaces_fixed || 'N/A'}</td>
                </tr>
                <tr>
                  <th scope="row">Management ports</th>
                  <td>${firewall1.acf.management_ports || 'N/A'}</th>
                  <td>${firewall2.acf.management_ports || 'N/A'}</td>
                </tr>
                <tr>
                  <th scope="row">Other I/O ports</th>
                  <td>${firewall1.acf.other_io_ports || 'N/A'}</th>
                  <td>${firewall2.acf.other_io_ports || 'N/A'}</td>
                </tr>
                <tr>
                  <th scope="row">Number of expansion slots</th>
                  <td>${firewall1.acf.number_of_expansion_slots || 'N/A'}</th>
                  <td>${firewall2.acf.number_of_expansion_slots || 'N/A'}</td>
                </tr>
                <tr>
                  <th scope="row">Optional add-on connectivity</th>
                  <td>${firewall1.acf.optional_on_connectivity || 'N/A'}</th>
                  <td>${firewall2.acf.optional_on_connectivity || 'N/A'}</td>
                </tr>
                <tr class="tr-separator">
                  <th colspan="3" class="th-separator">Physical Specifications</th>
                </tr>
                <tr>
                  <th scope="row">Mounting Options</th>
                  <td>${firewall1.acf.mounting || 'N/A'}</th>
                  <td>${firewall2.acf.mounting || 'N/A'}</td>
                </tr>
                <tr>
                  <th scope="row">Dimensions (W x H x D)</th>
                  <td>${firewall1.acf.dimensions || 'N/A'}</th>
                  <td>${firewall2.acf.dimensions || 'N/A'}</td>
                </tr>
                <tr>
                  <th scope="row">Weight</th>
                  <td>${firewall1.acf.weight || 'N/A'}</th>
                  <td>${firewall2.acf.weight || 'N/A'}</th>
                </tr>
                <tr class="tr-separator">
                  <th colspan="3" class="th-separator">Environment</th>
                </tr>
                <tr>
                  <th scope="row">Power supply</th>
                  <td>${firewall1.acf.power_supply || 'N/A'}</th>
                  <td>${firewall2.acf.power_supply || 'N/A'}</td>
                </tr>
                <tr>
                  <th scope="row">Power consumption</th>
                  <td>${firewall1.acf.power_consumption || 'N/A'}</th>
                  <td>${firewall2.acf.power_consumption || 'N/A'}</td>
                </tr>
                <tr>
                  <th scope="row">Operating temperature</th>
                  <td>${firewall1.acf.operating_temperature || 'N/A'}</th>
                  <td>${firewall2.acf.operating_temperature || 'N/A'}</td>
                </tr>
                <tr>
                  <th scope="row">Humidity</th>
                  <td>${firewall1.acf.humidity || 'N/A'}</th>
                  <td>${firewall2.acf.humidity || 'N/A'}</td>
                </tr>
                <tr class="tr-separator">
                  <th colspan="3" class="th-separator">Product Certifications</th>
                </tr>
                <tr>
                  <th scope="row">Certifications</th>
                  <td>${firewall1.acf.certifications || 'N/A'}</th>
                  <td>${firewall2.acf.certifications || 'N/A'}</td>
                </tr>
              </tbody>
            </table>
          </div>
        `);
      } catch (error) {
        console.error('Error fetching firewall details:', error);
        $('#comparison-table').html('<p>Error al cargar los firewalls. Por favor, inténtalo de nuevo.</p>');
      }
    } else {
      $('#comparison-table').html('');
    }
  }

  $('#brand1').on('change', function () {
    if ($(this).val()) {
      loadFirewalls($('#firewall1')[0], $(this).val());
    } else {
      $('#firewall1').hide();
      $('#firewall1').prev().hide();
    }
  });

  $('#brand2').on('change', function () {
    if ($(this).val()) {
      loadFirewalls($('#firewall2')[0], $(this).val());
    } else {
      $('#firewall2').hide();
      $('#firewall2').prev().hide();
    }
  });

  $('#firewall1').on('change', compareFirewalls);
  $('#firewall2').on('change', compareFirewalls);
});
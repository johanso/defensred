document.addEventListener('DOMContentLoaded', function () {
  const brand1Select = document.getElementById('brand1');
  const brand2Select = document.getElementById('brand2');
  const firewall1Select = document.getElementById('firewall1');
  const firewall2Select = document.getElementById('firewall2');
  const comparisonTable = document.getElementById('comparison-table');

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
      const firewalls = await fetchFirewallsByBrand(brandId);

      selectElement.innerHTML = '<option value="">Selecciona un firewall</option>';

      firewalls.forEach(firewall => {
        const option = document.createElement('option');
        option.value = firewall.id;
        option.text = firewall.title.rendered;
        selectElement.appendChild(option);
      });

      selectElement.style.display = 'block';
      selectElement.previousElementSibling.style.display = 'block';
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
    const firewall1Id = firewall1Select.value;
    const firewall2Id = firewall2Select.value;

    if (firewall1Id && firewall2Id) {
      try {
        const [firewall1, firewall2] = await Promise.all([
          fetchFirewallDetails(firewall1Id),
          fetchFirewallDetails(firewall2Id)
        ]);

        // Crear la tabla de comparación usando los campos de ACF
        comparisonTable.innerHTML = `

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
                    <th scope="row">Firewall throughput</td>
                    <td>${product1.acf.firewall_throughput || 'N/A'}</th>
                    <td>${product2.acf.firewall_throughput || 'N/A'}</td>
                  </tr>
                  <tr>
                    <th scope="row">Firewall IMIX</td>
                    <td>${product1.acf.firewall_imix || 'N/A'}</th>
                    <td>${product2.acf.firewall_imix || 'N/A'}</td>
                  </tr>
                  <tr>
                    <th scope="row">Firewall Latency (64 byte UDP)</td>
                    <td>${product1.acf.firewall_latency_64_byte_udp || 'N/A'}</th>
                    <td>${product2.acf.firewall_latency_64_byte_udp || 'N/A'}</td>
                  </tr>
                  <tr>
                    <th scope="row">IPS throughput</td>
                    <td>${product1.acf.ips_throughput || 'N/A'}</th>
                    <td>${product2.acf.ips_throughput || 'N/A'}</td>
                  </tr>
                  <tr>
                    <th scope="row">Threat protection throughput</td>
                    <td>${product1.acf.threat_protection_throughput || 'N/A'}</th>
                    <td>${product2.acf.threat_protection_throughput || 'N/A'}</td>
                  </tr>
                  <tr>
                    <th scope="row">NGFW</td>
                    <td>${product1.acf.ngfw || 'N/A'}</th>
                    <td>${product2.acf.ngfw || 'N/A'}</td>
                  </tr>
                  <tr>
                    <th scope="row">Concurrent connections</td>
                    <td>${product1.acf.concurrent_connections || 'N/A'}</th>
                    <td>${product2.acf.concurrent_connections || 'N/A'}</td>
                  </tr>
                  <tr>
                    <th scope="row">New connections/sec</td>
                    <td>${product1.acf.new_connectionssec || 'N/A'}</th>
                    <td>${product2.acf.new_connectionssec || 'N/A'}</td>
                  </tr>
                  <tr>
                    <th scope="row">IPsec VPN throughput</td>
                    <td>${product1.acf.ipsec_vpn_throughput || 'N/A'}</th>
                    <td>${product2.acf.ipsec_vpn_throughput || 'N/A'}</td>
                  </tr>
                  <tr>
                    <th scope="row">IPsec VPN concurrent tunnels</td>
                    <td>${product1.acf.ipsec_vpn_concurrent_tunnels || 'N/A'}</th>
                    <td>${product2.acf.ipsec_vpn_concurrent_tunnels || 'N/A'}</td>
                  </tr>
                  <tr>
                    <th scope="row">SSL VPN concurrent tunnels</td>
                    <td>${product1.acf.ssl_vpn_concurrent_tunnels || 'N/A'}</th>
                    <td>${product2.acf.ssl_vpn_concurrent_tunnels || 'N/A'}</td>
                  </tr>
                  <tr>
                    <th scope="row">Xstream SSL/TLS Inspection</td>
                    <td>${product1.acf.xstream_ssltls_inspection || 'N/A'}</th>
                    <td>${product2.acf.xstream_ssltls_inspection || 'N/A'}</td>
                  </tr>
                  <tr>
                    <th scope="row">Xstream SSL/TLS concurrent connections</td>
                    <td>${product1.acf.xstream_ssltls_concurrent_connections || 'N/A'}</th>
                    <td>${product2.acf.xstream_ssltls_concurrent_connections || 'N/A'}</td>
                  </tr>
                  <tr class="tr-separator">
                    <th colspan="3" class="th-separator">Wireless Specification</th>
                  </tr>
                  <tr>
                    <th scope="row">No. of antennas</td>
                    <td>${product1.acf.no_of_antennas || 'N/A'}</th>
                    <td>${product2.acf.no_of_antennas || 'N/A'}</td>
                  </tr>
                  <tr>
                    <th scope="row">MIMO capabilities</td>
                    <td>${product1.acf.mimo_capabilities || 'N/A'}</th>
                    <td>${product2.acf.mimo_capabilities || 'N/A'}</td>
                  </tr>
                  <tr>
                    <th scope="row">Wireless interface</td>
                    <td>${product1.acf.wireless_interface || 'N/A'}</th>
                    <td>${product2.acf.wireless_interface || 'N/A'}</td>
                  </tr>
                  <tr class="tr-separator">
                    <th colspan="3" class="th-separator">Physical Interfaces</th>
                  </tr>
                  <tr>
                    <th scope="row">Storage</td>
                    <td>${product1.acf.storage || 'N/A'}</th>
                    <td>${product2.acf.storage || 'N/A'}</td>
                  </tr>
                  <tr>
                    <th scope="row">Ethernet interfaces (fixed)</td>
                    <td>${product1.acf.ethernet_interfaces_fixed || 'N/A'}</th>
                    <td>${product2.acf.ethernet_interfaces_fixed || 'N/A'}</td>
                  </tr>
                  <tr>
                    <th scope="row">Management ports</td>
                    <td>${product1.acf.management_ports || 'N/A'}</th>
                    <td>${product2.acf.management_ports || 'N/A'}</td>
                  </tr>
                  <tr>
                    <th scope="row">Other I/O ports</td>
                    <td>${product1.acf.other_io_ports || 'N/A'}</th>
                    <td>${product2.acf.other_io_ports || 'N/A'}</td>
                  </tr>
                  <tr>
                    <th scope="row">Number of expansion slots</td>
                    <td>${product1.acf.number_of_expansion_slots || 'N/A'}</th>
                    <td>${product2.acf.number_of_expansion_slots || 'N/A'}</td>
                  </tr>
                  <tr>
                    <th scope="row">Optional add-on connectivity</td>
                    <td>${product1.acf.optional_on_connectivity || 'N/A'}</th>
                    <td>${product2.acf.optional_on_connectivity || 'N/A'}</td>
                  </tr>
                  <tr class="tr-separator">
                    <th colspan="3" class="th-separator">Physical Specifications</th>
                  </tr>
                  <tr>
                    <th scope="row">Mounting</td>
                    <td>${product1.acf.mounting || 'N/A'}</th>
                    <td>${product2.acf.mounting || 'N/A'}</td>
                  </tr>
                  <tr>
                    <th scope="row">Dimensions:<br/> Width X height X depth</td>
                    <td>${product1.acf.dimensions_width_x_height_x_depth || 'N/A'}</th>
                    <td>${product2.acf.dimensions_width_x_height_x_depth || 'N/A'}</td>
                  </tr>
                  <tr>
                    <th scope="row">Weight</td>
                    <td>${product1.acf.weight || 'N/A'}</th>
                    <td>${product2.acf.weight || 'N/A'}</td>
                  </tr>
                  <tr class="tr-separator">
                    <th colspan="3" class="th-separator">Environment</th>
                  </tr>
                  <tr>
                    <th scope="row">Power supply</td>
                    <td>${product1.acf.power_supply || 'N/A'}</th>
                    <td>${product2.acf.power_supply || 'N/A'}</td>
                  </tr>
                  <tr>
                    <th scope="row">Power consumption</td>
                    <td>${product1.acf.power_consumption || 'N/A'}</th>
                    <td>${product2.acf.power_consumption || 'N/A'}</td>
                  </tr>
                  <tr>
                    <th scope="row">Operating temperature</td>
                    <td>${product1.acf.operating_temperature || 'N/A'}</th>
                    <td>${product2.acf.operating_temperature || 'N/A'}</td>
                  </tr>
                  <tr>
                    <th scope="row">Humidity</td>
                    <td>${product1.acf.humidity || 'N/A'}</th>
                    <td>${product2.acf.humidity || 'N/A'}</td>
                  </tr>
                  <tr class="tr-separator">
                    <th colspan="3" class="th-separator">Product Certifications</th>
                  </tr>
                  <tr>
                    <th scope="row">Certifications</td>
                    <td>${product1.acf.certifications || 'N/A'}</th>
                    <td>${product2.acf.certifications || 'N/A'}</td>
                  </tr>
					      <tr>
                </tbody>
              </table>
            </div>
              `;
      } catch (error) {
        console.error('Error fetching firewall details:', error);
        comparisonTable.innerHTML = '<p>Error al cargar los firewalls. Por favor, inténtalo de nuevo.</p>';
      }
    } else {
      comparisonTable.innerHTML = '';
    }
  }

  // Event Listeners para cargar firewalls según la marca seleccionada
  brand1Select.addEventListener('change', function () {
    if (brand1Select.value) {
      loadFirewalls(firewall1Select, brand1Select.value);
    } else {
      firewall1Select.style.display = 'none';
      firewall1Select.previousElementSibling.style.display = 'none';
    }
  });

  brand2Select.addEventListener('change', function () {
    if (brand2Select.value) {
      loadFirewalls(firewall2Select, brand2Select.value);
    } else {
      firewall2Select.style.display = 'none';
      firewall2Select.previousElementSibling.style.display = 'none';
    }
  });

  // Event Listeners para comparar los firewalls seleccionados
  firewall1Select.addEventListener('change', compareFirewalls);
  firewall2Select.addEventListener('change', compareFirewalls);
});

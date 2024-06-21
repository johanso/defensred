document.addEventListener('DOMContentLoaded', function() {
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

              console.log('Firewall 1:', firewall1);
              console.log('Firewall 2:', firewall2);

              // Crear la tabla de comparación usando los campos de ACF
              comparisonTable.innerHTML = `
                  <div class="table-responsive">
                      <table class="table table-striped">
                          <thead class="border-light">
                              <tr>
                                  <th scope="col"></th>
                                  <th scope="col">${firewall1.title.rendered}</th>
                                  <th scope="col">${firewall2.title.rendered}</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <th scope="row">Model</th>
                                  <td>${firewall1.acf.modelo || 'N/A'}</td>
                                  <td>${firewall2.acf.modelo || 'N/A'}</td>
                              </tr>
                              <!-- Añadir más filas de comparación según los campos de ACF -->
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
  brand1Select.addEventListener('change', function() {
      if (brand1Select.value) {
          loadFirewalls(firewall1Select, brand1Select.value);
      } else {
          firewall1Select.style.display = 'none';
          firewall1Select.previousElementSibling.style.display = 'none';
      }
  });

  brand2Select.addEventListener('change', function() {
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

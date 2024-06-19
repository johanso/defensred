document.addEventListener('DOMContentLoaded', function() {
  const product1Select = document.getElementById('product1');
  const product2Select = document.getElementById('product2');
  const comparisonTable = document.getElementById('comparison-table');

  async function fetchProductDetails(productId) {
    const response = await fetch(`/wp-json/wp/v2/producto/${productId}`);
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return await response.json();
  }

  async function compareProducts() {
    const product1Id = product1Select.value;
    const product2Id = product2Select.value;

    if (product1Id && product2Id) {
        try {
          const [product1, product2] = await Promise.all([
            fetchProductDetails(product1Id),
            fetchProductDetails(product2Id)
          ]);

          // Crear la tabla de comparación usando los campos de ACF
          comparisonTable.innerHTML = `
            <div class="table-responsive">
              <table class="table table-striped">
                <thead class="border-light">
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">${product1.title.rendered}</th>
                    <th scope="col">${product2.title.rendered}</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Precio</th>
                    <td>${product1.acf.marca}</td>
                    <td>${product2.acf.marca}</td>
                  </tr>
                  <tr>
                    <th scope="row">Descripción</td>
                    <td>${product1.acf.caracteristica_1}</th>
                    <td>${product2.acf.caracteristica_2}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          `;
        } catch (error) {
          console.error('Error fetching product details:', error);
          comparisonTable.innerHTML = '<p>Error al cargar los productos. Por favor, inténtalo de nuevo.</p>';
        }
    } else {
      comparisonTable.innerHTML = '';
    }
  }

  product1Select.addEventListener('change', compareProducts);
  product2Select.addEventListener('change', compareProducts);
});

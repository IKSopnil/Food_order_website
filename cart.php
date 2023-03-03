
<body>
<style>
    body {
  margin: 0;
  font-family: Arial, sans-serif;
  font-size: 16px;
}

header {
  background-color: #333;
  color: #fff;
  padding: 20px;
  text-align: center;
}

h1 {
  margin: 0;
}

main {
  display: flex;
  justify-content: space-between;
  max-width: 1000px;
  margin: 0 auto;
  padding: 20px;
}

.cart-items {
  flex: 1;
}

.cart-items h2 {
  margin-top: 0;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}

th {
  background-color: #333;
  color: #fff;
  text-align: left;
  padding: 10px;
}

td {
  padding: 10px;
  border-bottom: 1px solid #ccc;
}

.cart-summary {
  flex: 0 0 300px;
  background-color: #f9f9f9;
  padding: 20px;
  margin-left: 20px;
}

.cart-summary h2 {
  margin-top: 0;
}

ul {
  list-style: none;
  margin: 0;
  padding: 0;
}


</style>
   
      <section class="cart-items">
        <h2>Cart Items</h2>
        <table>
          <thead>
            <tr>
              <th>Item</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Burger</td>
              <td>2</td>
              <td>$5</td>
              <td>$10</td>
            </tr>
            <tr>
              <td>Pizza</td>
              <td>1</td>
              <td>$12</td>
              <td>$12</td>
            </tr>
          </tbody>
        </table>
      </section>
      <section class="cart-summary">
        <h2>Cart Summary</h2>
        <ul>
          <li>
            <span>Subtotal:</span>
            <span>$22</span>
          </li>
          <li>
            <span>Tax:</span>
            <span>$2</span>
          </li>
          <li>
            <span>Total:</span>
            <span>$24</span>
          </li>
        </ul>
        <a href="checkout.html">Checkout</a>
      </section>
 
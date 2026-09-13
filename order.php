<!DOCTYPE html>
<html>
        <link rel="stylesheet" type="text/css" href="style.css">
    
    <head>
        <title>Izwana Legacy</title>
        
    </head>

    <body>

    <!-- Navigation Bar -->
    <header>
        <div class="logo">Izwana Legacy</div>
            <nav>
                <a href="index.php">Home</a>
                <a href="menu.php">Menu</a>
                <a href="order.php">Order</a>
                <a href="contact.php">Contact</a>
                <a href="login.php">Login/Register</a>
            </nav>
    </header>

        <main class="order-container">
        <h2>Place Your Order</h2>

        <form action="process_order.php" method="POST" class="order-form-layout">
        
        <!-- Customer Information & Delivery Options -->
        <section class="form-section">
            <h3>Customer Details</h3>
            
            <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required placeholder="Enter your name">
            </div>

            <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" required placeholder="e.g. 012-3456789">
            </div>

            <div class="form-group">
            <label>Fulfillment Option</label>
            <div class="radio-group">
                <label>
                <input type="radio" name="fulfillment" value="pickup" checked onclick="toggleAddress(false)"> Pick Up
                </label>
                <label>
                <input type="radio" name="fulfillment" value="delivery" onclick="toggleAddress(true)"> Delivery
                </label>
            </div>
            </div>

            <!-- Dynamic Delivery Address -->
            <div class="form-group hidden" id="address-group">
            <label for="address">Delivery Address</label>
            <textarea id="address" name="address" rows="3" placeholder="Enter full delivery address"></textarea>
            </div>

            <!-- Preferred Time -->
            <div class="form-group">
            <label>Preferred Time</label>
            <div class="radio-group">
                <label>
                <input type="radio" name="time_option" value="now" checked onclick="toggleSchedule(false)"> Now
                </label>
                <label>
                <input type="radio" name="time_option" value="schedule" onclick="toggleSchedule(true)"> Schedule Date & Time
                </label>
            </div>
            </div>

            <!-- Dynamic Scheduled Date/Time -->
            <div class="form-group hidden" id="schedule-group">
            <label for="scheduled_datetime">Select Date & Time</label>
            <input type="datetime-local" id="scheduled_datetime" name="scheduled_datetime">
            </div>
        </section>

        <!-- Order Summary -->
        <section class="summary-section">
            <h3>Order Summary</h3>
            
            <table class="order-table">
            <thead>
                <tr>
                <th>Product</th>
                <th>Qty</th>
                <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>Product</td>
                <td>Quantity</td>
                <td>RM0.00</td>
                </tr>
            </tbody>
            </table>

            <hr class="divider">

            <div class="total-row">
            <span>Total Price</span>
            <span class="total-amount">RM0.00</span>
            </div>

            <div class="btn-group">
                <button class="btn-action"><a href="menu.php">Add Order</a></button>
                <button type="submit" class="submit-btn">Confirm Order</button>
            </div>
        </section>

        </form>
    </main>

    <script>
        function toggleAddress(show) {
        const addressGroup = document.getElementById('address-group');
        const addressInput = document.getElementById('address');
        if (show) {
            addressGroup.classList.remove('hidden');
            addressInput.required = true;
        } else {
            addressGroup.classList.add('hidden');
            addressInput.required = false;
        }
        }

        function toggleSchedule(show) {
        const scheduleGroup = document.getElementById('schedule-group');
        const scheduleInput = document.getElementById('scheduled_datetime');
        if (show) {
            scheduleGroup.classList.remove('hidden');
            scheduleInput.required = true;
        } else {
            scheduleGroup.classList.add('hidden');
            scheduleInput.required = false;
        }
        }
    </script>

    </body>
</html>
<main>
    <h2>Order a Pizza from Natasha</h2>
    <form action="index.php" method="POST">
        <div>
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName" required maxlength="100">
        </div>

        <div>
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required
                   pattern="[0-9\-\+\(\)\s]+" maxlength="20">
        </div>

        <div>
            <fieldset>
                <legend>Choose a pizza type:</legend>
                <input type="radio" id="pepperoni" name="pizzaType" value="Pepperoni" required>
                <label for="pepperoni">Pepperoni</label>

                <input type="radio" id="veggie" name="pizzaType" value="Veggie">
                <label for="veggie">Veggie</label>

                <input type="radio" id="meat-lovers" name="pizzaType" value="Meat-Lovers">
                <label for="meat-lovers">Meat-Lovers</label>

                <input type="radio" id="cheese" name="pizzaType" value="Cheese">
                <label for="cheese">Cheese</label>

                <input type="radio" id="deep-dish" name="pizzaType" value="Deep-Dish">
                <label for="deep-dish">Deep-Dish</label>

                <input type="radio" id="hawaiian" name="pizzaType" value="Hawaiian">
                <label for="hawaiian">Hawaiian</label>
            </fieldset>
        </div>

        <div>
            <fieldset>
                <legend>Choose a pizza size:</legend>
                <input type="radio" id="small" name="pizzaSize" value="Small" required>
                <label for="small">Small</label>

                <input type="radio" id="medium" name="pizzaSize" value="Medium">
                <label for="medium">Medium</label>

                <input type="radio" id="large" name="pizzaSize" value="Large">
                <label for="large">Large</label>

                <input type="radio" id="extra-large" name="pizzaSize" value="Extra-Large">
                <label for="extra-large">Extra-Large</label>
            </fieldset>
        </div>

        <div>
            <label for="amount-pizza">Number of Pizzas:</label>
            <input type="number" id="amount-pizza" name="amount-pizza" min="1" max="10" required>
        </div>

        <div>
            <label for="details">Special Requests:</label>
            <textarea id="details" name="details" rows="4" maxlength="500"></textarea>
        </div>
         
        <button type="submit">Order Now</button>
    </form>
</main>
function calculateTotal() {
    var meatPrice = parseFloat(document.getElementById('meat').options[document.getElementById('meat').selectedIndex].getAttribute('data-price'));
    var crustPrice = parseFloat(document.getElementById('crust').options[document.getElementById('crust').selectedIndex].getAttribute('data-price'));
    var toppingPrice = parseFloat(document.getElementById('topping').options[document.getElementById('topping').selectedIndex].getAttribute('data-price'));
    var cheesePrice = parseFloat(document.getElementById('cheese').options[document.getElementById('cheese').selectedIndex].getAttribute('data-price'));

    var totalCost = meatPrice + crustPrice + toppingPrice + cheesePrice;

    document.getElementById('total').innerText = totalCost.toFixed(2);
}

function purchase() {
    var totalCost = parseFloat(document.getElementById('total').innerText);
    var cashInput = parseFloat(prompt("Enter the cash amount:"));

    if (!isNaN(cashInput)) {
        var change = cashInput - totalCost;

        document.getElementById('change').innerText = change.toFixed(2);
        document.getElementById('cash').innerText = cashInput.toFixed(2);
    } else {
        alert("Invalid input. Please enter a valid number.");
    }
}
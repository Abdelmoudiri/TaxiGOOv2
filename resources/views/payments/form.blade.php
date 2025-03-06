<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stripe Payment</title>
    <script src="https://js.stripe.com/v3/"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .payment-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            margin-bottom: 8px;
            display: block;
            color: #333;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 16px;
            color: #333;
            background-color: #f9f9f9;
        }

        .form-group input:focus {
            border-color: #4CAF50;
            outline: none;
            background-color: #fff;
        }

        #card-element {
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
            background-color: #fff;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: #fff;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        .message {
            margin-top: 20px;
            text-align: center;
            font-size: 16px;
        }

        .message.success {
            color: green;
        }

        .message.error {
            color: red;
        }
    </style>
</head>

<body>

    <div class="payment-container">
        <h1>Stripe Payment</h1>
        <form action="{{ route('payment.handle') }}" method="POST" id="payment-form">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="amount">Amount ($)</label>
                <input type="number" name="amount" id="amount" required>
            </div>

            <div class="form-group">
                <label for="card-element">Credit or Debit Card</label>
                <div id="card-element"></div>
            </div>

            <button type="submit">Pay</button>
        </form>

        <!-- Success/Error message -->
        <div class="message" id="message"></div>
    </div>

    <script>
        // Initialize Stripe and Elements
        var stripe = Stripe('{{ config('services.stripe.key') }}');
        var elements = stripe.elements();

        var card = elements.create('card');
        card.mount('#card-element');

        // Handle form submission
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    // Show error message
                    document.getElementById('message').textContent = result.error.message;
                    document.getElementById('message').classList.add('error');
                    document.getElementById('message').classList.remove('success');
                } else {
                    // Add the token to the form and submit it
                    var hiddenTokenInput = document.createElement('input');
                    hiddenTokenInput.type = 'hidden';
                    hiddenTokenInput.name = 'stripeToken';
                    hiddenTokenInput.value = result.token.id;
                    form.appendChild(hiddenTokenInput);

                    form.submit();
                }
            });
        });
    </script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
    @if ($message = Session::get('success'))
        <div class="w3-panel w3-green w3-display-container">
            <span onclick="this.parentElement.style.display='none'"
    				class="w3-button w3-green w3-large w3-display-topright">&times;</span>
            <p>{!! $message !!}</p>
        </div>
        <?php Session::forget('success');?>
        @endif

        @if ($message = Session::get('error'))
        <div class="w3-panel w3-red w3-display-container">
            <span onclick="this.parentElement.style.display='none'"
    				class="w3-button w3-red w3-large w3-display-topright">&times;</span>
            <p>{!! $message !!}</p>
        </div>
        <?php Session::forget('error');?>
        @endif
        <form method="POST" id="payment-form" action="{{route('paypal')}}">
            @csrf
            <h2 class="w3-text-blue">Payment Form</h2>
            <p>Demo PayPal form - Integrating paypal in laravel</p>
            <p>
                <label class="w3-text-blue"><b>Enter Amount</b></label>
                <input class="w3-input w3-border" name="amount" type="text"></p>
            <button type="submit" class="w3-btn w3-blue">Pay with PayPal</button></p>
        </form>
    </div>
</body>

</html>
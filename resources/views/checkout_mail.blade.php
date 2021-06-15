<html>
    <body>

        <h1>Order summary</h1>
        <strong>Dear {{ $user->surname }} {{ $user->name }},</strong>
        <p>Your order looks following: </p>
        <p>No.           |Product Name                                               | Size                      |Price                 | Quantity            |Total Price </p>
        <?php $i=1; $sum=0?>
        @foreach($cart as $id => $details)
        <p>|{{$i}}      | {{ $details['name'] }} - {{ $details['size_of_product'] }} | {{ $details['quantity']}} | ${{$details['prize'] }} | ${{ $details['quantity'] * $details['prize'] }}</p>
        <p>Sub total: ${{$sum += $details['quantity'] * $details['prize']}}</p>
        <?php $i++?>
        @endforeach
        <p>Total: ${{ number_format((float) 1.03 * $sum, 2, '.', '') }} </p>
        <p>Regards,</p>
        <p>Team Clothdiva</p>
    </body>
</html>
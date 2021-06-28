<!--
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Aloha!</title>
</head>
<body>
	
</body>
</html>-->
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<title>Invoice</title>

	
		<style>
			body {
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				text-align: center;
				color: #777;
			}

			body h1 {
				font-weight: 300;
				margin-bottom: 0px;
				padding-bottom: 0px;
				color: #000;
			}

			body h3 {
				font-weight: 300;
				margin-top: 10px;
				margin-bottom: 20px;
				font-style: italic;
				color: #555;
			}

			body a {
				color: #06f;
			}

			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
				border-collapse: collapse;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 28px;
				line-height: 28px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}
		</style>
	</head>

	<body>

		<div class="invoice-box">
			<table>
				<tr class="top">
					<td colspan="12">
						<table>
							<tr>
								<td class="title">
								<img src="<?php echo $base64 ?>" width="200px" height="50px">
								</td>

								<td>
									Invoice #{{$invoice_id}}<br />
									Created: {{$today_date}}<br />
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="12">
						<table>
							<tr>
								<td>
									Clothdiva<br />
									Kwiatkowskiego 45, Rzeszów<br />
									+48 532-711-852 | +48 675-668-338
									clothdivaoffice@gmail.com
								</td>

								<td>
									{{$data['fname']}} {{$data['lname']}}<br />
									{{$data['street']}} {{$data['apartment_number']}}<br />
									{{$data['city']}} {{$data['postcode']}} <br />
									{{$data['country']}} 
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="heading">
					<td colspan="12">Payment Method</td>
				</tr>

				<tr class="details">
					<td colspan="12">{{$payment_method}}</td>
				</tr>

				<tr class="heading">
                    <td>No.</td>
                    <td>Product Name</td>
                    <td>Size </tdh>
                    <td>Quantity </td>
                    <td>Price</td>
                    <td colspan="12">Total Price</td>
				</tr>

                <?php $i=1; $total=0;?>
                    @foreach($cart as $id => $details)
				<?php $total += $details['prize'] * $details['quantity'] ?>
                <tr class="item">
                        <td>{{ $i }}</td>
                        <td> {{ $details['name'] }}</td>
                        <td>{{ $details['size_of_product'] }}</td>
                        <td>{{ $details['quantity']}}</td>
                        <td>${{$details['prize'] }}</td>
                        <td colspan="12">${{ $details['quantity'] * $details['prize'] }}</td>
                </tr>
                <?php $i++?>
                @endforeach
				<tr>
					<td colspan="12" style="text-align: right; font-weight: bold">Subotal: ${{$total}}</td>
				</tr>
				<tr>
					<td colspan="12" style="text-align: right; font-weight: bold">Total: ${{ number_format((float) 1.03 * $total, 2, '.', '') }}</td>
				</tr>

			</table>
		</div>
	</body>
</html>
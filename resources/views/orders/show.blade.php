<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Order #{{ $order->number }}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <style>
        html {
            font-size: 14px;
        }

        @media (min-width: 768px) {
            html {
                font-size: 16px;
            }
        }

        .container {
            max-width: 960px;
        }

        .pricing-header {
            max-width: 700px;
        }

        .card-deck .card {
            min-width: 220px;
        }

        .border-top {
            border-top: 1px solid #e5e5e5;
        }

        .border-bottom {
            border-bottom: 1px solid #e5e5e5;
        }

        .box-shadow {
            box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05);
        }

    </style>
</head>

<body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
        <h5 class="my-0 mr-md-auto font-weight-normal">  <img src="img/logo.png" alt=""><a href="{{ route('orders.index') }}" ></a> Metabharata</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <form action="{{ route('actionlogout') }}" method="post">
                @csrf
                <button type="submit" class="dropdown-item d-flex align-items-center" style="border: none; background: none; cursor: pointer;">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Sign Out</span>
                </button>
            </form>
        </nav>
    </div> 

    <div class="container pb-5 pt-5">
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="card shadow">
                    <div class="card-header">
                        <h5>Data Order</h5>
                    </div>
                    <div class="table-responsive">
                        <table id="tabels" class="table table-hover table-condensed">
                            <tr>
                                <td>ID</td>
                                <td><b>#{{ $order->number }}</b></td>
                            </tr>
                            <tr>
                                <td>Total Harga</td>
                                <td><b>Rp {{ number_format($order->total_price, 2, ',', '.') }}</b></td>
                            </tr>
                            <tr>
                                <td>Status Pembayaran</td>
                                <td><b>
                                        @if ($order->payment_status == 1)
                                            Menunggu Pembayaran
                                        @elseif ($order->payment_status == 2)
                                            Sudah Dibayar
                                        @else
                                            Kadaluarsa
                                        @endif
                                    </b></td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td><b>{{ $order->created_at->format('d M Y H:i') }}</b></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card shadow">
                    <div class="card-header">
                        <h5>Pembayaran</h5>
                    </div>
                    <div class="card-body">
                        @if ($order->payment_status == 1)
                            <button class="btn btn-primary" id="pay-button">Bayar Sekarang</button>
                        @else
                            Pembayaran berhasil
                        @endif
                    </div>
                            <div class="card-body">
                            <a href="{{route('orders.index') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{config('midtrans.snap_url')}}" data-client-key="{{ config('midtrans.client_key') }}">
    </script>
    <script>
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const payButton = document.querySelector('#pay-button');

        payButton.addEventListener('click', function(e) {
            e.preventDefault();
    
            snap.pay('{{ $snapToken }}', {
                onSuccess: function(result) {
                    // Panggil fungsi untuk memperbarui status pembayaran
                    if (result.status_code == "200") {
                        const userId = {{ $order->user_id }};
                        const orderName = '{{ $order->order_name }}';
                        const number = '{{ $order->number }}';
                        fetch(`/api/update-payment-status/${number}/${userId}/${orderName}`, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': csrfToken
                            },
                        })
                        .then(response => response.json())
                        .then(data => {
                            console.log('Response from server:', data);
                            if (data.success) {
                                console.log('Payment status updated successfully.');
                                window.location.href = "{{ route('orders.index')}}";
                            } else {
                                console.error('Failed to update payment status.');
                            }
                        })
                        .catch(error => {
                            console.error('An error occurred:', error);
                        });
                    }
                    console.log(result);
                },
                onPending: function(result) {
                    console.log(result);
                    console.log('Pending');
                },
                onError: function(result) {
                    console.log(result);
                }
            }); 
        });
        

        function updatePaymentStatusM(order_id, user_id, names_prd) {
            console.log(order_id, user_id, names_prd);
            const baseurl = 'http://backend-metabharata.test/api'; 
            const xhr = new XMLHttpRequest();
            xhr.open('POST', `${baseurl}/update-payment-status`, true);
            xhr.setRequestHeader('Content-Type', 'application/json');
            xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);
            const data = JSON.stringify({
                orderId: order_id,
                userId: user_id,
                names: names_prd
            });
            console.log(data);

            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        console.log('Payment status updated successfully.');
                        window.location.href = "{{ route('orders.index')}}";
                    } else {
                        console.error('Failed to update payment status.');
                    }
                }
            };

            xhr.send(data);

        }
    </script>
    

</body>

</html>
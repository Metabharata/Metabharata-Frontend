<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Order Saya</title>

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
            <div class="col-12">
                <div class="card shadow">
                    <div class="table-responsive">
                        <table class="table table-hover table-condensed">
                            <thead class="thead-light">
                                <th scope="col">Kode</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Total Harga</th>
                                <th scope="col">Status Pembayaran</th>
                                <th scope="col"></th>
                            </thead>
                            <tbody id="tabel-orders">
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>#{{ $order->number }}</td>
                                        <td>{{ $order->order_name }}</td>
                                        <td>{{ number_format($order->total_price, 2, ',', '.') }}</td>
                                        <td>
                                            @if ($order->payment_status == 1)
                                                Menunggu Pembayaran
                                            @elseif ($order->payment_status == 2)
                                                Sudah Dibayar
                                            @else
                                                Kadaluarsa
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('orders.show', $order->id) }}" class="btn btn-success">
                                                Lihat
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
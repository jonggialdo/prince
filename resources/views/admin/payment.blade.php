@extends('admin.dashboard')

@section('content')
    <!-- content header -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Transaction</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Payment</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="row">
      <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Payment</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tbody>
                  <tr>
                    <th>No</th>
                    <th>Id_Order</th>
                    <th>Buyer</th>
                    <th>Time Order</th>
                    <th>Status payment</th>
                    <th>Total</th>
                  </tr>

                  @foreach($trans as $tr)
                  <tr>
                   @php($c = \App\Cart::where('transaction_id','=',$tr->transaction_id)->get())
                   @php($total = 0)
                   @foreach($c as $cr)
                    @php($total = $total + $cr->subtotal)
                   @endforeach
                   @php($total = $total+10000)
                   @php($n = \App\User::where('id','=',$tr->id_user)->first())
                    <td>{{ $number+=1}}</td>
                    <td>{{ $tr->transaction_id }}</td>
                    <td>{{ $n->name }}</td>
                    <td>{{ $tr->date_insert }} </td>
                    <td>{{ $tr->transaction_status }}</td>
                    <td>Rp. {{$total }}</td>
                    <td>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit{{$tr->transaction_id}}">
                        <i class="fa fa-eye nav-icon"></i>
                       </button>
                          <div class="modal fade" id="modal-edit{{$tr->transaction_id}}">
                            <div class="modal-dialog">
                                <div class="modal-content"  style="width: 800px;">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Detail</h4>
                                    </div>
                                    <div class="modal-body">
                                    <form method="POST" role="form" action="#">
                                        {{ csrf_field() }}
                                        {{ method_field('PATCH')}}
                                    </div>
                                    <!-- Main content -->
          <div class="invoice p-3 mb-3">
          <!-- title row -->
          <div class="row">
            <div class="col-12">
            <h4>
              <i class="fa fa-info"></i> Resi Pembelian
              <small class="float-right">Date: 9/05/2018</small>
            </h4>
            </div>
            <!-- /.col -->
          </div>
          <!-- info row -->
          <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
            From :
            <address>
              <strong>Direktorat Kemahasiswaan IPB Dramaga</strong><br>
              Jl. Dramaga Raya harus bahagia<br>
              Bogor, Jawa Barat 30128<br>
              Phone: (0321) 359590<br>
              Email: ditmawa@apps.ipb.ac.id
            </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
            To :
            <address>
              <br>{{ \App\User::where('id','=',\Auth::user()->id)->first()->address }} <br>

            </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
            <b>Payment Due:</b> {{ \Carbon\Carbon::now() }}<br>
            <b>Transaction Number :</b> {{ $tr->transaction_id }}<br>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <!-- Table row -->
          <div class="row">
            <div class="col-12 table-responsive">
            <table class="table table-striped">
              <thead>
              <tr>
              <th>No.</th>
              <th>Qty</th>
              <th>Product</th>
              <th>Serial #</th>
              <th>Description</th>
              <th>Subtotal</th>
              </tr>
              </thead>
              <tbody>
              @php($carts = \App\Cart::where('transaction_id' ,'=',$tr->transaction_id)->get())
              @foreach($carts as $key => $cart)
                <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $cart->qnt }}</td>
                <td>{{ $cart->product['product_name'] }}</td>
                <td>455-981-221</td>
                <td>{{ $cart->product['description']}}</td>
                <td>Rp {{ $cart->subtotal}}</td>
                </tr>
              @endforeach
              </tbody>
            </table>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <div class="row">
            <!-- accepted payments column -->
            <div class="col-6">
            <p class="lead">Payment Methods:</p>
            <img src="{{asset('assets/admin/dist/img/credit/visa.png')}}" alt="Visa">
            <img src="{{asset('assets/admin/dist/img/credit/mastercard.png')}}" alt="Mastercard">
            <img src="{{asset('assets/admin/dist/img/credit/american-express.png')}}" alt="American Express">
            <img src="{{asset('assets/admin/dist/img/credit/paypal2.png')}}" alt="Paypal">

            <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
              Kamu bisa melakukan transaksi dengan metode diatas. Jangan ragu ya, Kami situs terpercaya.
              Jika ragu, hubungi IPB segera dan tanya aja PRINCE IPB abal abal ga? hehe. Silahkan bayar
            </p>
            </div>
            <!-- /.col -->
            <div class="col-6">
            <p class="lead">Amount Due 9/05/2018</p>

            <div class="table-responsive">
              <table class="table">
              <tr>
                <th>Shipping:</th>
                <td>Rp 10000</td>
              </tr>
              <tr>
                <th>Total:</th>
                <td>RP {{ $total}}</td>
              </tr>
              </table>
            </div>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
          <!-- /.invoice -->
                                    <div class="modal-footer">
                                <div class="pull-right">
                                  <a href="{{ route('updateStatus', ['id' => $tr->transaction_id]) }}">
                                    <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;"><i class="fa fa-reply-all"></i>
                                      Lunas
                                        </button>
                                        </a>

                                </div>
                                    </div>

                                    </form>
                                  </div>
                                  <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                          </div>

                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              </div>
              <!-- /.card-body -->
              <!-- ./card-footer -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
              </div>
              <!-- ./ card-footer -->
            </div>
            <!-- /.card -->
          </div>
      </div>
      <!-- /.row -->
    </section>
@endsection

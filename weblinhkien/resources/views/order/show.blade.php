@extends('layout.admin.main')
@section('content')

<div class="container jumbotron border border-success">
  @if(Session::has('message'))
  <script type="text/javascript">
     swal({
         title:'OK!',
         text:"{{Session::get('message')}}",
         timer:5000,
         icon: "success"
     }).then((value) => {
       //location.reload();
     }).catch(swal.noop);
 </script>
 @endif
    <h2>Order detail</h2>
    <div class="row">
        <div class="col-sm-12">
            <div class="container"   style="">
                <h4></h4>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th colspan="2" class="bg-success text-white">Thông tin khách hàng</th>
                        <th class=""></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><b>Customer information</b></td>
                        <td>{{ $customer->name }}</td>
                    </tr>
                    <tr>
                        <td><b>Date purchased</b></td>
                        <td>{{ $customer->created_at }}</td>
                    </tr>
                    <tr>
                        <td><b>PhoneNumber</b></td>
                        <td>{{ $customer->phone_number }}</td>
                    </tr>
                    <tr>
                        <td><b>Address</b></td>
                        <td>{{ $customer->address }}</td>
                    </tr>
                    <tr>
                        <td><b>Email</b></td>
                        <td>{{ $customer->email }}</td>
                    </tr>
                    <tr>
                        <td><b>Note</b></td>
                        <td>{{ $customer->bill_note }}</td>
                    </tr>
                    <tr>
                        <td><b>Payment type</b></td>
                        <td>{{ $customer->bill_payment }}</td>
                    </tr>
                    @if ($customer->bill_codevnpay != null)
                    <tr>
                        <td><b>VNPAY code </b></td>
                        <td>{{ $customer->bill_codevnpay }}</td>
                    </tr>
                    @endif
                    </tbody>
                </table>
            </div>

            <table class="table table-hover dataTable" >
                <thead>
                <tr role="row" class="bg-success text-white">
                    <th>NO</th>
                    <th>Product name</th>
                    <th>Amount</th>
                    <th>Price</th>
                </tr>
                </thead>
                <tbody>
                @foreach($bills as $key => $bill)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $bill->product_name }}</td>
                        <td>{{ $bill->quantily }}</td>
                        <td>{{ number_format($bill->price) }} VNĐ</td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="3"><b>Total price</b></td>
                    <td colspan="1"><b class="text-red">{{ number_format($customer->bill_total) }} VNĐ</b></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
           

    <div class="col-md-12">
        <form action="{{  route('bill.update',$customer->bill_id) }}" method="POST">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
            <div class="col-md-8"></div>
            <div class="col-md-4">
                <div class="form-inline">
                    <label>Order status: </label>
                    <select name="status" class="form-control input-inline" style="width: 200px">
                        <option value="Chưa giao">Pending</option>
                        <option value="Đang Giao">On-going</option>
                        <option value="Đã giao">Shipped</option>
                    </select>

                    <input type="submit" value="Confirm" class="btn btn-primary">
                </div>
            </div>
            </form>
        </div>
 
   

  </div>
    
@endsection
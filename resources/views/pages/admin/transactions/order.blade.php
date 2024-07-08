@extends('layouts.admin')

@section('content')
<div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Transaction Table</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">trans_id</th>
                                        <th class="text-center text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">order_id</th>
                                        <th class="text-center text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">amount</th>
                                        <th class="text-center text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">status</th>
                                        <th class="text-center text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">transaction_id</th>
                                        <th class="text-center text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">fraud_status</th>
                                        <th class="text-center text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">created_at</th>
                                        <th class="text-center text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">updated_at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transactions as $transaction)
                                        <tr>
                                            <td class="text-center">{{ $transaction->id }}</td>
                                            <td class="text-center">{{ $transaction->order_id }}</td>
                                            <td class="text-center">{{ $transaction->amount }}</td>
                                            <td class="text-center">{{ $transaction->status }}</td>
                                            <td class="text-center">{{ $transaction->transaction_id }}</td>
                                            <td class="text-center">{{ $transaction->fraud_status }}</td>
                                            <td class="text-center">{{ $transaction->created_at }}</td>
                                            <td class="text-center">{{ $transaction->updated_at }}</td>
                                            <td class="align-middle">
                                            <a href="{{ route('delete-transactions', $transaction->id) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit event">
                                            DELETE
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
    </div>
    <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start mb-7">
                    © <script>document.write(new Date().getFullYear())</script>, K-EVENTS   
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
@endsection
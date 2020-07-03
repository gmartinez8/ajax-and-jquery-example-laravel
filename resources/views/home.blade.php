@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>
                        {{ $products->total() }} Products | Page {{ $products->currentPage() }} of {{ $products->lastPage() }}
                    </p>

                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th width="20px">ID</th>
                                <th>Product name</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $item)
                            <tr>
                                <td width="20px">{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td width="20px">&nbsp;</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $products->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

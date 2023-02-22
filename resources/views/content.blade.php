@extends('layouts.master')


@section('sidebar')
  @include('layouts.sidebar')
@endsection

@section('content')
<h1>Store  Menu</h1>
{{-- <h1>Store {{$name}} Menu</h1> --}}
  <div class="sort-container">
    <div class="filter">
      <button class="btn-filter">Filter</button>
    </div>
    <div class="sort">
      <form action="{{route('content', ['id' => $id ])}}" method="get">
        <label for="sort">Sort by:</label>
      <select id="sort" name = "sort">
        <option value="name">Name</option>
        <option value="price">Price</option>
      </select>
      <input type="submit" value="Sort" style="padding:9px; background-color:#e2e2e2">
      </form>
    </div>
  </div>

    @php
        if(isset($product[0])){
          @endphp
          <div class="card-row">
            @php
          foreach ($product as $item) {
            @endphp
            <div class="product-card">  
            <div class="product-info">
              <p>MT-0{{$item->id}}</p>
    <h2 >{{$item->name}}</h2>
    <hr>
    <h5 >Toppings: </h5>
    <p>{{$item->toppings}}</p>
    <h4 style="text-align: right">${{$item->price}}</h4>
    
  </div>
</div>
          @php
          }
          @endphp

          </div>
          @php
        } else {
          echo "<h3 style=\"text-align: left; margin-top: 45px;margin-left:45px; color: rgb(30, 39, 102)\"> Khong co san pham ! </h3>";
        }
    @endphp

@endsection




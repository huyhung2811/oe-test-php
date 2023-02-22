@extends('layouts.master')


@section('sidebar')
  @include('layouts.sidebar')
@endsection

@section('content')
<h1>Store {{$id}} Menu</h1>
  <div class="sort-container">
    <div class="filter">
      <button class="btn-filter">Filter</button>
    </div>
    <div class="sort">
      <label for="sort">Sort by:</label>
      <select id="sort">
        <option value="name">Name</option>
        <option value="price">Price</option>
      </select>
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
    <h2 style="color: #1e2665;">{{$item->name}}</h2>
    <hr>
    <h5 style="color: #1e2665">Toppings: </h5>
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
          echo "<h3> Khong co san pham ! </h3>";
        }
    @endphp


<style>
  .product-card {
    width: 200px;
    border: 1px solid #ccc;
    padding: 10px;
    margin: 30px;
    display: flex;
    margin-left: 40px;
  }
  
  .product-info {
    width: 100%;
    text-align: center;
  }

  .product-info h2 {
    font-size: 18px;
    margin-bottom: 10px;
  }
  
  .product-info p {
    font-size: 14px;
    margin-bottom: 10px;
  }
  
  .product-info button {
    background-color: #1e2665;
    color: #fff;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
  }

  .card-row {
  display: flex;
  flex-wrap: wrap;
  /* justify-content:space-between; */
  
}
  </style>
@endsection




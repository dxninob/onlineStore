@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('/storage/'.$viewData['computer']->getImage()) }}" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">
          {{ $viewData["computer"]->getName() }} (${{ $viewData["computer"]->getPrice() }})
        </h5>
        <p class="card-text">CPU: {{ $viewData["computer"]->getCpu() }}</p>
        <p class="card-text">RAM: {{ $viewData["computer"]->getRam() }} GB</p>
        <p class="card-text">GPU: {{ $viewData["computer"]->getGpu() }}</p>
        <p class="card-text">Storage: {{ $viewData["computer"]->getStorage() }} GB</p>

        <p>Categorias:</p>
        @foreach($viewData["computer"]->getItemsComputerCategory() as $category)
        <p>- {{ $category->getName() }}</p>
        @endforeach

        <p class="card-text">
        <form method="POST" action="{{ route('order.add', ['id'=> $viewData['computer']->getId()]) }}">
          <div class="row">
            @csrf
            <div class="col-auto">
              <div class="input-group col-auto">
                <div class="input-group-text">Quantity</div>
                <input type="number" min="1" max="10" class="form-control quantity-input" name="quantity" value="1">
              </div>
            </div>
            <div class="col-auto">
              <button class="btn bg-primary text-white" type="submit">Add to order</button>
            </div>
          </div>
        </form>
        </p>
      </div>
    </div>
  </div>
</div>
@endsection
@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="row">
  <div class="col-md-12 mb-3">
    <form action="{{ route('computer.index') }}">
      <label for="cars">{{ __('computer.index.sortPrice') }}</label>
      <select name="sort" id="sort">
        <option value="" selected disabled hidden></option>
        <option value="1">{{ __('computer.index.sortPrice.lowToHigh') }}</option>
        <option value="2">{{ __('computer.index.sortPrice.highToLow') }}</option>
      </select>

      <label for="cars">{{ __('computer.index.sortCategory') }}</label>
      <select name="category" id="category">
        <option value="" selected disabled hidden></option>
        @foreach ($viewData['categories'] as $category)
            <option value='{{ $category->getId() }}'>{{ $category->getName() }}</option>
        @endforeach
      </select>

      <input type="submit" class="btn bg-primary text-white" value="{{ __('computer.index.filter') }}">
    </form>

  </div>

  <div>
    @if ($viewData["categoryExists"] == 1)
      <p>{{ $viewData['category']->getName() }}: {{ $viewData['description'] }}</p>
    @endif
  </div>
  
  @foreach ($viewData["computers"] as $computer)
  <div class="col-md-4 col-lg-3 mb-2">
    <div class="card">
      <img src="{{ asset('/images/'.$computer->getImage()) }}" class="card-img-top img-card">
      <div class="card-body text-center">
        <a href="{{ route('computer.show', ['id'=> $computer->getId()]) }}" class="btn bg-primary text-white">{{ $computer->getName() }}</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
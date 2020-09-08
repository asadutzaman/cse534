@extends('layouts.app')
@section('content')
<div class="container-fluid">
        <div class="row py-2">
          <div class="col-8">
            <div class="card bg-light shadow p-3" id="droppable">
              <div class="card-body text-center">
                <p class="card-text">Some text inside the first card</p>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card bg-light shadow p-3" id="draggable">
              <div class="card-body text-center">
                <p class="card-text">Some text inside the first card</p>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection      
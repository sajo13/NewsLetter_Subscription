@extends('layout')
@section('content')

  <div class="d-flex justify-content-center mt-5">
    <div class="login-box-msg">
      <a href="/login"><b>Save </b> News</a>
      <div class="login-box-msg">
        @if($errors->any())
              <div class="bg-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <form class="form-horizontal" role="form" method="POST" action="{{ url('/post-save') }}">
              {{ csrf_field() }}
            <div class="form-group has-feedback">
              <input type="subject" name="subject" class="form-control" placeholder="subject" value="{{ old('subject') }}">
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <textarea name="message" id="message" cols="30" rows="10" placeholder="message" value="{{ old('message') }}"></textarea>
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
              <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-sm btn-block btn-flat ml-3">Save Post</button>
              </div>
            </div>
          </form>
        </div>      
      </div>
    </div>
  </div>  
    
@endsection
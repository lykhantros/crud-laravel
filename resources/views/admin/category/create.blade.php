@extends('layouts.app')
@section('content')
<div class="container">
   <h1 class="text-center">CREATE | CATEGORY</h1>
   <div class="row justify-content-center">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <form action="/admin/category" method="post">    
                    @csrf        
                    <input type="text" name="name" class="form-control mt-2" placeholder="Name:" required maxlength="25">
                    <input type="submit" value="SAVE" class="btn btn-primary mt-2" name="btnSave">
               </form>
            </div>
           </div>
    </div>
   </div>
   
</div>
@endsection

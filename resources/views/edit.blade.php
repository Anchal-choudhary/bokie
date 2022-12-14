@extends('base')
@section('content')
<div class="container  ml-auto mr-auto mt-4 ml-5">
 <div class="row mx-auto">
     <div class="col-lg-6 mx-auto">
         <div class="card">
             <div class="card-header text-center text-primary">
                         Insert your book 
             </div>
             <div class="card-body  shadow">
                <form action="{{route('book.update',['book'=> $record->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                @method('put')
                    <div class="form-group">
                        <label for="">Title:</label>
                        <input type="text" class="form-control" name="title" value="{{$record->title}}">
                    </div>
                        @error('title')
                           <small class="text-danger">Required field!</small> 
                        @enderror
                    <div class="form-group">
                        <label for="">Description:</label>
                        <input type="text" class="form-control" name="discription" value="{{$record->discription}}">
                    </div>
                    @error('discription')
                    <small class="text-danger">Required field!</small> 
                      @enderror
                    <div class="form-group">
                        <label for="">Author:</label>
                        <input type="text" class="form-control" name="author" value="{{$record->author}}">
                    </div>
                    @error('author')
                    <small class="text-danger">Required field!</small> 
                 @enderror
                    <div class="form-group">
                        <label for="">Price:</label>
                        <input type="text" class="form-control" name="price" value="{{$record->price}}">
                    </div>
                    @error('price')
                    <small class="text-danger">Required field!</small> 
                 @enderror
                    <div class="form-group">
                        <label for="">Isbn:</label>
                        <input type="text" class="form-control" name="isbn"value="{{$record->isbn}}">
                    </div>
                    @error('isbn')
                           <small class="text-danger">Required field!</small> 
                        @enderror
                    <div class="form-group">
                        <label for= "">Image:</label>
                        <input type="file" class="form-control w-10" name="image" value="{{$record->image}}">
                    </div>
                    @error('image')
                    <small class="text-danger">Required field!</small> 
                 @enderror
        
            <div class="form-group mt-4">
        
                <input type="submit" class="form-control btn btn-success" value="Submit">
            </div>
        
            </form>
             </div>
         </div>
     </div>
 </div>
</div>
@endsection
  


</body>
</html>

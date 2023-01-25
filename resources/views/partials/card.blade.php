 @foreach ($movies as $movie)
 <div class="col-3">
     <div class="card">
         <div class="card-body">
             <h5 class="card-title"> {{$movie->title}}</h5>
             <div class="d-block card-text"> {{$movie->release_year}} </div>
            <div class="d-block card-text"> {{$movie->genre}} </div>
         </div>
     </div>
 </div>
 @endforeach

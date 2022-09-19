

@extends('layouts.main')

@section('container')


   <div class="container">
      <div class="row justify-content-center mb-5">
         <div class="col-md-8">
            <article>
               <h2>{{ $post->title }}</h2>
               {{-- <h5>{{ $post["author"] }}</h5> --}}
       
               <p>By Mohd.Alif Al Jundri in <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a></p>

               <img src="https://source.unsplash.com/800x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
       
               <article class="my-3 fs-5">
                  {!! $post->body !!}
               </article>
       
            
          </article>
          <a href="/news">Back to News</a>
         </div>
      </div>
   </div>

   
@endsection




{{-- News::create([
   'title' => 'Judul Berita keempat',
   'slug' => 'judul-berita-keempat',
   'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et ex itaque tenetur quo omnis. Eaque in laboriosam dolore blanditiis perspiciatis porro?',
   'body' => '<p>ipsum dolor sit amet consectetur adipisicing elit. Et ex itaque tenetur quo omnis. Eaque in laboriosam dolore blanditiis perspiciatis porro? Aperiam quam non veritatis ipsum atque! Temporibus consectetur id expedita aliquid saepe autem odio. Voluptas veritatis ipsam, expedita doloribus cum accusamus officiis cumque praesentium neque error eos nulla provident dolores illum tempore, iusto, quibusdam aperiam atque enim! Nihil tempore doloribus rerum sunt dicta ipsum ipsa, accusantium exercitationem vitae. </p> <p> Provident vel suscipit maxime, nulla obcaecati consequuntur facilis accusantium ratione porro, atque nihil pariatur repellat quae nesciunt aut magni libero dolorum a? Recusandae, rem velit nobis quisquam mollitia, ex dolor nulla temporibus facere, modi consectetur natus odit. Deserunt molestiae alias dolore ad recusandae quis repudiandae veniam? Animi quia voluptates harum dolore asperiores quis tempore velit dolorem. Doloribus ipsam accusantium eos quod soluta fugiat voluptatem! Dolor voluptatem animi, </p> <p> consectetur provident error corrupti, labore doloribus perspiciatis, molestiae quasi perferendis eaque. Ipsum illum cupiditate adipisci tempora non? Et, dolor asperiores. Sunt excepturi repellendus laborum eius impedit provident reprehenderit, cupiditate adipisci quas. Deserunt temporibus asperiores sapiente ea, nesciunt vel aperiam amet quasi magni enim harum voluptas nam molestias mollitia modi</p>  <p> placeat qui alias dolore vitae quas? Veniam accusantium consequuntur porro quod commodi distinctio repellat qui iste eveniet incidunt, corporis architecto atque ab error, esse perspiciatis soluta quibusdam, tenetur eligendi odit. Tempora magnam nulla corrupti amet aspernatur. Modi qui hic repudiandae nam quidem dolorem ratione reprehenderit delectus amet alias quo accusamus quam maxime atque incidunt, aliquid expedita voluptatibus dolore vel! Voluptates amet expedita placeat beatae quis?</P>'
]) --}}

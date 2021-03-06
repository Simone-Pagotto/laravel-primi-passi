<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>ex-dischi-musicali</title>
        <script src="libs/vue.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/dischi.css">
    </head>
    <body>
        <header>
            <div class="container">
                <img src="img-dischi/logo.png" alt="logo" />
            </div>
        </header>

        <div id="root" class="cds-container container">

            {{-- Select tramite genere --}}
            <select name="" id="">
                <option disabled value="">Please select one</option>
                <option></option>
               {{--  @foreach ($genres as $genre)
                    <option value="genre">{{$genre}}</option>
                @endforeach --}}
            </select>

            {{-- Template disco --}}
            
            @foreach($data as $cd)

                <div class="cd">
                    <img src="{{$cd['poster']}}" alt="">
                    <h3>{{$cd['title']}}</h3>
                    <span class="author">{{$cd['author']}}</span>
                    <span class="year">{{$cd['year']}}</span>
                </div>
                    
            @endforeach 


{{--             <!-- Select tramite genere -->
            <select name="" id="" @change="filterCds" v-model="selected">
                <option disabled value="">Please select one</option>
                <option > </option>
                <option :value="genre" v-for="genre in genres" >{{genre}}</option>
            </select>

            <!-- Disco ad esempio -->
            <template v-if="selected.length === 0">
                    <div class="cd" v-for="cd in cds">
                        <img :src="cd.poster" alt="copertina album">
                        <h3>{{cd.title}}</h3>
                        <span class="author">{{cd.author}}</span>
                        <span class="year">{{cd.year}}</span>
                    </div>
            </template>
            <template v-else>
                    <div class="cd" v-for="cd in filteredCds">
                        <img :src="cd.poster" alt="copertina album">
                        <h3>{{cd.title}}</h3>
                        <span class="author">{{cd.author}}</span>
                        <span class="year">{{cd.year}}</span>
                    </div>
            </template> --}}
            
        </div>
        

        <script src="js/main.js" charset="utf-8"></script>
    </body>
</html>
<header class="w-full z-10 h-20 fixed flex justify-around items-center font-mono transition-all bg-transparent duration-500">
    <a href="/" class="m-auto text-3xl text-white text-shadow-md">Learn Laravel</a>
    <nav class="m-auto flex flex-row justify-evenly w-2/5 text-white text-lg">
        @php
            $headerNav = ['home','about','article'];
        @endphp
        @foreach ($headerNav as $value)
        @if ($value=='home')
            <a href="/" class="transform hover:-translate-y-1 transition-all duration-300">{{ucfirst($value)}}</a>
        @else
            <a href="/{{$value}}" class="transform hover:-translate-y-1 transition-all duration-300">{{ucfirst($value)}}</a>
        @endif            
        @endforeach
        
    </nav>
    
</header>

@push('child-scripts')
    <script>
        $( document ).ready(function() {
            $(window).scroll(function (event) {
                var scroll = $(window).scrollTop();
                if(scroll!=0){
                    $('header').css("background-color","rgba(0,0,0,0.3)")
                }
                else{
                    $('header').css("background-color","rgba(0,0,0,0)")
                }
            });
        });
    </script>
@endpush
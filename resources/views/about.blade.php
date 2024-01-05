@extends('layouts.layout')
    @section('content')
        {{-- 
            QUERY PARAMETER  = 
            google.com/about?name=uthman 
            pizzahouse.com/about/name=uthman&age=24
            pizzahouse.com/about/name=Akorede&sex=male
            
            
        --}}

        {{-- 
            ROUTE PARAMETER =
            pizzahouse.com/pizzas/{id} 
            pizzahouse.com/pizzas/1 
            pizzahouse.com/pizzas/2
            pizzahouse.com/pizzas/13579
            pizzahouse.com/pizzas/mario
        --}}
    


<h2>About Page</h2>
<center class="flex-center position-ref full-height">
    <div class="content">
        <img src="img/city.jpg" alt="Pizza House" srcset="">
        <h1 class="title m-b-md">
            Pizza List 
            <p>{{ $name }} is  {{ $age }} years old</p>

            {{ $name }}
        </h1>
        {{-- <p>{{ $type }} - {{ $base . ' ' .$price }}</p> --}}
           {{-- @foreach ($pizzas as $pizza)    
                            $pizzas is the main
                            $pizza (you can name it whatever you want)
            --}}
           @foreach ($pizzas as $pizza)
               <div>
               {{ $loop->index }} ) {{ $pizza['type'] }} -- {{ $pizza['base'] }}

               @if ($loop->first)
                   {{-- This is the first iteration --}}
                   -- <span>(First Iteration)</span>
                   
               @endif
               
               @if ($loop->last)
                   {{-- This is the last iteration --}}
                   <span>(Last iteration)</span>
               @endif
               </div>
           @endforeach



        {{-- @if ($price > 15)
            <p>This Pizza is  Expensive</p>
        @elseif($price < 5)
            <p>This Pizza is  Cheap</p>
            @else
            <p>This Pizza is normally priced</p>
        @endif --}}

        {{-- the 'cheesy crust' is case sensitive  and dont leave space--}}
        {{-- @unless ($base == 'cheesy crust') 
            <p>You don't have cheesy crust</p>    
        @endunless --}}
    </div>
</center>

@endsection
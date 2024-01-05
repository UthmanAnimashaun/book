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
    


<h2>Details page</h2>
<center class="flex-center position-ref full-height">
    <div class="content">
        <h1 class="title m-b-md">
            Pizza List 
            {{ $id }} 

    </div>
</center>

@endsection
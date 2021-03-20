





   If done this way, the post will not be sent

This is Error : 

<form action="" method="POST">

     <input type="text" name="name" placeholder="Your name ">
     <br>
     <textarea name="text" id="" cols="30" rows="10" placeholder="Your masessg"></textarea>
     <br>
     <button type="submit">Save !</button>
 </form>
 

   
        You must use one of the two methods

    One : 
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 

    Ex one:

    <form action="" method="POST">

        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 

        <input type="text" name="name" placeholder="Your name ">
        <br>
        <textarea name="text" id="" cols="30" rows="10" placeholder="Your masessg"></textarea>
        <br>
        <button type="submit">Save !</button>
    </form>
    
 

    Ex two:

    <form action="" method="POST">

        {{ csrf_field() }} 

        <input type="text" name="name" placeholder="Your name ">
        <br>
        <textarea name="text" id="" cols="30" rows="10" placeholder="Your masessg"></textarea>
        <br>
        <button type="submit">Save !</button>
    </form>
    


   Ex Three : 

    <form action="" method="POST">
    
         @csrf
         <input type="text" name="name" placeholder="Your name ">
         <br>
         <textarea name="text" id="" cols="30" rows="10" placeholder="Your masessg"></textarea>
         <br>
         <button type="submit">Save !</button>
     </form>
     
     
     
     






------------------------------------------------------------------------------------------------------


This form for route put : 


EX 1 : 

<form action="ran" method="POST">
    
    <input type="hidden" name="_method" value="put">        // This is the put method
    @csrf
    <input type="text" name="name" placeholder="Your name ">
    <br>
    <textarea name="text" id="" cols="30" rows="10" placeholder="Your masessg"></textarea>
    <br>
    <button type="submit">Save !</button>
</form>


EX 2 : 

<form action="ran" method="POST">

    @method("put")        // This is the put method
    @csrf
    <input type="text" name="name" placeholder="Your name ">
    <br>
    <textarea name="text" id="" cols="30" rows="10" placeholder="Your masessg"></textarea>
    <br>
    <button type="submit">Save !</button>
</form>


    And All Routs : 

    Routs for patch : 

    <form action="ran" method="POST">

        @method("patch")
        @csrf
        <input type="text" name="name" placeholder="Your name ">
        <br>
        <textarea name="text" id="" cols="30" rows="10" placeholder="Your masessg"></textarea>
        <br>
        <button type="submit">Save !</button>
    </form>
    
    

    Routs for delete : 

    <form action="ran" method="POST">

        @method("delete")
        @csrf
        <input type="text" name="name" placeholder="Your name ">
        <br>
        <textarea name="text" id="" cols="30" rows="10" placeholder="Your masessg"></textarea>
        <br>
        <button type="submit">Save !</button>
    </form>
    
    
    
    
    
    
 ------------------------------------------------------------------------------------------------------

 
 
      








 
 
      

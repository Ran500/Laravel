





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
    
   
    Two : 
    
    {{ csrf_field() }}

    Ex two:

    <form action="" method="POST">

        {{ csrf_field() }} 

        <input type="text" name="name" placeholder="Your name ">
        <br>
        <textarea name="text" id="" cols="30" rows="10" placeholder="Your masessg"></textarea>
        <br>
        <button type="submit">Save !</button>
    </form>
    









 
 
      
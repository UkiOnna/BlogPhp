{include file="Global/Head.tpl"}

<div class="container py-3">

   <div class="row">
       <div class="col-12 col-lg-4 offset-lg-4">

           {foreach $g.flashes as $flash}
               <div class="mb-3 alert alert-{$flash.type}">
                   {$flash.message}
               </div>
           {/foreach}
           <form action="/login", method="post">

               <h3 class="mb-3 text-center">{$title}</h3>

               <div class="form-group">
                   <input name="username" type="text" class="form-control" placeholder="Login">
               </div>
               <div class="form-group">
                   <input name="password" type="password" class="form-control" placeholder="Password">
               </div>

               <div class="form-group m-0">
                   <button class="btn btn-primary" type="submit">
                       Enter
                   </button>
               </div>

           </form>
       </div>
   </div>

</div>

{include file="Global/Footer.tpl"}


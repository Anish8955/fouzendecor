<!DOCTYPE html>
<html lang="en">
<head>
   @include("admin.includes.head")
</head>
<body class="hold-transition sidebar-mini">

  <div class="wrapper">

         @include("admin.includes.navbar")

         @include("admin.includes.sidebar")

         <div class="content-wrapper">


      @yield('content')

         </div>
 
         @include("admin.includes.footer")

     

   </div>
      
   @include("admin.includes.script")

</body>
</html>
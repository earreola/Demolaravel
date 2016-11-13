@extends('layouts.app')

@section('content')
<style >
    
   h2 { 
    font-size: 36px;
    margin: 0 0 1px 0;
   }
   p{
    margin: 0 0 10px 0
   }
   table.ancho,table.rwd_auto{
    border: 1px solid #ccc;
    width: 100%;
    margin: 0 0 50px 0;
   }
   .ancho th,.red_auto, th{
    background:#ccc;
    padding: 5px;
    text-align: center; 
   }
   .ancho td,.red_auto td {
    border-bottom: 1px solid #ccc;
    padding: 5px;
    text-align: center;
   }
   .ancho tr:last-child td, .red_auto tr:last-child td{border: 0;}
   .rwd{
    width: 100%;
    overflow: auto;
   }
   .rwd table.rwd_auto{
    white-space: nowrap;
   }

   @media only screen and (max-width: 760px), (min-width:768px) and (max-width: 1024px)
   {
     table.ancho, .ancho thead, .ancho tbody, .ancho td, .ancho tr{ display: block; }
     .ancho thead tr {position: absolute;top: -9999px;}
     .ancho tr{ border: 1px solid #ccc; }
     .ancho td{border:none; border-bottom: 1px solid #ccc; position: relative;padding-left: 50%; text-align: left;}
     .ancho td:before {position: absolute; top: 6px; left: 6px; width: 45%; padding-right: 10px; white-space: nowrap;}
     .ancho td:nth-of-type(1):before{content: "#"}
     .ancho td:nth-of-type(2):before{content: "First Name"}
     .ancho td:nth-of-type(3):before{content: "Last Name"}
     .ancho td:nth-of-type(4):before{content: "Username"}

     .descarto {display: none;}
     .fontsize {font-size: 10px;}
   }

   @media only screen and(min-width: 320px) and(max-width: 480px)
   {
    body {width: 320px;}
    .descarto {display: none;}
   }
   @media only screen and(min-width: 768px) and(max-width: 1024px)
   {
    body {width: 495px}
    .descarto {display: none;}
    .fontsize {font-size: 10px;}
   }


</style>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
<table class="ancho">
  <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody >
    <tr>
      <td>1</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
  </table>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

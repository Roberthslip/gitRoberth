<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background:burlywood">
    
    <h2 style="text-align: center">CALENDARIO DE EQUIPOS</h2>


<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th> </th>
            <br><br> 
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
              
      
      
 
                @foreach ($calenda as $item)
          
             
               
                {{$item['Equipo1']}}
                <b>&nbsp; VS &nbsp; </b>
                {{$item['Equipo2']}}
                <b>&nbsp;
                {{$item['Fecha']}}&nbsp; </b>
                <br> <br> <br>
               
              @endforeach() 


              
 
                    
         
               
              

              
            </td>
        </tr>
    </tbody>
</table>


</body>
</html>
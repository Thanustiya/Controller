<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
        
        <title>Data Table</title>
    </head>
    <body>
        <div class ="container">
            <h1 class="text-center"> Property Details</h1>
            <table class="table table -dark table striped"> 
                <thead>
                    <tr>
                        
                        <th> id</th>
                        <th> tell</th>
                        <th> whatspp</th>
                        <th> price</th>
                        <th> bed</th>
                        <th> bath</th>
                        <th> sqrt</th>
                        <th> address</th>
                        <th> Details</th>
                        <th> Page_URL</th>
                        <th> name</th>
                        <th> Page_title</th>
                    </tr>
             
                </thead>

                <tbody>
                    @foreach ($Data as $cd ) 
                    <tr>
                        <td>{{$cd -> id}}</td>
                        <td>{{$cd -> tell}}</td>
                        <td>{{$cd -> whatspp}}</td>
                        <td>{{$cd -> price}}</td>
                        <td>{{$cd -> bed}}</td>
                        <td>{{$cd -> bath}}</td>
                        <td>{{$cd -> sqrt}}</td>
                        <td>{{$cd -> address}}</td>
                        <td>{{$cd -> details}}</td>
                        <td>{{$cd -> Page_URL}}</td>
                        <td>{{$cd -> name}}</td>
                        <td>{{$cd -> Page_title}}</td>
                    </tr>
                    @endforeach
                </tbody>

            </table>    
        </div>   
    </body>
</html>


                
    
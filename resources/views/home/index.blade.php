<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>

    <center>

    <h1>Welcome home! {{ session('username') }} </h1>

    <a href="/home/admin_profile">View admin profile</a> |

    <br>

    <a href="/home/userlist">View  members list</a> |
    <a href="/home/modaratoruserlist">View modarator list</a> |

<br>

     <a href="/home/productlist">highlighted content list</a> |
    <a href="/home/contentlist">View all content list</a><br>
    <a href="/home/movielist">all movies list</a><br>
    <a href="/home/softwarelist">all software list</a><br>


    <br>

    {{-- <a href="/home/sellerlist">Day shift worker list</a> |

                <a href="/home/specialist"> night shift worker list</a>
                | <br> --}}
                <a href="/logout">logout</a>


            </center>

</body>
</html>

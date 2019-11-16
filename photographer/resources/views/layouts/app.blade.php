<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Photographer</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css"/>
</head>

<body >


    <div class="container" id = "app">

        @yield('content')
    </div>
    <div class="container">
        <footer id="footer">
            <div class="row">
                <p class="am-padding-left">Copyright © 2019. Made With <i class="am-icon am-icon-heart"></i> By Jianwen.</p>
            </div>
        </footer>

    </div>


    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js
"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
    <script>
        new Vue({
            el:'#app',
            data:{
                result:{"a": "123"}
            },
            beforeCreate: function(){
                var self = this;
                $.ajax({
                    url: "../api/photographer/album",
                    type: "GET",
                    dataType:"json",
                    success: function (result) {

                        self.result = result;

                    }
                });
            }
        });

    </script>
</body>
</html>

<!--存放在resource/views/fedora/master.blade.php -->

<!DOCTYPE html>
<html lang="zh-CN">
<head>
 	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Little Ping</title>
    <link href="http://cdn.bootcss.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/buttons.css">
    <link href ="/css/bootstrap.min.css" rel ="stylesheet" >
    <link href ="/css/fedora.css" rel ="stylesheet" > 
</head>
<body>
    <!-- 将头文件包含进来 -->
    @include('fedora.header')

    <!-- <div class="container">
    	@yield('content')
    </div>-->
     @include('fedora.content')

     @include('fedora.footer')



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

        <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/fedora.js"></script> 
    <script>
    document.getElementById("small-line").addEventListener("transitionend",function(e){
        this.innerHTML = " Hey! Welcome to my web. I'am Little Ping.  锐敏，毕业快乐！ "
    })
    </script>
    <script>
        $("#mydropdown").on("shown.bs.dropdown",function(e){
            alert("哈哈，点了之后你会怀孕的哦")
        })
    </script>
</body>
</html>

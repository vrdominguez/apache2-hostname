<html>

<head>

    <meta charset="utf8" />

    <style>
        html, body{
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
        }

        h1{
            text-align: center;
            padding-top: 3em;
        }
    </style>

    <script type="text/javascript">

        var hostname = "<?php echo gethostname()?>";

        function hashear(str){

            var hash = 0;
        
            for (var i = 0; i < str.length; i++) {
                hash = str.charCodeAt(i) + ((hash << 5) - hash);
            }
    
            return hash;
        }

        function intARGB(i){

             var c = (i & 0x00FFFFFF)
                        .toString(16)
                        .toUpperCase();
            return "00000".substring(0, 6 - c.length) + c;
        }

        window.onload = function(){

            var color = intARGB(hashear(hostname));

            document.body.style.backgroundColor = "#" + color;

        }

    </script>

</head>
<body>
    <?php echo '<h1>Hostname: ' . gethostname() . '</h1>';?>
</body>
</html>


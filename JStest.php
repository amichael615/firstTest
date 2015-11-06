<head>
	<script src="js/jquery-1.11.3.js" type="text/javascript"></script>
</head>
<script>
$(document).ready(function (){
    $("button").click(function c(){
        $.get("JStestG.php", function(data, status){
            alert("Data: " + data + "\nStatus: " + status);
        });
    });
});
</script>
</head>
<body>

<button>Send an HTTP GET request to a page and get the result back</button>

</body>
<!--<script>
$(document).ready(function b(){
    $("button2").click(function b(){
        $.post("demo_test_post.asp",
        {
          name: "Donald Duck",
          city: "Duckburg"
        },
        function(data,status){
            alert("Data: " + data + "\nStatus: " + status);
        });
    });
});
</script>
</head>
<body>

<button name=button2>Send an HTTP POST request to a page and get the result back</button>
</body>

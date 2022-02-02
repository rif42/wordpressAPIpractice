<!DOCTYPE html>
<html lang="en">
<html>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <head>
        <Title>HTML Editor</Title>
    </head>

    <div class="lightbar"> </div>

    <br>

    <h1 align="center">Welcome to HTML Editor</h1>
    <h2 id=subtitle align="center">Publish content to your WordPress site in just one-click</h2><br>
    <h2 align="center">Add New Post to Wordpress below</h2>

    <body>
        <br>

        <textarea placeholder="Type your post title" class="articletitle"></textarea>

        <br><br>

        <textarea class="tinymce"></textarea>

		<!-- importing plugin doesnt work -->
		<script type="text/javascript" src="C:Users/user/Local Sites/test/app/public/wp-content/plugins/tinymce/jquery.tinymce.min.js"></script>
        <script type="text/javascript" src="C:Users/user/Local Sites/test/app/public/wp-content/plugins/tinymce/tinymce.min.js"></script>
        <script type="text/javascript" src="C:Users/user/Local Sites/test/app/public/wp-content/plugins/tinymce/init.tinymce.js"></script>

        <br><br>

        <button type="button" class="btn btn-primary" id="addbtn">Publish</button>

    </body>

    <script>
		//authorization init, token generation and save to local storage
		fetch('http://test.local/wp-json/jwt-auth/v1/token',{
			method: "POST",
			headers: {
				"Content-Type": "application/json;charset=UTF-8",
				"accept": "application/json",
			},

			body:JSON.stringify({
				"username": "admin",
				"password": "admin"
			})
		}).then(function(response){
			return response.json()
		}).then(function(user){
			console.log(user.token)
			localStorage.setItem('jwt', user.token)
		})

		//add new post
        var addbtn = document.getElementById("addbtn");
        if (addbtn)
        {
            addbtn.addEventListener("click", function(){
                var textcontent = document.getElementsByClassName("tinymce")[0].value;
                var postdata =
				{
					"title": document.getElementsByClassName("articletitle")[0].value,
					"content": textcontent,
					"status": "publish"
				}

                // var createPost = new XMLHttpRequest();
                // createPost.open("POST","http://test.local/wp-json/wp/v2/posts");
                // createPost.setRequestHeader("X-WP-Nonce", "d8b9b8b8b8");
                // createPost.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
                // createPost.send(postdata);

				fetch ('http://test.local/wp-json/wp/v2/posts',{
					method: "POST",
					headers: {
						"Content-Type": "application/json;charset=UTF-8",
						"accept": "application/json",
						"Authorization": "Bearer " + localStorage.getItem('jwt')
					},
					body: JSON.stringify(postdata)
				}).then(function(response){
					return response.json()
				}).then(function(data){
					console.log(data)
				})
				console.log(textcontent);
				console.log (JSON.stringify(postdata));
			})
		}			

    </script>

    <style>
        .lightbar{
            height: 75px;
            width: 100%;
            background-color: aqua;
        }

        .articletitle{
            width: 50% ; 
            line-height: 20px;
            margin-left:25% ; 
            margin-right:25% ; 
			padding-top: 15px;
			padding-left: 10px;
            border-radius: 10px;
            overflow:hidden;
            vertical-align: middle;
        }

        .tox{
            border-radius: 10px;
            margin-left: 25%;
            margin-right: 25%;
        }

		.tinymce{
			padding: 10px;
			width: 50%;
			height: 350px;
            border-radius: 10px;
            margin-left: 25%;
            margin-right: 25%;
        }

        h1{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight:500;
        }

        #subtitle{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight:normal;
        }

        h2{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .btn{
            position: relative;
            left: 45%;
            right: 45%;
        }
    </style>
</html>


<!-- fetch('http://test.local/wp-json').then(function(response) {
    return response.json();
}).then(function(myJson) {
    console.log(JSON.stringify(myJson));
}); -->
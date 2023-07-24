<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <div class="w-full h-screen flex justify-center items-center bg-gray-200">
        <div class="w-5/12 py-3 bg-gradient-to-tr from-red-900 to-red-950">
            <form action="undefined" method="post">
                @csrf
                @method('POST')
            <h1 class="text-center text-white text-xl font-bold">Log in an account</h1> <hr class="mt-4 mx-4">
            <div class="input w-full p-6">
                <label for="email" class="text-white  font-semibold">Email</label> <br>
                <input type="text" name="email" id="email" class="w-full my-3 border-b-[1px] text-white focus:ring-0 focus:outline-none bg-red-950 px-2 py-1">
                @error('email')
                    <p class="text-white text-md p-1">{{$message}}</p>
                @enderror
            </div>

            <div class="input w-full -mt-6 p-6">
                <label for="password" class="text-white  font-semibold">Password</label> <br>
                <input type="password" name="password" id="password" class="w-full my-3 border-b-[1px] text-white focus:ring-0 focus:outline-none bg-red-950 px-2 py-1">
                @error('password')
                    <p class="text-white text-md p-1">{{$message}}</p>
                @enderror
            </div>

            <div class="input w-full -mt-6 p-6">
                <label for="type" class="text-white  font-semibold">Log as</label> <br>
                <select name="" id="type" name="type" class="w-full my-3 border-b-[1px] text-white focus:ring-0 focus:outline-none bg-red-950 px-2 py-1">
                    <option selected disabled>Select a type of user</option>
                    <option value="lecturer">Lecturer</option>
                    <option value="admin">Admin</option>
                </select>
            </div>



            <div class="button px-8">
            <button type="submit" class="w-full text-white bg-gradient-to-b from-red-800 to-red-950 rounded-lg py-2 bg-red-950 mb-4 active:scale-95">Sign in</button>
            </div>
            </form>

            <script>
                let form = document.querySelector("form")

                document.querySelector("form").addEventListener("submit", function(event){
                    // event.preventDefault()
                    if((this).action==="http://localhost:8000/undefined"){
                        event.preventDefault()
                        alert('Select a type of user')
                    }
                })
                document.querySelector("#type").addEventListener("change", function(){
                    let val = (this).value
                    val === "lecturer" ? form.action="/lecturer" : form.action = "/admin"
                    console.log(form);
                })
            </script>
        </div>
    </div>
</body>
</html>
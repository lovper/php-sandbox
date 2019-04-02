console.log("uppstart")

fetch("https://randomuser.me/api/?results=10")
    .then(
        function(resp) {
            console.log(resp)
            return resp.json()
        }
    )
    .then(
        function(resp){
            console.log(resp)
            console.log(resp.results)
            console.log(resp.results[0])
            console.log(resp.results[0].name.first)
            console.log(resp.results[0].name.last)
            
            
            for(let i = 0; i < 10; i++){
            document.getElementById("the-pic").src = resp.results[i].picture.large;
            document.getElementById("fname").innerHTML = resp.results[i].name.first;
            document.getElementById("lname").innerHTML = resp.results[i].name.last;
            document.getElementById("email").innerHTML = resp.results[i].email;
            }
        }
        )

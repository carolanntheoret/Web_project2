const passes = document.querySelectorAll(".pass .remove")

for (const pass of passes) {
    pass.addEventListener('click', (e) => {
        //display block
        fetch(`/get-reservation/${pass.getAttribute('id')}`).then(reply => reply.json()).then(data => {
            const pass = data[0]
            console.log(pass)
            //delete tout dans .infos

            // <div class="infos">
            //     <!-- adadpter selon le pass -->
            //     <h4>passname</h4>
            //     <h4>passprice</h4>
            //     <div class="select">
            //         <select name="" id="">qtt</select>
            //     </div>
            //     <h4 class="last">passtotal</h4>
            // </div>
            const infos = document.querySelector('.infos')

            const name = document.createElement('h4')
            name.innerHTML = pass.name
            infos.appendChild(name)

            const price = document.createElement('h4')
            price.innerHTML = '$' + pass.price
            infos.appendChild(price)

            const select = document.createElement('select')
            infos.appendChild(select)

            for(let i = pass.quantity; i > 0; i--)
            {
                const option = document.createElement('option')
                option.setAttribute('value', i)
                option.innerHTML = i
                select.appendChild(option)
            }

            const total = document.createElement('h4')
            total.innerHTML = '$' + (pass.price * pass.quantity)
            infos.appendChild(total)
        })
    })
}

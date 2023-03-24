const passes = document.querySelectorAll(".pass .remove")

for (const pass of passes) {
    pass.addEventListener('click', (e) => {
        //display block
        fetch(`/get-reservation/${pass.getAttribute('id')}`).then(reply => reply.json()).then(data => {
            const pass = data[0]

            //delete tout dans .infos

            let infos = document.querySelector('.infos')

            const name = document.createElement('h4')
            name.innerHTML = pass.name
            infos.appendChild(name)

            const price = document.createElement('h4')
            price.innerHTML = '$' + pass.price
            infos.appendChild(price)

            const div_select = document.createElement('div')
            div_select.setAttribute('class', 'select')
            infos.appendChild(div_select)

            const select = document.createElement('select')
            div_select.appendChild(select)

            for(let i = pass.quantity; i > 0; i--)
            {
                const option = document.createElement('option')
                option.setAttribute('value', i)
                option.innerHTML = i
                select.appendChild(option)
            }

            const total = document.createElement('h4')
            total.innerHTML = '$' + (pass.price * pass.quantity)
            total.setAttribute('class', 'last')
            infos.appendChild(total)
        })
    })
}

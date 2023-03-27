const passes = document.querySelectorAll(".pass .remove")

for (const pass of passes) {
    pass.addEventListener('click', (e) => {
        //display block
        fetch(`/get-reservation/${pass.getAttribute('id')}`).then(reply => reply.json()).then(data => {
            const pass = data[0]

            const removeItem = document.querySelector('.removeItem')
            removeItem.style.display = 'block'

            let elements = document.querySelectorAll('.infos *')
            for(let element of elements)
            {
                element.remove()
            }

            let infos = document.querySelector('.infos')

            const name = document.createElement('h4')
            name.innerHTML = pass.name
            infos.appendChild(name)

            const price = document.createElement('h4')
            price.innerHTML = '$' + pass.price
            infos.appendChild(price)

            const id = document.createElement('input')
            id.setAttribute('name', 'reservation_id')
            id.setAttribute('type', 'hidden')
            id.setAttribute('value', pass.reservation_id)
            infos.appendChild(id)

            const div_select = document.createElement('div')
            div_select.setAttribute('class', 'select')
            infos.appendChild(div_select)

            const select = document.createElement('select')
            select.setAttribute('name', 'quantity')
            div_select.appendChild(select)

            for(let i = pass.quantity; i > 0; i--)
            {
                const option = document.createElement('option')
                option.setAttribute('value', i)
                option.innerHTML = i
                select.appendChild(option)
            }

            const total = document.createElement('h4')
            total.innerHTML = '$' + (pass.price * pass.quantity).toFixed(2)
            total.setAttribute('class', 'totalPrice last')
            infos.appendChild(total)

            const quantity = document.querySelector('.select select')
            quantity.addEventListener('change', (e) => {
                const total_price = document.querySelector('.totalPrice')
                total_price.innerHTML = '$' + (quantity.value * pass.price).toFixed(2)
            })
        })
    })
}

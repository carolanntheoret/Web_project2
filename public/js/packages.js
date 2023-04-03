import { createApp, ref, onMounted } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'

const pass = ref('')
const name = ref('')
const price = ref('')
const lessThanFive = ref(true)

function displayPurchase(data)
{
    (document.querySelector('.mask')).style.display = 'flex'

    if(Number.isInteger(data))
    {
        fetch(`get-pass/${data}`).then(reply => reply.json()).then(result => {
            pass.value = result
            setTimeout(createForm(pass.value.price, pass.value.name, 0), 100);
        })
    }
    else
    {
        if(data["quantity"] >= 5) lessThanFive.value = false
        else
        {
            pass.value = data
            createForm(data["price"], data["name"], parseInt(data["quantity"]))
        }
    }
}

function createForm(html_price, pass_name, qtt)
{
    lessThanFive.value = true

    if(qtt == 0) price.value = (html_price).toFixed(2)
    else price.value = (html_price * qtt).toFixed(2)
    name.value = pass_name

    const id = document.querySelector('.hidden_id')
    id.setAttribute('value', pass.value.pass_id)

    const elements = document.querySelectorAll('.quantity *')
    for(let element of elements)
    {
        element.remove()
    }

    const select = document.querySelector('.quantity')
    for(let i = 5 - qtt; i > 0; i--)
    {
        const option = document.createElement('option')
        option.setAttribute('value', i)
        if(i == 1) option.setAttribute('selected', 'true')
    option.innerHTML = i
        select.appendChild(option)
    }

    const quantity = document.querySelector('.quantity')
    quantity.addEventListener('change', (e) => {
        price.value = (html_price * quantity.value).toFixed(2)
    })
}

function close()
{
    (document.querySelector('.mask')).style.display = 'none'
}

const root = {
    setup() {
        return {
            /* VARIABLES */
            pass,
            name,
            price,
            lessThanFive,

            /* FUNCTIONS */
            displayPurchase,
            close,
        }
    }
}

createApp(root).mount('#app')

import { createApp, ref, onMounted } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'

const name = ref('')
const price = ref('')

function displayPurchase(data)
{
    (document.querySelector('.mask')).style.display = 'flex'
    price.value = (data["price"] * data["quantity"]).toFixed(2)
    name.value = data["name"]

    const select = document.querySelector('.quantity')
    console.log(data["quantity"]);
    for(let i = 5 - data["quantity"]; i >= 0; i--)
    {
        const option = document.createElement('option')
        option.setAttribute('value', i)
        if(i == 1) option.setAttribute('selected', 'true')
        option.innerHTML = i
        select.appendChild(option)
    }
}

function close()
{
    (document.querySelector('.mask')).style.display = 'none'
}

const root = {
    setup() {
        return {
            /* VARIABLES */
            name,
            price,

            /* FUNCTIONS */
            displayPurchase,
            close,
        }
    }
}

createApp(root).mount('#app')
